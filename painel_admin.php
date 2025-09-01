<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="CSS/painel_admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="admin-container">
        <header class="admin-header">
            <h1>Gerenciamento de Produtos</h1>
            <div class="admin-info">
                <span id="admin-nome"></span>
                <button id="btn-logout" class="btn-logout">Sair</button>
            </div>
        </header>

        <main class="admin-main">
            <div class="toolbar">
                <button class="btn-novo-produto">Adicionar Novo Produto</button>
            </div>
            <table class="tabela-produtos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Preço Varejo</th>
                        <th>Preço Atacado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="corpo-tabela-produtos">
                    </tbody>
            </table>
        </main>
    </div>
    
    <!-- Modal para adicionar/editar produto -->
    <div id="modal-produto" class="modal">
        <div class="modal-content">
            <h2 id="modal-titulo">Adicionar Novo Produto</h2>
            <form id="form-produto">
                <input type="hidden" id="produto-id">
                <div class="form-group">
                    <label for="titulo">Título do Produto</label>
                    <input type="text" id="titulo" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="preco-varejo">Preço Varejo (R$)</label>
                    <input type="number" id="preco-varejo" step="0.01" min="0" required>
                </div>
                <div class="form-group">
                    <label for="preco-atacado">Preço Atacado (R$)</label>
                    <input type="number" id="preco-atacado" step="0.01" min="0" required>
                </div>
                <div class="form-actions">
                    <button type="button" id="btn-cancelar" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-salvar">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // VARIÁVEIS MOVIDAS PARA DENTRO DO DOMContentLoaded
            const modal = document.getElementById('modal-produto');
            const btnNovoProduto = document.querySelector('.btn-novo-produto');
            const btnCancelar = document.getElementById('btn-cancelar');
            const formProduto = document.getElementById('form-produto');

            // 1. Segurança: Verifica se um admin está logado
            const adminJSON = sessionStorage.getItem('adminLogado');
            if (!adminJSON) {
                alert('Acesso negado. Você precisa ser um administrador.');
                window.location.href = 'adminlogin.php';
                return;
            }
            const admin = JSON.parse(adminJSON);
            document.getElementById('admin-nome').textContent = `Olá, ${admin.nome}`;

            // 2. Lógica de Logout
            document.getElementById('btn-logout').addEventListener('click', () => {
                sessionStorage.removeItem('adminLogado');
                alert('Você saiu da sua conta de administrador.');
                window.location.href = 'adminlogin.php';
            });

            // 3. Lógica dos botões do Modal
            btnNovoProduto.addEventListener('click', abrirModalParaCriar);
            btnCancelar.addEventListener('click', fecharModal);
            formProduto.addEventListener('submit', salvarProduto);

            // 4. Carrega a lista inicial de produtos
            carregarProdutos();
        });

        // Função para abrir o modal em modo de "criação"
        function abrirModalParaCriar() {
            // Essas variáveis são do formulário, então podem ficar aqui
            const formProduto = document.getElementById('form-produto');
            formProduto.reset();
            document.getElementById('modal-titulo').textContent = 'Adicionar Novo Produto';
            document.getElementById('produto-id').value = '';
            document.getElementById('modal-produto').style.display = 'flex';
        }

        // Função para fechar o modal
        function fecharModal() {
            document.getElementById('modal-produto').style.display = 'none';
        }

        // Função para CRIAR um novo produto
        async function salvarProduto(event) {
            event.preventDefault();
            const produto = {
                titulo: document.getElementById('titulo').value,
                descricao: document.getElementById('descricao').value,
                precoVarejo: parseFloat(document.getElementById('preco-varejo').value),
                precoAtacado: parseFloat(document.getElementById('preco-atacado').value)
            };

            try {
                const resposta = await fetch('http://localhost:8080/api/produtos', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(produto)
                });
                if (!resposta.ok) throw new Error('Falha ao salvar o produto.');
                alert('Produto salvo com sucesso!');
                fecharModal();
                carregarProdutos(); // Atualiza a tabela!
            } catch (error) {
                alert('Não foi possível salvar o produto.');
            }
        }
        
        // Função para buscar e exibir os produtos na tabela
        async function carregarProdutos() {
            try {
                const resposta = await fetch('http://localhost:8080/api/produtos');
                if (!resposta.ok) throw new Error('Falha ao buscar produtos.');
                const produtos = await resposta.json();
                const corpoTabela = document.getElementById('corpo-tabela-produtos');
                corpoTabela.innerHTML = '';

                produtos.forEach(produto => {
                    const tr = document.createElement('tr');
                    tr.id = `produto-${produto.id}`;
                    tr.innerHTML = `
                        <td>${produto.id}</td>
                        <td>${produto.titulo}</td>
                        <td>R$ ${produto.precoVarejo.toFixed(2).replace('.', ',')}</td>
                        <td>R$ ${produto.precoAtacado.toFixed(2).replace('.', ',')}</td>
                        <td class="acoes">
                            <button class="btn-editar" data-id="${produto.id}">Editar</button>
                            <button class="btn-excluir" data-id="${produto.id}">Excluir</button>
                        </td>
                    `;
                    corpoTabela.appendChild(tr);
                });
                adicionarListenersAcoes();
            } catch (error) {
                alert('Não foi possível carregar a lista de produtos.');
            }
        }

        // Função para adicionar os eventos de clique aos botões de ação
        function adicionarListenersAcoes() {
            document.querySelectorAll('.btn-excluir').forEach(botao => {
                botao.addEventListener('click', (evento) => {
                    excluirProduto(evento.target.dataset.id);
                });
            });
            document.querySelectorAll('.btn-editar').forEach(botao => {
                botao.addEventListener('click', (evento) => {
                    alert(`Função Editar para o produto ID: ${evento.target.dataset.id} será implementada em breve!`);
                });
            });
        }

        // Função para excluir um produto
        async function excluirProduto(id) {
            if (!confirm(`Tem certeza que deseja excluir o produto com ID ${id}?`)) return;

            try {
                const resposta = await fetch(`http://localhost:8080/api/produtos/${id}`, {
                    method: 'DELETE'
                });
                if (resposta.ok) {
                    alert(`Produto com ID ${id} excluído com sucesso!`);
                    document.getElementById(`produto-${id}`).remove();
                } else {
                    alert(`Falha ao excluir o produto com ID ${id}.`);
                }
            } catch (error) {
                alert('Erro de comunicação com o servidor.');
            }
        }
    </script>
</body>
</html>

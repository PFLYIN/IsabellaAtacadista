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
    
    <div id="modal-produto" class="modal-overlay" style="display: none;">
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
                <div class="form-group-inline">
                    <div class="form-group">
                        <label for="preco-varejo">Preço Varejo (R$)</label>
                        <input type="number" id="preco-varejo" step="0.01" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="preco-atacado">Preço Atacado (R$)</label>
                        <input type="number" id="preco-atacado" step="0.01" min="0" required>
                    </div>
                </div>
                <div class="modal-actions">
                    <button type="button" id="btn-cancelar" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-salvar">Salvar</button>
                </div>
            </form>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // CORREÇÃO: Variáveis do modal declaradas AQUI DENTRO
        const modal = document.getElementById('modal-produto');
        const btnNovoProduto = document.querySelector('.btn-novo-produto');
        const btnCancelar = document.getElementById('btn-cancelar');
        const formProduto = document.getElementById('form-produto');

        // Segurança e info do admin
        const adminJSON = sessionStorage.getItem('adminLogado');
        if (!adminJSON) {
            alert('Acesso negado. Você precisa ser um administrador.');
            window.location.href = 'adminlogin.php';
            return;
        }
        const admin = JSON.parse(adminJSON);
        document.getElementById('admin-nome').textContent = `Olá, ${admin.nome}`;

        // Listeners dos botões
        document.getElementById('btn-logout').addEventListener('click', () => {
            sessionStorage.removeItem('adminLogado');
            alert('Você saiu da sua conta de administrador.');
            window.location.href = 'adminlogin.php';
        });
        btnNovoProduto.addEventListener('click', abrirModalParaCriar);
        btnCancelar.addEventListener('click', fecharModal);
        formProduto.addEventListener('submit', salvarProduto);

        // Carrega a lista inicial de produtos
        carregarProdutos();
    });

    function abrirModalParaCriar() {
        const formProduto = document.getElementById('form-produto');
        formProduto.reset();
        document.getElementById('modal-titulo').textContent = 'Adicionar Novo Produto';
        document.getElementById('produto-id').value = '';
        document.getElementById('modal-produto').style.display = 'flex';
    }

    async function abrirModalParaEditar(id) {
        try {
            const resposta = await fetch(`http://localhost:8080/api/produtos/${id}`);
            if (!resposta.ok) throw new Error('Produto não encontrado.');
            const produto = await resposta.json();
            
            const formProduto = document.getElementById('form-produto');
            formProduto.reset();
            document.getElementById('produto-id').value = produto.id;
            document.getElementById('modal-titulo').textContent = `Editar Produto #${produto.id}`;
            document.getElementById('titulo').value = produto.titulo;
            document.getElementById('descricao').value = produto.descricao;
            document.getElementById('preco-varejo').value = produto.precoVarejo;
            document.getElementById('preco-atacado').value = produto.precoAtacado;
            
            document.getElementById('modal-produto').style.display = 'flex';
        } catch (error) {
            alert('Não foi possível carregar os dados do produto para edição.');
        }
    }

    function fecharModal() {
        document.getElementById('modal-produto').style.display = 'none';
    }

    async function salvarProduto(event) {
        event.preventDefault();
        const id = document.getElementById('produto-id').value;
        const url = id ? `http://localhost:8080/api/produtos/${id}` : 'http://localhost:8080/api/produtos';
        const method = id ? 'PUT' : 'POST';

        const produto = {
            titulo: document.getElementById('titulo').value,
            descricao: document.getElementById('descricao').value,
            precoVarejo: parseFloat(document.getElementById('preco-varejo').value),
            precoAtacado: parseFloat(document.getElementById('preco-atacado').value)
        };

        try {
            const resposta = await fetch(url, {
                method: method,
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(produto)
            });
            if (!resposta.ok) throw new Error('Falha ao salvar o produto.');
            
            alert('Produto salvo com sucesso!');
            fecharModal();
            carregarProdutos();
        } catch (error) {
            alert('Não foi possível salvar o produto.');
        }
    }
    
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

    function adicionarListenersAcoes() {
        document.querySelectorAll('.btn-excluir').forEach(botao => {
            botao.addEventListener('click', (evento) => {
                excluirProduto(evento.target.dataset.id);
            });
        });
        document.querySelectorAll('.btn-editar').forEach(botao => {
            botao.addEventListener('click', (evento) => {
                abrirModalParaEditar(evento.target.dataset.id);
            });
        });
    }

    async function excluirProduto(id) {
        if (!confirm(`Tem certeza que deseja excluir o produto com ID ${id}?`)) return;
        try {
            const resposta = await fetch(`http://localhost:8080/api/produtos/${id}`, { method: 'DELETE' });
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
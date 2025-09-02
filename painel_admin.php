<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="CSS/painel_admin.css"> 
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
                <tbody id="corpo-tabela-produtos"></tbody>
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
                        <label for="preco-varejo">Preço Varejo</label>
                        <input type="number" id="preco-varejo" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="preco-atacado">Preço Atacado</label>
                        <input type="number" id="preco-atacado" step="0.01" required>
                    </div>
                </div>

                <div id="secao-imagens" class="secao-imagens" style="display: none;">
                    <hr>
                    <h3>Gerenciar Imagens</h3>
                    <div id="lista-imagens-existentes" class="lista-imagens">
                        </div>
                    <div class="form-group">
                        <label for="input-nova-imagem">Adicionar Nova Imagem:</label>
                        <input type="file" id="input-nova-imagem" accept="image/*">
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" id="btn-cancelar" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-salvar">Salvar Produto</button>
                </div>
            </form>
        </div>
    </div>

<script>
    const modal = document.getElementById('modal-produto');
    const btnNovoProduto = document.querySelector('.btn-novo-produto');
    const btnCancelar = document.getElementById('btn-cancelar');
    const formProduto = document.getElementById('form-produto');
    const inputNovaImagem = document.getElementById('input-nova-imagem');

    document.addEventListener('DOMContentLoaded', () => {
        const adminJSON = sessionStorage.getItem('adminLogado');
        if (!adminJSON) {
            alert('Acesso negado.'); window.location.href = 'adminlogin.php'; return;
        }
        const admin = JSON.parse(adminJSON);
        document.getElementById('admin-nome').textContent = `Olá, ${admin.nome}`;

        document.getElementById('btn-logout').addEventListener('click', () => {
            sessionStorage.removeItem('adminLogado');
            alert('Você saiu.'); window.location.href = 'adminlogin.php';
        });

        btnNovoProduto.addEventListener('click', abrirModalParaCriar);
        btnCancelar.addEventListener('click', fecharModal);
        formProduto.addEventListener('submit', salvarProduto);
        inputNovaImagem.addEventListener('change', enviarNovaImagem);

        carregarProdutos();
    });

    function abrirModalParaCriar() {
        formProduto.reset();
        document.getElementById('modal-titulo').textContent = 'Adicionar Novo Produto';
        document.getElementById('produto-id').value = '';
        
        // Mostrar a seção de imagens, mas com mensagem informativa
        const secaoImagens = document.getElementById('secao-imagens');
        secaoImagens.style.display = 'block';
        
        // Atualizar a lista de imagens com uma mensagem explicativa
        const listaImagens = document.getElementById('lista-imagens-existentes');
        listaImagens.innerHTML = '<p>Você poderá adicionar imagens após criar o produto.</p>';
        
        // Desabilitar o campo de upload temporariamente
        document.getElementById('input-nova-imagem').disabled = true;
        
        modal.style.display = 'flex';
    }

    async function abrirModalParaEditar(id) {
        try {
            const resposta = await fetch(`http://localhost:8080/api/produtos/${id}`);
            if (!resposta.ok) throw new Error('Produto não encontrado.');
            const produto = await resposta.json();
            
            formProduto.reset();
            document.getElementById('produto-id').value = produto.id;
            document.getElementById('modal-titulo').textContent = `Editar Produto #${produto.id}`;
            document.getElementById('titulo').value = produto.titulo;
            document.getElementById('descricao').value = produto.descricao;
            document.getElementById('preco-varejo').value = produto.precoVarejo;
            document.getElementById('preco-atacado').value = produto.precoAtacado;
            
            // Configurar a seção de imagens para produto existente
            const secaoImagens = document.getElementById('secao-imagens');
            secaoImagens.style.display = 'block';
            
            // Habilitar o campo de upload de imagens
            document.getElementById('input-nova-imagem').disabled = false;
            
            // Mostrar as imagens do produto
            atualizarListaDeImagens(produto.id, produto.imagens || []);

            modal.style.display = 'flex';
        } catch (error) {
            alert('Não foi possível carregar os dados do produto para edição.');
        }
    }

    function fecharModal() {
        modal.style.display = 'none';
    }

    function atualizarListaDeImagens(produtoId, imagens) {
        const listaImagensDiv = document.getElementById('lista-imagens-existentes');
        listaImagensDiv.innerHTML = '';
        
        // Se temos um ID de produto e imagens para mostrar
        if (produtoId && imagens.length > 0) {
            imagens.forEach(img => {
                const imgContainer = document.createElement('div');
                imgContainer.className = 'imagem-container';
                imgContainer.innerHTML = `<img src="${img.urlImagem}" alt="Imagem do produto" width="80">`;
                const btnExcluirImg = document.createElement('button');
                btnExcluirImg.type = 'button';
                btnExcluirImg.className = 'btn-excluir-img';
                btnExcluirImg.textContent = 'X';
                btnExcluirImg.onclick = () => excluirImagemProduto(img.id, produtoId);
                imgContainer.appendChild(btnExcluirImg);
                listaImagensDiv.appendChild(imgContainer);
            });
        } 
        // Se temos ID mas nenhuma imagem
        else if (produtoId) {
            const mensagem = document.createElement('p');
            mensagem.className = 'info-message';
            mensagem.textContent = 'Este produto ainda não tem imagens. Adicione a primeira!';
            listaImagensDiv.appendChild(mensagem);
        } 
        // Se não temos ID de produto (novo produto)
        else {
            const mensagem = document.createElement('p');
            mensagem.className = 'info-message';
            mensagem.textContent = 'Você poderá adicionar imagens após criar o produto.';
            listaImagensDiv.appendChild(mensagem);
        }
    }

    async function enviarNovaImagem(event) {
        const file = event.target.files[0];
        const produtoId = document.getElementById('produto-id').value;
        if (!file || !produtoId) return;

        const formData = new FormData();
        formData.append('file', file);
        formData.append('produtoId', produtoId);

        try {
            const resposta = await fetch('http://localhost:8080/upload/produto', { method: 'POST', body: formData });
            if (!resposta.ok) throw new Error('Falha no upload da imagem.');
            
            alert('Imagem enviada com sucesso!');
            abrirModalParaEditar(produtoId);
        } catch (error) {
            alert('Erro ao enviar imagem.');
        }
    }
    
    async function excluirImagemProduto(imagemId, produtoId) {
        if (!confirm(`Tem certeza que deseja excluir esta imagem?`)) return;
        try {
            const resposta = await fetch(`http://localhost:8080/upload/produto/imagem/${imagemId}`, { method: 'DELETE' });
            if (!resposta.ok) throw new Error('Falha ao excluir a imagem.');
            
            alert('Imagem excluída com sucesso!');
            abrirModalParaEditar(produtoId);
        } catch (error) {
            alert('Erro ao excluir imagem.');
        }
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
            
            // Se for um novo produto (sem ID), recuperamos o produto criado
            if (!id) {
                const produtoCriado = await resposta.json();
                alert('Produto criado com sucesso! Agora você pode adicionar imagens.');
                // Abre o modal em modo de edição para o novo produto
                abrirModalParaEditar(produtoCriado.id);
            } else {
                // Se estamos apenas atualizando um produto existente
                alert('Produto atualizado com sucesso!');
                fecharModal();
                carregarProdutos();
            }
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
        if (!confirm(`Tem certeza que deseja excluir o PRODUTO INTEIRO com ID ${id}?`)) return;
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
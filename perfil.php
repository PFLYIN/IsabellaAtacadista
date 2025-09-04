<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="CSS/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "header.php"; ?>
    
    <div class="perfil-card" id="perfil-nao-logado">
        <div class="perfil-foto-container">
            <img src="uploads/padrao.png" alt="" class="perfil-foto">
            <div class="foto-overlay">
                <span>Faça login para adicionar sua foto</span>
            </div>
        </div>
        <h2>Visitante</h2>
        <p>Faça login para acessar seu perfil completo</p>
        
        <div class="botoes-container">
            <a href="cadastro.php" class="btn-cadastro">Cadastre-se</a>
            <a href="login.php" class="btn-login">Fazer Login</a>
        </div>
    </div>
    
    <div class="perfil-card" id="perfil-logado" style="display:none;">
        <div class="perfil-foto-container">
            <img src="uploads/padrao.png" alt="Foto de Perfil" class="perfil-foto" id="perfil-foto">
            <div class="foto-overlay" id="foto-overlay">
                <label for="upload-foto" class="btn-upload">
                    <span>Alterar foto</span>
                </label>
                <input type="file" id="upload-foto" accept="image/*" style="display:none;">
            </div>
        </div>
        <h2 id="perfil-nome">Carregando...</h2>
        <p><strong>Email:</strong> <span id="perfil-email">Carregando...</span></p>
        
        <div class="botoes-container">
            <a href="editar_perfil.php" class="btn-editar">Editar Perfil</a>
            <!-- Botão Admin escondido por padrão -->
            <a href="painel_admin.php" id="btn-painel-admin" class="btn-admin" style="display: none;">Painel do Admin</a>
            <button id="btn-logout" class="btn-logout">Sair</button>
        </div>
    </div>

    <script>
        // Este código roda assim que a página carrega
        document.addEventListener('DOMContentLoaded', () => {
            // ATUALIZADO: Usando sessionStorage em vez de localStorage
            const usuarioAdminJSON = sessionStorage.getItem('adminLogado');
            const usuarioNormalJSON = sessionStorage.getItem('usuarioLogado');
            let usuarioLogado = null;
            let isAdmin = false;
            
            const perfilNaoLogado = document.getElementById('perfil-nao-logado');
            const perfilLogado = document.getElementById('perfil-logado');

            // 1. Verifica PRIMEIRO se um admin está logado
            if (usuarioAdminJSON) {
                usuarioLogado = JSON.parse(usuarioAdminJSON);
                isAdmin = true;
                
                // Mostra o perfil logado e esconde o não logado
                perfilLogado.style.display = 'block';
                perfilNaoLogado.style.display = 'none';
            } 
            // 2. Se não for admin, verifica se um usuário normal está logado
            else if (usuarioNormalJSON) {
                usuarioLogado = JSON.parse(usuarioNormalJSON);
                
                // Mostra o perfil logado e esconde o não logado
                perfilLogado.style.display = 'block';
                perfilNaoLogado.style.display = 'none';
                
                // Configura o upload de foto para usuários normais
                setupFotoUpload(usuarioLogado.loginPessoa.email);
            }
            // 3. Se não encontrou NINGUÉM logado, expulsa para a página de login
            else {
                // Se ninguém estiver logado, mostra o perfil não logado
                perfilLogado.style.display = 'none';
                perfilNaoLogado.style.display = 'block';
                return; // Não precisa executar o restante do código
            }

            // 4. Preenche as informações do perfil com os dados encontrados
            document.getElementById('perfil-nome').textContent = usuarioLogado.nome;
            
            // O email está em um lugar diferente dependendo se é admin ou usuário
            const email = isAdmin ? usuarioLogado.adminLogin.email : usuarioLogado.loginPessoa.email;
            document.getElementById('perfil-email').textContent = email;

            // Verifica se existe foto salva para este usuário (apenas usuários normais)
            if (!isAdmin) {
                const fotoSalva = localStorage.getItem(`foto_${email}`);
                if (fotoSalva) {
                    document.getElementById('perfil-foto').src = fotoSalva;
                }
            }

            // 5. A MÁGICA FINAL: Se for admin, mostra o botão!
            if (isAdmin) {
                document.getElementById('btn-painel-admin').style.display = 'block'; // ou 'inline-block'
                // Esconde o overlay de upload de foto para admins
                document.getElementById('foto-overlay').style.display = 'none';
            }
        });

        // Configuração do upload de foto (mantida para usuários normais)
        function setupFotoUpload(email) {
            const uploadInput = document.getElementById('upload-foto');
            
            uploadInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                
                if (file) {
                    // Verifica se o arquivo é uma imagem
                    if (!file.type.match('image.*')) {
                        alert('Por favor, selecione apenas imagens.');
                        return;
                    }
                    
                    // Limita o tamanho do arquivo (5MB)
                    if (file.size > 5 * 1024 * 1024) {
                        alert('A imagem deve ter no máximo 5MB.');
                        return;
                    }
                    
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        // Atualiza a imagem na página
                        document.getElementById('perfil-foto').src = e.target.result;
                        
                        // Salva a imagem no localStorage para este usuário
                        localStorage.setItem(`foto_${email}`, e.target.result);
                    };
                    
                    reader.readAsDataURL(file);
                }
            });
            
            // Efeito hover para o container da foto
            const fotoContainer = document.querySelector('.perfil-foto-container');
            const fotoOverlay = document.getElementById('foto-overlay');
            
            fotoContainer.addEventListener('mouseenter', () => {
                fotoOverlay.style.opacity = '1';
            });
            
            fotoContainer.addEventListener('mouseleave', () => {
                fotoOverlay.style.opacity = '0';
            });
        }

        // Lógica do botão de logout (agora limpa as duas chaves do sessionStorage)
        document.getElementById('btn-logout').addEventListener('click', () => {
            // ATUALIZADO: Usando sessionStorage em vez de localStorage
            sessionStorage.removeItem('usuarioLogado');
            sessionStorage.removeItem('adminLogado');
            alert('Você saiu da sua conta.');
            window.location.href = 'login.php';
        });
    </script>

    <?php include "footer.php"; ?>
</body>
</html>
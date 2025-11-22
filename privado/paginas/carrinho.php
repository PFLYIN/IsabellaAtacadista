<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playfair+Display:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/IsabellaAtacadista/public/CSS/carrinho.css">
    <title>Meu Carrinho - Isabella Atacadista</title>
</head>
<body>

<?php require_once __DIR__ . '/../includes/header.php'; ?>

<div class="container">
    <h1 class="titulo">🛒 Meu Carrinho</h1>
    
    <!-- Contador de Atacado -->
    <div id="contador-atacado"></div>
    
    <!-- Container do Carrinho -->
    <div id="carrinho-container"></div>
</div>

<style>
/* Contador de Atacado */
#contador-atacado {
    margin: 20px auto 30px;
    max-width: 800px;
}

.contador-atacado {
    background: linear-gradient(135deg, #a0005a, #ff00bf);
    color: white;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(160,0,90,0.2);
    margin-bottom: 20px;
    font-family: 'Oswald', sans-serif;
    font-weight: 500;
    letter-spacing: 1px;
}

.contador-atacado.ativo {
    background: linear-gradient(135deg, #00b894, #00a085);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.02); }
    100% { transform: scale(1); }
}

.contador-atacado span {
    display: block;
    font-weight: bold;
    font-size: 18px;
}

.contador-atacado span:last-child {
    font-size: 16px;
    opacity: 0.9;
    margin-top: 8px;
    font-weight: 400;
}

/* Carrinho */
.carrinho-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 3px solid #f0f0f0;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.carrinho-header h3 {
    color: #a0005a;
    margin: 0;
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    font-weight: 600;
}

.btn-limpar {
    background: linear-gradient(90deg, #a0005a, #ff00bf);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Oswald', sans-serif;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(160,0,90,0.3);
}

.btn-limpar:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(160,0,90,0.4);
}

.carrinho-vazio {
    text-align: center;
    padding: 60px 20px;
    color: #666;
    max-width: 800px;
    margin: 0 auto;
}

.carrinho-vazio h3 {
    color: #a0005a;
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 600;
}

.carrinho-vazio p {
    font-size: 1.1rem;
    font-family: 'Oswald', sans-serif;
    color: #888;
}

.carrinho-items {
    margin-bottom: 30px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.carrinho-item {
    display: flex;
    align-items: center;
    padding: 20px;
    border: 2px solid #e0e0e0;
    border-radius: 15px;
    margin-bottom: 20px;
    background: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.carrinho-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    border-color: #a0005a;
}

.item-imagem {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 12px;
    margin-right: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.item-info {
    flex: 1;
}

.item-info h4 {
    margin: 0 0 8px 0;
    color: #333;
    font-size: 18px;
    font-family: 'Playfair Display', serif;
    font-weight: 600;
}

.preco-unitario {
    color: #a0005a;
    font-weight: bold;
    margin: 8px 0;
    font-size: 16px;
    font-family: 'Oswald', sans-serif;
}

.quantidade-controles {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 15px 0;
}

.quantidade-controles button {
    background: linear-gradient(90deg, #a0005a, #ff00bf);
    color: white;
    border: none;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(160,0,90,0.3);
}

.quantidade-controles button:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 15px rgba(160,0,90,0.4);
}

.quantidade-controles span {
    font-weight: bold;
    min-width: 40px;
    text-align: center;
    font-size: 18px;
    font-family: 'Oswald', sans-serif;
    color: #333;
}

.subtotal {
    font-weight: bold;
    color: #333;
    margin: 8px 0;
    font-size: 16px;
    font-family: 'Oswald', sans-serif;
}

.btn-remover {
    background: linear-gradient(90deg, #a0005a, #ff00bf);
    color: white;
    border: none;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;
    margin-left: 15px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(160,0,90,0.3);
}

.btn-remover:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 15px rgba(160,0,90,0.4);
}

.carrinho-footer {
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.total-info h4 {
    color: #a0005a;
    font-size: 28px;
    margin: 0 0 15px 0;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
}

.atacado-ativo {
    color: #00b894;
    font-weight: bold;
    margin: 15px 0;
    font-size: 18px;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-whatsapp {
    background: linear-gradient(90deg, #25d366, #128c7e);
    color: white;
    border: none;
    padding: 18px 35px;
    border-radius: 30px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.3);
    transition: all 0.3s ease;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 1px;
}

.btn-whatsapp:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(37, 211, 102, 0.4);
}

/* Responsividade */
@media (max-width: 768px) {
    .carrinho-item {
        flex-direction: column;
        text-align: center;
        padding: 15px;
    }
    
    .item-imagem {
        margin-right: 0;
        margin-bottom: 15px;
        width: 80px;
        height: 80px;
    }
    
    .quantidade-controles {
        justify-content: center;
    }
    
    .btn-remover {
        margin-left: 0;
        margin-top: 10px;
    }
    
    .carrinho-header {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}
</style>

<!-- Botão Voltar ao Topo -->
<button id="voltarTopo" class="btn-voltar-topo" title="Voltar ao topo">
    ↑
</button>

<script src="/IsabellaAtacadista/public/js/carrinho.js"></script>

<script>
    // Botão voltar ao topo
    const btnVoltarTopo = document.getElementById('voltarTopo');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            btnVoltarTopo.classList.add('show');
        } else {
            btnVoltarTopo.classList.remove('show');
        }
    });
    
    btnVoltarTopo.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>

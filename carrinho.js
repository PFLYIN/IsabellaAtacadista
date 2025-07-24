// Sistema de Carrinho - Isabella Atacadista
class Carrinho {
    constructor() {
        this.itens = JSON.parse(localStorage.getItem('carrinho')) || [];
        this.inicializar();
    }

    inicializar() {
        this.renderizarCarrinho();
        this.atualizarContadorAtacado();
    }

    adicionarItem(nome, preco, precoAtacado, imagem, quantidade = 1) {
        // Garantir que os valores são números
        const precoNum = parseFloat(preco) || 0;
        const precoAtacadoNum = parseFloat(precoAtacado) || precoNum * 0.75;
        const quantidadeNum = parseInt(quantidade) || 1;
        
        const itemExistente = this.itens.find(item => item.nome === nome);
        
        if (itemExistente) {
            itemExistente.quantidade += quantidadeNum;
        } else {
            this.itens.push({
                nome: nome,
                preco: precoNum,
                precoAtacado: precoAtacadoNum,
                imagem: imagem,
                quantidade: quantidadeNum
            });
        }
        
        this.salvarCarrinho();
        this.renderizarCarrinho();
        this.atualizarContadorAtacado();
        this.mostrarNotificacao(`${nome} adicionado ao carrinho!`);
    }

    removerItem(index) {
        this.itens.splice(index, 1);
        this.salvarCarrinho();
        this.renderizarCarrinho();
        this.atualizarContadorAtacado();
    }

    atualizarQuantidade(index, novaQuantidade) {
        if (novaQuantidade <= 0) {
            this.removerItem(index);
        } else {
            this.itens[index].quantidade = novaQuantidade;
            this.salvarCarrinho();
            this.renderizarCarrinho();
            this.atualizarContadorAtacado();
        }
    }

    limparCarrinho() {
        this.itens = [];
        this.salvarCarrinho();
        this.renderizarCarrinho();
        this.atualizarContadorAtacado();
    }

    salvarCarrinho() {
        localStorage.setItem('carrinho', JSON.stringify(this.itens));
    }

    calcularTotal() {
        const totalItens = this.calcularTotalItens();
        
        if (totalItens >= 10) {
            // Preço de atacado
            return this.itens.reduce((total, item) => {
                const precoAtacado = parseFloat(item.precoAtacado) || parseFloat(item.preco) * 0.75;
                const quantidade = parseInt(item.quantidade) || 0;
                return total + (precoAtacado * quantidade);
            }, 0);
        } else {
            // Preço de varejo
            return this.itens.reduce((total, item) => {
                const preco = parseFloat(item.preco) || 0;
                const quantidade = parseInt(item.quantidade) || 0;
                return total + (preco * quantidade);
            }, 0);
        }
    }

    calcularTotalItens() {
        return this.itens.reduce((total, item) => {
            const quantidade = parseInt(item.quantidade) || 0;
            return total + quantidade;
        }, 0);
    }

    atualizarContadorAtacado() {
        const totalItens = this.calcularTotalItens();
        const contadorElement = document.getElementById('contador-atacado');
        
        if (!contadorElement) return;
        
        if (totalItens >= 10) {
            contadorElement.innerHTML = `
                <div class="contador-atacado ativo">
                    <span>🎉 ATACADO ATIVO!</span>
                    <span>Você ganhou desconto especial!</span>
                </div>
            `;
        } else {
            const faltam = 10 - totalItens;
            contadorElement.innerHTML = `
                <div class="contador-atacado">
                    <span>Faltam ${faltam} itens para atacado</span>
                    <span>Adicione mais ${faltam} produto${faltam > 1 ? 's' : ''} e ganhe desconto!</span>
                </div>
            `;
        }
    }

    mostrarNotificacao(msg) {
        // Remove notificação anterior se existir
        const notifAnterior = document.querySelector('.notificacao-carrinho');
        if (notifAnterior) {
            notifAnterior.remove();
        }

        // Cria nova notificação
        let notif = document.createElement("div");
        notif.className = "notificacao-carrinho";
        notif.textContent = msg;
        notif.style.cssText = `
            position: fixed;
            top: 30px;
            right: 30px;
            background: linear-gradient(90deg, #a0005a, #ff0000);
            color: #fff;
            padding: 15px 25px;
            border-radius: 25px;
            font-size: 1.1em;
            font-weight: 500;
            font-family: 'Oswald', sans-serif;
            box-shadow: 0 8px 25px rgba(160, 0, 90, 0.3);
            z-index: 9999;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.5s ease;
            letter-spacing: 1px;
        `;
        
        document.body.appendChild(notif);
        
        // Anima entrada
        setTimeout(() => {
            notif.style.opacity = "1";
            notif.style.transform = "translateX(0)";
        }, 100);
        
        // Remove após 3 segundos
        setTimeout(() => {
            notif.style.opacity = "0";
            notif.style.transform = "translateX(100%)";
            setTimeout(() => notif.remove(), 500);
        }, 3000);
    }

    renderizarCarrinho() {
        const carrinhoContainer = document.getElementById('carrinho-container');
        if (!carrinhoContainer) return;

        if (this.itens.length === 0) {
            carrinhoContainer.innerHTML = `
                <div class="carrinho-vazio">
                    <h3>Seu carrinho está vazio</h3>
                    <p>Adicione alguns produtos para começar!</p>
                </div>
            `;
            return;
        }

        const totalItens = this.calcularTotalItens();
        const total = this.calcularTotal();
        const isAtacado = totalItens >= 10;

        let html = `
            <div class="carrinho-header">
                <h3>Seu Carrinho (${totalItens} itens)</h3>
                <button onclick="carrinho.limparCarrinho()" class="btn-limpar">Limpar</button>
            </div>
            <div class="carrinho-items">
        `;

        this.itens.forEach((item, index) => {
            const precoUnitario = isAtacado ? 
                (parseFloat(item.precoAtacado) || parseFloat(item.preco) * 0.75) : 
                (parseFloat(item.preco) || 0);
            const quantidade = parseInt(item.quantidade) || 0;
            const subtotal = precoUnitario * quantidade;
            
            html += `
                <div class="carrinho-item">
                    <img src="${item.imagem || ''}" alt="${item.nome}" class="item-imagem">
                    <div class="item-info">
                        <h4>${item.nome}</h4>
                        <p class="preco-unitario">R$ ${precoUnitario.toFixed(2)} cada</p>
                        <div class="quantidade-controles">
                            <button onclick="carrinho.atualizarQuantidade(${index}, ${quantidade - 1})">-</button>
                            <span>${quantidade}</span>
                            <button onclick="carrinho.atualizarQuantidade(${index}, ${quantidade + 1})">+</button>
                        </div>
                        <p class="subtotal">Subtotal: R$ ${subtotal.toFixed(2)}</p>
                    </div>
                    <button onclick="carrinho.removerItem(${index})" class="btn-remover">×</button>
                </div>
            `;
        });

        html += `
            </div>
            <div class="carrinho-footer">
                <div class="total-info">
                    <h4>Total: R$ ${total.toFixed(2)}</h4>
                    ${isAtacado ? '<p class="atacado-ativo">🎉 Preço de atacado aplicado!</p>' : ''}
                </div>
                <button onclick="carrinho.enviarWhatsApp()" class="btn-whatsapp">
                    📱 Enviar para WhatsApp
                </button>
            </div>
        `;

        carrinhoContainer.innerHTML = html;
    }

    enviarWhatsApp() {
        const totalItens = this.calcularTotalItens();
        const total = this.calcularTotal();
        const isAtacado = totalItens >= 10;
        
        let mensagem = "🛍️ *Isabella Atacadista* 🛍️\n\n";
        mensagem += "*Meu Pedido:*\n\n";
        
        this.itens.forEach(item => {
            const precoUnitario = isAtacado ? 
                (parseFloat(item.precoAtacado) || parseFloat(item.preco) * 0.75) : 
                (parseFloat(item.preco) || 0);
            const quantidade = parseInt(item.quantidade) || 0;
            mensagem += `• ${item.nome}\n`;
            mensagem += `  Quantidade: ${quantidade}\n`;
            mensagem += `  Preço: R$ ${precoUnitario.toFixed(2)} cada\n\n`;
        });
        
        mensagem += `*Total de itens:* ${totalItens}\n`;
        mensagem += `*Valor total:* R$ ${total.toFixed(2)}\n\n`;
        
        if (isAtacado) {
            mensagem += "🎉 *PREÇO DE ATACADO APLICADO!* 🎉\n";
        } else {
            mensagem += `💡 *Dica:* Adicione mais ${10 - totalItens} produto${10 - totalItens > 1 ? 's' : ''} para ganhar desconto de atacado!\n`;
        }
        
        mensagem += "\n📍 *Isabella Atacadista*";
        
        const numeroWhatsApp = "5511999999999"; // Substitua pelo número correto
        const url = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(mensagem)}`;
        window.open(url, '_blank');
    }
}

// Inicializar carrinho quando a página carregar
let carrinho;
document.addEventListener('DOMContentLoaded', function() {
    carrinho = new Carrinho();
});

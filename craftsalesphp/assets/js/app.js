var MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px";

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    $(document).ready(function() {
        // Configuração do slide
        $('.slide-container').on('scroll', function() {
            // Detecta quando um slide termina e redireciona para o próximo
            var $this = $(this),
                scrollLeft = $this.scrollLeft(),
                width = $this.width(),
                scrollWidth = $this.get(0).scrollWidth;

            if (scrollLeft === (scrollWidth - width)) {
                // Último slide, redireciona para o início
                $this.scrollLeft(0);
            }
        });
    });

function menucelular(){
    if(MenuItens.style.maxHeight == "0px"){
        MenuItens.style.maxHeight = "200px"
    }else{
        MenuItens.style.maxHeight = "0px";
    }
}

/*novo 0505*/

function carregarPedidos() {
    const tableBody = document.getElementById('pedido-table-body');

    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];

    tableBody.innerHTML = '';

    pedidos.forEach(pedido => {
        const row = tableBody.insertRow();
        
        // Inserir a imagem do produto com estilos inline
        const cellImagem = row.insertCell(0);
        cellImagem.innerHTML = `<img src="assets/img/produto-1.jpg${pedido.nome.replace(/ /g, '-')}.jpg" alt="${pedido.nome}" style="width: 100px; height: auto; border-radius: 5px;">`;

        // Inserir o nome do produto
        const cellNome = row.insertCell(1);
        cellNome.textContent = pedido.nome;

        // Inserir o preço do produto
        const cellPreco = row.insertCell(2);
        cellPreco.textContent = `R$ ${pedido.preco}`;
    });
}

// Chamando a função para carregar os pedidos ao carregar a página
window.onload = carregarPedidos;
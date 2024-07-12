<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>CraftSales</title>
    <link rel = "stylesheet" href = "assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.jpg" type="image/x-icon">
</head>
<body>

    <!---Inicio do Banner -->
    <div class = "novoMenu">

    <!---Inicio do container -->

    <div class = "container">

        <!---Inicio navegação-->
        <div class = "navbar">

            <div class = "logo">
                <img src = "assets/img/logo-transparente.png" alt = "CraftSales" width= "125px">
            </div>

            <!---Inicio menu navegação-->

            <nav>
                <ul id = "MenuItens">
                    <li><a href = "index.php" title = "#">Início</a> </li>
                    <li><a href = "produtos.php" title = "#">Produtos</a> </li>
                    <li><a href = "empresa.php" title = "#">Empresa</a> </li>
                    <li><a href = "contatos.php" title = "#">Contatos</a> </li>
                   
                </ul>
            </nav>

            <!--Fim menu navegação-->
           
            
            <a href="carrinho.php" title="">
                <img src = "assets/img/carrinho.png" alt = "#" width = "30px" height = "30px">
               </a>
            
            <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
        </div>
        <!---Fim navegação-->

    </div> 

    <!---Fim do container-->

    </div>
    <!---Fim do Banner-->

  

    <!--Inicio produtos em destaque-->

    <div class = "corpo-categorias">

        <div class = "linha linha2">
            <h2>Todos os Produtos</h2>
            <select name="produtos" id="produtosSelect" onchange="redirectToPage()">
                <option value="produtos.php">Todos</option>
                <option value="categoria-note.php">Notebook</option>
                <option value="categoria-mouse.php">Mouse</option>
                <option value="categoria-fone.php">Headset</option>
                <option value="categoria-acessorios.php">Acessórios</option>
            </select>
            
            
            <div class = "linha">

               
          
            <div class = "col-4">
                <a href="ver-produtos3.php" title="">
                <img src = "assets/img/produto-4.jpg" alt = "">
                </a>


                <h4>Mouse sem fio Logitech M170 com bateria longa vermelha/preta</h4>
                        <div class = "classificacao">
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                        </div>

                    <p>R$ 57,90</p>
            </div>

            <div class = "col-4">
                <a href="ver-produtos4.php" title="">
                <img src = "assets/img/produto-5.jpg" alt = "">
                </a>


                <h4>Mouse Com Fio Wave Conexão USB 1200dpi Cabo de 130cm 3 Botões Textura Emborrachada Preto - MO222</h4>
                        <div class = "classificacao">
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                        </div>

                    <p>R$ 27,90</p>
            </div>
            <div class = "col-4">
                <a href="ver-produtos5.php" title="">
                <img src = "assets/img/produto-6.jpg" alt = "">
                </a>


                <h4> Mouse Para Jogo Redragon Stormrage M718 Preto Rgb 10000 Dpi </h4>
                        <div class = "classificacao">
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                            <ion-icon name = "star"></ion-icon>
                        </div>

                    <p>R$ 145,80</p>
            </div>
    

<div class = "col-4">
    <a href="ver-produtos14.php" title="">
    <img src = "assets/img/produto-15.jpeg" alt = "" >
    </a>


    <h4>REDRAGON-RGB USB Wired Gaming Mouse</h4>
            <div class = "classificacao">
                <ion-icon name = "star"></ion-icon>
                <ion-icon name = "star"></ion-icon>
                <ion-icon name = "star"></ion-icon>
                <ion-icon name = "star"></ion-icon>
                <ion-icon name = "star"></ion-icon>
            </div>

        <p>R$ 349,00</p>
    </div>

</div>






</div>
            
        <!--FIM CATEGORIA EM DESTAQUE-->




    </div>

    </div>

    <!--FIM PRODUTOS EM DESTAQUE-->


    <!--INICIO RODAPE-->
    <!--INICIO RODAPE-->
    <footer class="rodape">

        <div class="container">
            <div class="linha">

                <div class="rodape-col-1"> 
                    <h3>Baixe o nosso aplicativo</h3>
                    <p>Nas melhores plataformas</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <img src="assets/img/logo-transparente.png" alt="">
                   
                </div>
                <div class="rodape-col-3"> 
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons</li>
                        <li>Blog</li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>

                <div class="rodape-col-4"> 
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados Craft Sales
            </p>

        </div>
        </footer>

        <script>
    function redirectToPage() {
        var selectElement = document.getElementById("produtosSelect");
        var selectedValue = selectElement.value;
        window.location.href = selectedValue;
    }
</script>


     <!--FIM RODAPE-->
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src = "assets/js/app.js"></script>

</body>
</html>
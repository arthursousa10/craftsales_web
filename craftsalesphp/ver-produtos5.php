<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CraftSales</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.jpg" type="image/x-icon">
</head>

<body>

    <div class="novoMenu">

        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar">

                <div class="logo">
                    <img src="assets/img/logo-transparente.png" alt="DESPERTARTEC" width="100px">
                </div>

                <!-- INÍCIO MENU NAVEGAÇÃO -->
                <nav>
                    <ul id="MenuItens">
                        <li><a href="index.php" title="">Início</a></li>
                        <li><a href="produtos.php" title="">Produtos</a></li>
                        <li><a href="empresa.php" title="">Empresa</a></li>
                        <li><a href="contatos.php" title="">Contatos</a></li>
                       
                    </ul>
                </nav>
                <!-- FIM   MENU NAVEGAÇÃO -->

                <a href="carrinho.php" title="">
                    <img src="assets/img/carrinho.png" alt="" width="30px" height="30px">
                    </a>

                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!-- FIM NAVEGAÇÃO-->

        </div>
        <!-- FIM DO CONTEÚDO-->
        <hr>
        <br>
    </div>

    <!-- INÍCIO PRODUTOS DETALHES alter 4 incluir esta classe -->
    <div class="corpo-categorias ver-produto">
        <div class="linha">

            <div class="col-2">
                <img src="assets/img/produto-6.jpg" alt="" width="" height="">

                        </div>

                        <div class="col-2">
                            <h1>Compre com desconto</h1>
                            <h4>Mouse Para Jogo Redragon Stormrag
                                <br>
                                <br>
                            R$ 145,80 </h4>
                            <form action="" method="post">

                                
                                <br>
                               
                                <div>
                                <button class="btn" onclick="adicionarAoCarrinho('Mouse Para Jogo Redragon Stormrage', 145.80  )">Adicionar ao Carrinho</button>
                                </div>

                            </form>
                            <br>

                            <h3>Descrição:</h3>
                            <br>
                            <p>Mouse Para Jogo Redragon Stormrage M718 Preto RGB 10000 DPI: Um mouse para jogos da Redragon, com alta precisão de até 10000 DPI, iluminação RGB personalizável e design ergonômico para longas sessões de jogo.

                            </p>
                        </div>

                    </div>
                </div>
        
                <!-- FIM PRODUTOS DETALHES -->

                <!-- INÍCIO TÍTULO PRODUTOS PRODUTOS DETALHES alter 4 incluir esta classe -->
                <div class="corpo-categorias">
                    <div class="linha linha2">
                        


                    </div>
                </div>
                <!-- FIM TÍTULO PRODUTOS DETALHES -->


                <!-- INÍCIO PRODUTOS EM DESTAQUE alter 2 mudar de todo para produtos relacionados e tirar o combo + comprados-->
                <div class="corpo-categorias">
                <h2 class="titulo"> Produtos Relacionados</h2>

                    <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

                    <!-- alter 1.. deixar apenas 1 produto-->
                    <div class="linha">

                        <!-- INÍCIO ITEM PRODUTO-->

                        <div class="col-4">
                            <a href="ver-produtos9.php">
                            <img src="assets/img/produto-10.jpg" alt="">
                            </a>

                            <h4>MousePad</h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>

                            <p>R$ 95,90</p>


                        </div>

                        <div class="col-4">
                            <a href="ver-produtos8.php">
                            <img src="assets/img/produto-9.jpg" alt="">
                        </a>
            
                            <h4>Fone HeadSet</h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
            
                            <p>R$ 997,90</p>
            
                        </div>

                        <div class="col-4"><a href="ver-produtos6.php">
                            <img src="assets/img/produto-7.jpg" alt="">
                        </a>
            
                            <h4>Suporte para Notebook</h4>
                            <div class="classificacao">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
            
                            <p>R$ 50,00</p>
            
            
                        </div>



                        <!-- FIM ITEM PRODUTO-->

                        <!-- FIM ITEM PRODUTO-->


                    </div>
                    <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

                </div>
                <!-- FIM PRODUTOS EM DESTAQUE alter 3 -- retirar paginação -->



                <!-- INÍCIO RODAPÉ-->
                <footer class="rodape">
                    <div class="container">
                        <div class="linha">

                            <div class="rodape-col-1">
                                <h3>Baixe o nosso App</h3>
                                <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                                <div class="app-logo">
                                    <img src="assets/img/google.png" alt="">
                                    <img src="assets/img/apple.png" alt="">
                                </div>
                            </div>

                            <div class="rodape-col-2">
                                <img src="assets/img/logo-2.png" alt="">
                                <p>orem Ipsum is simply dummy text of the </p>
                            </div>

                            <div class="rodape-col-3">
                                <h3>Mais Informações</h3>
                                <ul>
                                    <li>Cupons </li>
                                    <li>Blog </li>
                                    <li>Política de Privacidade</li>
                                    <li>Contatos</li>
                                </ul>
                            </div>


                            <div class="rodape-col-4">
                                <h3>Redes Sociais</h3>
                                <ul>
                                    <li>Facebook </li>
                                    <li>Instagram </li>
                                    <li>Youtube</li>
                                    <li>Twiter</li>
                                </ul>
                            </div>

                        </div>
                        <hr>
                        <p class="direitos">
                            &#169; Todos os Direitos Reservados. DTEC 2024.
                        </p>

                    </div>

                </footer>
                <!-- FIM RODAPÉ-->

                <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
                <script src="assets/js/app.js"> </script>
</body>

<script>

function adicionarAoCarrinho(name, price) {
    const pedido = {
        nome: name,
        preco: price,
    };

    // Armazena os pedidos no localStorage
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.push(pedido);
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
    
    // Redireciona para a página do carrinho
    window.location.href = 'carrinho.php';
}

    

</script>

</html>
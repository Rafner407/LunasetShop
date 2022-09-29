<?php
    include 'connect.php';
    include 'checklogin.php';
    
    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>

<html>
<head>
    <title>Lunaset</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/3a65185406.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="top-nav-bar">
    <div class="search-box">
        <i class="fa-solid fa-bars" id="menu-btn" onclick="openmenu()"></i>
        <i class="fa-solid fa-times" id="close-btn" onclick="closemenu()"></i>
        <img src="imagens/logo.png" class="logo" height="100px" width="100px">
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div>
    <div class="menu-bar">
        <ul>
            <li><a href="#"><i class="fa-solid fa-basket-shopping"></i>Carrinho</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Log In</a></li>
        </ul>
    </div>
    </div>

    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul>
                <li>À venda<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                    </ul>
                </li>
                <li>Mobile<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                    </ul>
                </li>
                <li>Computador<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                    </ul>
                </li>
                <li>Livros<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-4</li>
                        <li>Sub Menu-4</li>
                        <li>Sub Menu-4</li>
                        <li>Sub Menu-4</li>
                    </ul>
                </li>
                <li>Fitness<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-5</li>
                        <li>Sub Menu-5</li>
                        <li>Sub Menu-5</li>
                        <li>Sub Menu-5</li>
                    </ul>
                </li>
                <li>Infantil<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-6</li>
                        <li>Sub Menu-6</li>
                        <li>Sub Menu-6</li>
                        <li>Sub Menu-6</li>
                    </ul>
                </li>
                <li>Revistas<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-7</li>
                        <li>Sub Menu-7</li>
                        <li>Sub Menu-7</li>
                        <li>Sub Menu-7</li>
                    </ul>
                </li>
                <li>Acessórios<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-8</li>
                        <li>Sub Menu-8</li>
                        <li>Sub Menu-8</li>
                        <li>Sub Menu-8</li>
                    </ul>
                </li>
                <li>Filmes e música<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-9</li>
                        <li>Sub Menu-9</li>
                        <li>Sub Menu-9</li>
                        <li>Sub Menu-9</li>
                    </ul>
                </li>
                <li>Jogos<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-10</li>
                        <li>Sub Menu-10</li>
                        <li>Sub Menu-10</li>
                        <li>Sub Menu-10</li>
                    </ul>
                </li>
                <li>Casa<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-11</li>
                        <li>Sub Menu-11</li>
                        <li>Sub Menu-11</li>
                        <li>Sub Menu-11</li>
                    </ul>
                </li>
                <li>Móveis<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-12</li>
                        <li>Sub Menu-12</li>
                        <li>Sub Menu-12</li>
                        <li>Sub Menu-12</li>
                    </ul>
                </li>
                <li>Mercado<i class="fa-solid fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-13</li>
                        <li>Sub Menu-13</li>
                        <li>Sub Menu-13</li>
                        <li>Sub Menu-13</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="slider">
            <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="product.php"><img src="imagens/fundoCinza.jpg" class="d-block w-100" height="766px">
                  </div>
                  <div class="carousel-item">
                    <a href="product.php"><img src="imagens/fundoRosa.jpg" class="d-block w-100" height="766px">
                  </div>
                  <div class="carousel-item">
                    <a href="product.php"><img src="imagens/fundoLaranja.jpg" class="d-block w-100" height="766px">
                  </div>
                  <div class="carousel-item">
                    <a href="product.php"><img src="imagens/fundoVermelho.jpg" class="d-block w-100" height="766px">
                  </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
              </div>
        </div>
    </section>

    <!-- featured categories -->
    <section class="features-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="product.php"><img src="imagens/fundoCinza.jpg"></a>
                </div>
                <div class="col-md-4">
                    <a href="product.php"><img src="imagens/fundoRosa.jpg"></a>
                </div>
                <div class="col-md-4">
                    <a href="product.php"><img src="imagens/fundoLaranja.jpg"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- produtos à venda-->
    <section class="on-sale">
        <div class="container">
            <div class="title-box"><h2>À venda</h2></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Produto 1</h3>
                        <h5>R$40.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 2</h3>
                        <h5>R$50.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 3</h3>
                        <h5>R$25.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 4</h3>
                        <h5>R$115.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- novos produtos -->
    <section class="new-products">
        <div class="container">
            <div class="title-box"><h2>Novidades</h2></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Produto 1</h3>
                        <h5>R$40.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 2</h3>
                        <h5>R$50.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 3</h3>
                        <h5>R$25.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 4</h3>
                        <h5>R$115.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <h3>Produto 1</h3>
                        <h5>R$40.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 2</h3>
                        <h5>R$50.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 3</h3>
                        <h5>R$25.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <a href="product.php"><img src="imagens/fundoVermelho.jpg"></a>
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick Shop">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Wish List">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to Cart">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <h3>Produto 4</h3>
                        <h5>R$115.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteúdo -->
    <section class="website-features">
        <div class="container">
            <div class="row">
                <div class="col-md-3 feature-box">
                    <a href="product.php"><img src="imagens/100.png"></a>
                    <div class="feature-text">
                        <p><b>Itens 100% originais</b> disponíveis na loja!</p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <a href="product.php"><img src="imagens/entrega.png"></a>
                    <div class="feature-text">
                        <p><b>Garantia de entrega</b> para todos!</p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <a href="product.php"><img src="imagens/pagamento.png"></a>
                    <div class="feature-text">
                        <p><b>Pagamento efetuado</b> no método de sua preferência!</p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <a href="product.php"><img src="imagens/devolva.png"></a>
                    <div class="feature-text">
                        <p><b>Garantia de produto</b> para até 30 dias!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="container tex-center">
            <div class="row">
                <div class="col-md-3">
                    <h1>Links úteis</h1>
                    <p>Política de privacidade</p>
                    <p>Termos de uso</p>
                    <p>Política de retorno</p>
                    <p>Cupons</p>
                </div>
                <div class="col-md-3">
                    <h1>Quem somos</h1>
                    <p>Sobre nós</p>
                    <p>Contato</p>
                    <p>Carreira</p>
                    <p>Afiliações</p>
                </div>
                <div class="col-md-3">
                    <h1>Siga-nos em:</h1>
                    <p><i class="fa fa-facebook-official"></i> Facebook</p>
                    <p><i class="fa fa-youtube-play"></i> YouTube</p>
                    <p><i class="fa fa-linkedin"></i> Linkedin</p>
                    <p><i class="fa fa-instagram"></i> Instagram</p>
                </div>
                <div class="col-md-3 footer-image">
                    <h1>Baixe o aplicativo</h1>
                    <a href="product.php"><img src="imagens/download.png"></a>
                </div>
            </div>
            <hr>
            <p class="copyright">Feito com Visual Code</p>
        </div>
    </section>

    <script>
        function openmenu()
        {
            document.getElementById("side-menu").style.display="block";
            document.getElementById("menu-btn").style.display="none";
            document.getElementById("close-btn").style.display="block"; 
        }
        function closemenu()
        {
            document.getElementById("side-menu").style.display="none";
            document.getElementById("menu-btn").style.display="block";
            document.getElementById("close-btn").style.display="none"; 
        }
    </script>

</body>

    </html>
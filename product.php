<?php
    include 'connect.php';
    include 'checklogin.php';
    
    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
?>

<html>
<head>
    <title>Lunaset Produto</title>
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
        <a href="index.php"><img src="imagens/logo.png" class="logo" height="100px" width="100px"></a>
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

    <!-- Produto -->
    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="imagens/fundoCinza.jpg" class="d-block" height="766px">
                          </div>
                          <div class="carousel-item">
                            <img src="imagens/fundoRosa.jpg" class="d-block" height="766px">
                          </div>
                          <div class="carousel-item">
                            <img src="imagens/fundoLaranja.jpg" class="d-block" height="766px">
                          </div>
                          <div class="carousel-item">
                            <img src="imagens/fundoVermelho.jpg" class="d-block" height="766px">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                      </div>
                </div>
                <div class="col-md-7">
                    <p class="new-arrival">NOVO</p>
                    <h2>Nome do produto</h2>
                    <p>Código do produto: PRC3928</p>
                    
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                    <p class="price">R$ 15.00</p>
                    <p><b>Disponibilidade:</b> Em estoque</p>
                    <p><b>Condição:</b> Novo</p>
                    <p><b>Marca:</b> Marca</p>
                    <label>Quantidade: </label>
                    <input type="text" value="1">
                    <button type="button" class="btn btn-primary">Adicionar ao carrinho</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Descrição do produto -->
    <section class="product-description">
        <div class="container">
            <h6>Descrição do produto</h6>
            <p>Caderno de poesias

                Caderno de poesias<br/>
                é um belo lugar.<br/>
                Tantas coisas lindas<br/>
                que eu gostaria de falar.<br/>
                Eu falo em forma de versos<br/>
                para todos poderem escutar.<br/>
                Agora você já sabe<br/>
                por que os poetas passam os dias<br/>
                escrevendo em seus cadernos de poesias.</p>

            <hr>    
        </div>
    </section>

    <section class="on-sale">
        <div class="container">
            <div class="title-box"><h2>Similares</h2></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="imagens/fundoVermelho.jpg">
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
                        <img src="imagens/fundoVermelho.jpg">
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
                        <img src="imagens/fundoVermelho.jpg">
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
                        <img src="imagens/fundoVermelho.jpg">
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
                    <img src="imagens/download.png">
                </div>
            </div>
            <hr>
            <p class="copyright">Feito com Visual Code</p>
        </div>
    </section>

</body>
</html>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5f200efc12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

  
<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bikers</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#">em branco</a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#ancora2">Produtos</a><!--disabled-->
          </li>
          <div class="collapse navbar-collapse" id="navbarNavWarningDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarwarningDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>Categorias</strong></a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#ancora2">Trilhas</a></li>
                  <li><a class="dropdown-item" href="#ancora3">Dia a Dia</a></li>
                  <li><a class="dropdown-item" href="#ancora4">Premium</a></li>
                </ul>
              </li>
            </div>
        </ul>
        <div class="loginbut">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
            <button type="button" class="btn btn-outline-warning">Login</button>
            <button class="btn btn-outline-primary" type="submit">Procurar</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="bodya">
  <main>
  
    <div class="body1">
      <div class="backimage">
        <!--Image background-->
        <div class="contentb">
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators primary">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img/imagemg1.jpg" class="imgcard" alt="Evento de ciclistas."></svg>
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1><strong class="corletra3">BIKERS &raquo;</strong></h1>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img/imagemg2.jpg" class="imgcard" alt="Uma mulher andando de bicicleta em um morro ao entardecer."></svg>
                <div class="container">
                  <div class="carousel-caption">
                    <h1><strong>Encontre o melhor.</strong></h1>
                    <p><strong>Você não pode parar, não quer parar, não vai parar.</strong></p>
                    <p><a class="btn btn-lg btn-primary" href="#ancora1">Veja mais &rsaquo;</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="img/imagemg3.jpg" class="imgcard" alt="Um homem com sua bicicleta bolhando paara o horizonte."></svg>
                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1><strong class="corletra3">EXPLORE!</strong></h1>
                    <p><a class="btn btn-lg btn-primary" href="#ancora1">Veja mais &rsaquo;</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  
  
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
  
    <div class="container marketing">
  
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="img/matias.jpg" alt="Imagem do gerente matias." class="bd-placeholder-img rounded-circle" width="150" height="150">
  
          <h2 class="corletra">Matias</h2>
          <p class="corletra2">Gerente de vendas formado em gestão de marketing, ciclista profissional.</p>
          <p><a class="btn btn-outline-warning" href="#">Veja mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/fotopedro.jpg" alt="Imagem do criador desta página." class="bd-placeholder-img rounded-circle" width="150" height="150">
  
          <h2 class="corletra">Pedro Henrique</h2>
          <p class="corletra2">Desenvolvedor full stack júnior e dev mobile, tecnologia é sua paixão...</p>
          <p><a class="btn btn-outline-warning" href="#">Veja mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="img/robo.jpg" alt="Imagem de um robo branco com olho azul." class="bd-placeholder-img rounded-circle" width="150" height="150">
  
          <h2 class="corletra">WK-engine</h2>
          <p class="corletra2">Funcionário eletrônico para atender, vender e auxiliar nos negócios</p>
          <p><a class="btn btn-outline-warning" href="#">Veja mais &raquo;</a></p>
          <br>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES -->
  
      <div id="ancora1">
        <hr class="featurette-divider">
      </div>
  
      
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading corletra">Desbrave as montanhas. <span class="corletra2">Usando o melhor...</span></h2>
          <p class="lead corletra2">As principais características dessas bikes são os pneus mais largos, com cravos e suspensão, para absorver melhor o impacto em terrenos acidentados; guidões retos, para dar mais estabilidade; quadros robustos e reforçados; uma relação maior de marchas e coroa menor, para pedaladas mais intensas.</p>
        </div>
        <div class="col-md-5">
          <img src="img/imagemm1.jpg" alt="Mulher segurando sua bicicleta no alto, olhando para o horizonte no alto de um morro." class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading corletra">Locomoção, conforto & economia. <span class="corletra2">Lucrando saúde...</span></h2>
          <p class="lead corletra2">Ao ter uma rotina de pedalada, os seus músculos são capazes de se desenvolver melhor, principalmente porque, nesse exercício, as pernas estão em constante movimento. Além disso, pedalar todos os dias te ajuda a perder gordura, ganhar massa e ter músculos mais fortes, como também o fortalecimento do quadril.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="img/imagemm2.jpg" alt="Um casal pedalando junto em nova york." class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading corletra">Dispute, vença, chegue na frente. <span class="corletra2">com elegância...</span></h2>
          <p class="lead corletra2">Ciclismo é uma atividade que envolve a repetição de um movimento e que usa como meio de locomoção a bicicleta. O ciclismo pode ser competitivo, recreativo e também praticado como forma de atividade física, tanto outdoor como indoor (como as aulas de spinning).</p>
        </div>
        <div class="col-md-5">
          <img src="img/imagemm3.jpg" alt="Ciclista profissional em alta velocidade." class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
  
        </div>
      </div>
      <hr class="featurette-divider">
    </div>
  
  
    <div class="video">
      <h1 class="featurette-heading corletra"><strong>Por que comprar no Bikers</strong></h1>
      <iframe width="760" height="515" src="https://www.youtube.com/embed/BHwgXX0Jm7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <span class="corletra2">Video utilizado referente ao canal: <a href="https://www.youtube.com/watch?v=BHwgXX0Jm7E" target="_blank">Disposição</a></span>
    </div>
  
  
  
    <!--Catálogo-->
    <div id="ancora2">
      <hr class="featurette-divider">
    </div>
    <div class="catalogo">
      <h2 class="categorias featurette-heading corletra"><strong>Trilhas</strong></h2>
      <div class="trilhas">
        <div class="card" style="width: 18rem;">
          <img src="img/bike1.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">South Stark Aro 29</h5>
            <p class="card-text">Bicicleta South Stark 2021 Aro 29 Alumínio Freio a disco 24 marchas Câmbio Importado</p>
            <strong>R$ 983.00</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike2.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">V-Brake Status</h5>
            <p class="card-text">Bicicleta Aro 29 Flexus 21 Marchas Freio V-Brake Status Bike, Free Action</p>
            <strong>R$ 615,92</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike3.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">Track & Bikes</h5>
            <p class="card-text">Bicicleta Track & Bikes, Aro 26, 18 marchas, Dupla Suspensão, Preta - tb 300</p>
            <strong>R$ 837,02</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike4.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">Avance</h5>
            <p class="card-text">Bicicleta Aro 29 Avance Aço 21v Shimano Freio A Disco e Suspenção, trocador de marchas</p>
            <strong>R$ 878,75</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
      </div>
  
      <div id="ancora3">
        <hr class="featurette-divider">
      </div>
      <h2 class="categorias featurette-heading corletra"><strong>Dia a Dia</strong></h2>
      <div class="trilhas">
        <div class="card" style="width: 18rem;">
          <img src="img/bike5.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">Athor</h5>
            <p class="card-text">Bicicleta Athor Aro 26 Mtb S/m Classic Masculina Azul - Athor, ideal para uso diário</p>
            <strong>R$ 351,12</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike6.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">CB500</h5>
            <p class="card-text">Bicicleta Colli CB500 Aro 26 18 Marchas Quadro Aço Carbono Freios V-Brake</p>
            <strong>R$ 514,60</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike7.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cairu</h5>
            <p class="card-text">Bicicleta Cairu Masculina Aro 26 21 Marchas Flash Pop Bikeem alumínio com paredes simples</p>
            <strong>R$ 459,92</strong>
            <a href="https://www.americanas.com.br/busca/bicicletas" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike8.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">ULTRA</h5>
            <p class="card-text">ULTRA BIKE Bicicleta Bikes Feminina Aro 26 – 18 Marchas Preto Bicicleta de uso múltiplo</p>
            <strong>R$ 497,90</strong>
            <a href="https://www.amazon.com.br/Bicicleta-Feminina-Preta-Marchas-Ultra/dp/B07YCV21SL/ref=asc_df_B07YCV21SL/?tag=googleshopp00-20&linkCode=df0&hvadid=394341274769&hvpos=&hvnetw=g&hvrand=13798621709453288369&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001644&hvtargid=pla-1634316150230&psc=1" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
      </div>
      <div id="ancora4">
        <hr class="featurette-divider">
      </div>
      <h2 class="categorias featurette-heading corletra"><strong>Premium</strong></h2>
      <div class="trilhas">
        <div class="card" style="width: 18rem;">
          <img src="img/bike9.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">GTS M1</h5>
            <p class="card-text">Bicicleta gts Fat Full aro 26 com 21 marchas Shimano e Freio a disco GTSM1 fat bike full tigger steel</p>
            <strong>R$ 2.631,20</strong>
            <a href="https://www.americanas.com.br/produto/4515765150?epar=bp_pl_00_go_el_pmax_geral&opn=YSMESP&WT.srch=1&aid=61c2097b132c90a786c62581&sid=18180777000140&pid=4515765150&chave=vnzpla_61c2097b132c90a786c62581_18180777000140_4515765150&gclid=EAIaIQobChMI29bSoay39gIVDA-RCh3t0wx6EAQYBSABEgLdrPD_BwE&cor=Preto%20%2F%20Verde&tamanho=17" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike10.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">Retro Beach</h5>
            <p class="card-text">Bicicleta Aro 26 Beach Masculina 7V Aros Aero Folha dupla em Alumínio, Alavanca Gripshigt 7v</p>
            <strong>R$ 791,20</strong>
            <a href="https://www.americanas.com.br/produto/4073117091?epar=bp_pl_00_go_el_pmax_geral&opn=YSMESP&WT.srch=1&gclid=EAIaIQobChMIr9PBkL-39gIVSwSRCh29qAwkEAQYAyABEgKL2fD_BwE&cor=Preto%20%2B%20Marrom" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike11.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sense</h5>
            <p class="card-text">Bicicleta Aro 700 Gravel Sense Versa Comp Você pode ter uma bike para ir trabalhar, outra para aventuras</p>
            <strong>R$ 6.990.00</strong>
            <a href="https://www.google.co.il/search?q=bicicletas+especiais&source=univ&tbm=shop&tbo=u&sa=X&ved=2ahUKEwjJwruQv7f2AhXkHbkGHS7kDgAQ1TV6BQgCEK8B&biw=1536&bih=664&dpr=1.25#spd=12729984732945418383" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="img/bike12.jpg" class="card-img-top" width="200" height="250" alt="...">
          <div class="card-body">
            <h5 class="card-title">RAIDER</h5>
            <p class="card-text">Bicicleta aro29 aluminio RAIDER 24 marchas index freio a disco Bicicleta pré-montada</p>
            <strong>R$ 1.091,22</strong>
            <a href="https://www.decathlon.com.br/bicicleta-29-aluminum-raider-24-marchas-index-freio-a-disco-2144943803/p?aSku=Cor:grafite&utm_source=google&utm_medium=cpc-search&gclid=EAIaIQobChMIr9PBkL-39gIVSwSRCh29qAwkEAQYBiABEgIOG_D_BwE#" target="_blank" class="btn btn-warning">Comprar &raquo;</a>
          </div>
        </div>
      </div>
    </div>
    <!--End Catálogo-->
  
  
    <hr class="featurette-divider">
    <div class="sh-social">
      <ul>
        <li class="sh-item">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
        </li>
        <li class="sh-item">
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li class="sh-item">
          <a href="#"><i class="fa-brands fa-whatsapp"></i></i></a>
        </li>
      </ul>
    </div>
  </main>
    <!-- FOOTER -->
    <footer class="container">
        <div class="row">
          <div class="col-sm-11">
            <div class="footer-copyright text-center py-3">
              <p class="corletra2">Construída por Pedro Henrique CC</p>
              <p class="corletra2">© 2022 Copyright:<a href="https://getbootstrap.com/" target="_blank"> Bootstrap.com</a></p>
            </div>
          </div>
          <div class="col">
            <p class="topo"><a href="#"><button type="button" class="btn btn-outline-warning float-end">Topo</button></a></p>
          </div>
        </div>
    </footer>
</div>
    <script src="../BIKER_PORT/js/bootstrap.bundle.min.js"></script> 
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
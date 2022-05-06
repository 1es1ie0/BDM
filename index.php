<?php include ('./templates/header.php')?>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./assets/vendors/aos/dist/aos.css/aos.css" />
   
   

    <link rel="stylesheet" href="assets/css/style.css">

 

  </head>

  <body>
    
    <div class="container-scroller">
      <div class="main-panel">
        <div class="container">


             <!-- Carrusel feo que no sirve -->
             <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/nacional/noticia1.jpg" class="d-block w-100" alt="1">
      <div class="carousel-caption d-none d-md-block">
      <h3 class="font-weight-600 mt-3">Hidalgo, no tendrá nacionales de beisbol</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut odit eius quasi 
          dolores architecto, mollitia accusantium quisquam blanditiis modi laborum debitis 
          nesciunt omnis, corrupti autem perspiciatis facilis aliquid possimus qui!.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="./assets/images/nacional/noticia2.jpg" class="d-block w-100" alt="2">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="font-weight-600 mt-3">Jalisco refuerza estrategias con instancias nacionales para el crecimiento agropecuario</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi inventore atque officiis quis quo. Ipsum quia labore eius 
          cum. Minima maxime id dolore dignissimos deserunt voluptatum qui quas eaque nisi.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="./assets/images/nacional/noticia3.jpg" class="d-block w-100" alt="3">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="font-weight-600 mt-3">Presidenta del Senado llama a maximizar los bienes nacionales para beneficio de las y los mexicanos</h5>   
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi inventore atque officiis quis quo. Ipsum quia labore eius 
          cum. Minima maxime id dolore dignissimos deserunt voluptatum qui quas eaque nisi.</p>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        

            <!-- fin Carrusel feo que no sirve -->

            
          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">Noticias</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <img src="./assets/images/nacional/noticia2.jpg"class="img-fluid"/>
                  <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                </div>
                <h5 class="font-weight-600 mt-3">Jalisco refuerza estrategias con instancias nacionales para el crecimiento agropecuario</h5>

                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
               
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <img src="./assets/images/politica/noticia1.jpg" class="img-fluid" />
                  <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                </div>
                <h5 class="font-weight-600 mt-3">Ataques de AMLO a prensa son irresponsabilidad política: Artículo 19 sobre Loret de Mola</h5>

                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <img src="./assets/images/salud/noticia2.jpg"class="img-fluid"/>
                  <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                </div>
                <h5 class="font-weight-600 mt-3">La OMS aseguró que la fase aguda de la pandemia podría terminar a mediados de año si el 70% de la población es vacunada </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
               
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <img src="./assets/images/negocios/noticia2.jpg"class="img-fluid"/>
                  <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                </div>
                <h5 class="font-weight-600 mt-3">¿Por qué Citi vende Banamex?</h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
              
              </div>
            </div>
          </div>
          <div class="editors-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Noticias Populares</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <img src="./assets/images/deportes/noticia2.jpg"class="img-fluid"/>
                  <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                </div>
                <h2 class="font-weight-600 mt-3">CF Monterrey vuelve a México tras Mundial de Clubes </h2>

                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type
                  and
                </p>
              </div>
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/espectaculos/noticia3.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                     <h5 class="font-weight-600 mt-3">Adele pospone indefinidamente su espectáculo en Las Vegas por el coronavirus</h5>

                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/salud/noticia5.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">¿Cuál es el vínculo entre la hipertensión arterial y la diabetes?</h5>

                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/salud/noticia3.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">Entra en vigor la nueva Clasificación Internacional de Enfermedades (CIE-11) de la OMS</h5>

                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/espectaculos/noticia4.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">Bailando por un sueño podría regresar a la pantalla chica con nueva conductora</h5>

                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">También te podria interesar</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/espectaculos/espectaculos.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h6 class="font-weight-600 mt-3">Ejemplo noticia</h6>

                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/negocios/negocios.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h6 class="font-weight-600 mt-3">Ejemplo noticia</h6>

                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/politica/politica.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h6 class="font-weight-600 mt-3">Ejemplo noticia</h6>

                  </div>
                </div>
                <div class="row mt-3">
                <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/negocios/negocios.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h6 class="font-weight-600 mt-3">Ejemplo noticia</h6>

                  </div>
                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/espectaculos/espectaculos.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h6 class="font-weight-600 mt-3">Ejemplo noticia</h6>

                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <img src="./assets/images/salud/salud.jpg"class="img-fluid"/>
                      <span onclick="location.href='./noticia.php'" class="thumb-title">Ver nota</span>
                    </div>
                    <h6 class="font-weight-600 mt-3">Ejemplo noticia</h6>

                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="position-relative mb-3">
                  <img   src="assets/images/logofondo.jpg"class="img-fluid" />
                  <div class="video-thumb text-muted">
                    <span><i class="mdi mdi-menu-right"></i></span>Anuncio
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Ultimas noticias</h3>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                    <h5 class="font-weight-600 mt-3">Ejemplo noticia</h5>

                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">Fecha de publicacion</span>
                       
                       
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                    <h5 class="font-weight-600 mt-3">Ejemplo noticia</h5>

                      <p class="text-color m-0 d-flex align-items-center">
                      <span class="fs-10 mr-1">Fecha de publicacion</span>
                        
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                    <h5 class="font-weight-600 mt-3">Ejemplo noticia</h5>

                      <p class="text-color m-0 d-flex align-items-center">
                      <span class="fs-10 mr-1">Fecha de publicacion</span>
                       
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="pt-4">
                    <h5 class="font-weight-600 mt-3">Ejemplo noticia</h5>

                      <p class="text-color m-0 d-flex align-items-center">
                      <span class="fs-10 mr-1">Fecha de publicacion</span>
                    
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>



    <script src="./assets/js/demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>




<?php include ('./templates/footer.php')?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    

    <!-- imported links -->
    <script type="text/javascript" src="https://kit.fontawesome.com/526f1482d0.js" 
    crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous">


  </head>
  <body>
      <!-- navbar -->
    <div class="nav-container">
    <nav class="navigation-bar">
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">FOODEA</span>
        <i class="bx bx-bot box-icon"></i>
        <!-- SAMPLE LOGO -->
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Test Tite</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-user icon">
                  <span class="link"> :NAME: </span>
                </i>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-history icon"></i>
                <span class="link">Visit History</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link"> Favorites</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">FAQ's</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Support</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>

    <!-- end navbar -->

    <!-- card content -->

    <div class="overall container">
    <div class="card1 container rounded-pill text-center my-5 ">
      <div class="text-center border-0">
          <div class="card-body">
              <div class="card-title text-center">
                  <h4 class="text-justify">lalagay wanted picture ng kidnapper</h4>
              </div>
          </div>
      </div>
    </div>

  <!-- categories carousel -->

    <div class="container my-5">
      <h1 class="fw-bold display-1 mb-5 rounded-pill"> <span class="text-danger">Drinks</span></h1>
      <div class="col-12 m-auto">
          <div class="owl-carousel owl-theme">
              <div class="item"> 
                  <div class="card border-0 shadow"  style="width:8rem;">
                      <div class="card-title text-center">
                        <i class="mr-2 fa-solid fa-thumbs-up"></i><h4>Coffee</h4>
                      </div>  
                  </div>
              </div>
              <div class="item mb-1"> 
                  <div class="card border-0 shadow" style="width:8rem;">
                      <div class="card-title text-center">
                          <i class="mr-2 fa-solid fa-thumbs-up"></i><h4>Tea</h4>
                      </div>  
                  </div>
              </div>
              <div class="item mb-1"> 
                <div class="card border-0 shadow" style="width:8rem;">
                    <div class="card-title text-center">
                        <i class="mr-2 fa-solid fa-thumbs-up"></i><h4>MilkTea</h4>
                    </div>  
                </div>
            </div>
              
          </div>
      </div>
  </div>
  <!-- item carousel -->
  <div class="container my-5">
        
    <h1 class="fw-bold display-1 mb-5"> <span class="text-danger">Owl</span></h1>
    <div class="row">
        <div class="col-12 xs-auto">
            <div class="owl-carousel owl-theme">
                <div class="item mb-1">
                    <div class="card border-0 shadow">
                        <img src="/img/hamburger.png" alt="" class="food-item card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Owl Carousel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mb-4">
                    <div class="card border-0 shadow">
                        <img src="/img/hamburg.png" alt="" class="food-item card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4 class="text-justify">Owl Carousel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mb-4">
                  <div class="card border-0 shadow">
                      <img src="/img/hamburger.png" alt="" class="food-item card-img-top">
                      <div class="card-body">
                          <div class="card-title text-center">
                              <h4 class="text-justify">Owl Carousel</h4>
                          </div>
                      </div>
                  </div>
              </div>

               

            </div>
        </div>
    </div> 
</div>
  




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            autoWidth: true,
            
            responsive: {
                0: {
                    items: 1.5
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    </script>
  </body>
</html>
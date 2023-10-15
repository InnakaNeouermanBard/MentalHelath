<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Link Css -->
    <link rel="stylesheet" href="{{ asset('./asset/css/style.css') }}">

    <!--Link Font Google  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;0,700;1,500&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Link Boostrap version 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Link Icon Boostrap version 5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center">
    <div class="container-md">
        <a class="navbar-brand text-light  "href="#">Mental Health | </a>
        <!-- <img src="assets/img/logo.png" alt="MentalHealth"  width="40"> -->

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-4" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-4" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-4" href="{{ route('edukasi') }}">Edukasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active me-4" href="#">Kontak Kami</a>
          </li>
        
   
          
      </div>
    </div>
  </nav>  
   <!-- Navbar End -->
<!-- Main Start -->
<main>
  <section class="berita">
    <div class="container">
      <h3 class="text-light">Berita Tentang Kesehatan Mental Di Indonesia </h3>
      <div class="row">
        
        @foreach ($news as $newsss)
        <div class="col-md-4 mt-3">
          <div class="card">
            <div class="card-body">
              <a href="">
                
                <img src="https://akcdn.detik.net.id/visual/2022/11/17/ilustrasi-kesehatan-mental_169.jpeg?w=650&q=90"
                class="img-thumbnail" alt="">
                <h4>{{ $newsss->judul_berita }}</h4>
                <p>{{ $newsss->isi_berita }}</p>
              </a>
              
            </div>
          </div>
        </div>
        @endforeach
                
                {{-- <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="">
    
                                <img src="https://akcdn.detik.net.id/visual/2022/11/17/ilustrasi-kesehatan-mental_169.jpeg?w=650&q=90"
                                class="img-thumbnail" alt="">
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut blanditiis quos dignissimos, veniam odio dolore.</p>
                            </a>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="">
    
                                <img src="https://akcdn.detik.net.id/visual/2022/11/17/ilustrasi-kesehatan-mental_169.jpeg?w=650&q=90"
                                class="img-thumbnail" alt="">
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut blanditiis quos dignissimos, veniam odio dolore.</p>
                            </a>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <a href="">
    
                                <img src="https://akcdn.detik.net.id/visual/2022/11/17/ilustrasi-kesehatan-mental_169.jpeg?w=650&q=90"
                                class="img-thumbnail" alt="">
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut blanditiis quos dignissimos, veniam odio dolore.</p>
                            </a>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <a href="">
    
                                <img src="https://akcdn.detik.net.id/visual/2022/11/17/ilustrasi-kesehatan-mental_169.jpeg?w=650&q=90"
                                class="img-thumbnail" alt="">
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut blanditiis quos dignissimos, veniam odio dolore.</p>
                            </a>
    
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <a href="">
    
                                <img src="https://akcdn.detik.net.id/visual/2022/11/17/ilustrasi-kesehatan-mental_169.jpeg?w=650&q=90"
                                class="img-thumbnail" alt="">
                                <h4>Lorem, ipsum dolor sit amet consectetur adipisicing.</h4>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut blanditiis quos dignissimos, veniam odio dolore.</p>
                            </a>

    
                        </div>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </section>
</main>


<!-- Main End -->


  <!-- Footer Start -->
  <footer
  class="mt-5 text-center text-lg-start text-white"
  style="background-color: rgba(39, 138, 250, 0.884);
  "
  >
<!-- Grid container -->
<div class="container">
<!-- Section: Links -->
<section class="">
<!--Grid row--> 
<div class="row">
  <!-- Grid column -->
  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">
      Mental Health
    </h6>
    <p>
      Here you can use rows and columns to organize your footer
      content. Lorem ipsum dolor sit amet, consectetur adipisicing
      elit.
    </p>
  </div> 
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none" />



  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">
      My Team
    </h6>
    <p>
      <a class="text-white">Hasby Aiman</a>
    </p>
    <p>
      <a class="text-white">Innaka Nourman Bard</a>
    </p>
    <p>
      <a class="text-white">Ridwan Fauzy Pratapa</a>
    </p>
  </div>

  <!-- Grid column -->
  <hr class="w-100 clearfix d-md-none" />

   <!-- Grid column -->
   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Feuture</h6>
    <p>
      <a class="text-white">Beranda</a>
    </p>
    <p>
      <a class="text-white">Berita</a>
    </p>
    <p>
      <a class="text-white">Edukasi</a>
    </p>
    <p>
      <a class="text-white">Kontak Kami</a>
    </p>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
    <p><i class="bi bi-house me-2"></i> Purwokerto Selatan, Jawa Tengah</p> 
    <p><i class="bi bi-envelope me-2"></i> hasbyaimanzzz123@gmail.com</p> 
    <p><i class="bi bi-telephone me-2"></i> +62 858 9939 9152</p>
    <p><i class="bi bi-telephone me-2"></i> +62 895 1228 6465</p>
    <p><i class="bi bi-telephone me-2"></i> +62 895 3862 97138</p>
  </div>
  <!-- Grid column -->
</div>
<!--Grid row-->
</section>
<!-- Section: Links -->

<hr class="my-3">

<!-- Section: Copyright -->
<section class="p-3 pt-0">
<div class="row d-flex align-items-center">
  <!-- Grid column -->
  <div class="col-md-7 col-lg-8 text-center text-md-start">
    <!-- Copyright -->
    <div class="p-3">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >Kelas Divergent</a
        >
    </div>
    <!-- Copyright -->
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
    <!-- Facebook -->
    <a
       class="btn btn-outline-light btn-floating me-3"
       class="text-white"
       role="button"
       ><i class="bi bi-geo-alt"></i
      ></a>

    <!-- Twitter -->
    <a
       class="btn btn-outline-light btn-floating me-3"
       class="text-white"
       role="button"
       ><i class="bi bi-twitter-x"></i
      ></a>

    <!-- Google -->
    <a
       class="btn btn-outline-light btn-floating me-3"
       class="text-white"
       role="button"
       ><i class="bi bi-google"></i
      ></a>

    <!-- Instagram -->
    <a
       class="btn btn-outline-light btn-floating me-3"
       class="text-white"
       role="button"
       ><i class="bi bi-instagram"></i
      ></a>
  </div>
  <!-- Grid column -->
</div>
</section>
<!-- Section: Copyright -->
</div>
<!-- Grid container -->
  </footer>
  <!-- Footer End -->


    
    
    
    <!-- Script Boostrap Version 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
  <style>

    /*kinopya ko lang sa css taypo pinaste dito muna wala ako dinagdag*/

    #hero {
      width: 100%;
      min-height: 100vh;
      background: url("image/bg.png") top center;
      background-size: cover;
      position: relative;
      z-index: 1;
    }

    #hero:before {
      content: "";
      background: rgba(0, 0, 0, 0.6);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    #hero .container {
      position: relative;
      padding-top: 74px;
      text-align: center;
    }

    #hero h2 {
      color: rgba(255, 255, 255, 0.9);
      margin: 20px 0 10px 0;
      font-size: 24px;
      letter-spacing: 2px;
      font-weight: bold;
    }

    @media (min-width: 1024px) {
      #hero {
        background-attachment: fixed;
      }
    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }

      #hero h2 {
        font-size: 20px;
        line-height: 24px;
      }
    }

    .btn-danger {
      margin-top: 20px;
      color: whitesmoke;
      background-color: #da1e17;
      padding: 10px 30px 10px 30px;
      width: auto;
      letter-spacing: 2px;
    }

    .btn-danger:hover {
      background-color: whitesmoke;
      color: #da1e17;
    }

    .gallery {
      margin: 0 5% 0 5%;
    }

    .section-title h2 {
      margin: 60px 0 50px 0;
      justify-content: center;
      text-align: center;
      font-size: 60px;
      font-weight: bold;
      text-shadow: 0 0 10px #da1e17, 0 0 13px #da1e17;
      letter-spacing: 7px;
    }

    .gallery .gallery-item {
      margin-bottom: 30px;
    }

    .gallery .gallery-wrap {
      transition: 0.3s;
      position: relative;
      overflow: hidden;
      z-index: 1;
      background: rgba(21, 21, 21, 0.6);
    }

    .gallery .gallery-wrap::before {
      content: "";
      background: rgba(21, 21, 21, 0.6);
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      transition: all ease-in-out 0.3s;
      z-index: 2;
      opacity: 0;
    }

    .gallery .gallery-wrap img {
      transition: all ease-in-out 0.3s;
    }

    .gallery .gallery-wrap .gallery-info {
      opacity: 0;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 3;
      transition: all ease-in-out 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: flex-start;
      padding: 20px;
    }

    .gallery .gallery-wrap .gallery-info h4 {
      font-size: 20px;
      color: #fff;
      font-weight: 600;
    }

    .gallery .gallery-wrap .gallery-info p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 14px;
      text-transform: uppercase;
      padding: 0;
      margin: 0;
      font-style: italic;
    }

    .gallery .gallery-wrap .gallery-links {
      text-align: center;
      z-index: 4;
    }

    .gallery .gallery-wrap .gallery-links a {
      color: #fff;
      margin: 0 5px 0 0;
      font-size: 28px;
      display: inline-block;
      transition: 0.3s;
    }

    .gallery .gallery-wrap .gallery-links a:hover {
      color: #ffc451;
    }

    .gallery .gallery-wrap:hover::before {
      opacity: 1;
    }

    .gallery .gallery-wrap:hover img {
      transform: scale(1.2);
    }

    .gallery .gallery-wrap:hover .gallery-info {
      opacity: 1;
    }

    .gallery .btn-danger {
      justify-content: center;
      margin: auto;
      margin-bottom: 60px;
    }
  </style>
</head>

<body>
  <?php
  session_start();
  include "navbar.php";
  ?>
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-lg-12">
          <div data-aos="fade-left" data-aos-delay="100">
            <img src="image/hero-title.png" class="img-fluid" alt="Toxz Tattoo & Body Piercing">
          </div>
          <h2 class="col-lg-12">WANT TO BOOK AN APPOINTMENT?</h2>
          
          <!--para mawala yung signup button pag nakalogin na-->
          <?php if (isset($_SESSION['fname'])) {  ?>
            <li class="nav-item dropdown">
              <?php if (isset($_SESSION['fname'])) ?>

            <?php } else { ?>
              <button class="btn btn-danger btn-sm" onclick="window.location.href = 'registration.php';">SIGN UP NOW</button>
            <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>TATTOO</h2>
      </div>

      <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="image/tattoo/tattoo1.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Tattoo</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-1.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-web">
          <div class="gallery-wrap">
            <img src="image/tattoo/tattoo2.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Tattoo</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-2.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="image/tattoo/tattoo3.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Tattoo</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-3.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-card">
          <div class="gallery-wrap">
            <img src="image/tattoo/tattoo4.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Tattoo</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-4.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-web">
          <div class="gallery-wrap">
            <img src="image/tattoo/tattoo5.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Tattoo</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-5.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="image/tattoo/tattoo6.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Tattoo</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-6.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <button class="btn btn-danger" onclick="window.location.href = 'tattoo.php';">SEE FULL GALLERY</button>

      </div>

      <div class="section-title">
        <h2>PIERCING</h2>
      </div>

      <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="image/piercing/piercing1.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Piercing</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-1.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-web">
          <div class="gallery-wrap">
            <img src="image/piercing/piercing2.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Piercing</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-2.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="image/piercing/piercing3.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Piercing</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-3.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-card">
          <div class="gallery-wrap">
            <img src="image/piercing/piercing4.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Piercing</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-4.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-web">
          <div class="gallery-wrap">
            <img src="image/piercing/piercing5.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Piercing</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-5.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="image/piercing/piercing6.jpg" class="img-fluid" alt="">
            <div class="gallery-info">
              <p>Piercing</p>
              <div class="gallery-links">
                <a href="assets/img/gallery/gallery-6.jpg" data-gallery="galleryGallery" class="gallery-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <button class="btn btn-danger" onclick="window.location.href = 'tattoo.php';">SEE FULL GALLERY</button>

      </div>
    </div>
  </section>







</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
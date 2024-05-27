<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Home</title>
  <style>

    
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
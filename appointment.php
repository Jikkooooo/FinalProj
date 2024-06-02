<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Schedule Your Appointment</title>
        <link rel="icon" type="image/x-icon" href="image/toxzlogo.png">
    </head>

    <body>
        <?php
        session_start();
        include "header.php";
        ?>
        <section id="contact" class="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 align-self-center mt-4 mb-2">
                        <img src="image/appointment-title.png" class="img-fluid" alt="Schedule Your Appointment">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="fa fa-location-arrow" aria-hidden="true" id="location-icon"></i>
                                <h4>LOCATION</h4>
                                <p>Guadalupe Commercial Complex, Edsa-Guadalupe, Makati City</p>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope" aria-hidden="true" id="email-icon"></i>
                                <h4>EMAIL</h4>
                                <p>toxztat2@gmail.com</p>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone" aria-hidden="true" id="phone-icon"></i>
                                <h4>CALL</h4>
                                <p>+63  927 737 4100</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.3948803017703!2d121.04476741866769!3d14.566021526861912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c85a119cc805%3A0xe48781374ea9d702!2sGuadalupe%20Commercial%20Complex!5e0!3m2!1sen!2sph!4v1717008124048!5m2!1sen!2sph"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" id="input-section">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group mt-1">
                                <label for="service">Choose a service:</label>
                                <select class="form-control custom-select" id="service" name="service">
                                    <option value="Tattoo">Tattoo</option>
                                    <option value="Piercing">Piercing</option>
                                    <option value="Tattoo Consultation">Tattoo Consultation</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="date">Appointment Date:</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="time">Appointment Time:</label>
                                    <input type="time" class="form-control" name="time" id="time" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Additional Message:</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-danger" onclick="window.location.href = '';">BOOK APPOINTMENT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <button onclick="topFunction()" id="back-to-top" title="Go to top">Top</button>
        <?php
        include 'footer.php';
        ?>


    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d3c6e66500.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="details_style.css">

    <!--nav bar-->
    <?php
    require_once('m_navbar.php');
    ?>

    <!--photo div-->
    <div class="container">
        <div class="row py-5">
            <div class="col-4">
                <img src="imgs/raya_profile.jpg" alt="profile_image">
            </div>
            <div class="col-8 color">
                <h3 class="bp">Raya and the last dragon</h3><br><br>
                <p class="bp">Cast : Awkwafina as Sisu, Kelly Marie Tran as Raya</p>
                <p class="bp">Genre : Fantasty, Adventure, Animation</p>
                <p class="bp">Duration : 1 hr 57 mins</p>
            </div>
        </div>
    </div>


    <!--container-->
    <div class="container">
        <!--about movie-->
        <div class="row py-5">
            <div class="col-12 col-lg-8 color">
                <h3>About Movie</h3><br><br>
                <p> Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. But when
                    sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save
                    humanity. Now, 500 years later, those same monsters have returned and it's up to a lone warrior,
                    Raya, to
                    track down the last dragon in order to finally stop the Druun for good. However, along her journey,
                    she'll
                    learn that it'll take more than dragon magic to save the world--it's going to take trust as well.
                </p>
            </div>

            <!--book button-->
            <div class="col-12 col-lg-4 booking_button">
                <a href="#" class="btn btn-danger float-end booking_inside">
                    <div><i class="fas fa-ticket-alt fa-lg"></i>
                        <span>Book Now</span>
                    </div>
                </a>
            </div>
        </div>

        <!--link-->
        <div class="row">
            <div class="col text-center contain">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/1VIZ89FEjYI" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!--coming soon-->
        <div class="row py-5">
            <div class="col">
                <h3>Coming soon</h3>
            </div>
        </div>

        <!--moive list-->
        <div class="row text-center">
            <div class="col-6 col-lg-3 imghov">
                <span class="position-relative">
                    <img src="imgs/blackpanther.jpg" alt="sample_img">
                    <a href="#" class="btn btn-outline-danger position-absolute top-50 start-50 translate-middle hidden">More</a>
                </span>
            </div>
            <div class="col-6 col-lg-3 imghov">
                <span class="position-relative">
                    <img src="imgs/inception.jpg" alt="sample_img">
                    <a href="#" class="btn btn-outline-danger position-absolute top-50 start-50 translate-middle hidden">More</a>
                </span>
            </div>
            <div class="col-6 col-lg-3 imghov">
                <span class="position-relative">
                    <img src="imgs/interstellar.jpg" alt="sample_img">
                    <a href="#" class="btn btn-outline-danger position-absolute top-50 start-50 translate-middle hidden">More</a>
                </span>
            </div>
            <div class="col-6 col-lg-3  imghov">
                <span class="position-relative">
                    <img src="imgs/yourname.jpg" alt="sample_img">
                    <a href="#" class="btn btn-outline-danger position-absolute top-50 start-50 translate-middle hidden">More</a>
                </span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

</html>
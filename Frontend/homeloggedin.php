<?php
   require("./Movie.php");


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenew.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700;800&family=Sen:wght@700&display=swap" rel="stylesheet">
    <title>MOVIELANE</title>
    <script src="https://kit.fontawesome.com/dc49a974a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .trailer {
            margin-bottom: 20px;
        }
        .trailer img {
            width: 100px;
            height: auto;
            margin-bottom: 10px;
        }
        .trailer p {
            margin-bottom: 5px;
        }
        .showTrailer {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .bookTickets {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .trailer-container {
            display: none;
            margin-top: 10px;
        }
        .trailer-container iframe {
            width: 100%;
            height: 300px;
            border: none;
        }
        .movie-title {
    color: blue;
}
    </style>

</head>
<body>
<div class="background-animation"></div>

<div class="navbar">
    <div class="navbar-container">
        <div class="logo-container"><h1 class="logo">MOVIELANE </h1></div>

        <div>
            <a href="./search.html" class="my-btn" >
                <i class="fa fa-search"></i> Search Movie by Title
            </a>
        </div>

        <div class="nav-buttons">
        <a href="/loginn.php"> <button id="loginBtn">LOGIN</a></button>
<a href="/creaAccount.html"> <button id="registerBtn">REGISTER</a></button>

            <button id="editProfileBtn" onclick="window.location.href='edit_profile.php'">
                <i class="fas fa-user-edit"></i> Edit Profile
            </button>

        </div>
        <div class="toggle">
            <i class="fa-solid fa-moon toggle-icon"></i>
            <i class="fa-solid fa-sun toggle-icon"></i>
            <div class="toggle-ball"></div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="flex-box">
            <div id="myCarousel" class="carousel slide" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/qQlr9-rF32A">
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/gYA5WOFhd-Y">
                        </iframe>
                    </div>

                    <div class="item">
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/ss2KvK-w6w8">
                        </iframe>
                    </div>
                </div>

                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>
</div>
<div class="movie-list-container">
            <div class="movie-list-header">
                <h1 class="movie-list-title">Now Playing</h1>
                <i class="arrow fa-solid fa-chevron-right"></i>
            </div>



            <section class="trailerList">
    <?php

    if (!empty($movieInfs)) {

        foreach ($movieInfs as $movieInf) {
            if ($movieInf['comingSoon'] == 0) {
                echo "<div class=\"trailer\" style=\"display: inline-block; margin-right: 20px;\">";
                echo "<img src=\"" . $movieInf['picture'] . "\" alt=\"" . $movieInf['title'] . "\" style=\"width: 300px; height: 300px;\">";
                echo "<p class='movie-title'>" . $movieInf['title'] . "</p>";
                echo "<p class='rating'>Rating: " . $movieInf['reviews'] . "</p>";
                echo "<button type='submit' class='bookTickets'>Book Tickets</button>";
                echo "<button class='showTrailer' onclick=\"toggleTrailer(this, '" . $movieInf['trailer'] . "')\">Watch Trailer</button>";
                echo "<div class='trailer-container'>";
                echo "<iframe width='400' height='800' src='" . $movieInf['trailer'] . "'></iframe>";
                echo "</div>";
                echo "</div>";
            }
        }
    } else {
        echo "<p>No movies available.</p>";
    }
    ?>
</section>


<script>
    function toggleTrailer(button, trailerUrl) {
        var trailerContainer = button.nextElementSibling;

        if (trailerContainer.style.display === "none" || trailerContainer.style.display === "") {
            trailerContainer.style.display = "block";
            button.textContent = "Hide Trailer";
        } else {
            trailerContainer.style.display = "none";
            button.textContent = "Watch Trailer";
        }
    }
</script>
<div class="movie-list-header">
                <h1 class="movie-list-title">Coming Soon</h1>
                <i class="arrow fa-solid fa-chevron-right"></i>
            </div>



            <section class="trailerList">
    <?php

    if (!empty($movieInfs)) {

        foreach ($movieInfs as $movieInf) {
            if ($movieInf['comingSoon'] == 1) {
            echo "<div class=\"trailer\" style=\"display: inline-block; margin-right: 20px;\">";
            echo "<img src=\"" . $movieInf['picture'] . "\" alt=\"" . $movieInf['title'] . "\" style=\"width: 300px; height: 300px;\">";
            echo "<p class='movie-title'>" . $movieInf['title'] . "</p>";
            echo "<p class='rating'> " . $movieInf['reviews'] . "</p>";
            echo "<button type='submit' class='bookTickets'>Book Tickets</button>";
            echo "<button class='showTrailer' onclick=\"toggleTrailer(this, '" . $movieInf['trailer'] . "')\">Watch Trailer</button>";
            echo "<div class='trailer-container'>";
            echo "<iframe width='400' height='800' src='" . $movieInf['trailer'] . "'></iframe>";
            echo "</div>";
            echo "</div>";
        }
    }
 } else {
        echo "<p>No movies available.</p>";

}
    ?>
</section>


<script>
    function toggleTrailer(button, trailerUrl) {
        var trailerContainer = button.nextElementSibling;

        if (trailerContainer.style.display === "none" || trailerContainer.style.display === "") {
            trailerContainer.style.display = "block";
            button.textContent = "Hide Trailer";
        } else {
            trailerContainer.style.display = "none";
            button.textContent = "Watch Trailer";
        }
    }
</script>
</div>




        <footer class="copyright">
            <p>&copy; SEPROJECT <span id="ano"></span></p>
        </footer>
    </div>
    <script src="index.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-one').owlCarousel({
            stagePadding: 280,
            loop: true,
            margin: 20,
            nav: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 40,
                    nav: false
                },
                480: {
                    items: 1,
                    stagePadding: 60,
                    nav: true
                },
                667: {
                    items: 1,
                    stagePadding: 80,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true
                }
            }
        })
    })
</script>
<script>


        const year = document.querySelector('#ano');
        ano.innerHTML = new Date().getFullYear();
    </script>

</body>
</html>
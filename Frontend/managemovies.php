<?php
   
   session_start([
    'cookie_lifetime' => 0, 
    'gc_maxlifetime' => 3600 
]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Manage Movies</title>
    <style>
.movielane {
    color: red; 
}

.navbar-nav {
    margin-left: auto; 
}

.nav-item {
    margin-right: 15px; 
}

h2 {
            text-align: center; 
            color: red;
        }
        body {

            background-color: cornsilk ;
        }
        .navbar {
            
            margin: 0 auto;
            color: black;
        }
        .h1 {
            text-align: center;
            margin-top: 50px;
            color: greenyellow;
        }
        .middle-content {
            margin-top: 50px;
            display: none;
        }
        .middle-content input[type="button"] {
            margin: 10px;
        }
        .middle-content:first-child {
            color:red;
        }
       
        .bottom-content {
            margin-top: 20px;
            text-align: center;
            display: none;
        }
        .bottom-content input[type="text"] {
            margin: 5px;
        }
        .bottom-content input[type="submit"],
        .bottom-content input[type="button"] {
            margin-top: 10px;
            margin-right: 5px;
        }
        select {
            margin-top: 5px;
            margin-bottom: 10px;
        }
        .error-message {
            text-align: center;
            font-size: 24px;
            color: red;
            margin-top: 20px; 
        }
        .profile-icon {
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .profile-dropdown:hover .dropdown-content {
            display: block;
        }
        
    </style>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="color: yellow;">
    
        <a class="navbar-brand movielane" href="#">
            <img src="/Frontend/img/lo.png" alt="Logo" style="width: 100px; height: 45px;" class="logo">
            <a style="color: greenyellow;">MOVIELANE</a>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" onclick="showManageUsers()">MANAGE USERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showManageMovies()">MANAGE MOVIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showManagePromotions()">MANAGE PROMOTIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showManagePrices()">MANAGE PRICES</a>
                </li>
            </ul>
        
    


            <?php
            
           
            if (isset($_SESSION['user_id'])) {
               
                echo '<a href="/editProfile.html"><button id="editProfBtn">Edit Profile</button></a>';
                echo '<a href="logout.php"><button id="logoutBtn">Logout</button></a>';
            } else {
                
                echo '<a href="/loginn.php"><button id="loginBtn">LOGIN</button></a>';
                echo '<a href="/creaAccount.html"><button id="registerBtn">REGISTER</button></a>';
            }
            ?>
             
            </div>
    </div>
</nav>
<br/>
<br/>
<h2 style:"justify:center"> WELCOME, ADMIN!</h2><br>

</body>
</html>

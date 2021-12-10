<?php
    $pageTitle = 'Admin Dashboard - Tree cutting service';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    $exampleMail = 'Please enter a valid e-mail. Eg: tcs@mail.com';
    $phoneNumber = '0200000000';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="./assets/dashboard.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <div class="navigation">
            <a href="#" class="home-link">Home</a>
            <div class="social-links">
                <a href="https:///www.facebook.com/tree-cutting-service">facebook <img src="../commons/img/social/iconmonstr-facebook-3.svg" alt=""/></a>
                <a href="https://www.instagram.com/tree-cutting-service">instagram <img src="../commons/img/social/iconmonstr-instagram-11.svg" alt=""/></a>
                <a href="https://www.twitter.com/tree-cutting-service">twitter <img src="../commons/img/social/iconmonstr-twitter-3.svg" alt=""/></a>
            </div>
        </div>
    </nav>
    <main>
        <h2 class="welcome-message">Welcome to the <?php echo $pageTitle?></h2>
        
        <div class="dashboard-items">
            <div class="item"><a href="./customers" class="item-link">Customers<img src="../commons/img/icons/iconmonstr-customer-1.svg" alt=""/></a></div> 
            <div class="item"><a href="./employees" class="item-link">Employees<img src="../commons/img/icons/iconmonstr-user-30.svg" alt=""/></a></div> 
            <div class="item"><a href="./equipments" class="item-link">Equipments<img src="../commons/img/icons/iconmonstr-tools-10.svg" alt=""/></a></div>
            <div class="item"><a href="./services" class="item-link">Services<img src="../commons/img/icons/iconmonstr-tools-2.svg" alt=""/></a></div>
            <div class="item"><a href="./repairs" class="item-link">Repairs<img src="../commons/img/icons/iconmonstr-wrench-24.svg" alt=""/></a></div> 
            <div class="item"><a href="./others" class="item-link">Others<img src="../commons/img/icons/iconmonstr-layer-22.svg" alt=""/></a></div>
            <div class="item" style="width: 200px; margin-left: 60px;"><a href="../../tree-cutting" class="item-link">Back to corporate site<img src="../commons/img/icons/iconmonstr-undo-6.svg" alt=""/></a></div>
        </div>
        
    </main>
</body>
</html>

<!--credits-----
icons by iconmonstr.com
Photo by Karolina Grabowska from Pexels
Photo by Khari Hayden from Pexels
-->
<?php
    $pageTitle = 'Admin Dashboard - Others';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    //Table headers
    $customer_id ="ID";
    $customer_firstname = "FIRST NAME";
    $customer_lastname = "LAST NAME";
    $customer_othernames = "OTHER NAMES";
    $customer_address = "ADDRESS";
    $customer_country = "COUNTRY";
    $customer_state = "STATE / REGION/ PROVINCE";

    $total_some_val = 104;
    $some_news_description ="New description here...";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/others.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <?php include('../../commons/navigation.php') ?>

        <div class="dashboard-summary">
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Customers<img src="../../commons/img/icons/iconmonstr-customer-1.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Employees<img src="../../commons/img/icons/iconmonstr-customer-1.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Equipments<img src="../../commons/img/icons/iconmonstr-gear-thin.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Repairs<img src="../../commons/img/icons/iconmonstr-tools-2.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Services<img src="../../commons/img/icons/iconmonstr-bookmark-34.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
        </div>
    </nav>
    <main>
        <h2 class="welcome-message">News pane...</h2>
        <div class="dashboard-summary">
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Some news item 1<img src="../../commons/img/icons/iconmonstr-newspaper-3.svg" alt=""/></span><h4><?php echo $some_news_description ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> newly added today">Some news item 2<img src="../../commons/img/icons/iconmonstr-newspaper-3.svg" alt=""/></span><h4><?php echo $some_news_description ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> countries reached">Some news item 3<img src="../../commons/img/icons/iconmonstr-newspaper-3.svg" alt=""/></span><h4><?php echo $some_news_description ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Some news item 4<img src="../../commons/img/icons/iconmonstr-newspaper-3.svg" alt=""/></span><h4><?php echo $some_news_description ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Some news item 5<img src="../../commons/img/icons/iconmonstr-newspaper-3.svg" alt=""/></span><h4><?php echo $some_news_description ?></h4></div> 
        </div>
    </main>
</body>
</html>

<!--credits-----
icons by iconmonstr.com
Photo by Karolina Grabowska from Pexels
Photo by Khari Hayden from Pexels
-->
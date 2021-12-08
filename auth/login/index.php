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
    <link rel="stylesheet" type="text/css" href="../../dashboard/assets/login.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div class="login-form-container">
            <h2 class="welcome-message">Admin login here...</h2>
            <img src="../../commons/img/icons/iconmonstr-key-2.svg" alt="login-icon" class="login-ico" id="login-icon"/>
            <form action="">
                <label for="email">Email</label>
                <input name="email" type="email" class="user-name" id="username" placeholder="Kindly enter your user-name or email here" title="Email"/>
                <label for="password">Password</label>
                <input name="password" type="password" class="user-pass" id="password" placeholder="Kindly enter your password here" title="password"/>
                <button type="submit" name="submit" value="submit" class="submit-btn">Login</button>
            </form>
        </div>

    </main>
</body>

</html>
<?php
    $pageTitle = 'Admin Dashboard - Customers';
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

    $total_some_val = 104

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/customers.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <?php include('../../commons/navigation.php') ?>

        <div class="dashboard-summary">
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Customers<img src="../../commons/img/icons/iconmonstr-customer-1.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> newly added today">Newly Added<img src="../../commons/img/icons/iconmonstr-user-25.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> countries reached">Distinct Countries<img src="../../commons/img/icons/iconmonstr-pin-17.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Lowest Age<img src="../../commons/img/icons/iconmonstr-generation-8.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Highest Age<img src="../../commons/img/icons/iconmonstr-generation-13.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
        </div>
    </nav>
    <main>
        <div class="action-navigation">
            <div class="action-button-links">
                <button title="Add new customer"><img src="../../commons/img/icons/add-r.svg" alt="add"></button>
                <button title="Sort - Ascending Order"><img src="../../commons/img/icons/sort-az.svg" alt="sort-asc"></button>
                <button title="Sort - Descending Order"><img src="../../commons/img/icons/sort-za.svg" alt="sort-dsc"></button>
            </div>
        </div>
        <div class="dashboard-activity">
            <table>
                <thead>
                    <tr>
                        <th><?php echo $customer_id ?></th>
                        <th><?php echo $customer_firstname ?></th>
                        <th><?php echo $customer_lastname ?></th>
                        <th><?php echo $customer_othernames ?></th>
                        <th><?php echo $customer_address ?></th>
                        <th><?php echo $customer_country ?></th>
                        <th><?php echo $customer_state ?></th>
                    </tr>   
                </thead>
                <div class="table-body">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>    
                        <tr>
                            <td>4</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>   
                        <tr>
                            <td>5</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>   
                        <tr>
                            <td>7</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>   
                        <tr>
                            <td>9</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Young</td>
                            <td>Man</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                        </tr>   
                    </tbody>  
                </div>             
            </table> 
        </div>
    </main>
</body>
</html>

<!--credits-----
icons by iconmonstr.com
Photo by Karolina Grabowska from Pexels
Photo by Khari Hayden from Pexels
-->
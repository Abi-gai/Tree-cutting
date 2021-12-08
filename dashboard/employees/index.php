<?php
    $pageTitle = 'Admin Dashboard - Employees';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    //Table headers
    $employee_id ="ID";
    $employee_firstname = "FIRST NAME";
    $employee_lastname = "LAST NAME";
    $employee_othernames = "OTHER NAMES";
    $employee_address = "ADDRESS";
    $employee_country = "COUNTRY";
    $employee_state = "STATE / REGION/ PROVINCE";
    $employee_wage = "EMPLOYEE WAGE / HOUR";

    $total_some_val = 104

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/employees.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <?php include('../../commons/navigation.php') ?>

        <div class="dashboard-summary">
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Employees<img src="../../commons/img/icons/iconmonstr-customer-1.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> countries reached">Office Locations<img src="../../commons/img/icons/iconmonstr-pin-17.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Hybrid Employees<img src="../../commons/img/icons/iconmonstr-flip-chart-5.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">In-house Employees<img src="../../commons/img/icons/iconmonstr-flip-chart-2.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
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
                        <th><?php echo $employee_id ?></th>
                        <th><?php echo $employee_firstname ?></th>
                        <th><?php echo $employee_lastname ?></th>
                        <th><?php echo $employee_othernames ?></th>
                        <th><?php echo $employee_address ?></th>
                        <th><?php echo $employee_country ?></th>
                        <th><?php echo $employee_state ?></th>
                        <th><?php echo $employee_wage ?></th>
                    </tr>   
                </thead>
                <div class="table-body">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>Country</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>Country</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>Country</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>Country</td>
                            <td>12, Young Man Boy's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Somefirstname</td>
                            <td>Somelastname</td>
                            <td>Boy</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>Country</td>
                            <td>12, Young Woman girl's Street.</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
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
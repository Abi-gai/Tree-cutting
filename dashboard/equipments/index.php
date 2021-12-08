<?php
    $pageTitle = 'Admin Dashboard - Equipments';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    //Table headers
    $equipments_id ="ID";
    $equipments_name = "EQUIPMENT NAME";
    $equipments_type = "TYPE";
    $equipments_stock = "IN STOCK";

    $total_some_val = 104

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/equipments.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <?php include('../../commons/navigation.php') ?>

        <div class="dashboard-summary">
        <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Equipments<img src="../../commons/img/icons/iconmonstr-gear-thin.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> countries reached">Newly purchased<img src="../../commons/img/icons/iconmonstr-wrench-13.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Partner Organizations<img src="../../commons/img/icons/iconmonstr-folder-22.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Female Procurement Agents<img src="../../commons/img/icons/iconmonstr-generation-12.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Male Procurement Agents<img src="../../commons/img/icons/iconmonstr-generation-11.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
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
                        <th><?php echo $equipments_id ?></th>
                        <th><?php echo $equipments_name ?></th>
                        <th><?php echo $equipments_type ?></th>
                        <th><?php echo $equipments_stock ?></th>
                    </tr>   
                </thead>
                <div class="table-body">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr> 
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr> 
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Some Name</td>
                            <td>Heavy duty</td>
                            <td>123</td>
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
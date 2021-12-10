<?php
    $pageTitle = 'Admin Dashboard - Repairs';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    //Table headers
    $repair_id ="ID";
    $repair_title= "TITLE";
    $customer_id = "CUSTOMER ID";
    $repair_address = "ADDRESS";
    $repair_description = "REPAIR DESCRIPTION";
    $repair_status = "STATUS";
    $repair_charge = "CHARGE";

    $total_some_val = 104

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/repairs.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <?php include('../../commons/navigation.php') ?>

        <div class="dashboard-summary">
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Repairs<img src="../../commons/img/icons/iconmonstr-tools-2.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> newly added today">Ongoing repairs<img src="../../commons/img/icons/iconmonstr-dashboard-4.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> countries reached">Suspended repairs<img src="../../commons/img/icons/iconmonstr-wrench-19.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
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
                        <th><?php echo $repair_id ?></th>
                        <th><?php echo $repair_title ?></th>
                        <th><?php echo $customer_id?></th>
                        <th><?php echo $repair_address ?></th>
                        <th><?php echo $repair_description ?></th>
                        <th><?php echo $repair_status ?></th>
                        <th><?php echo $repair_charge ?></th>
                    </tr>   
                </thead>
                <div class="table-body">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>New Repair</td>
                            <td>112</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's - Woman Girl's Street.</td>
                            <td>Gardening - trees servicing</td>
                            <td>Done</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>New Repair</td>
                            <td>112</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's - Woman Girl's Street.</td>
                            <td>Gardening - trees servicing</td>
                            <td>Done</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>New Repair</td>
                            <td>112</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's - Woman Girl's Street.</td>
                            <td>Gardening - trees servicing</td>
                            <td>Done</td>
                            <td>$ <?php echo $total_some_val ?>.00</td>
                        </tr>   
                        <tr>
                            <td>6</td>
                            <td>New Repair</td>
                            <td>112</td>
                            <td>Boy</td>
                            <td>12, Young Man Boy's - Woman Girl's Street.</td>
                            <td>Gardening - trees servicing</td>
                            <td>Done</td>
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
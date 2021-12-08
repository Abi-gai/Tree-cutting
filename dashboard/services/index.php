<?php
    $pageTitle = 'Admin Dashboard - Services';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    //Table headers
    $service_id ="ID";
    $service_title = "TITLE";
    $service_type = "SERVICE TYPE";
    $service_description = "SERVICE DESCRIPTION";
    $service_country = "COUNTRY";
    $service_regions = "AVAILABLE REGIONS";
    $service_supervisor = "SERVICE SUPERVISOR";
    $service_charge = "SERVICE CHARGE";

    $total_some_val = 104

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../assets/services.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <?php include('../../commons/navigation.php') ?>

        <div class="dashboard-summary">
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> total cutomers">Total Services<img src="../../commons/img/icons/iconmonstr-bookmark-34.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> newly added today">Ongoing Services<img src="../../commons/img/icons/iconmonstr-bookmark-21.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?> countries reached">Suspended Services<img src="../../commons/img/icons/iconmonstr-wrench-15.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Lowest service charge<img src="../../commons/img/icons/iconmonstr-currency-8.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div>
            <div class="item"><span class="item-link" title="<?php echo $total_some_val ?>">Total revenue generated<img src="../../commons/img/icons/iconmonstr-bitcoin-6.svg" alt=""/></span><h4><?php echo $total_some_val ?></h4></div> 
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
                        <th><?php echo $service_id ?></th>
                        <th><?php echo $service_title ?></th>
                        <th><?php echo $service_type ?></th>
                        <th><?php echo $service_description ?></th>
                        <th><?php echo $service_country ?></th>
                        <th><?php echo $service_regions ?></th>
                        <th><?php echo $service_supervisor ?></th>
                        <th><?php echo $service_charge ?></th>
                    </tr>   
                </thead>
                <div class="table-body">
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr> 
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>New service title</td>
                            <td>Gardening - tree cutting</td>
                            <td>Tree trimming in gardens</td>
                            <td>Country</td>
                            <td>Region 1, Region 2</td>
                            <td>Employee 123</td>
                            <td>$ $ <?php echo $total_some_val ?>.00</td>
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
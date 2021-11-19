<?php
    $pageTitle = 'Tree cutting service';
    $currentDate = '19-11-2021';
    define('MESSAGE', 'Welcome');

    $exampleMail = 'Please enter a valid e-mail. Eg: tcs@mail.com';
    $phoneNumber = '0200000000';
?>

<!DOCTYPE html>
    <html lang="en">
        <?php include('commons/header.php') ?>
        <div style="padding: " class="row">
            <div class="col s12 m4">
                <div class="card">
                    <i class="material-icons right">account_circle</i>
                    <div class="card-content">
                        <form action="dashboard/" method="post">
                            
                            <div class="row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                        <span class="helper-text" data-error="Please correct the above errors... ❌. Enter a valid e-mail." data-success="All done ✔"><?php echo $exampleMail ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" minlength="8" maxlength="16" class="validate">
                                    <label for="password">Password</label>
                                    <span class="helper-text" data-error="Please correct the above errors... ❌" data-success="All done ✔">Password should be between 8 and 16 characters long...</span>

                                </div>
                            </div>
                            <div class="row">
                                <button class="waves-effect waves-light btn m6" type="submit">Login<i class="material-icons right">arrow_forward</i></button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div style="float: right;" class="col s12 m7">
                <div class="card">
                    <div class="card-content">
                        <!-- <div class="card-image"> -->
                            <img src="images/sample-1.jpg">
                            <span class="card-title">Add slide images here</span>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        <?php include('commons/footer.php') ?>

</html>
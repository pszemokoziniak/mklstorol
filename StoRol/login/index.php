<?php

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


include_once '../includes/funkcje.php';
include_once 'includes/functions.php';


$mysqli = db_connect();
 
session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'zalogowany';
    header('Location: /indexMain.php?menu=28');
    die();

} else {
    $logged = 'wylogowany';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MklBau CRM</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        <?php get_css_form(); ?>
        <style>
            .loginCss {
                border-width: 3px;
                border-style: groove;
                border-color: grey;
                border-radius: 5px;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                background-color: #F0F8FF;                
            }
            .bodyBackGr {
                background-image: url("/image/backGrmkl.webp");
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.9;
            }
            /* .loginCssInside {
                margin: 0;
                position: absolute;
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);            } */
        </style>
    </head>
    
    <body class="bodyBackGr">
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        
        if (login_check($mysqli) == true) {
                        echo '<p>Jesteś ' . $logged . ' jako ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>LogOut <a href="includes/logout.php">Log out</a></p>';
        } else {
                        ///echo '<p>Jesteś ' . $logged . '.</p>';
                        ///echo "<p>Rejestracja <a href='http://mkl.rentflat.pl/login/register.php'>Dodaj</a></p>";
                }
        
        
        ?> 
        <div class="container loginCss">
            <div class="col-xl-8 offset-xl-2 py-5 loginCssInside">
                <p class="lead"><img style="padding: 2px; margin: 2px;" src="/image/Logo_58f0945a774f7.png"><br />
                <small> Twoje IP: <?php echo getUserIP();?><br /><?php echo 'Jesteś: '.$logged;?></small></p>
                <form id="klient-form" action="includes/process_login.php" method="post" name="login_form">                      
                    <div class="controls">
                        <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" name="email" class="form-control" placeholder="email *" required="required" data-error="email wymagany.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Hasło</label>
                                            <input id="password" type="password" name="password" class="form-control" placeholder="hasło *" required="required" data-error="hasło wymagane.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                
                        </div>

                        <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
                        
                        <div class="row">
                            <div class="col-md-6">
                                <br />
                                <a href="/login/change_pass">Resetuj hasło</a> 
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Jesteś ' . $logged . ' jako ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>LogOut <a href="includes/logout.php">Log out</a></p>';
        } else {
                        ///echo '<p>Jesteś ' . $logged . '.</p>';
                        ///echo "<p>Rejestracja <a href='http://mkl.rentflat.pl/login/register.php'>Dodaj</a></p>";
                }

                
?>      
    </body>
</html>
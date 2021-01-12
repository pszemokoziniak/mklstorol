<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
include_once '../assets/php/funkcje.php';

$mysqli = db_connect();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rejestracja: MklstoRol</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <?php //get_css_form(); ?>    
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>MKLstokRol rejestracja</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
       
        <ul style="font-size: x-small">
            <li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one uppercase letter (A..Z)</li>
                    <li>At least one lowercase letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        
        <div class="container">
        <div class="col-xl-8 offset-xl-2 py-5">
        
        <form id="klient-form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" 
                method="post" 
                name="registration_form">
            
<div class="controls">
                 <div class="row">
                     
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Użytkownik:</label>
                                    <input id="username" type="text" name="username" class="form-control" placeholder="wymagane" required="required" data-error="uzytkownik wymagany.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input id="email" type="text" name="email" class="form-control" placeholder="wymagane" required="required" data-error="email wymagany.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                 </div> 
                 <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Hasło</label>
                                    <input id="password" type="password" name="password" class="form-control" placeholder="wymagane" required="required" data-error="hasło wymagane.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Powtórz Hasło</label>
                                    <input id="confirmpwd" type="password" name="confirmpwd" class="form-control" placeholder="wymagane" required="required" data-error="hasło wymagane.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                 
                 </div> 

            <input type="button" 
                   value="Zapisz" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
            </div>
        </form>
            <!-- <p><br /><a href="index.php">Strona Logowania</a>.</p> -->
    
        
    </div>
        </div>    
    </body>
</html>
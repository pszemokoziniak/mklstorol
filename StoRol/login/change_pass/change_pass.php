<?php

$idUser = $_GET['id'];

include_once 'register.inc.php';

include_once '../includes/functions.php';
include_once '/includes/funkcje.php';

$mysqli = db_connect();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: MklBau</title>
        <script type="text/JavaScript" src="../js/sha512.js"></script> 
        <script type="text/JavaScript" src="../js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
        <?php get_css_form(); ?>    
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>MKL BAU zmiana hasła</h1>
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
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
            </div>
        </form>
    
        
    </div>
        </div>    
    </body>
</html>

<script>

function regformhash(form, password, conf) {
     // Check each field has a value
    if (  password.value == ''  || 
          conf.value == '') {
 
        alert('Proszę uzupełnić wszystkie pola');
        return false;
    }
 
 
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Hasło musi mieć co najmniej 6 liter.');
        form.password.focus();
        return false;
    }
 
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
 
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Hasło nie zgadza się z potwierdzeniem hasła.');
        form.password.focus();
        return false;
    }
 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";
 
    // Finally submit the form. 
    form.submit();
    return true;
}

</script>
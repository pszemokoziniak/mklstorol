<script>
    function checkUserEmail(form, email) {
    $.post('/login/change_pass/checkUser.php', { email: email }, 
        function(data) { 
            if (data == 1) {
                $.post('/login/change_pass/sendMail.php', { email: email }, 
                function(data) { 
                    alert('Mail został wysłany');
                });
                ///form.submit();
            } else {
                ///alert('test');
                $('.help-block').show();
                $('.help-block').html('<span style="color:red"><small>email nie istnieje w bazie</small></span>');
                $('.help-block').delay(2000).hide(2000);
            }
        });
}
</script>


<?php

include_once '/includes/funkcje.php';
include_once '../includes/functions.php';


$mysqli = db_connect();
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MklBau</title>
        <link rel="stylesheet" href="styles/main.css" />
        <!-- <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>  -->
        <?php get_css_form(); ?>
    </head>
    <body>
        <div class="container">
        <div class="col-xl-8 offset-xl-2 py-5">
            <p class="lead">MklBau<br />Wpisz swój adres email <br /><small>Link do zmieny hasła zostanie wysłany na Twoją skrzynkę pocztową</small></p>
            <form id="klient-form" action="includes/process_login.php" method="post" name="login_form">                      
             <div class="controls">
                 <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" name="email" class="form-control" placeholder="email *" required="required" data-error="email wymagany.">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                                                    
                </div>
                <input type="button" value="Wyślij" onclick="checkUserEmail(this.form, this.form.email.value)"/>
            </div>
        </form>
        </div>
        </div>
    </body>
</html>
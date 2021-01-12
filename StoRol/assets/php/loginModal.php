<!-- ======= Login ======= -->
<!-- <div style="clear: both"></div>   -->
<div style="width:70%; margin-left: auto; margin-right: auto; margin-top:10px; margin-down:40px;">
    <form class="form-signin" id="klient-form" action="login/includes/process_login.php" method="post"
        name="login_form">

        <!-- <form class="form-signin"> -->
        <h1 class="h3 mb-4 font-weight-normal">Zaloguj się</h1>
        <label for="email" class="sr-only">Email</label>
        <input id="email" type="text" name="email" class="form-control" placeholder="email *" required="required"
            data-error="email wymagany." autofocus>

        <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
        <label for="password" class="sr-only">Hasło</label>
        <input id="password" type="password" name="password" class="form-control" placeholder="hasło *"
            required="required" data-error="hasło wymagane.">

        <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
        <!-- <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit"
            onclick="formhash(this.form, this.form.password);">Wejdź</button>
    </form>
</div>
<!-- End Login -->

<script>
$(document).ready(function() {
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
</script>
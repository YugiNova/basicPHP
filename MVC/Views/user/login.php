<?php 
    session_start();
?>
<section>
    <form method="POST" class="form-signin custom-form">
        <h3>Log In</h3>
        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button name="login" class="btn btn-lg btn-primary btn-block" type="submit" value="Log In">Sign in</button>
        <p style='color:red'><?=$login_errors;?></P>
    </form> 
</section>
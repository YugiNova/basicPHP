
<section>
    <form method="POST" class="form-signin custom-form">
        <?php if(isset($_SESSION['id'])) { ?>
            <h3>Your user id is <?=$_SESSION['id']?></h3>
            <button name="logout" class="btn btn-lg btn-primary btn-block" type="submit" value="logout">Log out</button>
        <?php } else {?>
            <h3>Log In</h3>
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button name="login" class="btn btn-lg btn-primary btn-block" type="submit" value="login">Sign in</button>
            <p style='color:red'><?=showError($errors??[],'password')?></P>
        <?php } ?>
        
        
    </form> 
</section>
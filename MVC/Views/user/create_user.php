<h1>Create User</h1>

<form method="POST">
    <label>Name</label>
    <br>
    <input type="text" name="name"/>
    <br>
    <?php 
    echo showError($errors??[],'name');
    ?>
    <label>Email</label>
    <br>
    <input type="text" name="email"/>
    <br>
    <?php 
    echo showError($errors??[],'email');
    ?>
    <label>Password</label>
    <br>
    <input type="password" name="password"/>
    <br>
    <?php 
    echo showError($errors??[],'password');
    ?>
    <button type='submit'  name="submit">Submit</button>
</form>
<h1>Create Note</h1>

<form method="POST">
    <label>Content</label>
    <br>
    <textarea name="content"></textarea>
    <br>
    <?php 
    echo showError($errors??[],'content');
    ?>
    <label>User</label>
    <br>
    <select  name="user_id">
        <option value='0'>--- Please select ---</option>
        <option value='1'>1. Nguyen Van A</option>
        <option value='2'>2. Tran Van B</option>
        <option value='3'>3. Ta Thi C</option>
    </select>
    <?php 
    // if(isset($errors['userid'])){
    //     foreach($errors['userid'] as $error){
    //         echo "<br><p style='color:red'>$error</p><br>";
    //     }
    // }  
    echo showError($errors??[],'userid');
    ?>
    <br>
    <button  name="submit">Submit</button>
</form>
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
        <?php foreach($users as $key => $value) : ?>
            <option value='<?=$value['id'];?>'><?=$value['name'];?></option>
        <?php endforeach ?>
    </select>
    <?php
    echo showError($errors??[],'userid');
    ?>
    <br>
    <button  name="submit">Submit</button>
</form>
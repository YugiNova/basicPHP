

<h1>Update Note</h1>

<form method="POST">
    <label>Content</label>
    <br>
    <textarea name="content"><?=$note_detail['content']?></textarea>
    <br>
    <?php 
    echo showError($errors??[],'content');
    ?>
    <label>User</label>
    <br>
    <select  name="user_id">
        <option value='0'>--- Please select ---</option>
        <option value='1' <?= $note_detail['user_id'] === '1'? 'selected' : ''?>>1. Nguyen Van A</option>
        <option value='2' <?= $note_detail['user_id'] === '2'? 'selected' : ''?>>2. Tran Van B</option>
        <option value='3' <?= $note_detail['user_id'] === '3'? 'selected' : ''?>>3. Ta Thi C</option>
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
    <input name='id' type='hidden' value="<?=$note_detail['id']?>"/>
    <button  name="submit">Submit</button>
</form>
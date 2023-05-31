<h1>List User</h1>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Create at</td>
        <td>Action</td>
    </tr>
    <?php 
        foreach($database as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$value['name']."</td>";
            echo "<td>".$value['email']."</td>";
            echo "<td>".$value['password']."</td>";
            echo "<td>".$value['created_at']."</td>";?>
            
            <td>
                <a href="index.php?url=user/detail/<?=$value['id'];?>">Detail</a>
                <a onclick="return confirm('Are you sure?')" href="index.php?url=user/delete/<?=$value['id'];?>">Delete</a>
            </td>
            <?php echo "</tr>";
        }
    ?>
</table>
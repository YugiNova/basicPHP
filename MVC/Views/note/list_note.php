<h1>List Note</h1>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Content</td>
        <td>User ID</td>
        <td>Create at</td>
        <td>Action</td>
    </tr>
    <a href='index.php?url=note/create'>Create note</a>
    <?php 
        foreach($database as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$value['content']."</td>";
            echo "<td>".$value['user_id']."</td>";
            echo "<td>".$value['created_at']."</td>";?>
            
            <td>
                <a href="index.php?url=note/detail/<?=$value['id'];?>">Detail</a>
                <a onclick="return confirm('Are you sure?')" href="index.php?url=note/delete/<?=$value['id'];?>">Delete</a>
            </td>
            <?php echo "</tr>";
        }
    ?>
</table>
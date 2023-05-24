<h1>List Product</h1>


<h1><?=$headingList?></h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    <?php 
        foreach($productList as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$value['name']."</td>";
            echo "</tr>";
        }
    ?>
</table>

<h1><?=$headingHot?></h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    <?php 
        foreach($productHot as $key => $value) {
            echo "<tr>";
            echo "<td>".($key+1)."</td>";
            echo "<td>".$value['name']."</td>";
            echo "</tr>";
        }
    ?>
</table>

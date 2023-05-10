<style>
    
</style>

<table class="table table-striped table-hover table-dark table-custom">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Image</th>
                <th scope="col">Create At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $getUsers = "select * from user";
            $getNewest10Users = "select * from user order by create_at DESC limit 10";
            $usersList = $conn->query($getNewest10Users);

            if (mysqli_num_rows($usersList) > 0){
                while ($row = mysqli_fetch_assoc($usersList)) {
                    echo "<tr>";
                    echo "<th scope='row'>".$row['id']."</th>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td><img src='uploads/".$row['image_url']."'/></td>";
                    echo "<td>".gmdate($row['create_at'])."</td>";
                    echo "<td><button>Delete</button></td>";
                    echo "</tr>";
                }
            }else{
                echo "No result";
            }
            mysqli_data_seek($usersList,0);
            ?>
        </tbody>
    </table>
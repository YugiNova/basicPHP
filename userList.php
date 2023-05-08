<style>
    table td img{
        width: 5rem;
        height: 5rem;
    }
</style>

<table class="table table-striped table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Image</th>
                <th scope="col">Create At</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $getUsers = "select * from user";
            $usersList = $conn->query($getUsers);

            if (mysqli_num_rows($usersList) > 0){
                while ($row = mysqli_fetch_assoc($usersList)) {
                    echo "<tr>";
                    echo "<th scope='row'>".$row['id']."</th>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td><img src='uploads/".$row['image_url']."'/></td>";
                    echo "<td>".gmdate($row['create_at'])."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
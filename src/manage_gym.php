<div class="container">
    <form class="form-group mt-3" method="post" action="home.php?info=gym_search">
        <h3 class="lead">SEARCH GYM</h3>
        <input type="text" name="name" class="form-control" placeholder="ENTER GYM NAME OR GYM ID">
    </form>

    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>GYM ID</th>
                    <th>GYM NAME</th>
                    <th>GYM ADDRESS</th>
                    <th>GYM TYPE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('config.php');

                $query = "SELECT * FROM gym";
                $sql = mysqli_query($con, $query);
                if (mysqli_num_rows($sql) > 0) {
                    while($row = mysqli_fetch_assoc($sql)) {
                        echo "<tr>";
                        echo "<td>".$row['gym_id']."</td>";
                        echo "<td>".$row['gym_name']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['type']."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

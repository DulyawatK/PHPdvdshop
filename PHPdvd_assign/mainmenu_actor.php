<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Actor</title>
</head>


<body>

    <div class="topnav">
        <a class="active" href="mainmenu.php">Movie rent</a>
        <a href="mainmenu_movie.php">Movie</a>
        <a href="mainmenu_actor.php">Actor</a>
        <a href="mainmenu_customer.php">Customer</a>
        <a href="buymovie.php">Buy</a>
    </div>

    <div class="container">
        <h1>Actor</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">เพศ</th>
                    <th scope="col-4">วันเกิด</th>
                    <th scope="col-4">หนังที่แสดง</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["actor_id"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["birthdate"]."</td>"
                            ."<td>"."<a class='btn btn-warning' href='actordetail.php?actor_id=".$row["actor_id"]."'>movie</a>"."</td>"
                            ."<td>"."<a class='btn btn-warning' href='editactor.php?actor_id=".$row["actor_id"]."'>Edit</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertactor.php'>Insert Actor</a>
    </div>
</body>

</html>
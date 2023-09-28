<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Movie</title>
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
        <h1>Insert Movie</h1><br>
    <form id="form1" name="form1" method="post" action="insertmoviesuccess.php">
        <p>
            <label for="movie_id">ID</label>
            <input type="number" name="movie_id" id="movie_id" value="<?=$row['movie_id'];?>" >
        </p>


        <p>

            <label for="mname">ชื่อ</label>
            <input type="text" name="mname" id="mname">

        </p>

        <p>

            <label for="detail">รายละเอียด</label>

            <input type="text" name="detail" id="detail">

        </p>

        <p>

            <label for="duration">ระยะเวลา</label>

            <input type="text" name="duration" id="duration">

        </p>

        <p>

            <label for="releasedate">วันฉาย</label>

            <input type="date" name="releasedate" id="releasedate">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>
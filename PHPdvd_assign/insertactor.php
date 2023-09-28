<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Actor</title>
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
        <h1>Insert Actor</h1><br>
    <form id="form1" name="form1" method="post" action="insertactorsuccess.php">
        <p>
            <label for="actor_id">ID</label>
            <input type="number" name="actor_id" id="actor_id" value="<?=$row['actor_id'];?>" >
        </p>


        <p>

            <label for="aname">ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label for="alastname">นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label for="gender">เพศ</label>

            <input type="text" name="gender" id="gender">

        </p>

        <p>

            <label for="birthdate">วันเกิด</label>

            <input type="date" name="birthdate" id="birthdate">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>
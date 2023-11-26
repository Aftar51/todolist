<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <style>
.body {
    background-image: url(gunung.jpg);
}

.container {
    padding-bottom: 1rem;
}

.table td{
    border: 5px solid;
    text-align: center;
}

.awal {
    margin-top: 2rem;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.gambar {
    width: 73rem;
    height: 17.5rem;
    border-radius: 5rem;
}
    </style>
</head>

<body class="body">
<section class="awal">
        <img class="gambar" src="To-Do List IDN Bording School sentul.jpg" alt="poto">
    </section>
    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-secondary m-auto shadow mt-3 py-3 col-md-6">
                <h2 class="text-center text-light font-monospace"><b>Write What You Want To Keep</b></h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow bg-light">
                </div>
                <div class="col-2">
                <button class="btn btn-success"><i class="fa-solid fa-square-plus"></i></button>
                </div>
            </div>
        </div>  
    </form>

    <!-- GET DATA FROM LOCALHOST -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabeltodo`");
    $i = 1;
    ?>
    <!--Tampilkan data-->
    <div class="container">
        <div class="bg-white m-auto col-8 mt-3">
            <table class="table">
                <?php
                while ($row = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                    <td style="width: 5%;"><?php echo $i++ ?></td>
                    <td style="width: 30%;"><?php echo $row['list']?></td>
                    <td style="width: 10%;"><a href="update.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-warning"><i class="fa-solid fa-share"></i><b>Change</b><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td style="width: 1%;"><a href="delete.php? ID= <?php echo $row['Id'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-circle-xmark"></i></a></td>
                </tr>
                <tbody>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
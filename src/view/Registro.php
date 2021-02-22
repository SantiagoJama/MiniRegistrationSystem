
<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/FormStyle.css">
    <title>Bienvenido a Register </title>
</head>
<body>
<div class="title-container">
    <h1 class="title">Bienvenido al formulario de registro</h1>
</div>
<div class="container-flex">
    <div class="form-container">
        <form class="register-form" action="../../index.php?c=Managerc&a=Guardar" method="POST">
            <?php
            session_start();
            if (isset($_SESSION['message'])){
            ?>
            <h4> <?php echo $_SESSION['message'] ?></h4>
            <?php
            }
            session_unset();
            ?>
            <div class="mb-3 text">
                <label for="name" class="form-label">Ingrese su nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 text">
                <label for="lastname" class="form-label">Ingrese su apellido</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3 text">
                <label for="nick" class="form-label">Ingrese su apodo (nickname) </label>
                <input type="text" class="form-control" id="nick" name="nick">
            </div>
            <button type="submit" class="back-btn">Registrarme</button>
        </form>
        <br>
        <a href="home.php"><button class="back-btn">Regresar</button></a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

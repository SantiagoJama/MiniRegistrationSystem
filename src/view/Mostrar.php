<!doctype html>
<html lang="en">
<head>
    <style>
        .container-button{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;
        }
        .title-container{
            text-align: center;
            padding-top: 2em;
            font-size: 3rem;
            width: 100%;
            height: 5em;
            background-color: lightseagreen;
            color: white;
        }
        .title{
            text-align: center;
            color: white;
        }
        .back-btn{
            background-color: lightseagreen;
            color: white;
            padding: 1em;
            border-radius: .2em;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Todos los usuarios registrados</title>
</head>
<body>
<?php
    require_once "../model/Managerm.php";
    $users = new Managerm();
?>

    <div class="title-container">
        <h1 class="title">Todos los usuarios registrados en Registration</h1>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID de usuario </th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nickname (Apodo)</th>
            <th scope="col">fecha de registro</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $records = $users->get_data();
            foreach ($records as $item){
        ?>
        <tr>
            <th scope="row"><?php echo $item['user_id']?></th>
            <td><?php echo $item['user_name']?></td>
            <td><?php echo $item['user_lastname']?></td>
            <td><?php echo $item['user_nick']?></td>
            <td><?php echo $item['register_day']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <div class="container-button">
        <a href="home.php"><button class="back-btn">Regresar</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

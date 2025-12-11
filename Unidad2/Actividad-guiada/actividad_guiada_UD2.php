<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad guiada</title>
</head>
<body>
    <div>
        <h1><?php echo "Carlos Romero";?></h1>
        <h2><?php echo "DWES";?></h2>
        <ul>
            <li>Mail: <?php echo "a23roroca@iesgrancapitan.org";?></li>
            <li>Phone: <?php echo "678000111";?></li>
            <li>LinkedIn: <?php echo "@carlosromero";?></li>
            <li>Twitter: <?php echo "@carlosromero";?></li>
        </ul>
    </div>

    <?php
    $nombreCompleto = "Carlos Romero";
    $email = "a23roroca@iesgrancapitan.org";
    $phone = "678000111";
    $linkedin = "@carlosromero";
    $twitter = "@carlosromero";
    ?>

    <div>
        <h1><?php echo $nombreCompleto;?></h1>
        <h2><?php echo "DWES";?></h2>
        <ul>
            <li>Mail: <?php echo $email;?></li>
            <li>Phone: <?php echo $phone;?></li>
            <li>LinkedIn: <?php echo $linkedin;?></li>
            <li>Twitter: <?php echo $twitter;?></li>
        </ul>
    </div>
</body>
</html>
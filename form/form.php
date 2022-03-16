<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>REGISTER</title>
</head>
<body>
    <div class="login">
    <div class="form-container">
        <div class="title">
            <h2>Registrate</h2>
        </div>
        <form action="insert.php" method="post" class="form">
            <div class="nombre_css">
                <label class="label">nombre </label>
                <input type="text" class="form-control name" id="name" name="name">
            </div>
            <div class="apellido_paerno_css">
                <label class="label">apellido paterno</label>
                <input type="text" class="form-control apellido_p" name="apellido_p">
            </div>
            <div class="apellido_materno_css">
                <label class="label">apellido materno</label>
                <input type="text" class="form-control apellido_m" name="apellido_m">
            </div>
            <div class="edad_css">
                <label class="label">edad</label>
                <input type="number" class="form-control apellido_m" name="edad" id="edad">
            </div>
            <div class="sexo_css">
                <label class="label">sexo</label>
                <select class="form-select"name="sexo" id="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>
            <div class="contraseña_css">
                <label class="label">contraseña</label>
                <input type="password" class="form-control contrasena" name="contraseña" id="contraseña">
            </div>
            <button onclick="emvio" name="register" class="primary-button login-button">insertar datos</button>
        </form>
    <div><nav><a href="#">Registrarte</a></nav></div>
            <?php
                include("insert.php");
            ?>
    </div>
    </div>
</body>
</html>
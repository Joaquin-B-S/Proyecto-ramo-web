<?php include('../includes/head.php') ?>
<body>
    <?php include('../includes/header.php') ?>
    <div class="container">
        <form class="form-container" method="post" action="../scripts/php/login_registrar.php">
            <h1 class="form-titulo no-margin">Login</h1>
            <input type="text" placeholder="Usuario" name="usuario" required>
            <input type="password" placeholder="Contraseña" name="pass" required>
            <button type="submit" name="btningresar">Login</button>
            <a href="registrar.php" class="btnregistro">Registrarse</a>
        </form>
    </div>
    <?php include('../includes/footer.php') ?>
</body>
</html>
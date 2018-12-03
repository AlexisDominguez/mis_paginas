<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BusinessWeb: Marketing y Páginas web para su negocio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style-contact.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/contactPHP.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
                 <!-- header-->
         <header class="header">
            <div class="nameWebPage">
                <a href="../index.html">BusinessWeb</a>
                <div class="buttonTeam"><a href="">Equipo</a></div>
                <div class="buttonPrices"><a href="">Precios</a></div>
            </div>
        </header> <!-- Fin de header-->

        <div class="mainPanel mainPanelPHP">
            <div class="frase frasePHP">
                <span class="uppercase">Datos enviados con éxito</span> <br>
                Gracias por colaborar con nosotros
            </div>
        </div>

        <?php
            if(isset($_POST['buttonSubmit'])){
                $conexionSql = new mysqli("localhost", "root", "", "businessWeb");
                mysqli_set_charset($conexionSql, 'utf8');
                if($conexionSql){
                    $name = $_POST["name"];
                    $phoneNumber = $_POST["phoneNumber"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];
                    /* crear una sentencia preparada */
                    $insertarDatos = "INSERT INTO contactUser (name,phoneNumber,email, message) VALUES (?,?,?,?)";
                    $stmt = $conexionSql->prepare($insertarDatos);
                    if ($stmt) {
                        $stmt->bind_param("ssss", $name, $phoneNumber, $email, $message);
                        /* ejecutar la consulta */
                        $stmt->execute();
                        $msgOutput="";
                        /* cerrar sentencia */
                        $stmt->close();
                    } else {
                        $msgOutput="Error preparando la consulta: ".$conexionSql->error;
                    }
                    /* cerrar conexión */
                    $conexionSql->close();
                } else {
                    $msgOutput="Error, no se pudo conectar a la base de datos: ".$conexionSql->connect_error;
                }
            } else {
                $msgOutput="No se postearon los datos correctamente";
            }
            echo $msgOutput;
        ?>

        <footer>
            <div class="infocontainer">
                <div class="contact">
                    <div class="infotext">Puede contactarnos en las siguientes redes:</div>
                    <ul>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">Google</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">Twitter</a></li>
                        <li><a href="">Youtube</a></li>
                    </ul>
                </div>
                <div class="information">
                    <div class="infotext">Información general:</div>
                    <ul>
                        <li><a href="">Soporte</a></li>
                        <li><a href="">FAQ's</a></li>
                        <li><a href="">Acerca de BusinessWeb</a></li>
                    </ul>
                </div>
                <div class="policies">
                    <div class="infotext">Políticas:</div>
                    <ul>
                        <li><a href="">Políticas de privacidad</a></li>
                        <li><a href="">Derechos de autor</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">© 2018 BusinessWeb</div>
        </footer><!-- Fin footer -->
    </div>
</body>
</html>
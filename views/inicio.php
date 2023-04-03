<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <h1 class="title">ANIMALES</h1>
        <nav class="home_nav">
            <ul>
                <li><a href="index.php?ruta=perro">PERRO</a></li>
                <li><a href="index.php?ruta=gato">GATO</a></li>
                <li><a href="index.php?ruta=pajaro">PAJARO</a></li>
                <li><a href="index.php?ruta=pez">PEZ</a></li>
                <li><a href="index.php?ruta=tortuga">TORTUGA</a></li>
                <li><a href="index.php?ruta=caballo">CABALLO</a></li>
                <li><a href="index.php?ruta=elefante">ELEFANTE</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2 class="title">Animal seleccionado</h2>
        <?php 
            if (isset($_GET["ruta"])){
                if(
                    $_GET["ruta"]== "perro" ||
                    $_GET["ruta"] == "gato" ||
                    $_GET["ruta"] == "pajaro" ||
                    $_GET["ruta"] == "pez"||
                    $_GET["ruta"] == "tortuga"||
                    $_GET["ruta"] == "caballo"||
                    $_GET["ruta"] == "elefante"
                ){
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else{
                    include "paginas/error404.php";
                }
            
            } else{
                echo "selecciona un animal";
            }
            ?>
    </section>
</body>
</html>
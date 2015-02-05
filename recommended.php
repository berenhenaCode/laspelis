<?  include('php/connection.php');
	$consulta = mysql_query("SELECT id_catalogo, Titulo, Imagen
                            FROM Catalogo
                            WHERE Recomendado = 1", $connection) or die('SQL Error :: '.mysql_error());
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Starting Up</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--<h1>Hello World!</h1>
        <p>This is 90% real, the rest is up to you.</p>-->
        <? include('menu.php') ?>
        <div class="wrapped">
            <div class="content1">
                <p id="da-title">Recommended</p>
                <div class="da-movies">
                    <?
                        while($filas=mysql_fetch_array($consulta)){
										$id=utf8_encode($filas['id_catalogo']);
										$title=utf8_encode($filas['Titulo']);
                                        $imagen=utf8_encode($filas['Imagen']);
        
                            echo '<div><a href="title.php?id='.$id.'"><img height="317" width="214" src="'.$imagen.'">
                                <br>
                                '.$title.'</a>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="footer">
            <p>Living in awesomeness since...</p>
        </div>
    </body>
</html>
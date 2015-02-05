<? include('php/connection.php');
	$consulta = mysql_query("SELECT DISTINCT g.Genre, g.id_genre FROM `Genre` g 
                                INNER JOIN TitlexGenre tg ON tg.id_genre = g.id_genre
                                INNER JOIN Catalogo c ON c.id_catalogo = tg.id_catalogo
                            WHERE c.Tipo LIKE '%Film%'", $connection) or die('SQL Error :: '.mysql_error());

    $x = 0;
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
                <div class="da-genres">
                    <?
                        while($filas=mysql_fetch_array($consulta)){
										$id=utf8_encode($filas['id_genre']);
										$genre=utf8_encode($filas['Genre']);
                            $x++;
                            echo '<a href="catalog.php?id='.$id.'&class=Film"><div id="color-box-'.$x.'">'.$genre.'</div></a>';
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
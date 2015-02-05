<?  include('php/connection.php');
    include('php/title_description.php');
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
                <div class="da-title">
                    <?
                        while($filas=mysql_fetch_array($consulta)){
                                $title=utf8_encode($filas['Titulo']);
                                $director=utf8_encode($filas['Director']);
                                $year=($filas['Anio']);
                                $rating=$filas['Calificacion'];
                                $synopsis=utf8_encode($filas['Sinopsis']);
                                $genre=utf8_encode($filas['genre']);
                                $country=utf8_encode($filas['Pais']);
                                $link=utf8_encode($filas['Link']);
                                $class=utf8_encode($filas['Tipo']);
                                $imagen=utf8_encode($filas['Imagen']);
                        }
                        echo '<div id="title-image"><img height="317" width="214" src="'.$imagen.'"></div>
                        <div id="title-description">
                            <h1 id="#da-title">'.$title.'</h1>
                            '.$class.'
                            <hr>
                            <p><span>Director:</span> '.$director.'
                            </p>
                            <p><span>Year:</span>  '.$year.'
                                <br>
                                <span>Rating:</span>  '.$rating.'
                            </p>
                            <p>
                                <span>Synopsis:</span> '.$synopsis.'
                            </p>
                                <span>Genre:</span>  '.$genre.'
                                <br>
                                <span>Country:</span>  '.$country.'
                                <br>
                                Show me @ <a target="_blank" href="'.$link.'">IMDB</a>
                            </p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <p>Living in awesomeness since...</p>
        </div>
    </body>
</html>
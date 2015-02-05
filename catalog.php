<?  include('php/connection.php');
    include('php/category.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Starting Up</title>
        <link rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.simplePagination.js"></script>
    </head>
    <body>
        <script>
            $(function() {
                $(selector).pagination({
                    items: 100,
                    itemsOnPage: 10,
                    cssStyle: 'light-theme'
                });
            });
        </script>
        <!--<h1>Hello World!</h1>
        <p>This is 90% real, the rest is up to you.</p>-->
        <? include('menu.php') ?>
        <div class="wrapped">
            <div class="content1">
                <p id="da-title">Catalog</p>
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
                    <div class="pagination-holder clearfix">
                            <div id="light-pagination" class="pagination"></div>
                    </div>  
                </div>
            </div>
        </div>
        <div id="footer">
            <p>Living in awesomeness since...</p>
        </div>
    </body>
</html>
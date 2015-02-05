<?
    $id = $_GET['id'];
    $class = $_GET['class'];

    $consulta = mysql_query("SELECT DISTINCT c.Titulo, c.Imagen, c.id_catalogo
                            FROM Catalogo c
                                INNER JOIN TitlexGenre tg ON tg.id_catalogo = c.id_catalogo
                                INNER JOIN Genre g ON tg.id_genre = g.id_genre
                            WHERE c.Tipo LIKE '%".$class."%' AND g.id_genre=".$id, $connection) or die('SQL Error :: '.mysql_error());

?>
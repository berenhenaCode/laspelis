<?
    $id = $_GET['id'];

    $consulta = mysql_query("SELECT c.Titulo, c.Director, c.Anio, c.Calificacion, c.Sinopsis, g.genre, c.Pais, c.Link, c.Imagen, c.Tipo
                            FROM Catalogo c
                                INNER JOIN TitlexGenre tg ON tg.id_catalogo = c.id_catalogo
                                INNER JOIN Genre g ON g.id_genre = tg.id_genre
                            WHERE c.id_catalogo = ".$id, $connection) or die('SQL Error :: '.mysql_error());

?>
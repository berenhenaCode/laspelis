<?
    $connection=mysql_connect('localhost','root','') or die('No hay conexión a la base de datos');
    mysql_select_db('beder_movies',$connection)or die('No existe la base de datos.');
?>

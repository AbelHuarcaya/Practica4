<?php
	if (isset($_REQUEST['datos'])){
    if($_REQUEST['afiliado']==0){
        $nombre = trim($_REQUEST['nombre']);
        $numero = trim($_REQUEST['numero']);
        $ense = $_REQUEST['ense'];
        $matri = $_REQUEST['matriculado'];
        
        print "<p> El alumno " . trim($_REQUEST['nombre']) . ", con teléfono " .$_REQUEST['numero']. " está matriculado en " . $_REQUEST['ense'] . "</p>\n";
    }
    else if($_REQUEST["afiliado"]==1)
          {
            print "<ul>";
            print "<li><a href='./mostrardatos.php'>Mostrar archivo</a></li>";
            print "</ul>";
            $fd=fopen('datos.txt' , 'w');
            fwrite($fd, 'El alumno '. $_REQUEST['nombre'] .' ,con teléfono ' .$_REQUEST['numero'] .' está matriculado en ' .$_REQUEST['ense']);
            fclose($fd);
          }
}
?>
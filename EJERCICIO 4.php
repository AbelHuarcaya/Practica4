<html>
    <head>
        <title>Ejercicio 1 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <style>
            #cuadro {
            background-color: rgb(145, 145, 214);
            }
            #legenda{
            background-color: white;
            }
        </style>
    </head>
    <body>
    <?php
    
    if (isset($_REQUEST['guardar'])){
        $nombre = $_REQUEST['nombre'];
        $trabajo = $_REQUEST['trabajo'];
        $telefono = $_REQUEST['tele'];
        $direccion = $_REQUEST['dire'];
        $otra = $_REQUEST['otras'];
        //La a es para añadir, la w es para sobreescribir y la r es para leer txt jeje
        $nombre_archivo="agenda.txt";
        $fd = fopen($nombre_archivo, 'a');
        fwrite ($fd,"Contacto; $nombre; $trabajo; $telefono; $direccion; $otra".PHP_EOL);
        fclose($fd);
        }
       
           
    if (isset($_REQUEST['mostrar'])){
            $nombre = $_REQUEST['nombre'];
            $trabajo = $_REQUEST['trabajo'];
            $telefono = $_REQUEST['tele'];
            $direccion = $_REQUEST['dire'];
            $otra = $_REQUEST['otras'];

            $nombre_archivo="agenda.txt";
            $fd = fopen($nombre_archivo, 'r');
            while (($linea=fgets($fd)) !== false){
                print "$linea <br>";
            }	
            fclose($fd);
               
              }
    if (isset($_REQUEST['buscar'])){
                $nombre = $_REQUEST['nombre'];
                $texto = $_REQUEST['texto'];
                $nombre_archivo = "agenda.txt";
                $fd = fopen ($nombre_archivo, "r"); 
            
                while ( ($linea=fgets($fd)) !== false ){
                $arrayDatos = explode("; ", $linea);
                $nombre    =     $arrayDatos[1];
            
                if (trim($nombre) == trim(($texto))) {
                echo "Nombre: $nombre <br>";
                echo "Trabajo: $arrayDatos[2] <br>";
                echo "Telefono: $arrayDatos[3] <br>";
                echo "Direccion: $arrayDatos[4] <br>";
                echo "Otra: $arrayDatos[5] <br>";

                
                }
                   
                  }
                }
   
        
    
    else {
    ?>
    <form method="post" action="EJERCICIO 4.php">
    <fieldset id="cuadro">
                <h3> Agenda Virtual PHP </h3>
                <H1> CONTACTOS </H1>
                <p>Para guardar presione el boton</p>
                <table>
                <tr>
                    <td><p>Nombre: </p></td>
                    <td><p><input style="width : 200px; heigth : 30px" name="nombre"></p></td>
                </tr> 
                <tr>
                    <td><p>Trabajo: </p></td>
                    <td><p><input style="width : 200px; heigth : 30px" name="trabajo"></p></td>
                </tr>
                <tr>
                    <td><p>Teléfono: </p></td>
                    <td><p><input style="width : 200px; heigth : 30px" name="tele"></p></td>
                </tr>
                <tr>
                    <td><p>Dirección: </p></td>
                    <td><p><input style="width : 200px; heigth : 30px" name="dire"></p></td>
                </tr>
                <tr>
                    <td><p>Otras: </p></td>
                    <td><p><input style="width : 200px; heigth : 30px" name="otras"></p></td>
                </tr>

                </table>
    </fieldset>
        <input value="Guardar" name="guardar" type="submit">
        <input value="Reset"  type="reset">
        <input value="Mostrar" name="mostrar" type="submit">
        <p>Texto a buscar<input type = "text" SIZE = "40" name = "texto"><input value="Buscar Contacto" name="buscar" type="submit"></p>
    </form>
        <?php
        }
        ?>
    </body>
</html>

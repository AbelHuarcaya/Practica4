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
    
    if (isset($_REQUEST['datos'])){

        if($_REQUEST['afiliado']==0){
            if (trim($_REQUEST['nombre']) == "" ){
                print "<p> Su nombre está vacío </p>\n";
            }
            if (trim($_REQUEST['numero']) == ""){
                print "<p> Su número está vacío </p>\n";
            }
            if ($_REQUEST['ense'] == ""){
                print "<p> Tiene que escoger una enseñanza </p>\n";
            }
            if($_REQUEST['matriculado'] == ""){
                print "<p> Usted no está matriculado </p>\n";
            }
    
           
          }
    }  
          
        
    
    else {
    ?>
    <form method="get" action="datos_alumno.php">
    <fieldset id="cuadro">
                <p> DATOS DEL ALUMNO: </p>
                <table>
                <tr>
                    <td><p>Introduzca su nombre</p></td>
                    <td><p><input style="width : 200px; heigth : 30px" name="nombre"></p></td>
                    <td><p>Enseñanza:</p>
                        <p><input type="radio" name="ense" value="Secundaria">Secundaria      <input type="radio" name="ense" value="Bachillerato"> Bachillerato </p>
                        <p><input type="radio" name="ense" value="Ciclo Medio">Ciclo medio     <input type="radio" name="ense" value="Ciclo Superior"> Ciclo Superior </p>
                    </td>
                </tr> 

                <tr>
                    <td><p>Introduzca su teléfono:</p></td>
                    <td><p><input  style="width:100px; heigth:30px" name="numero"></p></td>
                    <td><p>Matriculado <input type="checkbox" name="matriculado" value="0" ></p> </td>
                </tr> 
                <tr>
                    <td>Mostrar datos:</td> 
                    <td><select name="afiliado">
                    <option> Seleccione </option>  
                    <option value="0"> Por Pantalla </option> 
                    <option value="1"> En Archivo datos.txt </option> </select></td>
                </tr>
                </table>
    </fieldset>
        <input value="Enviar Datos" name="datos" type="submit">
    </form>
        <?php
        }
        ?>
    </body>
</html>

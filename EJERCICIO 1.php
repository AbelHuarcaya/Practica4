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
    
    if (isset($_REQUEST['calcular'])){
        $alto = $_POST['alto'];
        $ancho = $_POST['ancho'];
        if($alto > 0 and $alto < 100 and $ancho > 0 and $ancho < 100){

            for ($i=1; $i <= $alto; $i++){
                for ($a=1; $a <= $ancho; $a++){
                    print "*\n";
                }
                print "<br>\n";
            }
        }
        else {
            echo "Introduzca números que sean menores que 100 y mayores que 0";
        }

    }
    else {
    ?>
    <form method="post">
    <fieldset id="cuadro">
        <legend><fieldset id="legenda">Formulario</fieldset></legend>
                <p> Escribe el alto y ancho (0 < números ≤ 100) y mostraré un rectágunlo de estrellas de ese tamaño.</p>
                <table>
                <tr>
                    <td><p>Ancho:</p></td>
                    <td><p><input style="width : 30px; heigth : 30px" name="ancho"></p></td>
                </tr> 
                <tr>
                    <td><p>Alto:</p></td>
                    <td><p><input  style="width : 30px; heigth : 30px" name="alto"></p></td>
                </tr> 

                </table>
            <input value="Dibujar" name="calcular" type="submit">
            <input value="Borrar" name="" type="reset">
    </fieldset>
    </form>
        <?php
        }
        ?>
    </body>
</html>


<?php

$txt2 ="Nombre: ";
$txt3 ="Apellidos: ";
$txt4 ="Correo electronico: ";
$txt5 ="Pais: ";
$txt6 ="Notificaciones: ";

    if(isset($_POST['submit'])){ 
    $nombreArchivo = "datosPerfil.txt";
    if(file_exists("datosPerfil.txt"))
    {
        $archivo = fopen($nombreArchivo, "w");
        fwrite($archivo, $txt2);
        fwrite($archivo, $_POST['nombre']);
        fwrite($archivo, "<br>");
        fwrite($archivo, $txt3);
        fwrite($archivo,$_POST['apellidos']);
        fwrite($archivo, "<br>");
        fwrite($archivo, $txt4);
        fwrite($archivo,$_POST['ingresacorreo']);
        fwrite($archivo, "<br>");
        fwrite($archivo, $txt5);
        fwrite($archivo,$_POST['entradapais']);
        fwrite($archivo, "<br>");
        fwrite($archivo, $txt6);
        fwrite($archivo, $_POST['Notificaciones']);
        fclose($archivo);
    }
    else
        echo "El fichero no existe";
}
readfile("datosPerfil.txt");
?>
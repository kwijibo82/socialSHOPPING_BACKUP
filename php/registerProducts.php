
<?php
/**
 * Created by PhpStorm.
 * User: meniosxavialex
 * Date: 23/05/15
 * Time: 12:52
 */

//TODO: contatenar las superglobales directamente en el string data_string
//y prescindir de las variables $nombreProducto, $precio, etc...

$nombreProducto = $_POST["nombreProducto"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

$data_string =

    '{
        "record": [
            {
                "ACTIVO": true,
                "DESCRIPCION": "'.$descripcion.'",
                "FECHA_ALTA": "0000-00-00",
                "FECHA_RENOVACION": null,
                "ID_PRODUCTO": null,
                "NOMBRE": "'.$nombreProducto.'",
                "PRECIO": "'.$precio.'",
                "URL_IMAGEN": null,
                "VALOR_RANKING": null
            }
        ]
    }';

echo $data_string;

$ch = curl_init('http://192.168.1.129:8070/rest/Altagora/ma_productos'); //petición al servidor
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //define el método de envio se realiza por $POST[]
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //setemos el valor de la data_string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//setamos headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'X-DreamFactory-Application-Name: Altagora'
));

echo "START";
$result = curl_exec($ch); //ejectuamos petición

echo "DEBUG".$result."END_DEBUG";

//controla que se haya insertado correctamente el registro
if (strpos($result, '"ID_PRODUCTO":')  !== false)
{
    header("Location: http://localhost/socialshopping-PHP/misEscaparates.php#exito");
    die();
}
else{
   // $_POST['insertOK'] = false;
}
    header("Location: http://localhost/socialshopping-PHP/misEscaparates.php#fracaso");
    die();

curl_close($ch);  //cerramos

?>

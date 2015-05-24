<?php

try{

    $data_string =

        '{
            "record": [
           {
               "ID_USUARIO": 69,
               "USER": null,
               "PASSWORD": "xxxx",
               "VENDEDOR": false,
               "COMPRADOR": false,
               "SEXO": null,
               "NOMBRE": "'.$_POST['nombre'].'",
               "APELLIDO": "'.$_POST['apellido'].'",
               "DIRECCION": null,
               "FECHA_NACIMIENTO": null,
               "TELEFONO": null,
               "EMAIL": "'.$_POST['email'].'",
               "CODIGO_POSTAL": null
            }
          ]
        }';


    echo $data_string;

    $ch = curl_init('http://192.168.1.129:8070/rest/Altagora/ma_usuarios'); //petición al servidor
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //define el método de envio se realiza por $POST[]
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //seteamos el valor de la data_string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    //setamos headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-DreamFactory-Application-Name: Altagora'
    ));

    $result = curl_exec($ch); //ejectuamos petición

    echo "DEBUG".$result."END_DEBUG";

    //controla que se haya insertado correctamente el registro
    if (strpos($result, '"ID_USUARIO":')  !== false)
    {
        session_start();
        header("Location: http://localhost/socialshopping-PHP/registroUsuariosForm.php#exitoRegistro");

    }
    else
    {
         header("Location: http://localhost/socialshopping-PHP/registroUsuariosForm.php#fracasoRegistro");
         die();
    }
}
catch (Exception $ex)
{
    echo 'Caught exception: ',  $ex->getMessage(), "\n";
}

?>


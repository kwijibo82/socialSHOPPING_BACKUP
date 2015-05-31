<?php

try{

    $encPass = md5($_POST['pass']);
    $data_string =

        '{
            "record": [
           {
               "ID_USUARIO": null,
               "USER": "'.$_POST['nombre'].'",
               "PASSWORD": "'.$encPass.'",
               "VENDEDOR": true,
               "COMPRADOR": false,
               "SEXO": "'.$_POST['sexo'].'",
               "NOMBRE": "'.$_POST['nombre'].'",
               "APELLIDO": "'.$_POST['apellido'].'",
               "DIRECCION": "'.$_POST['direccion'].'",
               "FECHA_NACIMIENTO": "'.$_POST['fecha'].'",
               "TELEFONO": "'.$_POST['telefono'].'",
               "EMAIL": "'.$_POST['email'].'",
               "CODIGO_POSTAL": "'.$_POST['postalCode'].'"
            }
          ]
        }';

    /*echo $data_string;
    echo "Valor de hidden es: ".$_POST['userIsCorrect'];
    */

    //entramos en esta condición si el valor del input userIsCorrect no ha sido seteado a -1 por el js*/
    if ($_POST['userIsCorrect'] != "-1")
    {

        $ch = curl_init('http://192.168.1.129:8070/rest/Altagora/ma_usuarios'); //petición al servidor
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); //define el método de envio se realiza por $POST[]
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); //seteamos el valor de la data_string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        //setamos headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'X-DreamFactory-Application-Name: Altagora'
        ));

        $result = curl_exec($ch); //ejecutamos petición

        //esta linea es útil para debugar a modo de test de unidad (ver UF2 de ED)
        echo "DEBUG".$result."END_DEBUG";

        //controla que se haya insertado correctamente el registro
        if (strpos($result, '"ID_USUARIO":')  !== false) //comprueba si es idéntico!!!
        {
            session_start();
            //pasamos el nombre de usuario
            $_SESSION['LOGIN'] = $_POST['nombre'];

            if (isset($_SESSION['LOGIN']))
            {
                header("Location: http://localhost/socialshopping-PHP/registroUsuariosForm.html#exitoRegistro");
            }
            else { echo "Variable de sesión no seteada!"; }

        }
        else
        {
            header("Location: http://localhost/socialshopping-PHP/registroUsuariosForm.html#fracasoRegistro");
            die();
        }
    }
    else
    {
        header("Location: http://localhost/socialshopping-PHP/registroUsuariosForm.html#fracasoRegistro");
        die();
    }
}
catch (Exception $ex)
{
    echo 'Caught exception: ',  $ex->getMessage(), "\n";
}

?>


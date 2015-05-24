<?php

    try{

        $data_string =

            '{
                "record": [
                  {
                     "nombre_escaparate": "'.$_POST['nombreEscaparate'].'",
                     "Descripcion":       "'.$_POST['descEscaparate'].'",
                     "Tipo_escaparate":   "666",
                     "url_imagen":        "url_de_la_imagen",
            
                  }
                ]
            }';

        echo $data_string;

        $ch = curl_init('http://192.168.1.129:8070/rest/Altagora/ma_escaparates'); //petición al servidor
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

       // Location();
        //header("Location: dashboard.html");
       // die();

    }

    catch (Exception $ex)
    {
        echo 'Caught exception: ',  $ex->getMessage(), "\n";
    }

?>
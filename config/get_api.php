<?php

  
  $apibaseURL = "https://api-resultadosloterias.com/api/results";
  
 // Verifica si se ha enviado el formulario
  
 if (isset($_POST['consult'])) {
     // Obtiene el valor del formulario

      $loteria = (strval($_POST['loteria']));

      $fecha = strval($_POST['dateL']);
      $apiURL = $apibaseURL . '/' . urlencode($fecha);

      
    } else{
          

     $fecha_actual = date("y-m-d");   
     // URL de la API
     $apiURL = $apibaseURL . '/' . urlencode($fecha_actual);
    } 
    
    // Inicia la sesión cURL
    $ch = curl_init();

      
     // Configura las opciones de cURL
     curl_setopt($ch, CURLOPT_URL, $apiURL);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
     // Ejecuta la solicitud cURL y obtén la respuesta
     $response = curl_exec($ch);
 
     // Verifica si hubo algún error en la solicitud cURL
    if (curl_errno($ch)) {
         echo 'Error en la solicitud cURL: ' . curl_error($ch);
    }
     

    // obtener codigo http
    $httpcode=curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // Cierra la sesión cURL
    curl_close($ch);
     //decodificar en formato JSON

    $data = json_decode($response, true);
 
    if($httpcode===200){
        if($data !== null){
            $encontrado = false;
            $resultados = array();
            foreach($data['data'] as $resultado) {
                if ( $resultado['slug']===$loteria){
                    
                    $resultados [] = $resultado;
                    $encontrado = true;
                    break;
                   
                } 
            }        
            if (!$encontrado){
                $resultados =$data['data'];
            }
            include '../secciones/resultados.php';
                       
        }  else {
            echo"error al decodificar los datos json";
           }
    } else {
        echo "error en la solicitud api. codigo de estado: $httpcode";
    }
           
    
    
          
?>
 

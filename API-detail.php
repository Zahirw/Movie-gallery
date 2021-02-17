<?php 
      if(isset($_GET['id'])){
        $id = $_GET['id'];
      }
      else{
        echo "Not Found";
      }
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://5f50ca542b5a260016e8bfb0.mockapi.io/api/v1/movies/'.$id,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    curl_close($curl);
   // echo $response;
    $someArray = json_decode($response, true);
    //echo $someArray[0]["title"];
    //echo count($someArray);
?>
    
<?php
function gService($method, $url, $header, $data){
    if( $method == 1 ){
        $method_type = 1; // 1 = POST
    }
    elseif( $method == 2 ){
        $method_type = 2; // 2 = DELETE
    }
    else{
        $method_type = 0; // 0 = GET
    }

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);

    if( $header !== 0 ){
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    }

    if( $method_type == 1 or $method_type == 0 ){
        curl_setopt($curl, CURLOPT_POST, $method_type);
    }else{
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
    }

    if( $data !== 0 ){
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }

    $response = curl_exec($curl);
    $json = json_decode($response, true);
    curl_close($curl);

    return $json;
}
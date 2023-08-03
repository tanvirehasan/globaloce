<?php



// Check if the HTTP_X_FORWARDED_FOR header exists
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    // Use the first IP address in the list (actual client IP)
    $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    // Use the default REMOTE_ADDR (might be a proxy's IP)
    $ipAddress = $_SERVER['REMOTE_ADDR'];
}

//Get user data country and city
function user_from($u_info){

    // Check if the HTTP_X_FORWARDED_FOR header exists
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Use the first IP address in the list (actual client IP)
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Use the default REMOTE_ADDR (might be a proxy's IP)
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }


    $ch = curl_init();
    $url = "https://ipgeolocation.abstractapi.com/v1/?api_key=5f5922796be340b8b5c7531f1ee64270&ip_address=1.23.255.255". $ipAddress;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $usercun = json_decode($data, true);
    return $usercun["$u_info"];
    // $usercun['country_code'];
    // $usercun['ip_address'];
}



echo user_from('country_code');
echo user_from('ip_address');
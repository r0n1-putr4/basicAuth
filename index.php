<?php 

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    $response['success'] = "0";
    $response['message'] = "You must enter a valid login ID and password to access this resource\n"; 
    echo json_encode($response);
    exit;
}




if ($user!="admin" || $pass!="admin"){
    authenticate();

} else {
    $response['success'] = "1";
    $response['nohp'] = "123";
    $response['message'] = "Absen bisa diambil pada hari kerja"; 
    echo json_encode($response); 

}
?>
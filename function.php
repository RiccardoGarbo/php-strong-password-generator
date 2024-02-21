<?php 
$pass_length = $_GET['pass_length'];

$generate_password = function($pass_length){ 
    $pass_array = [];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=[]{}|;:,.<>?';
    for ( $i = 0 ; $i <= $pass_length; $i++){
        $random_characters = rand(0, strlen($characters) - 1);
        $pass_array[] = $characters[$random_characters];       
    };
    return implode('', $pass_array);
}
?>
<?php $password = $generate_password($pass_length);?>
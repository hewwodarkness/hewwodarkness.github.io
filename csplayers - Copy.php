<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $file = fopen("emaillist.txt","a+");
    fwrite($file,$email);
    fclose($file); 
    print_r(error_get_last());
}
?>

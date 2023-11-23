<?php
$conn = mysqli_connect('localhost', 'root', '', 'toko_online');
/*check connection*/
if(mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

<?php

include("connector.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM showroom_haidar_table WHERE id_mobil=$id";
    $query = mysqli_query($conn, $sql);

    if($delete) {
        session_start();
        $_SESSION['msg'] = 'dsuccess';
        redirect('../pages/listCar-haidar.php');
    } else {
        session_start();
        $_SESSION['msg'] = 'dfailed';
        return redirect('../pages/listCar-haidar.php');
    }
}
?>
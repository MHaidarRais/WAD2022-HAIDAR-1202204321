
<?php

include("connector.php");

if(isset($_GET['id_mobil'])) {
    $id = $_GET['id_mobil'];
    $sql = "DELETE FROM showroom_haidar_table WHERE id_mobil=$id";
    $query = mysqli_query($conn, $sql);
    redirect('/MODUL3_HAIDAR/pages/listCar-haidar.php');

    // if($query) {
    //     session_start();
    //     $_SESSIOsN['msg'] = 'dsuccess';
    //     redirect('/MODUL3_HAIDAR/pages/listCar-haidar.php');
    // } else {
    //     session_start();
    //     $_SESSION['msg'] = 'dfailed';
    //     return redirect('/MODUL3_HAIDAR/pages/listCar-haidar.php');
    // }
}
?>
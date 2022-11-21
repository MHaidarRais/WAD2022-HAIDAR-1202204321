<?php

if(include("connector.php")) {
    $fileName = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $dirTarget = "../assets/images/";
    $upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

    if($upload) {
        $addMobil = $_POST['mobil'];
        $addOwner = $_POST['pemilik'];
        $addMerk = $_POST['merk'];
        $addDate = $_POST['date'];
        $addDesc = $_POST['deskripsi'];
        $addImgs = $fileName;
        $addPaym = $_POST['pembayaran'];
        $idRandomizer=rand();

        $query = "INSERT INTO showroom_haidar_table (id_mobil,nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) 
                    VALUE ('$idRandomizer','$addMobil', '$addOwner', '$addMerk', '$addDate', '$addDesc', '$addImgs', '$addPaym')";
        $insert = mysqli_query($conn, $query);

        if($insert) {
            session_start();
            $_SESSION['msg'] = 'success';
            header('Location: ../pages/listCar-haidar.php');
            die();
        } else {
            session_start();
            $_SESSION['msg'] = 'failed';
            header('Location: ../pages/listCar-haidar.php');
            die();
        }
    } else {
        echo "Gagal upload gambar";
    }
} else {
    session_start();
    $_SESSION['msg'] = 'cfailed';
    header('Location: ../pages/listCar-haidar.php');
    die();
}

?>
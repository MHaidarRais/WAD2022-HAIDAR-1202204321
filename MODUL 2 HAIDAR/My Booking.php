<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>EAD Rent Car My Booking</title>
</head>
<body>
<?php 
    $noBooking=rand();
    $nama=$_POST['name'];
    $bookDate=date($_POST['bookDate']);
    $duration=$_POST['duration'];
    $clock=date($_POST['clock']);
    $hariMulai = date('d/m/Y', strtotime($bookDate));
    $hariSelesai = date('d/m/Y', strtotime('+'.$duration.'day', strtotime($bookDate)));
    $telp=$_POST['telp'];
    $carType=$_POST['carType'];
    $price=0;
    $service=array();

    if ($carType == "F1 W13 E Performance") {
        $price=2500000*$duration;
    } elseif ($carType == "TVS King Deluxe") {
        $price=15000*$duration;
    } elseif ($carType == "Jagdpanther") {
        $price=200000*$duration;
    }

    if (@$_POST['service1'] == 'on') {
        array_push($service, "Health Protocol");
        $price+=25000;
    } 
    if (@$_POST['service2'] == 'on') {
        array_push($service, "Driver");
        $price+=100000;
    }
    if (@$_POST['service3'] == 'on'){
        array_push($service, "Fuel Filled");
        $price+=250000;
    }

    ?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Booking.html">Booking</a>
                </li>
            </ul>
        </nav>
        <p class="h4 text-center pt-3">Thank you <?php echo $nama ?> for Reserving</p>
        <p class="h5 text-center pb-3">Please double check your reservation details</p>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Number</th>
                        <th>Name</th>
                        <th>Check-in</th>
                        <th>Check-out</th>
                        <th>Car Type</th>
                        <th>Phone Number</th>
                        <th>Service</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <tr>
                        <td><?php echo "$noBooking <br>"; ?></td>
                        <td><?php echo "$nama <br>"; ?></td>
                        <td><?php echo "$hariMulai, $clock<br>"; ?></td>
                        <td><?php echo "$hariSelesai, $clock <br>"; ?></td>
                        <td><?php echo "$carType <br>"; ?></td>
                        <td><?php echo "$telp <br>"; ?></td>
                        <td><?php 
                        if ($service!=NULL){
                            foreach ($service as $value){
                                echo "<li>$value</li>";
                            }
                        } else{
                            echo "No Service";
                        }
                        ?>
                        </td>
                        <td><?php echo "Rp. $price" ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer class="bg-light text-secondary">
        <div class="container-md text-center">
            <p class="p-3 mt-3 mb-0">Created by Muhammad Haidar Rais_1202204321</p>
        </div>
    </footer>
</body>
</html>
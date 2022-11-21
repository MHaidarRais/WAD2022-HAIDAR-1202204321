<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <ul class="nav justify-content bg-primary">
        <li class="nav-item">
            <a class="nav-link text-light bold" href="/MODUL3_HAIDAR/pages/home-haidar.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-white" href="/MODUL3_HAIDAR/pages/add-haidar.php">MyCar</a>
        </li>
        </ul>
    </header>
        <div class="container py-5">
            <h1>Add Car</h1>
            <p>Tambah Mobil Baru Anda ke List Show Room</p>
            <form method="post" action="/MODUL3_HAIDAR/config/insert.php" enctype="multipart/form-data">
                <label for="mobil" class="fw-bold">Nama Mobil</label>
                <input type="text" id="mobil" class="form-control mb-3" name="mobil" placeholder="Nama Mobil" required>
                <label for="pemilik" class="fw-bold">Nama Pemilik</label>
                <input type="text" id="pemilik" class="form-control mb-3" name="pemilik" value="MUHAMMAD HAIDAR RAIS - 1202204321" readonly>
                <label for="merk" class="fw-bold">Merk</label>
                <input type="text" id="merk" class="form-control mb-3" name="merk" placeholder="Merk Mobil" required>
                <label for="date" class="fw-bold">Tanggal Beli</label>
                <input type="date" id="date" class="form-control mb-3" name="date" required>
                <label for="deskripsi" class="fw-bold">Deskripsi</label>
                <textarea id="deskripsi" class="form-control mb-3" name="deskripsi"></textarea>
                <label for="foto" class="fw-bold">Foto</label>
                <input type="file" id="foto" class="form-control mb-3" name="foto">
                <div class="mb-3">
                    <div class="fw-bold">Status Pembayaran</div>
                    <input type="radio" id="lunas" class="form-check-input me-2" name="pembayaran" value="Lunas">
                    <label for="lunas" class="font-weight-bold">Lunas</label>
                    <input type="radio" id="belum" class="form-check-input ms-3 me-2" name="pembayaran" value="Belum Lunas">
                    <label for="belum" class="font-weight-bold">Belum Lunas</label>
                </div>
                <button type="submit" class="form-control btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>

<head>
    <title>TP Modul 4 - Muhammad Haidar Rais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <style>

    </style>
</head>

<body style="background-color: #fef7e6;">

    <div class="row mt-1">
        <div class="col w-25">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Leopard_2_A5_der_Bundeswehr.jpg/1280px-Leopard_2_A5_der_Bundeswehr.jpg"
                alt="Card image" class="image-fluid">
        </div>
        <div class="col w-75">
            <div class="form-signin w-75 mx-auto my-5 py-1 bg-white">
                <form class="m-5" action="/login" method="post">
                    @csrf
                    <p class="h3 mb-3 text-center">Login</p>
                    <hr class="my-4">

                    <div class="mb-3">
                        <label for="floatingInput">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Alamat E-Mail">
                    </div>
                    <div class="mb-3">
                        <label for="floatingPassword">Kata Sandi</label>
                        <input type="password" class="form-control" name="password" placeholder="Kata Sandi Anda">
                    </div>
                    <div class="py-2 text-center">
                        <button type="submit" class="btn btn-primary w-25" name="register">Login</button>
                    </div>
                    <p class="mb-5 pb-lg-2 text-help">Don't have an account?
                        <a href="/register">Register here</a>
                    </p>
                </form>
            </div>
        </div>
        <footer style="background-color: deepskyblue;">
            <div class="container-md text-center p-3 mt-3 mb-0">
                <p class="text-light">©2022 Copyright <a data-bs-toggle="modal"
                        data-bs-target="#identitas">HAIDAR_1202204321</a></p>
            </div>
        </footer>
        <div class="modal fade" id="identitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Created By</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Nama : Muhammad Haidar Rais<br>NIM : 1202204321</p>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

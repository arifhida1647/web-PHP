<!doctype html>
<html lang="en">
<?php
date_default_timezone_set("Asia/Jakarta");
?>

<head>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>porto2</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow bg-gradient fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 " href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item ms-5">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link " href="#card">Aktifitas</a>
                    </li>
                    <li class="nav-item ms-5">
                        <a class="nav-link " href="#tentang">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="jumbotron" class="jumbotron jumbotron-fluid bg-dark text-light mb-5">
        <div class="container justify-content-center text-center">
            <div class="row">
                <div class="col-md mb-5">
                    <img src="arif.JPG" class="img-fluid rounded-3" alt="profile">
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md text-start">
                    <h1>ARIF HIDAYAT. </h1>
                    <p class="mt-5 ">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, hic!</p>


                    <a href="login.php"><button type="button" class="btn btn-primary me-3 btn-lg mt-5">Masuk</button></a>
                    <a href="register.php"><button type="button" class="btn btn-secondary btn-lg mt-5">Daftar</button></a>
                    <br>
                    <p class="mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi me-2 bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg> Nomer Telephone
                    </p>

                    <p> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi me-2 bi-building" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                        </svg> Alamat </p>
                    <p><?php echo (date("D, M - Y H:i")); ?></p>

                </div>
            </div>
        </div>
    </section>
    <section id="tentang" class="">
        <div class="container justify-content-center text-start ">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="text-center mb-5">Tentang</h1>
                </div>

            </div>
            <div class="row  mt-4">
                <div class="col-md mb-5">
                    <h2>Lorem ipsum dolor sit amet consectetur.</h2>
                    <p class="mt-5 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque eos natus, enim maiores quia.</p>
                    <div class="badge bg-primary text-wrap display-1 fs-5 text-center" style="width: 6rem; height: 2rem;">1200+</div>
                    <p class="text-warning text-dark">Lorem ipsum dolor sit amet.</p>
                    <br>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md">
                    <h4 class="text-primary">01 <span class="ms-4 text-dark">Team Of Expert</span></h4>
                    <p id="p1" class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, beatae.</p>

                    <h4 class="text-primary">02<span class="ms-4 text-dark">Front End Web Development</span></h4>
                    <p id="p1" class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, beatae.</p>

                    <h4 class="text-primary ">03<span class="ms-4 text-dark">Back End Web Development</span></h4>
                    <p id="p1" class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, beatae.</p>


                </div>
            </div>
        </div>
    </section>
    <section id="card" class="bg-dark text-light">
        <div class="container text-light mb-5">
            <div class="row justify-content-center">
                <div class="col-md text-center">
                    <h1>Aktivitas</h1>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 text-dark">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div id="contoh1" class="col-md">
                    <div class="card ">
                        <img src="backgroun2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div id="contoh2" class="col-md contoh text1">
                    <div class="card">
                        <img src="backgroun2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row justify-content-center text-center mt-5">
            <div class="col-md">
                <button id="btn1" type="button" class="btn btn-primary btn-lg" onclick="mytest()">Show all</button>
                <button id="btn2" type="button" class="btn btn-primary btn-lg d-none" onclick="mytest2()">Show Minim</button>
            </div>
        </div>
    </section>
    <section id="footer" class="mb-5 mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md">
                    <h1 class="mb-5">Kontak</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md">

                </div>

                <div class="col-md-6 text-start">
                    <div class="alert my-allert alert-warning alert-dismissible fade show d-none" role="alert">
                        <strong>TERIMA KASIH!</strong> Pesan Anda Terkirim
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form name="submit-to-google-sheet">
                        <div class="mb-4">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input name="nama" type="name" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea name="pesan" class="form-control mb-5" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
                        <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm " role="status" aria-hidden="true"></span>
                            mengirim
                        </button>
                    </form>
                </div>
                <div class="col-md">

                </div>
            </div>
        </div>
    </section>
    <footer class="d-flex flex-wrap justify-content-evenly align-items-center py-4  border-top bg-dark">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                </svg>
            </a>
            <span class="text-muted">© <?php echo date("Y") . " "; ?>Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg></a></li>
        </ul>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function mytest() {
            let buton = document.getElementById('btn1');
            let buton2 = document.getElementById('btn2');
            let CurrentItem = 0;
            let show = [...document.querySelectorAll('.contoh')];

            for (let index = 0; index < show.length; index++) {
                show[index].style.display = 'inline-block';
            }

            buton2.classList.toggle('d-none');

            buton.classList.toggle('d-none');

        }

        function mytest2() {
            let buton = document.getElementById('btn1');
            let buton2 = document.getElementById('btn2');
            let CurrentItem = 0;
            let show = [...document.querySelectorAll('.contoh')];

            for (let index = 0; index < show.length; index++) {
                show[index].style.display = 'none';
            }

            buton2.classList.toggle('d-none');

            buton.classList.toggle('d-none');

        }
    </script>
</body>

</html>
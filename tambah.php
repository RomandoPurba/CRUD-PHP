<?php
require_once "db/koneksi.php";
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $posisi = $_POST['posisi'];

  $q = $conn->query("INSERT INTO kariawan VALUES('', '$fname', '$lname', '$email', '$posisi')");

  if ($q) {
    echo "<script>
            alert('Data berhasil ditambah ke database');
          </script>";
  }else {
    echo "<script>
            alert('Input data gagal');
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <main class="d-flex flex-nowrap">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Dashhboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li>
                <a href="index.php" class="nav-link text-white">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  HOME
                </a>
              </li>
              <li>
                <a href="tambah.php" class="nav-link text-white active">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  TAMBAH
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Romando</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
        </div>


        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
          
                <!-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                  <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                  <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                  <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                  <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
                </ul> -->

                <h3> TAMBAH DATA KARIAWAN</h3>
          
                <div class="col-md-3 text-end">
                  <button type="button" class="btn btn-primary">logout</button>
                </div>
              </header>

              <form action="controller/add.php" method="post">
              <div class="container">
                <div class="input-group mb-3">
                    <input type="text" name="fname" class="form-control" placeholder="First Name"  required>
                </div>
                
                <div class="input-group mb-3">
                    <input type="text" name="lname" class="form-control" placeholder="First Name"  required>
                </div>
                  
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email Adress" required>
                </div>

                <div class="input-group mb-3">
                    <select class="form-select" name="posisi" aria-label="Default select example" required>
                        <option value="">Pilih posisi</option>
                        <option value="Maneger">Maneger</option>
                        <option value="Grapich Designer">Grapich Designer</option>
                        <option value="IT">IT</option>
                    </select>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
                </div>

            </form>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
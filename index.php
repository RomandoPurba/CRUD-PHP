<?php
require_once './db/koneksi.php';
$q = $conn->query("SELECT * FROM kariawan")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <main class="d-flex flex-nowrap">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link active" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  HOME
                </a>
              </li>
              <li>
                <a href="tambah.php" class="nav-link text-white">
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
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
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

                <h3>DATA KARIAWAN</h3>
          
                <div class="col-md-3 text-end">
                  <button type="button" class="btn btn-primary">logout</button>
                </div>
              </header>

              <div class="container">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Position</th>
                        <th scope="col" rowspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach($q as $data):
                      ?>
                      <tr>
                        <th scope="row"><?=$i++; ?></th>
                        <td><?= $data['fname']; ?></td>
                        <td><?= $data['lname']; ?></td>
                        <td><a href="mailto:<?= $data['email']; ?>"><?= $data['email']; ?></a></td>
                        <td><?= $data['position']; ?></td>
                        <td>
                            <div class="flex">
                            <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="controller/delete.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                            </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
              </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
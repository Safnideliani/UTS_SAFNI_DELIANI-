<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog | Project4</title>

      <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/sekolahan.jpg" class="brand">
                  <div class="user">Safni Deliani</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/icon home.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kelas_tampil">
                                    <img class="icon" src="layouts/assets/img/icon kelas.png" alt=""> Kelas
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=siswa_tampil">
                                    <img class="icon" src="layouts/assets/img/icon siswa.png" alt=""> Siswa
                              </a>
                        </li><li>
                              <a href="index.php?hal=wali_tampil">
                                    <img class="icon" src="layouts/assets/img/icon wali.png" alt=""> Wali
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Safni Deliani
            </footer>
      </main>

</body>

</html>s
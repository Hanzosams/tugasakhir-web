
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>





  <div class="alert alert-warning" role="alert">
 <li> Jika akun dan password anda ada,silakan log in disini<a href="index.html" class="alert-link">Login</a></li>
  <li>Jika anda belum ada akun silahkan buat disini <a href="buat akun.php" class="alert-link">Buat akun</a></li>. 
</div>





<div class = "container" style="padding: 100px;">
      <div class="card">
  <div class="card-header text-white bg-info">
    Data akun dan pasword
  </div>
  <div class="card-body">
  <table class="table table-bordered table-striped table-hover">
  <thead class="table-success">
    <tr>
    
      <th>Username</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>

    <!-- penampilan data -->

    <?php
require "koneksi.php";

$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_login");
while($data = mysqli_fetch_array($tampil)) :

    ?>
<!-- penampilan data selsai -->

    <tr>
    
      <td><?= $data['username'] ?></td>
      <td><?= $data['password'] ?></td>
      
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
  </div>
</div>
      </div>

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($konek,"select * from petugas where username='$username'
                           and password=md5('$password')");
    $jumlah = mysqli_num_rows($query);
    if ($jumlah > 0) {
        $sesi = mysqli_fecth_assoc($query);

        $_SESSION['id'] = $sesi[id_petugas];
        $_SESSION['username'] = $sesi[username];
        $_SESSION['nama_petugas'] = $sesi[nama_petugas];
        $_SESSION['id_level'] = $sesi[id_level];

        header('Location: index.php');
    }
}
?>


<div class="col-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        Login ke Aplikasi
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="password" class="form-control" required>
                            </div>
                           <button type="sumbit" class="btn btn-info"name="masuk">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
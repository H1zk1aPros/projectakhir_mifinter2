<?php
include "Koneksi.php"; // Memasukkan file koneksi

if(isset($_POST["Register"])) { // Memeriksa apakah tombol Register ditekan

    // Mengambil data dari formulir
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $ConfirmPassword = $_POST['confirm-password'];

    // Memeriksa apakah password dan confirm password sama
    if($Password === $ConfirmPassword) {
        // Menyimpan data ke dalam tabel register
        $Save = mysqli_query($koneksi, "INSERT INTO register (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')");

        if ($Save) {
            echo "<script>alert('Registrasi berhasil!');</script>";
            // Redirect ke halaman setelah registrasi berhasil
            header("Location: login.php");
            exit(); // Menghentikan eksekusi skrip PHP setelah melakukan redirect
        } else {
            echo "<script>alert('Registrasi gagal!');</script>";
        }
    } else {
        echo "<script>alert('Password dan konfirmasi password tidak cocok!');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body, html { height: 100%; margin: 0; font-family: Arial, sans-serif; }
        .bg { background-image: url("brazilian.jpg"); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative; color: white; }
        .overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); }
        .content { position: absolute; top: 50%; left: 25%; transform: translate(-50%, -50%); text-align: center; }
        .login-box { background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); width: 400px; }
        .login-box input { margin-bottom: 10px; }
        .header { background-color: white; padding: 10px 0; text-align: center; }
        .header img { height: 50px; }
        .login-box h3 { color: black; }
    </style>
</head>
<div class="header">
        <img src="logo.png" alt="Jember Combat Club Logo" width="230" height="480"/>
    </div>
    <div class="bg">
        <div class="overlay"></div>
        <div class="content">
            <h1>Welcome to<br>Jember Combat Club</h1>
        </div>
        <div class="login-box position-absolute top-50 end-0 translate-middle-y me-5">
            <br>
            <h3 class="text-center">Register</h3>
            <form method="POST" class="flex flex-col"> <!-- Formulir dengan metode POST -->
               
                    <input type="text" name="name" id="name" placeholder="Your Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
   
                    <input type="email" name="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />

                    <input type="password" name="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
  
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Your Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required />
 <br>
                <input type="submit" name="Register" value="Register" class="btn btn-light w-10" />
            </form>
            <div class="text-left pt-12 pb-12">
            <p style="color: gray;">Already have an account? <a href="login.php" class="underline font-semibold">    Log in here.</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
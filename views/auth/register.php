<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="views/asset/css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="/register" method="POST">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
                <i class='bx bxs-card'></i>
            </div>
            <div class="input-box">
                <input type="text" name="no_telepon" placeholder="No Telepon" required>
                <i class='bx bxs-phone'></i>
            </div>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-container">
                <a class="register" href="/">Login</a>
            </div>
        </form>
    </div>
</body>

</html>
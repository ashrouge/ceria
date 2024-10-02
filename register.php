<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Register | User</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4"><b>Register</b></h2>
    <form action="proses/register.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="nama" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputUsername">Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputTelp">No Telp</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">+62</span>
                    </div>
                    <input type="text" class="form-control" id="inputTelp" placeholder="No Telp" name="telp" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputKonfirmasi">Konfirmasi Password</label>
                <input type="password" class="form-control" id="inputKonfirmasi" placeholder="Konfirmasi Password" name="konfirmasi" required>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

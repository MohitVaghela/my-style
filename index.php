<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
    <link rel="stylesheet" href="../../../css/bootstrap/css/bootstrap.css">
</head>

<body class="bg-dark">
    <div class="container bg-secondary mx-auto w-50 mt-5 pt-3 p-5">
        <div class="">
            <h1 class="text-center text-white">Login To Admin Panel</h1>
            <form action="loginCheck.php" method="POST" class="">
                <label class="text-white my-2" for="">Email Addresss</label>
                <input type="email" name="email" class=" form-control">
                <label class="text-white my-2" for="">Password</label>
                <input type="text" name="password" class=" form-control">
                <button class="btn btn-primary my-2">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Hello there!</h1>
    <p>You logged in using <?= session()->get('email') ?></p>
    <br>

    <p><a href="logout">Logout</a> here</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <section id = "pfp" class = "pfp">
        <div class = "pfp-icon">
            <img src = "assets/profile/profile_img.jpg" class = "pfp-icon">
        </div>
    </section>
    <br>
    <section id = "user-data" class = "user-data">
        <div class = "username">
            <h3><b>Username</b></h3>
            <br>
            <p>{{ $user -> username }}</p>
        </div>
        <br>
        <div class = "email">
            <h3><b>Email</b></h3>
            <br>
            <p>{{ $user -> email }}</p>
        </div>
        <br>
        <div class = "phone">
            <h3><b>Phone Number</b></h3>
            <br>
            <p>{{ $user -> phone }}</p>
        </div>
        <br>
        <div class = "address">
            <h3><b>Address</b></h3>
            <br>
            <p>{{ $user -> address }}</p>
        </div>
    </section>
</body>
</html>

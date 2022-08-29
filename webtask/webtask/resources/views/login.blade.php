<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userlogin" method="post">
        @csrf
        <center>
       USERNAME: <br><br> <input type="email" name="username" placeholder="enter your email">
 <br><br>  PASSWORD: <br> <input type="password" name="password" placeholder="enter your password">
 <br><br>  <input type="submit" name="submit" value="login">
</center>
</form>
</body>
</html>
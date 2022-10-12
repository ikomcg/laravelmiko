<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!-- js -->
    <!-- <script src="js/app.js" defer></script> -->
    <style>
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body{
    background-image: url("../resources/images/bg-registration-form-2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
h1{
    margin-bottom: 30px;
}
body > div{
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;;
    background-color:aliceblue;
    max-width: 450px;
    width: 100%;
}
div.register-container{
    width: 100%;
}
div.register-container form div.d-flex > div{
  width: 100%;
  padding: 0 5px;
}

body .left-img img{
    width: 100%;
}
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

      <div class="d-flex flex-row w-100">
        <div class="register-container p-3" >
        <h1>Registration Form</h1>
        <form action="database/register.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="Email" class="form-control" placeholder="Create Password" id="password" aria-describedby="">
              </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3">Register</button>
          </form>
        </div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <title>Defined You Self</title>
    <style>
    .h1{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
    font-size: 70px;
    margin-top: 80px;
  }
  .conten{
    position:relative;
    top: 290px;
  }
  .bg{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(https://www.pixel4k.com/wp-content/uploads/2021/04/mountains-birds-tree-minimal-4k_1618131711-1536x960.jpg.webp);
    background-size: cover;
    background-position: center ;
  }
    </style>
</head>
<body>
    <div class="bg">
<section class="conten">
    <div class="content">
    <h1><b>Who You Are ?</b></h1>
      <p>you need to defined your self before Login</p>
      <a href="/userlogin">
      <button type="button"><span></span>I'm User</button> 
      <a href="/ownerlogin">
      <button type="button"><span></span>I'm Owner</button>
      </a>
  </div>
</section>    
    </div>
</body>
</html>
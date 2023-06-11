<!DOCTYPE html>
<html lang="en">
<head>
  <title>404 Error Page Challange</title>
    <meta charset="UTF-8">
    <meta name="description" content="404 error page">
    <meta name="keywords" content="error page, html, css,codepen,coding">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">  
</head>
  <style>
     body{
      background:rgba( 150,20, 20,0.9);
      color:white;
    }
.title{
  text-align:center;
  font-size:1.7rem;
  padding-top:3%;
}
.face{
  height:300px;
  width:300px;
  margin:auto;
  border: 2px solid black;
  border-radius:150px;
  background:rgba(50,20, 80,0.3);
  box-shadow:0 5px 5px rgba(31, 28,18,0.73);
    
}
.eye1{
  height:40px;
  width:40px;
  margin-top:56px;
  margin-left:58%;
  border-radius:20px;
  background:black;
}
.eye2{
  height:40px;
  width:40px;
  border-radius:20px;
  margin-top:-39px;
  margin-left: 20%;
  background:black;
}
.mouth{
  height:20px;
  width:200px;
  margin-top:80px;
  margin-left:16%;
  border-radius:180px 180px 20px 20px;
  background:black;
}
h2{
  font-weight:bold;
  font-size:1.8rem;
  text-align:center;
  
}
a:link{
  font-size:1.5rem;
  text-decoration:none;
 text-align:center;
  margin-left:30px;
  color:rgba(255,255,255);
  
}
.button{
  border:5px solid rgba(160,100,150, 0.7);
  padding:10px;
  width:300px;
  height:40px;
  margin-left:auto;
  margin-right:auto;
  border-radius:20px;
  color: white;
}
  </style>

<body>
    <header>       
  <div class="title">
             <h1>Ooops!</h1>
    </div>
  </header>
  
  <div class="face">
    <div class="eye1"></div>
    <div class="eye2"></div>
    <div class="mouth"></div>
    <div class="mouth1"></div> 
  </div>
  
  <div class="description">
    <h2>Error</h2>
    <h2>Email Atau Password Salah!</h2>
    <a href="login.php" alt="" class="title">
        <div class="button">
        Go back to login
      </div>
      </a>
</body>
</html>

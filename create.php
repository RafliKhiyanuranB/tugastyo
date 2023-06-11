<?php 
  include 'cek-login.php';
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap">
    <style>
      body {
        font-family: 'Noto Sans JP', sans-serif;
      }

      .container {
        padding: 16px;
      }

      h1,
      label {
        color: DodgerBlue;
      }

      input[type=text],
      input[type=password] {
        display: inline-block;
        width: 95%;
        margin: 5px 0 22px 0;
        padding: 15px;
        border-radius: 15px;
        border: none;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
      }

      input[type=text]:focus,
      input[type=password]:focus {
        outline: none;
      }

      hr {
        margin-bottom: 25px;
        border: 1px solid #f1f1f1;
      }

      button {
        width: 100%;
        margin: 8px 0;
        padding: 14px 20px;
        border-radius: 15px;
        border: none;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        opacity: 0.9;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
      }

      button:hover {
        opacity: 1;
      }

      .cancelbtn {
        background-color: #f44336;
        padding: 14px 20px;
      }

      .signupbtn {
        float: left;
      }

      .close {
        float: left;
        width: 10%;
        background-color: #f44336;
      }

      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
    </style>
    <script>
      function previewImage() {
    var file = document.getElementById('img').files[0];
    var reader = new FileReader();


    reader.onload = function(e) {
        var previewImage = document.getElementById('preview');
        previewImage.src = e.target.result;
    }

    reader.readAsDataURL(file);

}
    </script>
  </head>
  <body>
    <a href="index.php">
      <button class="close" name="batal" value="batal">
        Batal
      </button>
    </a><br>

    <form action="create-proses.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <h1 class="title">Tambah Data User</h1>
        <hr>

        <div class="col-md-12 mt-3">
            <div class="col-md-12">
              <img src="" alt="Empty Image" width="150" id="preview" ><br>
                <label class="form-label">Gambar</label>
                <input type="file" name="img" id="img" accept="image/*" onchange="previewImage()">
                <br>
          </div>
        </div>

        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Username" name="username" required>

        <label for="email"><b>Email:</b></label>
        <input type="text" placeholder="xxx@gmail.com" name="email" required>

        <label for="user_password"><b>Password:</b></label>
        <input type="password" placeholder="Password" name="user_password" required>

        <div class="clearfix">
          <button type="submit" class="signupbtn" name="tambah" value="Tambah">Simpan</button>
        </div>
      </div>
    </form>
  </body>
</html>

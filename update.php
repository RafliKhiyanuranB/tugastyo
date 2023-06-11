<?php include('cek-login.php'); ?>
<?php include('header.php'); ?>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
* {box-sizing: border-box}
body{
  font-family: 'Noto Sans JP', sans-serif;
}
h1, label{
  color: DodgerBlue;
}
/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  width:100%;
  resize: vertical;
  padding:15px;
  border-radius:15px;
  border:0;
  box-shadow:4px 4px 10px rgba(0,0,0,0.2);
}

input[type=text]:focus, input[type=password]:focus {
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.signupbtn {
  float: left;
  width: 100%;
  border-radius:15px;
  border:0;
  box-shadow:4px 4px 10px rgba(0,0,0,0.2);
}

.close {
  float: left;
  width: 10%;
  border-radius:15px;
  border:0;
  box-shadow:4px 4px 10px rgba(0,0,0,0.2);
  background-color: #f44336;
}

.container {
  padding: 16px;
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

<?php

include('koneksi.php');

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($result) == 0){

	echo '<script>window.history.back()</script>';

}else{

	$data = mysqli_fetch_assoc($result);

}
?>
<a href="index.php">
  <button  class="close" name="batal" value="batal">
    Batal
  </button>
</a><br>
<form action="update-proses.php" method="post" enctype="multipart/form-data">
	<div class="container">
		<h1 class="title">Edit Data User : <?php echo $data['username']; ?></h1>
		<hr>

    <div class="col-md-12 mt-3">
            <div class="col-md-12">
              <img src="img\<?= $data['img'] ?>" width="200" id="preview" class="mt-3"><br>
                <label class="form-label">Gambar</label>
                <input type="file" name="img" id="img" accept="image/*" onchange="previewImage()">
                <br>
          </div>
        </div>

		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label for="email"><b>Username</b></label>
		<input type="text" placeholder="Username" name="username"  value="<?php echo $data['username']; ?>" required>

		<label for="psw"><b>Email</b></label>
		<input type="text" placeholder="xxx@gmail.com"  value="<?php echo $data['email']; ?>" name="email" required>


		<div class="clearfix">
			<td>&nbsp;</td>
			<button type="submit" class="signupbtn" name="simpan" value="Simpan">Simpan</button>
  		</div>
	</div>
</form>


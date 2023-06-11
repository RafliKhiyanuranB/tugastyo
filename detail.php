<?php
    include('cek-login.php');
    include('header.php');
    include('koneksi.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($result) == 0) {
        echo '<script>window.history.back()</script>';
    } else {
        $data = mysqli_fetch_assoc($result);
    }
?>

<style>
  .container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin: 50px 300px;
    background-color: #C1D0B5;
    padding-bottom: 30px;
    border-radius: 20px;
}

.left {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    margin-right: 50px;
}

.right {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

h1 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 30px;
}

label {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    margin-bottom: 20px;
    font-size: 16px;
}

button {
    background-color: #f44336;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

button:hover {
    background-color: #d32f2f;
}

#preview {
    margin-top: 30px;
    border-radius: 5px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
}

</style>

<div class="container">
    <div class="left">
        <h1>Detail User</h1>
        <form>
            <label for="email">Username</label>
            <input type="email" name="name" id="email" value="<?= $data['username'] ?>" readonly>
            <label for="password">Email</label>
            <input type="text" name="password" id="password" value="<?= $data['email'] ?>" readonly>
        </form>
        <a href="index.php">
          <button  class="close" name="batal" value="batal">
            Batal
          </button>
        </a>
    </div>
    <div class="right">
        <img src="img/<?= $data['img'] ?>" width="200" id="preview" class="mt-3">
    </div>
</div>

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

<!DOCTYPE html>
<html>
<head>
	<title>Berhasil</title>
	<style>
		.modal {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,0.5);
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 9999;
		}
		.modal-content {
			background-color: #fff;
			border-radius: 5px;
			padding: 20px;
			width: 300px;
			text-align: center;
		}
		.modal-header {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		.modal-body {
			font-size: 18px;
			margin-bottom: 20px;
		}
		.modal-button {
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 18px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		.modal-button:hover {
			background-color: #0069d9;
		}
	</style>
</head>
<body>

<?php
if(isset($_GET['id'])){
    include('koneksi.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE id='$id'";
    if(mysqli_query($koneksi, $sql)){
        echo '<div class="modal">
                  <div class="modal-content">
                      <div class="modal-header">Sukses!</div>
                      <div class="modal-body">Data user berhasil dihapus!</div>
                      <button class="modal-button" onclick="location.href=\'index.php\'">OK</button>
                  </div>
              </div>';
    }else{
        echo '<div class="modal">
                  <div class="modal-content">
                      <div class="modal-header">Gagal!</div>
                      <div class="modal-body">Gagal menghapus data user!</div>
                      <button class="modal-button" onclick="location.href=\'index.php\'">OK</button>
                  </div>
              </div>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>

</body>
</html>

<?php
if(isset($_POST['simpan'])){
    include('koneksi.php');
    $id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
    $img = null;

    // jika ada file gambar yang diunggah
    if(isset($_FILES['img']) && $_FILES['img']['size'] > 0) {
        $img = $_FILES['img'];
        $img_name = uniqid() . '_' . $img['name'];
        $img_path = "img/" . $img_name;
        move_uploaded_file($img['tmp_name'], $img_path);
    } else {
        // ambil data gambar yang sudah ada
        $sqlImg = "SELECT img FROM user WHERE id=?";
        $stmt = $koneksi->prepare($sqlImg);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $resultImg = $stmt->get_result();
        $rowImg = $resultImg->fetch_assoc();
        $img_name = $rowImg['img'];
    }

    $sql = "UPDATE user SET username=?, email=?, img=? WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param('sssi', $username, $email, $img_name, $id);

    if($stmt->execute()){
        echo '<div style="background-color: #d4edda; border-color: #c3e6cb; color: #155724; padding: 10px; border-radius: 5px;">
        <strong>Sukses!</strong> Data berhasil di simpan. <a href="index.php" style="text-decoration:none; color:#155724;">Kembali ke halaman utama</a>
        </div>';    
    }else{
        echo '<div style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24; padding: 10px; border-radius: 5px;">
        <strong>Gagal!</strong> Gagal menyimpan data. <a href="index.php" style="text-decoration:none; color:#721c24;">Kembali ke halaman utama</a>
        </div>';    
    }
} else {
    header("Location: index.php");
    exit();
}
?>

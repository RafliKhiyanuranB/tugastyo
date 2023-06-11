<?php 
include 'cek-login.php';
include 'header.php';
include 'koneksi.php';

// Menangani request filter
$filter = "";
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    $sql = "SELECT * FROM user WHERE username LIKE '%$filter%' ORDER BY id DESC";
} else {
    $sql = "SELECT * FROM user ORDER BY id DESC";
}

// Pagination
$results_per_page = 3;
$result = mysqli_query($koneksi, $sql);
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$this_page_first_result = ($page - 1) * $results_per_page;
$sql .= " LIMIT $this_page_first_result, $results_per_page";
$result = mysqli_query($koneksi, $sql);

?>

<div class="container">
    <div class="tbcover">
      <link rel="stylesheet" href="css/index.css">
			<a href="create.php" class="btn-tambah">Tambah baru</a>
			<form method="get">
				<input class="input" name="filter" id="filter" value="<?php echo $filter; ?>" placeholder="Search..." type="search">
				<button class="button" type="submit">
					<span class="button-content">Cari </span>
				</button>
			</form>
        <div class="cards">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)){ 
                    echo '<div class="card">';
                    echo '<img class="image" src="img/' . $data['img'] . '" alt="' . $data['img'] . '">'; 
                    echo '<h3 class="card-title">'.$data['username'].'</h3>';
                    echo '<div class="card-content">';
                    echo '<p class="card-email">'.$data['email'].'</p>'; 
                    echo '<p class="card-options"><a class="ubah" href="update.php?id='.$data['id'].'">Edit</a> | <a class="ubah" href="detail.php?id='.$data['id'].'">Detail</a> | <a class="hapus" href="delete.php?id='.$data['id'].'" onclick="return confirm(\'Anda Yakin Untuk Menghapus Data ini?\')">Hapus</a> ';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="no-data">Data tidak ditemukan</p>';
            }
            mysqli_close($koneksi);
            ?>
        </div>
        <div class="pagination">
            <?php for ($page=1; $page<=$number_of_pages; $page++) { ?>
                <a class="pagination__link <?php if ($page == $current_page) echo 'pagination__link--active'; ?>"
                    href="index.php?page=<?php echo $page; ?>">
                    <?php echo $page; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

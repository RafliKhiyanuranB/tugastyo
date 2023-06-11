<!DOCTYPE html>
<html>
<head>
	<title>CRUD php</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		.text{
			color: white;
		}
		.header {
			background-color: #146C94;
			color: #fff;
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			padding: 1rem;
		}

		.logo {
			display: flex;
			align-items: center;
			font-size: 1.5rem;
		}

		.logo i {
			margin-right: 0.5rem;
		}

		.navbar {
			display: flex;
			flex-direction: row;
			align-items: center;
		}

		.navbar a {
			color: #fff;
			padding: 0.5rem;
			margin: 0 1rem;
			text-decoration: none;
			font-weight: bold;
			font-size: 1.1rem;
			transition: color 0.2s ease-in-out;
		}

		.navbar a:hover {
			color: #BBB;
			cursor: pointer;
		}

		#menu-btn {
			display: none;
		}

		 @media screen and (max-width: 768px) {
			 .header {
				 flex-direction: column;
				 align-items: center;
			 }

			 .navbar {
				 flex-direction: column;
				 margin-top: 1rem;
				 display: none;
			 }

			 .navbar a {
				 margin: 0;
				 padding: 1rem 0;
				 display: block;
				 text-align: center;
			 }

			 #menu-btn {
				 display: block;
				 text-align: right;
				 cursor: pointer;
				 font-size: 1.5rem;
			 }
		 }
	</style>
</head>
<body>
	<header class="header">
		<div class="logo">
			<i class="fas fa-font"></i>
			<a href="index.php" class="text">TyoUniverse</a>
		</div>

		<div id="menu-btn">
			<i class="fas fa-bars"></i>
		</div>

		<nav class="navbar">
			<a href="index.php">Home</a>
			<a href="logout.php">Logout</a>
		</nav>
	</header>

	<script>
		const menuBtn = document.querySelector('#menu-btn');
		const navbar = document.querySelector('.navbar');

		menuBtn.addEventListener('click', () => {
			navbar.classList.toggle('show');
		});
	</script>
</body>
</html>

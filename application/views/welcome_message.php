<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Description" CONTENT="Author: A.N. Khoironi, Software Enginerr dan UI UX Design ">
	<meta name="google-site-verification" content="" />
	<title><?= $title; ?></title>
	<meta name="robots" content="index,follow">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!----My Css-->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">


</head>

<body>

	<!---Start nav-->

	<div class="container fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="<?= base_url() ?>"><?= $title; ?>.net</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#about">About<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>

				</ul>
			</div>
		</nav>
	</div>

	<!---End nav-->

	<!---Start header-->

	<section>
		<div class="container-fluid pt-5 ">
			<div class="row pt-5 pb-5 justify-content-center">
				<div class="col-md-5 header">
					<img src="<?= base_url('assets/img/Component 5 – 1.png') ?>">
					<p class="hello">Hello I am <br><span><?= $title;  ?></span></p>


				</div>
			</div>
		</div>
	</section>

	<!---End header-->


	<!---Start specilizing-->

	<section id="specilizing" class="specilizing">
		<div class="container pt-2">
			<div class="row mb-4">
				<div class="col text-center">
					<h2>Specilizing In</h2>

				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-4">
					<p>Software enginerr and UI_UX Design.</p>
				</div>

			</div>

		</div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-2 box">
					<img src="<?= base_url('assets/img/thumb/codeigniter.png')  ?>" alt="Codeigniter" class="img-thumbnail">
					<h6>Codeigniter</h6>
				</div>

				<div class="col-lg-2 box">
					<img src="<?= base_url('assets/img/thumb/laravel.png')  ?>" alt="Laravel" class="img-thumbnail">
					<h6>Laravel</h6>
				</div>

				<div class="col-lg-2 box">
					<img src="<?= base_url('assets/img/thumb/bootstrap.png')  ?>" alt="..." class="img-thumbnail">
					<h6>Bootstrap</h6>
				</div>

				<div class="col-lg-2 box">
					<img src="<?= base_url('assets/img/thumb/vue.png')  ?>" alt="..." class="img-thumbnail">
					<h6>Vue.js</h6>
				</div>

			</div>


			<div class="row justify-content-center drone">
				<div class="col-lg-8">
					<img src="<?= base_url('assets/img/Component 10 – 1.png') ?>">

				</div>
			</div>
		</div>

	</section>

	<!---End specilizing-->

	<!---Start portfolio-->

	<section id="portfolio" class="portfolio pb-4">
		<div class="container">
			<div class="row mb-4 pt-4">
				<div class="col">
					<h2>Portfolio</h2>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md">
					<div class="card">
						<img src="<?= base_url('assets/img/portfolio1.png') ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h6>My code my Future</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>

				<div class="col-md">
					<div class="card">
						<img src="<?= base_url('assets/img/portfolio2.png') ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h6>My code my Future</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>

				<div class="col-md">
					<div class="card">
						<img src="<?= base_url('assets/img/portfolio3.png') ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h6>My code my Future</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!---End portfolio-->


	<!---Start quotes-->

	<section id="quotes" class="quotes">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<img src="<?= base_url('assets/img/khoironi.png') ?>">
				</div>
			</div>

			<div class="row">
				<div class="col">
					<p>" Impianku mungkin sama denganmu tapi jalan terjalku berbeda
						<br>batu yang membuat kaki tersandung bermacam besarnya
						<br> setiap hari kuhancurkan batu itu dan kuciptkan impian itu. "</p>
				</div>
			</div>
		</div>

	</section>

	<!---End quotes-->

	<!---Start about-->

	<section id="about" class="about mb-4">
		<div class="container">
			<div class="row pt-4 mb-4">
				<div class="col text-center">
					<h2>About</h2>

				</div>
			</div>

			<div class="row justify-content-center">



			</div>
		</div>
	</section>

	<!---End about-->

	<!---Start footer-->

	<footer class="text-dark">
		<div class="container">
			<div class="row pt-3">
				<div class="col text-center">
					<p>Copyright KHOIRONI.NET <?= date('Y'); ?></p>
				</div>
			</div>
		</div>
	</footer>

	<!---End footer-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
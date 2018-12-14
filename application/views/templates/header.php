<html>
	<head>
			<title>CodeIgniter News Page</title>
			<link rel="stylesheet" href="<?=base_url('public/css/')?>app.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>

	<body>
	<nav class="menu">
		<ul class="nav justify-content-center">
			<li class="nav-item"><a class="nav-link active" href="<?=base_url('/')?>">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=base_url('news')?>">News</a></li>
			<li class="nav-item"><a class="nav-link" href="<?=base_url('news/create')?>">Write</a></li>
		</ul>
	</nav>

	<section id="conteudo">

		<div class="container">
			<h1><?php echo $title; ?></h1>
			<p><?= $desc ?></p>
		</div>

	</section>


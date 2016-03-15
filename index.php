<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Example Application | Welcome</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.css">
</head>
<body>

<div class="top-bar">
	<div class="top-bar-left">
		<ul class="menu">
			<li class="menu-text"><?= $faker->company; ?></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<ul class="menu">
			<?php for($i = 0; $i < 3; $i++): ?>
			<li><a href="#"><?= $faker->word; ?></a></li>
			<?php endfor; ?>
		</ul>
	</div>
</div>

<div class="callout large primary">
	<div class="row column text-center">
		<h1>Our Blog</h1>
	</div>
</div>
<div class="row" id="content">
	<div class="medium-8 columns">
		<?php for($i = 0; $i < 3; $i++): ?>
		<div class="blog-post">
			<h3><?= $faker->words($faker->numberBetween(3, 7)); ?>
				<small><?= $faker->date('m/d/Y'); ?></small>
			</h3>
			<img class="thumbnail" src="<?= $faker->imageUrl(850, 350); ?>">
			<p><?= $faker->sentences(); ?></p>
			<div class="callout">
				<ul class="menu simple">
					<li><a href="#">Author: <?= $faker->name; ?></a></li>
					<li><a href="#">Comments: <?= $faker->randomNumber(2); ?></a></li>
				</ul>
			</div>
		</div>
		<?php endfor; ?>
	</div>
	<div class="medium-3 columns" data-sticky-container>
		<div class="sticky" data-sticky data-anchor="content">
			<h4>Categories</h4>
			<ul>
				<?php for($i = 0; $i < $faker->randomDigitNotNull; $i++): ?>
					<li><a href="#"><?= $faker->word; ?></a></li>
				<?php endfor; ?>
			</ul>
			<h4>Authors</h4>
			<ul>
				<?php for($i = 0; $i < $faker->randomDigitNotNull; $i++): ?>
				<li><a href="#"><?= $faker->firstName(); ?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
<div class="row column">
	<ul class="pagination" role="navigation" aria-label="Pagination">
		<li class="disabled">Previous</li>
		<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
		<li><a href="#" aria-label="Page 2">2</a></li>
		<li><a href="#" aria-label="Page 3">3</a></li>
		<li><a href="#" aria-label="Page 4">4</a></li>
		<li class="ellipsis"></li>
		<li><a href="#" aria-label="Page 12">12</a></li>
		<li><a href="#" aria-label="Page 13">13</a></li>
		<li><a href="#" aria-label="Next page">Next</a></li>
	</ul>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.js"></script>
<script>
	$(document).foundation();
</script>
</body>
</html>

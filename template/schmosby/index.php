<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tune of the Day</title>
	<link rel="shortcut icon" type="image/png" href="<?php template_folder(); ?>img/favicon.png">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic' rel='stylesheet'>
	<link rel="stylesheet" href="<?php template_folder(); ?>style.css">
</head>
<body>
	<a href="https://github.com/verwebbt/tune-otd"><img class="git-badge" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
	<h1>Tune of the day</h1>

	<section class="main">
		<time class="time" datetime="<?php tune_date('Y-m-d H:i'); ?>" pubdate><?php tune_date('j. F Y – H:i'); ?></time>
		<iframe src="https://embed.spotify.com/?uri=<?php tune_uri(); ?>" width="400" height="480" frameborder="0" allowtransparency="true"></iframe>
	</section>

	<section class="list">
<?php while(have_tunes()): ?>
		<time class="time" datetime="<?php tune_date('Y-m-d H:i'); ?>" pubdate><?php tune_date('j. F Y – H:i'); ?></time>
		<iframe src="https://embed.spotify.com/?uri=<?php tune_uri(); ?>" width="400" height="80" frameborder="0" allowtransparency="true"></iframe>
<?php endwhile; ?>
	</section>

</body>
</html>
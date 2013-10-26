<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Playlist – Tune of the Day</title>
	<link rel="shortcut icon" type="image/png" href="<?php template_folder(); ?>img/favicon.png">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic' rel='stylesheet'>
	<link rel="stylesheet" href="<?php template_folder(); ?>style.css">
</head>
<body>
	<a href="https://github.com/verwebbt/tune-otd"><img class="git-badge" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
	<h1>Tune of the day – Playlist</h1>

	<section class="main">
		<time class="time" datetime="<?php tune_date('Y-m-d H:i'); ?>" pubdate>Last updated on <?php tune_date('j. F Y – H:i'); ?></time>
		<iframe src="https://embed.spotify.com/?uri=spotify:trackset:Tune%20of%20the%20day%20:<?php all_tune_uri(); ?>" width="400" height="480" frameborder="0" allowtransparency="true"></iframe>
	</section>

</body>
</html>
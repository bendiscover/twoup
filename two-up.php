<!DOCTYPE html>
<html>
	<head>
  <title>Online Two-Up</title>
  <link rel="stylesheet"
    type="text/css"
    href="/reset.css" />
  <link rel="stylesheet"
    type="text/css"
    href="/styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<script data-ad-client="ca-pub-2374904224864526" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164475509-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164475509-1');
</script>
<body>

<span class='banner_top'>
<center>
	<a href="https://t.cfjump.com/68264/b/126778" referrerpolicy="no-referrer-when-downgrade" rel="nofollow noindex" onmousedown="this.rel = 'nofollow noindex';"><img style="border: none; vertical-align: middle;" alt="" referrerpolicy="no-referrer-when-downgrade" loading="lazy" src="https://t.cfjump.com/68264/a/126778" /></a>
</center>
</span>

<?php

$countdown_before = '<center><div class="countdown">
		<script language="JavaScript">
				TargetDate = "04/25/2020 12:00 AM";
				BackColor = "#00843D";
				ForeColor = "#FFCD00";
				CountActive = true;
				CountStepper = -1;
				LeadingZero = true;
				DisplayFormat = "Two-up begins in %%D%% Days, %%H%% Hours, %%M%% Minutes, and %%S%% Seconds!";
				FinishMessage = "";
			</script>
			<script language="JavaScript" src="https://rhashemian.github.io/js/countdown.js"></script>
</div></center>';

$countdown_after = '<center><div class="countdown2">
		<script language="JavaScript">
				TargetDate = "04/26/2020 12:00 AM";
				BackColor = "#00843D";
				ForeColor = "#FFCD00";
				CountActive = true;
				CountStepper = -1;
				LeadingZero = true;
				DisplayFormat = "Two-up finishes in %%H%% Hours, %%M%% Minutes, and %%S%% Seconds!";
				FinishMessage = "";
			</script>
			<script language="JavaScript" src="https://rhashemian.github.io/js/countdown.js"></script>
</div></center>';


$flip1 = rand(1,2);
$flip2 = rand(1,2);
$flip3 = rand(1,2);

$headsimageURL = 'https://www.discover.earth/wp-content/uploads/2020/04/Penny-heads-min.gif';
$tailsimageURL = 'https://www.discover.earth/wp-content/uploads/2020/04/Penny-tails-min.gif';

$adsence = '<div class=\"right-inner\">
            <center width=\"96% class=\"img-responsive center-block\">
                            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- quiz_net -->
              <ins class=\"adsbygoogle\"
                 style=\"display:block\"
                 data-ad-client=\"$client\"
                 data-ad-slot=\"$slot\"
                 data-ad-format=\"auto\"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </center>
</div>';

		if ($flip1 == '1') {
			$image1 = $headsimageURL;
			$result1 = "Heads!!";
		} elseif ($flip1 == '2') {
			$image1 = $tailsimageURL;
			$result1 = "Tails!!";
		}

		if ($flip2 == '1') {
			$image2 = $headsimageURL;
			$result2 = "Heads!!";
		} elseif ($flip2 == '2') {
			$image2 = $tailsimageURL;
			$result2 = "Tails!!";
		}

		if ($flip3 == '1') {
			$image3 = $headsimageURL;
			$result3 = "Heads!!";
		} elseif ($flip3 == '2') {
			$image3 = $tailsimageURL;
			$result3 = "Tails!!";
		}

		$game = "<h1>Online Two-Up</h1>
    <p>For the Australian in social-isolation</p>
    <div class='new-game'>
<a class='aussie-btn' href='/two-coins.php'>SPIN TWO</a>
<a class='aussie-btn' onClick='history.go(0)'>SPIN THREE</a>
    </div>

<div class='results'>
<div class='result'>
$result1
		<br />
		<img src='$image1' alt='online two-up coin 1'>
</div>
<div class='result'>
$result2
		<br>
		<img src='$image2' alt='online two-up coin 2'>
</div>
<div class='result'>
$result3
		<br />
		<img src='$image3' alt='online two-up coin 3'>
</div>
</div>
		<p class='disclaimer'><u>Disclaimers:</u>
		<br>
		RCG #CCH10616698
		<br>
		Available only on April 25, August 15, or November 11 as per the Gambling (Two-up) Act 1998.
		<br>
		Two-up may only be played in Australia as social entertainment or as a fundraiser by a registered club.
		<br>
		Some links on this website are affiliate links of which we receive a small commission from the sale of certain items, but the price remains the same for you.</p>
		<br>";
?>

<?php
		$admin_button = '<p><a href="https://onlinetwoup.com/two-up.php">Click here for Admin use only</a></p>';

		$date_now = date("Y-m-d"); // this format is string comparable
//			$date_now = new DateTime("now", new DateTimeZone('Australia/Sydney') );
//			echo $date->format('Y-m-d H:i:s');


			if ($date_now > '2020-04-25') {
				echo $adsence;
				echo $countdown_after;
				echo $game;
			} else{
				echo $adsence;
				echo $countdown_before;
       }

?>

<span class='banner_bottom'>
<center>
	<a href="https://t.cfjump.com/68264/b/112820" referrerpolicy="no-referrer-when-downgrade" rel="nofollow noindex" onmousedown="this.rel = 'nofollow noindex';"><img style="border: none; vertical-align: middle;" alt="" referrerpolicy="no-referrer-when-downgrade" loading="lazy" src="https://t.cfjump.com/68264/a/112820" /></a>
</center>
</span>


</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us - The Iris Lover</title>
  <meta name="description" content="All about the team behind The Iris Lover">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
 
 <script>
	function switchpic() {
		var pic_id = document.getElementById('gardenpic');
		if (pic_id.src.match("images/japaneseiris.jpg")) {
			pic_id.src = "images/tiedye_iris.jpg";
		}
		else {
			pic_id.src = "images/japaneseiris.jpg";
		}
	}
</script>
	
</head>

<body>

<header class="banner">
	
	<?php include('includes/banner.php');?>
	
</header>

<div class="wrapper">

<main>
	
<h2>About The Iris Lover</h2>

<img src="images/side_garden.jpg" alt="A picture of our side garden" width="572" height="300">

<p>We are a family of iris lovers and growers from northern New Jersey. Mom has loved irises since forever and loves to learn about the different varieties. Dad loves gardening, growing pretty flowers, and making his wife smile. Our kids have grown up appreciating the stunning beauty that can grow in your very own backyard and now help us to share it with the world.</p>

<p>Together, we care for many different plants, but we have more irises than any other, by far. We estimate we have over 300 rhizomes!</p>

<h3 class="no-print">Enjoy the latest pictures from our garden!</h3>

<img id="gardenpic" src="images/japaneseiris.jpg" alt="new garden pictures" width="300" height="345">

<button class="no-print" onclick="switchpic()">Click here for another picture</button>

<p><a href="#">return to top</a></p>

</main>

<aside class="sidebar">


<h2>Irises Forever</h2>

<p>Here is a picture of the iris tattoo that Mom got with our youngest kid before they left for college, so they'll always share the beauty of the iris together.</p>

<img src="images/iris_tattoo.jpg" alt="A picture of an iris tattoo"
width="200" height="324">

</aside>

</div> <!-- end of wrapper div -->

<footer class="site-footer">

<?php include('includes/copyslogan.php');?>

</footer>

</body>
</html>
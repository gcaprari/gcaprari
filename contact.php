<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Keep in Touch - The Iris Lover</title>
  <meta name="description" content="Keep in touch with The Iris Lover by filling out this form.">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
</head>

<body>

<header class="banner">
	
	<?php include('includes/banner.php');?>
	
</header>

<div class="wrapper">

<main>

<h2>Let's stay in touch!</h2>

<p>Sign up here to be notified of any news or updates.</p>

<?php print $formMessage;?>

<form method="post">
	
	<h3>Tell us about yourself</h3>
		
	<label>Name <input type="text" id="Name" name="Name" value="<?php if (isset($_POST['Name'])) {echo $_POST['Name'];}?>"></label>
  
	<label>Email <input type="text" id="Email" name="Email" value="<?php if (isset($_POST['Email'])) {echo $_POST['Email'];}?>"></label>

	<label for="Region">Where do you live?</label>
		<select id="Region" name="Region">
			<option value="US" <?php if (isset($_POST['Region']) && $_POST['Region'] == 'US') {echo " selected";}?>>United States</option>
			<option value="Canada" <?php if (isset($_POST['Region']) && $_POST['Region'] == 'Canada') {echo " selected";}?>>Canada</option>
			<option value="Mexico" <?php if (isset($_POST['Region']) && $_POST['Region'] == 'Mexico') {echo " selected";}?>>Mexico</option>
			<option value="Europe" <?php if (isset($_POST['Region']) && $_POST['Region'] == 'Europe') {echo " selected";}?>>Europe</option>
			<option value="Asia" <?php if (isset($_POST['Region']) && $_POST['Region'] == 'Asia') {echo " selected";}?>>Asia</option>
		</select>
	
	<h3> Tell us about your garden</h3>
	
	<fieldset>
	
		<legend>Size</legend>
		
			<label>large <input type="radio" name="Size" value="large with multiple beds" <?php if (isset($_POST['Size']) && $_POST['Size'] == 'large with multiple beds') {echo " checked";}?>></label>
			
			<label>small <input type="radio" name="Size" value="one garden bed" <?php if (isset($_POST['Size']) && $_POST['Size'] == 'one garden bed') {echo " checked";}?>></label>
			
			<label>containers <input type="radio" name="Size" value="containers or window boxes" <?php if (isset($_POST['Size']) && $_POST['Size'] == 'containers or window boxes') {echo " checked";}?>></label>
	
	</fieldset>

	<fieldset>
	
		<legend>Plants</legend>	
		
			<label>irises <input type="checkbox" name="Plants[]" id="irises" value="irises"<?php if(isset($_POST['Plants']) && in_array('irises',$_POST['Plants'])) {echo " checked";}?>></label>
			
			<label>other flowers <input type="checkbox" name="Plants[]" id="other_flowers" value="other flowers"<?php if(isset($_POST['Plants']) && in_array('other_flowers',$_POST['Plants'])) {echo " checked";}?>></label>
			
			<label>vegetables <input type="checkbox" name="Plants[]" id="vegetables" value="vegetables"<?php if(isset($_POST['Plants']) && in_array('vegetables',$_POST['Plants'])) {echo " checked";}?>></label>
  
  	</fieldset>
		
	<label for="Suggestions">What else would you like to see on The Iris Lover website? </label>
	<textarea name="Suggestions" id="Suggestions"><?php if (isset($_POST['Suggestions'])) {echo $_POST['Suggestions'];}?></textarea>
		
			
	<input class="no-print" type="submit" value="Sign me up!">

</form>
		
</main>

<aside class="sidebar">


<h2>Recent Updates</h2>

<ul>
	<li>New links added to home page</li>
	<li>New pictures from our home garden added to site</li>
	<li>All pages updated</li>
	<li>Contact form added</li>
</ul>

<img src="images/deep-violet-iris.jpg" alt="A dark violet iris with buds"
width="266" height="400">

</aside>

</div> <!-- end of wrapper div -->

<footer class="site-footer">

<?php include('includes/copyslogan.php');?>

</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="PHP DeepDive voor studenten van het ROC van Amsterdam, College Amstelland. De opleiding Applicatie Ontwikkeling">
	<meta name="keywords" content="php, deepdive, peer-to-peer-learning, studenten, roc, amsterdam, coding, programmeren, leren, samenwerken, coörporatief, natuurlijk">
	<meta name="author" content="D. van Oudheusden, Docent Applicatie Ontwikkeling">
	<meta name="robots" content="index, nofollow">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/marianatrench.css');?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="icon" href="<?php echo base_url('assets/images/diver_PNG27.png');?>">
	<?php if(isset($load_syntax_highlighter) && $load_syntax_highlighter == TRUE): ?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/github.css');?>">
	<?php endif;?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/datatables/datatables.min.css');?>">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" defer></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous" defer></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" defer>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js" defer></script>

	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
	<title>PHP - DEEPDIVE</title>





</head>
<?php if(isset($body)){
	echo '<body style="background:url('.base_url('assets/images/dd.png').') no-repeat center center fixed;background-size: cover;">';
}else{
	echo '<body>';
}

 ?>

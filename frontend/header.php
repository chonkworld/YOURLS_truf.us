<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBW8R6L5BW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GBW8R6L5BW');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1377801524509737"
     crossorigin="anonymous"></script>
<?php
    include 'config.php';
    include 'functions.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-patible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo description ?>">

    	<link rel="icon" href="<?php echo favicon ?>">
	

        <title>TRUF.us | Spittin TRUF</title>

        <link rel="stylesheet" href="/frontend/dist/styles.css">

        <?php if (defined('backgroundImage')) : ?>
            <style>
                body {
                    background: url(<?php echo backgroundImage ?>) no-repeat center center fixed !important; 
                    background-size: cover !important;
                }
            </style>
        <?php else : ?>
            <style>
                body {
                    background-color: <?php echo colour ?>;
                }
            </style>
        <?php endif; ?>

        <style>
            .btn-primary {
                background-color: <?php echo colour ?>;
                border-color: <?php echo colour ?>;
            }

            .btn-primary:hover,
            .btn-primary:focus,
            .btn-primary:active {
                background-color: <?php echo adjustBrightness(colour, -15) ?>;
                border-color: <?php echo adjustBrightness(colour, -15) ?>;
            }
        </style>
    </head>

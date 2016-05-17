<?php
function get_current($name) {
  	if (strpos($_SERVER['REQUEST_URI'], $name) !== false)
    	echo 'class="current"';
}
?>

<header class="header-main">
    <div class="container clearfix">
    	<i class="material-icons visible-xs" id="btn-menu">menu</i>
		<h1 class="logo"><a href="index.php" title="CompanyName"><img src="public/img/logo.png" alt="CompanyName"></a></h1>
		<nav class="nav-main">
	        <ul>
        		<li <?php get_current('about') ?> ><a href="about.php">about</a></li>
        		<li <?php get_current('news') ?> ><a href="news.php">news</a></li>
        		<li <?php get_current('products') ?> ><a href="products.php">products</a></li>
        		<li <?php get_current('contact') ?> ><a href="contact.php">contact</a></li>
        	</ul>
        </nav>
    </div>
</header>
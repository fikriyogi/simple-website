<?php
	include("config/koneksi.php");
	include("top_header.php");
?>
	
	<body id="top" style="">
<?php
include ("config/navbar.php");
?>		
		
		
		<!-- Site -->
		<div id="sb-site">
		
			<!-- Manhattan -->
			<!--<div id="manhattan">
				<a href="http://www.adchsm.me/manhattan/">
					<div id="mhtn-img"></div>
					<p class="lead">Check out Manhattan, my latest project. A clean, lightweight and customisable CSS grid.</p>
				</a>
			</div>-->
		
			<!-- Site -->
			<div class="container">
			
				

				<div class="row">
					<div id="content" class="col-xs-12">				






<?php
	$post_title=$_GET['post_title'];
	$qrykoreksi=mysql_query("select post_tanggal,post_content,post_title,post_photo,penulis,post_kategori from wp_posts where post_title='$post_title' LIMIT 1");
	$dataku=mysql_fetch_object($qrykoreksi);
?>
 

<!-- About -->
<div id="about">
	<div class="row">
		<div class="col-xs-12">
			
			<h3><a href="artikel.php?post_title=<?php echo  $dataku->post_title?>"><?php echo $dataku->post_title?></a></h3>
					<p class="subline">Inspiration for Article Intro Effects</p>
					<p>by <strong><?php echo $dataku->penulis?></strong> &#8212; Posted in <strong><?php echo $dataku->post_kategori ?></strong> on <strong><?php echo  $dataku->post_tanggal?></strong></p>
			
			<p><?php echo  $dataku->post_content?></p>
			
		</div><!-- /.col-xs-12 -->
	</div><!-- /.row -->
</div><!-- /#about -->
<!-- About -->
<div id="comment">
	<div class="row">
		<div class="col-xs-12">
			<h4>Komentar</h4>
			<hr>


			<div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//fikriyogi.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</div><!-- /.col-xs-12 -->
	</div><!-- /.row -->
</div><!-- /#about -->



					</div><!-- /#content-->
					
					
				
				</div><!-- /.row -->
				
				<?php include ("config/footer.php"); ?>
			
			</div><!-- /.container -->
		</div><!-- /#sb-site -->
		
		<!-- Slidebars -->
		
		<div class="sb-slidebar sb-left">
	<nav>
		<ul class="sb-menu">
			<li><img src="./Slidebars_files/slidebars-logo-white@2x.png" alt="Slidebars" width="118" height="40"></li>
			<li class="sb-open"><input type="text" name="post_title" size="100%"  autocomplete="off" placeholder="Search"></li>
			<li class="sb-close"><a href="./Slidebars_files/Slidebars.html">Home</a></li>
			<li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/index.php#download">Download</a></li>
			<li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/usage.php">Usage</a></li>
			<li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/usage.php#api">API</a></li>
			<li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/compatibility.php">Compatibility</a></li>
			<li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/issues.php">Issues</a></li>
			<li class="sb-close"><a href="http://plugins.adchsm.me/slidebars/contact.php">Contact</a></li>
			<li class="sb-close"><a class="github" href="https://github.com/adchsm/Slidebars">Github</a></li>
			<li class="sb-close"><span class="sb-open-right">About the Author</span></li>
			<li class="sb-close"><small>Slidebars © 2014 Adam Smith</small></li>
		</ul>
	</nav>
</div><!-- /.sb-left --><div class="sb-slidebar sb-right sb-style-overlay" style="margin-right: -360px;">
	<aside id="about-me">
		<img class="img-circle img-responsive img-me" width="150" height="150" src="./Slidebars_files/me@2x.jpg" alt="Profile Picture">
		<h3>Hello, I'm Adam.</h3>
		<p>I'm a web designer and front-end developer based in Barcelona. I offer bespoke web tailoring and themes for WordPress. For more info you can:</p>
		<ul class="list-unstyled">
			<li class="sb-close"><a href="http://www.adchsm.me/">Visit my site</a></li>
			<li class="sb-close"><a href="https://twitter.com/adchsm">Follow me on Twitter</a></li>
			<li class="sb-close"><a href="http://www.adchsm.me/mailing.php">Sign up to my mailing list</a></li>
		</ul>
	</aside>
</div><!-- /.sb-right -->
		<!-- Scripts -->
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Slidebars -->
		<script src="js/slidebars.min.js"></script>
		<script>
			(function($) {
				$(document).ready(function() {
					// Initiate Slidebars
					$.slidebars();
				});
			}) (jQuery);
		</script>
		
		<!-- Further Tracking -->
		<script>
			(function($) {
				$(document).ready(function() {
					// Downloads
					// 0.10.3
					$('a.download-0103').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.10.3', {'nonInteraction': 1});
					});
					// 0.10.2
					$('a.download-0102').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.10.2', {'nonInteraction': 1});
					});
					// 0.10.1
					$('a.download-0101').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.10.1', {'nonInteraction': 1});
					});
					// 0.10
					$('a.download-010').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.10', {'nonInteraction': 1});
					});
					// 0.9.4
					$('a.download-094').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.9.4', {'nonInteraction': 1});
					});
					// 0.9
					$('a.download-09').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.9', {'nonInteraction': 1});
					});
					// 0.8.2
					$('a.download-082').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.8.2', {'nonInteraction': 1});
					});
					// 0.8.1
					$('a.download-081').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.8.1', {'nonInteraction': 1});
					});
					// 0.8
					$('a.download-08').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.8', {'nonInteraction': 1});
					});
					// 0.7.1
					$('a.download-071').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.7.1', {'nonInteraction': 1});
					});
					// 0.7
					$('a.download-07').on('click', function() {
						ga('send', 'event', 'Download', 'Slidebars', '0.7', {'nonInteraction': 1});
					});
					// Github
					$('a.github').on('click', function() {
						ga('send', 'event', 'External Link', 'GitHub', {'nonInteraction': 1});
					});
					// Dreamhost
					$('a#dreamhost').on('click', function() {
						ga('send', 'event', 'External Link', 'DreamHost', {'nonInteraction': 1});
					});
					// Open Left Slidebar
					$('.sb-open-left, .sb-toggle-left').on('touchend click', function() {
						ga('send', 'event', 'Function', 'Open Slidebar', 'Open Left Slidebar', {'nonInteraction': 1});
					});
					// Open Right Slidebar
					$('.sb-open-right, .sb-toggle-right').on('touchend click', function() {
						ga('send', 'event', 'Function', 'Open Slidebar', 'Open Right Slidebar', {'nonInteraction': 1});
					});
				});
			}) (jQuery);
		</script>
		
		<!-- Prettify -->
		
		
		<!-- Smooth Page Scrolling -->
		<script>
			(function($) {
				$(document).ready(function() {
					$('a[href^="#"]').on('touchend click', function(e) {
						e.preventDefault();
						var id = $(this).attr("href");
						var offset = 70;
						var target = $(id).offset().top - offset;
						
						$('html, body').animate({scrollTop:target}, 500);
					});
				});
			}) (jQuery);
		</script>
		
		<!-- Form Validation -->
		<script src="js/form-validation.js"></script>
	
</body></html>

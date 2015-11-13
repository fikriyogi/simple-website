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
  <!-- Site -->
  <div class="container">
    <?php
	$txtcari=@$_GET['txtcari'];
	if(isset($txtcari))
	{
		$myquery="select post_tanggal,post_content,post_title,post_photo,penulis from wp_posts where post_title='%$txtcari%' or post_content LIKE '%$txtcari%' ORDER BY post_tanggal ASC";
	}
	else
	{
		$myquery="select post_tanggal,post_content,post_title,post_photo,penulis from wp_posts ORDER BY post_tanggal ASC";
	}	
	$daftarsiswa=mysql_query($myquery) or die (mysql_error());
	while($dataku=mysql_fetch_object($daftarsiswa))
	{
?>
    <br>
    
    <!-- About -->
    <div id="artikel">
      <div class="row">
        <div class="col-xs-12">
          <div class="w3-card-4" style="width:100%;">
            <header class="w3-container w3-white">
              <h4><a href="artikel.php?post_title=<?php echo  $dataku->post_title?>"><?php echo  $dataku->post_title?></a> <br>
                <small> Released <?php echo  $dataku->post_tanggal?> by <?php echo  $dataku->penulis?> </small></h4>
            </header>
            <div class="w3-container">
              <p><img alt="" src="<?php echo  $dataku->post_photo?>" style="float:left; height:100px; margin-right:10px; margin-top:10px; margin-bottom:10px; width:100px" /> <?php echo substr($dataku->post_content, 0, 400);?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    <br>
    <?php
	}
?>
  </div>
  <!-- /#content-->
</div>
<!-- /.row -->
<?php include("config/footer.php"); ?>
</div>
<!-- /.container -->
</div>
<!-- /#sb-site -->
<!-- Slidebars -->
<div class="sb-slidebar sb-left">
  <?php include("config/aside-left.php") ?>
</div>
<!-- /.sb-left -->
<div class="sb-slidebar sb-right sb-style-overlay" style="margin-right: -360px;">
  <?php include("config/aside.php") ?>
</div>
<!-- /.sb-right -->
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
</body>
</html>

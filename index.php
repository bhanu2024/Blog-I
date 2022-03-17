

<?php  include 'nav.php' ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img alt="https://blog.mipimworld.com/wp-content/uploads/2020/05/change-just-ahead-1100X500.jpg" 
      src="images/img1.jpg" 
      width="1100" 
      height="500">
      <div class="carousel-caption">
        <h3>Begin</h3>
        <p>Don't be afraid to give up the good to go for the great!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img alt="https://businessnc.com/wp-content/uploads/2017/09/business-education-blog-image-1100-x500.jpg" 
      src="images/img2.jpg" 
      width="1100" 
      height="500">
      <div class="carousel-caption">
        <h3>Persistence</h3>
        <p>If you’re going through hell, keep going.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img alt="https://www.color-meanings.com/wp-content/uploads/dreams-concept-colorful-lights-open-jar.jpeg" 
      src="images/img3.jpg" 
      width="1100" height="500">
      <div class="carousel-caption">
        <h3>Life</h3>
        <p>You must either modify your dreams or magnify your skills.</p>
      </div>   
    </div>
  </div>
<!--   <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>


<!----------welcome----->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Welcome to Blog&I</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img alt="https://dvyvvujm9h0uq.cloudfront.net/com/articles/1516553730-shutterstock_429631015.jpg" class="img-fluid welcomeimg"
				src="images/imgw.jpg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2>Your World Of Reflection Awaits</h2>
				<p class="py-3">We’re so glad you’re here! You've joined a growing online community of students who are creating, collaborating, and connecting from all around the world. We have something for everyone, whether you've joined to study or simply to connect with our ideas. Let's get this party started!</p>
				<a href="about.php" class="btn btn-success">To know me</a>
			</div>
		</div>
	</div>
</section>


<!----------blogs----->

<!-- <?php //include 'blog.php' ?>  -->



<!----------stories----->

<section class="my-5" id="story">
	<div class="py-5">
		<h2 class="text-center">Stories</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img alt="https://i.stack.imgur.com/hOIuY.jpg" class="img-fluid pb-4" src="images/s1.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img alt="https://i.stack.imgur.com/zMoo4.jpg" class="img-fluid pb-4" src="images/s2.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img alt="https://i.stack.imgur.com/capu1.jpg" class="img-fluid pb-4" src="images/s3.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img alt="https://i.stack.imgur.com/CJT47.jpg" class="img-fluid pb-4" src="images/s4.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img alt="https://wallpapercave.com/wp/wp2568276.jpg" class="img-fluid pb-4" src="images/s5.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
					<img id="6img" alt="https://www.cashadvance6online.com/data/archive/img/2374540163.jpeg" 
					class="img-fluid pb-4"
					src="images/s6.jpeg" onmouseover="hover(this);" onmouseout="unhover(this);" />
				</a>
			</div>
		</div>
	</div>
</section>


<script type="text/javascript">
	function hover(element) {
  element.setAttribute('src', 'https://i.pinimg.com/474x/cd/74/82/cd74820d183b2b1404529b74da7f2e51.jpg');
	}

	function unhover(element) {
	  element.setAttribute('src', 'images/s6.jpeg');
	}

</script>


<!----------about----->
<!-- <?php  //include 'about.php' ?> -->


<!----------contact----->
<!-- <?php //include 'contact.php' ?>  -->

<?php include 'footer.php' ?>
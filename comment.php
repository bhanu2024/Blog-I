<?php include 'nav.php' ?> 

<section id="contact" class="my-3">
	<br>
	<div class="py-5">
		<h2 class="text-center">We love to hear from you!</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="post_comment.php" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comment" autocomplete="off"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<br>
</section>


<?php include 'footer.php' ?> 
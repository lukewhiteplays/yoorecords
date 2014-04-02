<?php include partials . "/header.php"; ?>
	
	<section id="profile">
		<div class="logo">
			<div class="logo-wrapper">
				<h1>Medlow</h1>
				<div class="points">
					<div class="points-item">
						<span class="icomoon icomoon-trophy"></span> <strong>#1</strong>
					</div>
					<div class="points-item">
						<span class="icomoon icomoon-users"></span> <strong>8,299</strong> Fans
					</div>
					<div class="points-item">
						<span class="icomoon icomoon-music"></span> <strong>15,203</strong> Plays
					</div>
				</div>
			</div>
			<div class="connect-wrapper">
				
				<span class="icomoon icomoon-thumbs-up" data-toggle="tooltip" data-placement="right" title="Like"></span>
				<span class="icomoon icomoon-newspaper news-trigger" data-toggle="tooltip" data-placement="right" title="Updates"></span>
				<span class="icomoon icomoon-bars2" data-toggle="tooltip" data-placement="right" title="Stats"></span>
			</div>
			<div class="news-wrapper">
				<strong>Headline</strong>
				This is the news item. All kinds of things are happening. You can find out more when you click on the more link. <a href="#">[more...]</a>
				<button type="button" class="close" aria-hidden="true">&times;</button>
			</div>
		</div>
	</section>
	
	<section id="videos">	
		<h1>Videos</h1>
		<iframe width="1280" height="720" src="//www.youtube.com/embed/1c6R3PZDCpA?list=PL0550175863C9600B&controls=3&showinfo=0" frameborder="0" allowfullscreen></iframe>	
		<div class="video-share-wrapper">
			<a href="#"><span class="icomoon icomoon-thumbs-up"></span></a>
			<a href="#"><span class="icomoon icomoon-bubble"></span></a>
			<a href="#"><span class="icomoon icomoon-share"></span></a>
		</div>
	</section>
	
	
	<section id="tour">
		<h1>Tour</h1>
			<div class="col-xs-6 col-md-3">
			    <a href="#" class="thumbnail">
			      <img src="http://placehold.it/400x400" alt="...">
			    </a>
			</div>
	</section>
	
	<section id="connect">
		<h1>Connect</h1>
		<div class="container">
			<div class="col-lg-7">
				<form class="form" role="form">
					<div class="form-group">
						<label for="full-name">Full Name</label>
						<input type="text" class="form-control" id="full-name" placeholder="Enter your full name">
					</div>
					
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="full-name" placeholder="Enter your email address...">
					</div>
					
					<div class="form-group">
						<label for="full-name">Subject</label>
						<input type="text" class="form-control" id="subject" placeholder="Subject">
					</div>
					<div class="form-group">
						<label for="full-name">Message</label>
						<textarea class="form-control" id="message"></textarea>
					</div>
					
					<button class="btn btn-7 btn-7b icon-envelope" type="submit">Send message</button>
					
				</form>
			</div><!-- end ./col-lg-7 -->
			<div class="col-lg-5 social-links">
			
				<span class="icomoon icomoon-facebook img-circle"></span>
				<span class="icomoon icomoon-twitter img-circle"></span>
				<span class="icomoon icomoon-youtube img-circle"></span>
				<span class="icomoon icomoon-googleplus img-circle"></span>
				
			</div>
		</div><!-- end ./container -->
					
	</section>
<?php include partials . "/footer.php"; ?>
						<footer>
							<a class="top scroll-link" data-id="top" href="#"></a>
							<small>Copyright &copy; 2014 by Yoo Records. All Rights Reserved. Email hello [at] yoorecords dot com.</small> 
						</footer>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->
			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="/assets/js/vendor/classie/classie.js"></script>
		<script src="/assets/js/vendor/codrops/mlpushmenu.js"></script>
		<script src="/assets/js/vendor/codrops/uisearch.js"></script>
		<script>
			//new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
			new UISearch( document.getElementById( 'sb-search' ) );
			
			$(document).ready(function() {
				// navigation click actions	
				$('.scroll-link').on('click', function(event){
					event.preventDefault();
					var sectionID = $(this).attr("data-id");
					scrollToID('#' + sectionID, 750);
				});
				// scroll to top action
				$('.scroll-top').on('click', function(event) {
					event.preventDefault();
					$('html, body').animate({scrollTop:0}, 'slow'); 		
				});
				// mobile nav toggle
				$('#nav-toggle').on('click', function (event) {
					event.preventDefault();
					$('#main-nav').toggleClass("open");
				});
			});
			// scroll function
			function scrollToID(id, speed){
				var offSet = 0;
				var targetOffset = $(id).offset().top - offSet;
				console.log(targetOffset);
				$('html,body').animate({scrollTop:targetOffset}, speed);
			}
			if (typeof console === "undefined") {
			    console = {
			        log: function() { }
			    };
			}
			
			$('.audio-player-button').on('click',function(){
				
				$siblings = $('.audio-player-siblings-wrapper');
				
				if($siblings.width() > 0){
					
					$('.audio-player-list-wrapper').slideUp('fast');
					$siblings.children().hide('fast');
					$siblings.animate({
						'width':'0px'
					})
							
				
				} else {
			
					$siblings.animate({
						'width':'451px'
					}).children().show('slow');
				
				}
			});
			
			$('.audio-player-list-button').on('click',function(){
				$list = $('.audio-player-list-wrapper');
				$list.slideToggle('slow');
			});
			
			$('.news-trigger').on('click',function(){
				
				var $trigger = $('.news-trigger');
				
				$(".news-wrapper").show().animate({
					'width':'500px',
					'padding':'20px'
				},1000);
				
				$trigger.css('color','#c0392b');
				
			});
			
			$('.profile-trigger-wrapper').on('mouseenter', function(){
			
				var $trigger 		= $('.profile-trigger');
				var $expanded 		= $('.badge-wrapper');
				var $mini 			= $('.mini-badge-wrapper');
				var $wrapper 		= $('.profile-trigger-wrapper');
				
				if($wrapper.height() == 60){
					
					$('.profile-trigger-wrapper').animate({
						'height':'240px'
					},250);
					$('.profile-trigger')
						.siblings()
							.show('slow').css('display','block');
					$('img.profile-trigger')
						.hide();
					$('span.profile-trigger')
						.show();
				}
					
			}).on('mouseleave', function(){
			
				var $expanded 		= $('.badge-wrapper');
			
				if($expanded.is(':hidden')){
					$('.profile-trigger').siblings().hide();
					$('.profile-trigger-wrapper').animate({
						'height':'60px'
					},250);
					$('img.profile-trigger')
						.show();
				}
			});
			
			$('.profile-trigger-wrapper .icomoon').tooltip();
			
			$('.profile-expand-trigger').on('click', function(){
				
				var $expanded 		= $('.badge-wrapper');
				var $mini 			= $('.mini-badge-wrapper');
				var $wrapper 		= $('.profile-trigger-wrapper');
				
				$expanded.toggle();
				$mini.toggle();
				


			});
			
			$('.profile-dashboard-trigger').on('click', function(){
				
				$('.profile').slideDown();
				
				$( document ).on( 'keydown', function ( e ) {
				    if ( e.keyCode === 27 ) { // ESC
				        $('.profile').slideUp();
				    }
				});
				
			});
			
			
		</script>
	</body>
</html>
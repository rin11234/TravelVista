<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.fancybox.min.j') }}s"></script>
	<script src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="{{ asset('assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/js/typed.js') }}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["San Francisco."," Paris."," New Zealand.", " Maui.", " London."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>-->
    <!--<script src="https://vietnamtravel.net.vn/assets/desktop/js/tab.js"></script>-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Js menu mobile-->
    <script>
       $(document).ready(function(e) {
           $(".arrown_menu_accordion").click(function() {
               var val=$(this).attr("val");
               $("#"+val).toggle();
           });
       });
    </script>
    <script src="js/frame_script.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('.nav-tabs li');
            const tabContents = document.querySelectorAll('.tab-content .tab-pane');

            tabs.forEach(function(tab, tabIndex) {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Remove active class from all tabs and tab contents
                    tabs.forEach(function(tab) {
                        tab.classList.remove('active');
                    });
                    tabContents.forEach(function(content) {
                        content.classList.remove('in', 'active');
                    });

                    // Add active class to the clicked tab and corresponding tab content
                    tab.classList.add('active');
                    tabContents[tabIndex].classList.add('in', 'active');
                });
            });
        });
    </script>

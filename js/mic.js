(function($){
	$(window).load(function() {
		$('#menubut').click(function() {
			$('#menu').toggle();
		});
		$('#menu').click(function() {
			$('#menu').hide();
			
		});
		if ($(window).width() > 800) {
			$('#content').fullpage({
				verticalCentered: true,
				scrollOverflow: true,
				paddingBottom: '60px',
			});
		} else {
			$('.section').each(function(index) {
				var $anchor = $(this).data("anchor");
				$(this).attr("id", $anchor);
			});
			$('#summary').css("margin-top", $(window).height());
		}
		setInterval(function() {
			var $one = $('.one');
			var $two = $('.two');
			var $three = $('.three');
			var $four = $('.four');
			var $five = $('.five');
			var $six = $('.six');
			var $seven = $('.seven');
			if ($one.is(':visible')) {
				$two.fadeToggle("slow","linear");
				$one.fadeToggle("slow","linear");
			} else {
				if ($two.is(':visible')) {
					$three.fadeToggle("slow","linear");
					$two.fadeToggle("slow","linear");
				} else {
					if ($three.is(':visible')) {
						$four.fadeToggle("slow","linear");
						$three.fadeToggle("slow","linear");
					} else {
						if ($four.is(':visible')) {
							$five.fadeToggle("slow","linear");
							$four.fadeToggle("slow","linear");
						} else {
							if ($five.is(':visible')) {
								$six.fadeToggle("slow","linear");
								$five.fadeToggle("slow","linear");
							} else {
								$seven.fadeToggle("slow","linear");
								if ($six.is(':visible')) {
									$six.fadeToggle("slow","linear");
								} else {
									$one.fadeToggle("slow","linear");
								}
							}
						}
					}
				}
			}
		}, 7000);
	});
})( jQuery );

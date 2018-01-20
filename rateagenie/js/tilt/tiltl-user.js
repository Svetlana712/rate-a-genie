$(document).ready(function() {


	(function() {
		var tiltSettings = [
		{
			movement: {
				imgWrapper : {
					rotation : {x: -5, y: 10, z: 0},
					reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
				},
				caption : {
					translation : {x: -8, y: 15, z: 15},
					reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
				},
				overlay : {
					translation : {x: 5, y: -5, z: 0},
					rotation : {x: 0, y: 0, z: 6},
					reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
				},
				shine : {
					translation : {x: 50, y: 50, z: 0},
					reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
				}
			}
		}];

		function init() {
			var idx = 0;
			[].slice.call(document.querySelectorAll('a.tilter.tilter-box')).forEach(function(el, pos) { 
				idx = pos%2 === 0 ? idx+1 : idx;
				new TiltFx(el, tiltSettings[idx-1]);
			});
		}

		// Preload all images.
		imagesLoaded(document.querySelector('body'), function() {
			document.body.classList.remove('loading');
			init();
		});
		
	})();



	(function() {
		var tiltSettings2 = [
		{
			movement: {
				caption : {
					translation : {x: 5, y: 15, z: -3},
					reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
				},
				overlay : {
					translation : {x: 5, y: -5, z: 0},
					rotation : {x: 0, y: 0, z: 6},
					reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
				},
				shine : {
					translation : {x: 25, y: 25, z: 0},
					reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
				}
			}
		
		}];

		function init() {
			var idx = 0;
			[].slice.call(document.querySelectorAll('a.tilter.tilter-special')).forEach(function(el, pos) { 
				idx = pos%2 === 0 ? idx+1 : idx;
				new TiltFx(el, tiltSettings2[idx-1]);
			});
		}

		// Preload all images.
		imagesLoaded(document.querySelector('body'), function() {
			document.body.classList.remove('loading');
			init();
		});

		
	})();

    window.onorientationchange = function() { location.reload() };

});
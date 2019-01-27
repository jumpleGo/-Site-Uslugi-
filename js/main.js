	document.body.onload = function() {
			setTimeout(function() {
				var preloader = document.getElementById('preloader');
				if (!preloader.classList.contains('complete')) {
					preloader.classList.add('complete');
				};
			}, 1000);
		};
<div class="col-sm-9 col-sm-offset-3 footer ">
	<div class="col-sm-6 sec">
		<h3 class="fot">Copyright</h3>
		<ul class="fotul">
			<p class="p_main">&copy; site-uslugi.ru | Все права защищены</p>
		</ul>

	</div>
	<div class="col-sm-6 ces">
		<h3 class="fot">Оплата</h3>

		<center class="ftoul">
			<li><i class="fa fa-cc-paypal"></i></li>
			<li><i class="fa fa-cc-mastercard"></i></li>
			<li><i class="fa fa-credit-card"></i></li>
			<li><i class="fa fa-cc-visa"></i></li>
		</center>

	</div>
</div>
<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter44837845 = new Ya.Metrika({
						id: 44837845,
						clickmap: true,
						trackLinks: true,
						accurateTrackBounce: true,
						webvisor: true
					});
				} catch (e) {}
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function() {
					n.parentNode.insertBefore(s, n);
				};
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else {
				f();
			}
		})(document, window, "yandex_metrika_callbacks");

	</script>
	<script>
self.addEventListener('fetch' event=>{
             const {request} = event;
                    const url = new URL(request.url);
        if(url.origin === location.origin){
            event.respondWith(cacheData(request));
        }else{
            event.respondWith(networkFirst(request));
        }
                      });
        async function cacheData(request){
            const cachedResponse = await caches.match(request);
            return cachedResponse || fetch(request);
        }
</script>
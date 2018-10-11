<div class="background1">
	<div class="container">
		<h3>New arrivals launched on Fall</h3>
		<a href="#">Shop Now</a>

	</div>


</div>
</body>
<script type="text/javascript">

	var opener = document.getElementById('opener');
	opener.addEventListener('click', function(){
		var nav_items =	document.querySelectorAll('ul.nav-item');

		for (var i = nav_items.length - 1; i >= 0; i--) {
			nav_items[i].classList.toggle("open");
		}
	})
</script>
</html>

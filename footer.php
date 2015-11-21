		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<ul class="nav-footer">
							<li><a href="#">Beranda</a></li>
							<li><a href="#">Profil</a></li>
							<li><a href="#">Galeri</a></li>
							<li><a href="#">Agenda Kegiatan</a></li>
							<li><a href="#">Download Area</a></li>
							<li><a href="#">Kontak Kami</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<p>Copyright &copy Dinas Pertanian, Perikanan, dan Kehutanan Kota Pontianak</p>
					</div>
				</div>
			</div>
		</footer>
	</body>

	<script src="asset/js/jquery-2.1.3.min.js"></script>
	<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	<script src="asset/owl-carousel/owl.carousel.min.js"></script>

	<script>
		$(document).ready(function(){
			$("#owl").owlCarousel({
				autoPlay: 3000,
				item: 5,
				itemsDesktop: [1199,3],
				itemsDesktopSmall: [979,3] 
			});
		});
	</script>
</html>
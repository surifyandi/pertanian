<?php include "header.php" ?>
<div class="container">
	<div class="col-md-12">
		<ol class="breadcrumb breadcrumb-edit">
	  		<li><a href="#">Home</a></li>
	  		<li><a href="#">Library</a></li>
	  		<li class="active">Data</li>
		</ol>
	</div>

	<div class="col-md-12">
		<div id="map_canvas"></div>
	</div>

	<div class="col-md-6">
		<blockquote>
			Silakan hubungi kami (saran/masukan) melalui alamat dan nomor kontak di bawah ini atau melalui form yang tersedia.
		</blockquote>
		<address>
			<b><h4>Dinas Pertanian, Perikanan dan Kehutanan Kota Pontianak</h4></b>
			Jl. Budi Utomo No. 29 <br>
			Telepon: (0561) 883295 <br>
			Kodepos: 7821 <br>
			Email: admin@pertanian.pontianakkota.go.id
		</address>

		<h4>Fakta Integritas Saran / Masukan</h4>
		<ol>
			<li>Pesan yang masuk berupa saran, kritik, dan laporan yang di tujukan kepada Dinas Pertanian, Perikanan dan Kehutanan Kota Pontianak</li>
			<li>Penyampaian tulisan sebaiknya memperhatikan etika, antara lain tidak provokatif, tidak bernuansa sara, tidak berpropaganda, dan tidak menyudutkan pihak tertentu</li>
			<li>Admin akan menghapus isian yang tidak sesuai dengan angka 1</li>
			<li>Pesan yang masuk akan divalidasi oleh admin sebelum tampil di halaman website</li>
		</ol>
	</div>
	<div class="col-md-6">
		<h2 class="inbox-heading" style="margin-top:-5px;">Form Kontak Kami</h2>
		<form class="form">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control form-control-edit" required />
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control form-control-edit" required />
			</div>
			<div class="form-group">
				<label>Telepon</label>
				<input type="tel" class="form-control form-control-edit" required />
			</div>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control form-control-edit" required />
			</div>
			<div class="form-group">
				<label>Pesan</label>
				<textarea rows="10" required class="form-control form-control-edit"></textarea>
			</div>
			<div class="form-group">
				<button class="button button-lg">Kirim &nbsp<i class="glyphicon glyphicon-ok"></i></button>
			</div>
		</form>
	</div>

	<div class="col-md-12">
		<h2 class="inbox-heading">Pesan / saran masuk</h2>
		<ul class="media-list">
      		<li class="media">
        		<div class="media-left">
                	<img src="img/1448238041_unknown_1.png" width="70px" />
            	</div>
        		<div class="media-body">
		        	<h4 class="media-heading">Surif Yandi</h4>
		        	<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
		        	<div class="meta">
				    	<span>23 November 2015</span>
				    	<span>surif@indobit.com</span>
				    </div>
				    <div class="line-divider"></div>
          			<div class="media">
            			<div class="media-left">
                			<img src="img/1448237973_supportmale.png" width="70px" />
            			</div>
            			<div class="media-body">
              				<h4 class="media-heading">Customer Service</h4>
              				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
              				<div class="meta">
				    			<span>23 November 2015</span>
				    			<span>admin@pertanian.pontianakkota.go.id</span>
				    		</div>
				    		<div class="line-divider"></div>
            			</div>
          			</div>
				</div>
			</li>
			<li class="media">
        		<div class="media-left">
                	<img src="img/1448238041_unknown_1.png" width="70px" />
            	</div>
        		<div class="media-body">
		        	<h4 class="media-heading">Yandi Surif</h4>
		        	<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
		        	<div class="meta">
				    	<span>23 November 2015</span>
				    	<span>surif@indobit.com</span>
				    </div>
				    <div class="line-divider"></div>
          			<div class="media">
            			<div class="media-left">
                			<img src="img/1448237973_supportmale.png" width="70px" />
            			</div>
            			<div class="media-body">
              				<h4 class="media-heading">Customer Service</h4>
              				<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
              				<div class="meta">
				    			<span>23 November 2015</span>
				    			<span>admin@pertanian.pontianakkota.go.id</span>
				    		</div>
				    		<div class="line-divider"></div>
            			</div>
          			</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<?php include "footer.php" ?>
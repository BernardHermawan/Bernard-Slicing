<div class="bg-pattern">
<section class="mt-5" id="turnamen">
	<div class="container">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="../assets/img/turnamen/CT.png" class="d-block w-100" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				 </div>
			</div>
			<div class="carousel-item active">
			  <img src="../assets/img/turnamen/CT.png" class="d-block w-100" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				 </div>
			</div><div class="carousel-item active">
			  <img src="../assets/img/turnamen/CT.png" class="d-block w-100" alt="...">
			  <div class="carousel-caption d-none d-md-block">
				  </div>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</section>
<section id="daftar-turnamen" style="margin-top:-200px">
	<div class="container">
				<span class="section-title" >
					DAFTAR TURNAMEN
				</span>
				<div class="pull-right">
					<a class="btn btn-primary rd-1 mr-2" style="border-radius:0px" href="?page=buat_turnamen">Buat Turnamen</a>
					<select class="myselect"  multiple="multiple" placeholder="Pilih">
						<option value="1"><a href="">PUBG</a></option>
						<option value="2">MOBILE LEGENDS</option>
						<option value="3">LEAGUE OF LEGENDS</option>
						<option value="4">FREE FIRE</option>
						<option value="5">MAGIC CHESS</option>
						<option selected>Kategori</option>
					  </select>
				</div>
		
	</div>
	
</section>
<section>
<div class="container" style="margin-top:-200px">
		
	<div class="card-columns">
	<?php
		for($i=0;$i<12;$i++){
			?>
			<a href="?page=detail_turnamen">
			<div class="card bg-tertiary mb-4" >
				<img class="card-img-top " src="../assets/img/turnamen/CT.png" alt="Card image" style="width:100%">
				<div class="card-body">
					<span class="badge badge-danger">BERBAYAR</span>
					<span class="badge badge-warning" style="background:#FFAA00;color:black">TIM</span>
					<span class="badge badge-primary">SINGLE ELIMINATION</span>
					  <h4 class="card-title mt-2">
					  <?php 
						
						$text="Akatara Regular Tournament PUBG";
						$count_text=strlen($text);
						echo substr($text,0,23);
						if($count_text>23){
							echo" ...";
						}
						?>
						</h4>
					  <hr></hr>
					  <div class="row">
						<div class="col-3">
							<h6 class="text-secondary" style="font-weight:500">Daftar</h6>
							<span style="font-weight:500;font-size:12">Rp. 20.000,-</span>
						</div>
						<div class="col-3">
							<h6 class="text-secondary" style="font-weight:500">Mulai</h6>
							<span style="font-weight:500">2020-10-07</span>
						</div>
						<div class="col-3">
							<h6 class="text-secondary" style="font-weight:500">Selesai</h6>
							<span style="font-weight:500">2020-10-10</span>
						</div>
						<div class="col-3">
							<h6 class="text-secondary" style="font-weight:500">Sistem</h6>
							<span style="font-weight:500">Single</span>
						</div>
					  </div>
					  <div class="row mt-4">
						<div class="col-3">
							<h6 class="text-secondary" style="font-weight:500">Hadiah</h6>
							<span style="font-weight:500">IDR 500.000</span>
						</div>
						<div class="col-9">
							<h6 class="text-secondary" style="font-weight:500">Batas Pendaftaran</h6>
							<span style="font-weight:500">3 Hari lagi</span>
						</div>
					</div>
					  <a href="#" class="btn btn-primary rd-1 float-right mb-4">Daftar Sekarang</a>
				</div>
			</div>
			</a>
			<?php
		}
		?>
			
			
  </div>
  <a class="btn btn-primary rd-1 mt-5" style="width:100%" href="" >LIHAT LEBIH BANYAK TURNAMEN</a>
</div>
</section>
</div>
<script type="text/javascript">
      $(".myselect").select2();
</script>
 

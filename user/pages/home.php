<!--CAROUSEL-->
<div class="bg-pattern">		
		
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/carousel/a3Hu6P.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/img/carousel/a3Hu6P.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../assets/img/carousel/a3Hu6P.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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

		<!--END CAROUSEL-->
		<section id="thread" >
			<div class="container">
				<span class="section-title">
					THREAD
				</span>
				<div class="btn-group btn-thread mt-5"  role="group" aria-label="Basic example" style="width:100%;border-radius:5px;">
						  <button class="btn btn-primary active " data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex"  aria-selected="false" >Berita Terkini</button>
						  <button class="btn btn-primary mobile-hidden">All</button>
						  <button class="btn btn-primary mobile-hidden">MLBB</button>
						  <button class="btn btn-primary mobile-hidden">PUBG</button>
						  <button class="btn btn-primary mobile-hidden">DOTA2</button>
						  <button class="btn btn-primary mobile-hidden">CSGO</button>
						  <button class="btn btn-primary mobile-hidden">PES</button>
						  <button class="btn btn-primary">More</button>
				</div>
				<div class="gs-tabs">
					
					<div class="tab-content pt-5" id="myTabContentEx">
					
					  <div class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="home-tab-ex">
					  
					  <div class="row">
					  <!-- BERANDA THREAD LEFT -->
						<div class="col-lg-5 col-sm-12 mobile-hidden">
							<div class="row">
								<div class="col-lg-12 col-sm-4">
									<img src="../assets/img/thread/a3Hu6P.png" width="100%" >
								</div>
								<div class="col-lg-12 col-sm-8">
									<h6 class="mt-5">Akatara Reguler Tournament PUBG</h6>
									<div class="mt-3" style="font-weight:300;color:#0A84E1"><i class="fa fa-calendar"></i> 2020/08/06&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-gamepad"></i> PUBG</div>
									<div class="col-xs-5"><p class="mt-4 text-small">
										Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua....
									</p>
									</div>
								</div>
							</div>
						</div>
						
					 <!-- END BERANDA THREAD LEFT -->
					 <!-- BERANDA THREAD RIGHT -->
						<div class="col-lg-7 col-xs-7" style="overflow:auto;height:650px;" hidden>
							<?php
								for($i=0;$i<12;$i++){
									?>
							<div class="row mb-3 pb-3 bg-tertiary gs-card" >
								<div class="col-4 col-lg-5 col-sm-5">
									<img src="../assets/img/thread/2020-mobile-legends-4k-3i.png" width="100%">
								</div>
								<div class="col-8 col-lg-7 col-xs-7" >
									<h6>Akatara Reguler Tournament PUBG</h6>
										<div class="mt-3" style="font-weight:300;color:#0A84E1"><i class="fa fa-calendar"></i> 2020/08/06&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-gamepad"></i> PUBG</div>
										<p class="mt-4">
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua....
										</p>
								</div>
							</div>
								<?php
								}
								?>
							
						</div>
						
						<div class="col-lg-7 col-xs-7" style="overflow:auto;height:650px;" >
							<?php
								for($i=0;$i<12;$i++){
									?>
										<div class="row gs-card ml-1 mr-1 "  style="border-bottom:1px solid #0E4270">
											<a href="#">
												<div class="card" >
												<div class="row" >
													<div class="col-3 col-lg-5 col-sm-5 pt-2 pb-2" >
														<img src="../assets/img/thread/2020-mobile-legends-4k-3i.png" width="100%" class="card-img-left">
													</div>
													<div class="col-9 col-lg-7 col-xs-7 p-2"  >
														<h6>Akatara Reguler Tournament PUBG</h6>
															<div class="" style="font-weight:300;color:#0A84E1;font-size:8pt"><i class="fa fa-calendar"></i> 2020/08/06&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-gamepad"></i> PUBG</div>
															<p class="">
																Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ...
															</p>
													</div>
												</div>
											</div>
											</a>
										</div>
								<?php
								}
								?>
							
						</div>
					<!-- END BERANDA THREAD RIGHT-->						
					</div>
					</div>
					  <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1
						  labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
						  beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad
						  vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar
						  helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes
						  anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party
						  scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
					  <div class="tab-pane fade" id="contact-ex" role="tabpanel" aria-labelledby="contact-tab-ex">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro
						  fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
						  skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings
						  gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
						  biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
						  craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					  </div>
					</div>
				</div>
				<div class="d-flex justify-content-center col-md-12  mt-5" style="text-align:center">
				<center>
					<nav aria-label="..." >
					  <ul class="pagination gs-pagination">
						<li class="page-item ">
						  <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active">
						  <span class="page-link">
							2
							<span class="sr-only">(current)</span>
						  </span>
						</li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">48</a></li>
						<li class="page-item"><a class="page-link" href="#">49</a></li>
						<li class="page-item">
						  <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
						</li>
						
					  </ul>
					</nav>
				</center>
				</div>
				
		</section>
	</div>
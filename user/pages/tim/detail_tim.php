<?php
	$r=$con->query("select * from tim where id_tim='$_GET[tim]'");
	$d=$r->fetch_assoc();
	$tim=$d['id_tim']
	?>
<div class="bg-pattern">
	<section id="detail_turnamen" class="mt-5">
	<div class="container">
		<span class="section-title"><big><?=strtoupper($d['nama_tim']);?><big><span>
		<div class="row mt-5">
			<div class="col-md-4">
				<img src="../assets/img/tim/<?=$d['logo'];?>" width="100%" style="border-radius:5px;margin-bottom:30px; " data-toggle="modal" data-target="#img">
				
				<div class="feature-label bg-tertiary p-2 pr-3 pl-3 w-100">Tentang Tim <i class="far fa-save pull-right" style="margin-top:3px"></i></div>
				<p class="mt-4 detail" style="font-size:12pt;font-weight:400;overflow:auto;height:220px;">
				<textarea name="tentang_tim" class="textarea-1" style="background:none;
	width:100%;
	padding : 15px;
	color:white;
	border-width:1px;
	border-style:solid;
	border-color:#0A84E1;">Belum ada</textarea>
				</p>
			</div>
			
			<div class="col-md-4">
				<div class="feature-label bg-tertiary p-2 pr-3 pl-3 w-100 collapsed" data-toggle="collapse" data-target="#tambahdiv"  type="button" aria-expanded="false">TAMBAHKAN DIVISI
					<i class="fa fa-plus-circle pull-right ml-2 btn-icon" style="margin-top:3px" data-toggle="modal" data-target="#tambah_divisi" ></i>
					
				</div>
				<?php	
					$r=$con->query("select * from divisi,game where divisi.id_game=game.id_game and divisi.id_tim='$tim'");
					
					while($d=$r->fetch_assoc()){
					?>
					
				<div class="feature-label bg-secondary p-2 pr-3 pl-3 w-100 mt-3" data-toggle="collapse" data-target="#data_anggota<?=$d['id_divisi'];?>"  type="button" aria-expanded="false"><?=$d['game'];?>
					<i class="fa fa-plus-circle pull-right ml-2 btn-icon" style="margin-top:3px" data-toggle="modal" data-target="#tambah_anggota<?=$d['id_divisi'];?>		" ></i>
					
				</div>
				
					<div class="modal fade " id="tambah_anggota<?=$d['id_divisi'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-md p-3" role="document">
						<div class="modal-content">
						  <div class="modal-header bg-secondary	modal-style-1">
							<span style="text-align:center"><i class="fa fa-user-plus"></i> Tambah Anggota</span>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>	
						  <div class="modal-body bg-tertiary ">
						<form action="../action/tim/action.php?action=tambah_anggota" method="POST" enctype="multipart/form-data">
						<div class="card">
							<div class="card-header bg-secondary">Pilih Anggota</div>
							<div class="card-body bg-3 overflow-auto no-padding">
							<?php
								$user_query=$con->query("select * from user");
								while($user_data=$user_query->fetch_assoc()){
								?>
								<div class="custom-control custom-checkbox">
								<div class="form-group" >
								  <input type="checkbox" class="custom-control-input" name="anggota[]" id="<?=$d['id_divisi'];?><?=$user_data['username'];?>" name="anggota[]" value="<?=$user_data['id_user'];?>">
								  
								  <label class="custom-control-label"  style="margin-left:-16px" for="<?=$d['id_divisi'];?><?=$user_data['username'];?>"><img src="../assets/img/ben.png" width="30px" class="mr-2" style="border-radius:25px"><?=$user_data['username'];?></label>
								</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
						
						<div class="text-center mt-4 mb-4">
							<?=$d['game'];?>
							<input type="hidden" name="divisi" value="<?=$d['id_divisi'];?>">
							<input type="hidden" name="tim" value="<?=$tim;?>">
							<input type="submit" class="btn btn-primary rd-1 mr-1" value="Tambah Anggota"/>
							<button class="btn btn-danger rd-1 ml-1">Batalkan</button>
							
						</div>
					  </form>
					</div>


						  </div>
						  
						</div>
					  </div>
					  <?php
						$query_anggota=$con->query("select * from anggota_tim,user where anggota_tim.id_user=user.id_user and id_tim='$tim' and id_divisi='$d[id_divisi]'");
						while($data_anggota=$query_anggota->fetch_assoc()){
							?>
					  <div class="data-result bg-tertiary p-2 pr-3 pl-4 w-100" class="collapse" id="data_anggota<?=$d['id_divisi'];?>"><?=$data_anggota['username'];?>
						<a href="../action/tim/action.php?action=hapus_member&id=<?=$d['id_anggota'];?>"><i class="fa fa-trash pull-right ml-2 btn-icon" style="margin-top:3px" data-toggle="modal" data-target="#tambah_anggota" ></i></a>
						
					</div>
					<?php
						}
						?>

				<?php
					}
					?>
				
				
			</div>
			<div class="col-md-4 ">
				<div class="feature-label bg-tertiary p-2 pr-3 pl-3 w-100">Anggota</div>
				<div class="" style="font-size:12pt;font-weight:400;overflow:auto;height:525px;width:100%">
				<?php
						$query_anggota=$con->query("select * from user");
						while($data_anggota=$query_anggota->fetch_assoc()){
							?>
					  <div class="data-result bg-tertiary p-2 pr-3 pl-4 w-100" ><?=$data_anggota['username'];?>
						<a href="../action/tim/action.php?action=hapus_member&id=<?=$d['id_anggota'];?>"><i class="fa fa-trash pull-right ml-2 btn-icon" style="margin-top:3px" data-toggle="modal" data-target="#tambah_anggota" ></i></a>
						
					</div>
					<?php
						}
						?></div>		
			</div>
			
		</div>
	</div>
	
</section>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="img" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-0">
				<img src="../assets/img/turnamen/CT.png" alt="" style="width:100%">
			</div>
			<div class="modal-footer">
				<div><a href="../assets/img/turnamen/CT.png" target="_blank" class="btn btn-primary" style="margin-right:0" download>Download</a></div>
			</div>
		</div>
	</div>
</div>



<div class="modal fade " id="tambah_divisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md p-3" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary	modal-style-1">
        <span style="text-align:center"><i class="fa fa-user-plus"></i> Tambah Divisi</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>	
      <div class="modal-body bg-tertiary ">
        <form action="../action/tim/action.php?action=tambah_divisi" method="POST" enctype="multipart/form-data">
		
		<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<div class="card">
		<div class="card-header bg-secondary">Pilih Divisi</div>
		<div class="card-body bg-3 overflow-auto no-padding">
		<?php
			$r=$con->query("select * from game");
			while($d=$r->fetch_assoc()){
			?>
			<div class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" id="divisi<?=$d['id_game'];?>" name="divisi[]" value="<?=$d['id_game'];?>">
			  <label class="custom-control-label" for="divisi<?=$d['id_game'];?>" style="margin-left:-16px" ><?=$d['game'];?></label>
			</div>
			<?php
			}
			?>
		</div>
	</div>
	
	
 
<div class="text-center mt-4 mb-4">
	<input type="hidden" name="tim" value="<?=$tim;?>">
	<input type="submit" class="btn btn-primary rd-1 mr-1" value="Tambah Divisi"/>
	<button class="btn btn-danger rd-1 ml-1">Batalkan</button>
	
</div>
  </form>
</div>
<script src="../js/img-upload.js"></script>


      </div>
      
    </div>
  </div>


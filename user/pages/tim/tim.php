<div class="bg-pattern">
<section id="team " >
	<div class="container mt-5">
		<?php
			$r=$con->query("select * from user where (username='$_SESSION[username]' or email='$_SESSION[username]')");
			$d=$r->fetch_assoc();
			$rr=$con->query("select * from tim where id_user='$_SESSION[user_id]'");
			$num=$rr->num_rows;
			if($num>0){
				?>
				<span class="section-title">TIMKU</span>
				<div class="card-columns mt-5 mb-5">
			<?php
			while($dd=$rr->fetch_assoc()){
			?>
			
			<a href="?page=detail_tim&tim=<?=$dd['id_tim'];?>">
			<div class="card "  style="background:#00203D">
				<div class="thumbnail" style="overflow:hidden;width:100%;height:200px">
					<img class="card-img-top " src="../assets/img/tim/<?=$dd['logo'];?>"  alt="Card image">
				</div>
				<div class="card-body">
					  <h4 class="card-title mt-1"><b>
					  <?php 
						
						$text=$dd['nama_tim'];
						$count_text=strlen($text);
						echo substr($text,0,23);
						if($count_text>23){
							echo" ...";
						}
						?>
						</b></h4>
						
					  <hr></hr>
						<?php
							$x=$con->query("select * from anggota_tim where id_tim='$dd[id_tim]'");	
							echo $x->num_rows." Anggota.";
						?>
				</div>
					</a>
				</div>
			
		<?php
			
			}
			?>
			</div>
			<?php
			}
			?>
		<span class="section-title">TIM</span>
		<div class="pull-right">
					<a class="btn btn-primary rd-1 mr-2" style="border-radius:0px" data-toggle="modal" data-target="#tambah_tim">Buat Tim</a>
					<select class="myselect"   placeholder="Pilih">
					
					<?php
						$r=$con->query("select * from tim");
						while($d=$r->fetch_assoc()){
							?>
						<option value="<?=$d['id_tim'];?>"><a href=""><?=$d['nama_tim'];?></a></option>
						<?php
						}
						?>
					  </select>
		</div>
		<div class="mt-5">
		<style>
			
			
			
		</style>
		<div class="card-columns">
			<?php
				$r=$con->query("select  * from tim");
				
				while($dd=$r->fetch_assoc()){
				?>
			<a href="?page=detail_team&tim=tim=<?=$dd['id_tim'];?>">
			<div class="card "  style="background:#00203D">
				<div class="thumbnail" style="overflow:hidden;width:100%;height:200px">
					<img class="card-img-top " src="../assets/img/tim/<?=$dd['logo'];?>"  alt="Card image">
				</div>
				<div class="card-body">
					  <h4 class="card-title mt-1"><b>
					  <?php 
						
						$text="$dd[nama_tim]";
						$count_text=strlen($text);
						echo substr($text,0,23);
						if($count_text>23){
							echo" ...";
						}
						?>
						</b></h4>
						
					  <hr></hr>
						<?php
							$x=$con->query("select * from anggota_tim where id_tim='$dd[id_tim]'");
							echo $x->num_rows." Anggota.";
						?>
				</div>
					</a>
				</div>
			<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
      $(".myselect").select2();
</script>
<div class="modal fade " id="tambah_tim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md p-3" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary	modal-style-1">
        <span style="text-align:center"><i class="fa fa-user-plus"></i> Tambah Team</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>	
      <div class="modal-body bg-tertiary ">
        <form action="../action/tim/action.php?action=tambah_tim" method="POST" enctype="multipart/form-data">
		
		<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <div class="image-upload-wrap pt-5 pb-5 pl-5 pr-5">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="logo" />
    <div class="drag-text">
      <img src="../assets/img/Path 47.png">
    </div>
  </div>
  <div class="text-center mt-2"><i class="text-center " >*unggah gambar max 2MB</i></div>
  <center>
  
  <button class="file-upload-btn btn btn-primary mt-3" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Pilih Foto</button></center>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="btn btn-danger">Hapus <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
  <div class="form-group">
	<label style="color:white">Nama Team</label>
	<input type="text" name="nama_tim" class="form-control">
</div>
<div class="text-center mt-4 mb-4">
	<input type="submit" class="btn btn-primary rd-1 mr-1" value="Buat Team"/>
	<button class="btn btn-danger rd-1 ml-1">Batalkan</button>
	
</div>
  </form>
</div>
<script src="../js/img-upload.js"></script>


      </div>
      
    </div>
  </div>
 </div>



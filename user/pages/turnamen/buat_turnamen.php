<section id="turnamen" class="bg-pattern"> 
	<div class="container mt-5 p-5 pl-3 pr-3" style="background:#00203D;">
		<span class="feature-label bg-tertiary p-2 pr-3 pl-3 ml-5">Buat Turnamen</span>
		<div class="row mr-5 ml-5" >
	<div class="col-12 mt-5 " >
		<form action="../action/turnamen/action.php?action=insert" method="POST">
		<div class="form-group">
			<label>Judul Turnamen</label>
			<input type="text" class="form-control mb-2" placeholder="Judul Turnamen" name="judul_turnamen">
			<span class="text-secondary" style="color:#0A84E1;font-weight:400;">*Ex : Turnamen Mantap-mantap</span>
		</div>
		<div class="form-group">
			<label>Detail Turnamen</label>
			<textarea name="detail_turnamen" class="form-control mb-2" placeholder="Detail Turnamen"></textarea>
		</div>
		<div class="form-group">
			<label>Hadiah/Prizepool</label>
			<textarea name="hadiah" class="form-control mb-2" placeholder="Hadiah/Prizepool"></textarea>
		</div>
		<div class="form-group">
			<label>Peraturan Turnamen</label>
			<textarea name="peraturan_turnamen" class="form-control mb-2" placeholder="Peraturan Turnamen"></textarea>
		</div>
		<div class="row form-style-1">
			<div class="col-6">
				<div class="form-group">
					<label>Jumlah Slot</label>
					<input name="slot_turnamen" type="number" class="form-control mb-2" placeholder="Peraturan Turnamen">
				</div>
				<div class="form-group">
					<label>Registrasi dibuka</label>
					<input name="openregist_turnamen" type="date" class="form-control mb-2" placeholder="Peraturan Turnamen">
				</div>
				<div class="form-group">
					<label>Turnamen dimulai</label>
					<input name="start_turnamen" type="date" class="form-control mb-2" placeholder="Peraturan Turnamen">
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label>Pilih Game</label>
					<select class="form-control" name="id_game">
						<option value="1">PUBG</option>
						<option value="2">MOBILE LEGENDS</option>
						<option value="3">LEAGUE OF LEGENDS</option>
						<option value="4">FREE FIRE</option>
						<option value="5">MAGIC CHESS</option>
					</select>
				</div>
				<div class="form-group">
					<label>Registrasi ditutup</label>
					<input name="closeregist_turnamen" type="date" class="form-control mb-2" placeholder="Registrasi Ditutup">
				</div>
				<div class="form-group">
					<label>Turnamen ditutup</label>
					<input name="end_turnamen" type="date" class="form-control mb-2" placeholder="Turnamen ditutup">
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label>Unggah Banner Turnamen (715px x 250px)</label>
						<br>
						<input type="file" class="bg-tertiary p-2">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 mt-5">
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary mr-2" value="Buat Turnamen">
						<button type="reset" class="btn btn-danger " >Batalkan </button>
					</div>
				</div>
			</div>
		</form>	
		
	</div>
	</div>
	</div>
</section>

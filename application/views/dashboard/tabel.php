<form>
	<div class="input-group">
		<span class="input-group-addon">Nama Kelas</span>
		<input id="ganti-nama-kelas" type="text" class="form-control form-control-unset" value="<?php echo $kelas->nama;?>">
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Wali Dosen</span>
		<input id="ganti-wali-dosen" type="text" class="form-control form-control-unset" value="<?php echo $kelas->wali_dosen;?>">
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">KM</span>
		<select id="ganti-km" class="form-control form-control-unset">
			<?php foreach($all_mahasiswa as $mahasiswa):?>
			<option value="<?php echo $mahasiswa->nim;?>" <?php echo (isset($km) && ($mahasiswa->nim==$km->nim))? "selected": "";?>><?php echo $mahasiswa->nama_mahasiswa;?></option>
			<?php endforeach;?>
		</select>
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Bendahara</span>
		<select id="ganti-bendahara" class="form-control form-control-unset">
			<?php foreach($all_mahasiswa as $mahasiswa):?>
			<option value="<?php echo $mahasiswa->nim;?>" <?php echo (isset($bendahara) && ($mahasiswa->nim==$bendahara->nim))? "selected": "";?>><?php echo $mahasiswa->nama_mahasiswa;?></option>
			<?php endforeach;?>
		</select>
	</div>
	<p class="text-muted" style="font-size: 10px;">terakhir diubah oleh: <span id="terakhir-ubah"><?php echo (isset($terakhir_ubah))? $terakhir_ubah->nama_mahasiswa: '';?></span></p>
</form>
<h3 style="font-weight:bold;">My Class</h3>
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($all_mahasiswa as $mahasiswa):?>
			<tr <?php echo ($mahasiswa->jenis_kelamin_mahasiswa=='P')? "style=font-weight:bold;": "";?>>
				<td><?php echo $no;?></td>
				<td><?php echo $mahasiswa->nim;?></td>
				<td><?php echo $mahasiswa->nama_mahasiswa;?></td>
			</tr>
			<?php $no++; endforeach;?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	var update_kelas = function() {
		$.ajax({
			url: '<?php echo base_url("/dashboard/update_kelas/");?>',
			data: {
				'kode_kelas': '<?php echo $user->kode_kelas;?>',
				'nama_kelas': $('#ganti-nama-kelas').val(),
				'wali_dosen': $('#ganti-wali-dosen').val(),
				'nim_km': $('#ganti-km').val(),
				'nim_bendahara': $('#ganti-bendahara').val(),
				'nim_terakhir_ubah': '<?php echo $user->nim;?>'
			},
			cache: false,
			type: 'get',
			success: function(data) {
				$('#terakhir-ubah').html(data);
			},
		})
	};
	$('#ganti-nama-kelas').keyup(update_kelas);
	$('#ganti-wali-dosen').keyup(update_kelas);
	$('#ganti-km').change(update_kelas);
	$('#ganti-bendahara').change(update_kelas);
</script>
<div class="table-responsive">
	<table class="table table-striped">
		<tbody>
			<tr>
				<td class="col-sm-2"><strong>Nama Kelas:</strong></td>
				<td><?php echo $kelas->nama;?></td>
			</tr>
			<tr>
				<td class="col-sm-2"><strong>Wali Dosen:</strong></td>
				<td><?php echo $kelas->wali_dosen;?></td>
			</tr>
			<tr>
				<td class="col-sm-2"><strong>KM:</strong></td>
				<td><?php echo (isset($km)) ? $km->nama_mahasiswa . " (" . $km->jenis_kelamin_mahasiswa . ")" : "";?></td>
			</tr>
			<tr>
				<td class="col-sm-2"><strong>Bendahara:</strong></td>
				<td><?php echo (isset($bendahara)) ? $bendahara->nama_mahasiswa . " (" . $bendahara->jenis_kelamin_mahasiswa . ")" : "";?></td>
			</tr>
		</tbody>
	</table>
</div>
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
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($all_mahasiswa as $mahasiswa):?>
			<tr <?php echo ($mahasiswa->jenis_kelamin_mahasiswa=='P')? "style=font-weight:bold;": "";?>>
				<?php $kelas = $this->MMahasiswa_kelas->get_rows(array('return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $mahasiswa->nim)))->kode_kelas?>
				<td><?php echo $no;?></td>
				<td><?php echo $mahasiswa->nim;?></td>
				<td><?php echo $mahasiswa->nama_mahasiswa;?></td>
				<td><?php echo preg_replace('/^.{3}/', "$0 ", strtoupper($kelas));?></td>
			</tr>
			<?php $no++; endforeach;?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.table').DataTable({
			"bLengthChange": false,
			"pageLength": 20,
		});
	});
</script>
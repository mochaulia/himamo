<?php 
	date_default_timezone_set("Asia/Bangkok"); 
	$current = strtotime(date("Y-m-d"));

	$nim_online = $this->session->userdata('nim');
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4><i class="fa fa-star"></i> <?php echo $proker->nama." by ".$proker->nama_divisi;?></h4>
</div>
<div class="modal-body modal-body-scroll" style="max-height: calc(100vh - 450px); overflow-y: auto;">
	<div class="text-center" style="font-size:15px;">
		<input class="rating-loading rating-result" data-show-clear="false" data-show-caption="false" data-step="0.1" value="<?php echo $this->MProker_raters->count_rating($proker->id);?>">
	</div>
	<table>
		<tbody>
			<tr>
				<td class="col-sm-2"><strong>Ketuplak</strong></td>
				<td>:</td>
				<td><?php echo $proker->nama_ketuplak." (<strong>".$proker->nim_ketuplak."</strong>)";?></td>
			</tr>
			<tr>
				<td class="col-sm-2"><strong>Waktu</strong></td>
				<td>:</td>
				<td><?php echo $proker->bulan? date("F Y", strtotime($proker->bulan)) : "Selama Kepengurusan";?></td>
			</tr>
			<?php if ($proker->tempat) {?>
			<tr>
				<td class="col-sm-2"><strong>Tempat</strong></td>
				<td>:</td>
				<td><?php echo $proker->tempat;?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div style="padding-right:15px;padding-left:15px;">
		<strong><u>Keterangan</u></strong>
		<p><?php echo $proker->deskripsi;?></p>
	</div>
</div>
<div class="modal-body modal-body-scroll modal-body-raters" style="border-top:1px solid #e5e5e5; max-height: calc(100vh - 500px); overflow-y: auto;">
	
</div>
<div class="modal-footer">
	<form id="rating" method="post" action="<?php echo base_url('/proker/get_rate/');?>" actiondua="<?php echo base_url('/proker/json_rate/');?>">
		<div class="form-control-static text-center label-change-review">
			<?php echo ($is_have_rate) ? "<p>You can change your review down below.</p>" : "";?>
			<input id="rate-proker" name="point" class="rating rating-loading" data-max="5" data-step="1" data-show-clear="false" data-show-caption="false" value="<?php echo ($is_have_rate) ? $is_have_rate->point : '0';?>" <?php echo (strtotime($proker->bulan)>$current) ? 'data-disabled="true"' : "";?>>
		</div>
		<input type="hidden" name="id_proker" value="<?php echo $proker->id;?>">
		<textarea class="form-control" name="review" placeholder="Write review here (Optional)" <?php echo (strtotime($proker->bulan)>$current) ? "disabled" : "";?>><?php echo ($is_have_rate) ? $is_have_rate->review : "";?></textarea>
		<br>
		<button type="submit" class="btn btn-danger" <?php echo (strtotime($proker->bulan)>$current) ? "disabled" : "";?>>Submit</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</form>
</div>
<script type="text/javascript">
	$('#rate-proker').rating();
	$('.rating-result').rating({
		size: 'xs',
		displayOnly: true,
		step: 0.1
	});
	$('.rating-each-result').rating({
		displayOnly: true,
		step: 1
	});
	$('form#rating').submit(function(event){
		event.preventDefault();
		event.stopPropagation();
		var id_proker = parseInt($(this).find('input[name="id_proker"]').val());
		var point = $('form#rating').find('input[name="point"]').val();
		$.ajax({
			url: $(this).attr('action'),
			data: $(this).serialize(),
			cache: false,
			type: 'post',
			success: function(data) {
				$('.no-review-temp').remove();
				$('.modal-body-raters').html(data);
				$('ul[data-rater="<?php echo $nim_online; ?>"]').hide().fadeIn('slow');
				$.ajax({
					url: $('form#rating').attr('actiondua'),
					data: {
						'id_proker': id_proker,
						'point': point
					},
					cache: false,
					type: 'get',
					success: function(json) {
						$('#ratingproker'+id_proker).html(json.new_rate);
						$(".modal-body > .text-center").find('.filled-stars').css({ width: ((parseFloat(json.new_rate)/5)*100)+"%" });
					}
				});
			}
		});
	});
</script>
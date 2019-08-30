<?php if (empty($all_raters)) { ?>
	<div class="well text-center no-review-temp" style="padding:10px;">
		<h4 style="font-weight:800;">There's no reviews yet.</h4>
	</div>
<?php } ?>
<?php if ($rater_aktif) { ?>
<ul class="media-list well"data-rater="<?php echo $rater_aktif->nim_rater;?>" style="padding-top:8px;padding-bottom:8px;">
	<li class="media">
		<div class="media-body">
			<h5 class="media-heading" style="font-weight:800;"><?php echo $rater_aktif->nama_rater." (".$rater_aktif->nim_rater.")";?></h5>
			<span style="font-size:10px;"><input class="rating-loading rating-each-result" data-show-clear="false" data-show-caption="true" data-size="xs" value="<?php echo $rater_aktif->point;?>"></span>
			<?php echo ($rater_aktif->review) ? '<p>"'.$rater_aktif->review.'"</p>' : null;?>
		</div>
	</li>
</ul>
<?php } ?>
<?php foreach($raters as $rater):?>
<ul class="media-list well"data-rater="<?php echo $rater->nim_rater;?>" style="padding-top:8px;padding-bottom:8px;">
	<li class="media">
		<div class="media-body">
			<h5 class="media-heading" style="font-weight:800;"><?php echo $rater->nama_rater." (".$rater->nim_rater.")";?></h5>
			<span style="font-size:10px;"><input class="rating-loading rating-each-result" data-show-clear="false" data-show-caption="true" data-size="xs" value="<?php echo $rater->point;?>"></span>
			<?php echo ($rater->review) ? '<p>"'.$rater->review.'"</p>' : null;?>
		</div>
	</li>
</ul>
<?php endforeach;?>
<script type="text/javascript">
	$('.rating-each-result').rating({
		displayOnly: true,
		step: 1
	});
</script>

<?php if($this->session->flashdata()):?>

<?php if($this->session->flashdata('success')): ?>
<div class="alert bg-white alert-success border-left-success alert-dismissible" role="alert">
	<div class="alert-text text-success"><?php echo $this->session->flashdata('success') ?></div>
	<div class="close">
		<i class="small" data-dismiss="alert">
			<span class="mdi mdi-close-circle"></span>
		</i>
	</div>
</div>
<?php endif ?>

<?php if($this->session->flashdata('error')): ?>
<div class="alert bg-white alert-danger border-left-danger alert-dismissible" role="alert">
	<div class="alert-text text-danger"><?php echo $this->session->flashdata('error') ?></div>
	<div class="close">
		<i class="small" data-dismiss="alert">
			<span class="mdi mdi-close-circle"></span>
		</i>
	</div>
</div>
<?php endif ?>

<?php if($this->session->flashdata('info')): ?>
<div class="alert bg-white alert-info border-left-info alert-dismissible" role="alert">
	<div class="alert-text text-info"><?php echo $this->session->flashdata('info') ?></div>
	<div class="close">
		<i class="small" data-dismiss="alert">
			<span class="mdi mdi-close-circle"></span>
		</i>
	</div>
</div>
<?php endif ?>

<?php if($this->session->flashdata('warning')): ?>
<div class="alert bg-white alert-warning border-left-warning alert-dismissible" role="alert">
	<div class="alert-text text-warning"><?php echo $this->session->flashdata('warning') ?></div>
	<div class="close">
		<i class="small" data-dismiss="alert">
			<span class="mdi mdi-close-circle"></span>
		</i>
	</div>
</div>
<?php endif ?>

<?php endif; ?>
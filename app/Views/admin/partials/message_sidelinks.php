<?php

?>
<a href="<?=site_url(config_item('admin').'message/compose')?>" class="btn btn-custom btn-block waves-effect waves-light"><i class="mdi mdi-lead-pencil"></i> Compose</a>
<div class="list-group mail-list m-t-20"> 
    <a href="<?=site_url(config_item('admin').'message/inbox')?>" class="list-group-item <?php if($this->uri->segment(3)=='inbox'){echo 'active';}?> "> <i class="mdi mdi-inbox-arrow-down fa fa-fw"></i> Inbox <?php if (trako_counter($new_message_counter)):''?><span class="label label-rouded label-success pull-right"><?php echo (trako_counter($new_message_counter))?></span><?php endif?></a> 
    <a href="<?=site_url(config_item('admin').'message/starred')?>" class="list-group-item <?php if($this->uri->segment(3)=='starred'){echo 'active';}?> ">  <i class="mdi mdi-star  fa fa-fw"></i>Starred</a> 
    <a href="<?=site_url(config_item('admin').'message/sent')?>" class="list-group-item <?php if($this->uri->segment(3)=='sent'){echo 'active';}?> "> <i class="mdi mdi-send  fa fa-fw"></i> Sent Mail</a>
    <a href="<?=site_url(config_item('admin').'message/draft')?>" class="list-group-item <?php if($this->uri->segment(3)=='draft'){echo 'active';}?> "> <i class="mdi mdi-note-outline  fa fa-fw"></i> Draft</a>
    <a href="<?=site_url(config_item('admin').'message/trashed')?>" class="list-group-item <?php if($this->uri->segment(3)=='trashed'){echo 'active';}?> "> <i class="mdi mdi-delete  fa fa-fw"></i> Trash <?php if (trako_counter($trashed_message_counter)):''?><span class="label label-rouded label-danger pull-right"><?php echo (trako_counter($trashed_message_counter))?></span><?php endif?></a> 
</div>
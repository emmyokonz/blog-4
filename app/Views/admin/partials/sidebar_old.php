<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
	<!-- begin:: Aside -->
	<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
		<div class="kt-aside__brand-logo">
			<a href="<?=admin_url('dashboard') ?>">
				<img alt="Logo" src="<?php echo base_url('assets/img/ECOSOOFTSMALLL.png'); ?>"/>
			</a>
		</div>

		<div class="kt-aside__brand-tools">
			<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
				<span class="fa fa-list" style="color: #fff"></span>
				<span><img alt="logo" src="<?php echo base_url('assets/img/ECOSOOFT_LOGO.png'); ?>"/></span>
			</button>

			<!--<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>-->

		</div>
	</div>
	<!-- end:: Aside -->

	<!-- begin:: Aside Menu -->
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div
	id="kt_aside_menu"
	class="kt-aside-menu "
	data-ktmenu-vertical="1"
	 data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

			<ul class="kt-menu__nav ">
				<?php
				if (isset($sidebars))
					: ?>
				<?php
				foreach ($sidebars as $sidebar)
					: ?>
				<li class="kt-menu__item  <?php $uri = $this->uri->segment(2);
				if ($uri==NULL) {
					$uri = config_item('default_group_permission_name');}
				if ($uri == $sidebar->name) {
					echo ' kt-menu__item--active';} ?> " aria-haspopup="true" >
					<a  href="<?=admin_url($sidebar->name) ?>" class="kt-menu__link ">
						<i class="kt-menu__link-icon <?=$sidebar->icon ?>"></i>
						<span class="kt-menu__link-text"><?=$sidebar->description ?></span>
					</a>
				</li>
				<?php endforeach ?>
				<?php endif ?>
				<!--<li class="kt-menu__section ">
				<h4 class="kt-menu__section-text">Custom</h4>
				<i class="kt-menu__section-icon flaticon-more-v2"></i>
				</li>
				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
				<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
				<i class="kt-menu__link-icon fa fa-web"></i>
				<span class="kt-menu__link-text">Applications</span>
				<i class="kt-menu__ver-arrow fa fa-angle-right"></i>
				</a>
				<div class="kt-menu__submenu ">
				<span class="kt-menu__arrow"></span>
				<ul class="kt-menu__subnav">
				<li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true" >
				<span class="kt-menu__link"><span class="kt-menu__link-text">Applications</span></span>
				</li>
				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
				<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span></span>
				</i>
				<span class="kt-menu__link-text">Users</span>
				<i class="kt-menu__ver-arrow fa fa-angle-right"></i>
				</a>
				<div class="kt-menu__submenu ">
				<span class="kt-menu__arrow">
				</span>
				<ul class="kt-menu__subnav">
				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
				<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Profile 1
				</span>
				<i class="kt-menu__ver-arrow fa fa-angle-right">
				</i>
				</a>
				<div class="kt-menu__submenu ">
				<span class="kt-menu__arrow">
				</span>
				<ul class="kt-menu__subnav">
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/user/profile-1/overview.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Overview
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/user/profile-1/personal-information.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Personal Information
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/user/profile-1/account-information.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Account Information
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/user/profile-1/change-password.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Change Password
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/user/profile-1/email-settings.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Email Settings
				</span>
				</a>
				</li>
				</ul>
				</div>
				</li>
				</ul>
				</div>
				</li>
				<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"  data-ktmenu-submenu-toggle="hover">
				<a  href="javascript:;" class="kt-menu__link kt-menu__toggle">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--line">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Contacts
				</span>
				<i class="kt-menu__ver-arrow fa fa-angle-right">
				</i>
				</a>
				<div class="kt-menu__submenu ">
				<span class="kt-menu__arrow">
				</span>
				<ul class="kt-menu__subnav">
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/contacts/list-columns.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				List - Columns
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/contacts/list-datatable.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				List - Datatable
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/contacts/view-contact.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				View Contact
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/contacts/add-contact.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Add Contact
				</span>
				</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true" >
				<a  href="../../custom/apps/contacts/edit-contact.html" class="kt-menu__link ">
				<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
				<span>
				</span>
				</i>
				<span class="kt-menu__link-text">
				Edit Contact
				</span>
				</a>
				</li>
				</ul>
				</div>
				</li>
				</ul>
				</div>
				</li>-->
			</ul>
		</div>
	</div>
	<!-- end:: Aside Menu -->
</div>
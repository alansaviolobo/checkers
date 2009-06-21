<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>resource/stylesheet/common.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>resource/stylesheet/calendar.css" />
		<script type="text/javascript" src="<?=base_url()?>resource/script/calendar.js"></script>
	</head>

	<body>
		<div id='container'>
			<div id='menu'>
				<?php if ( isset ($section_menu)) $this->load->view($section_menu); ?>
			</div>
			<p style="padding-left:10px" id='topic'>Orders&nbsp;&nbsp;|&nbsp;
				<?php echo anchor('order_c/select_source/table', 'Table'); ?> &nbsp;|&nbsp;
				<?php echo anchor('order_c/select_source/room', 'Room'); ?> &nbsp;|
			</p>
			<p style="font-size:small; font-weight:bold; color: red; padding:10px;">
				<?php if ( isset ($message)) echo $message; ?>
			</p>
			<div id='wrapper'>
				<div id='options'>
					<?php if ( isset ($section_options)) $this->load->view($section_options); ?>
				</div>
				<div id='orders'>
					<?php if ( isset ($section_orders)) $this->load->view($section_orders); ?>
				</div>
			</div>
			<div id="bill_view">
				<?php if ( isset ($section_bill_view)) $this->load->view($section_bill_view); ?>
			</div>
		</div>
	</body>
</html>
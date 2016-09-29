<?php
include("inc/header.php");
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker-arrival" ).datepicker({ dateFormat: 'dd/mm/yy' });
  
    $( "#datepicker-departure" ).datepicker({ dateFormat: 'dd/mm/yy' });
  });
  </script>
</head>

<body>

<?php
include("inc/menu-scroll.php");
?>


<div class="content"> 
	<h1>
		<?php echo $this->lang->line('reserve-reserve');?>
	</h1>

	<div class="msg">
		<?php if (isset($message_display)) { echo $message_display; } ?>
	</div>
		
		<form id="contact-form" action="<?php echo base_url(); ?>reserve/send_mail_reserve" method="post" accept-charset="utf-8">
		<p><?php echo $this->lang->line('reserve-txt-1');?><br/> <br/><?php echo $this->lang->line('reserve-txt-2');?></p>	
		
		<div class="msg">
			<?php if (isset($message_display)) { echo $message_display; } ?>
		</div>
		<hr>
		<div class="price">
			<p><strong><?php echo $this->lang->line('reserve-price');?></strong></p>
			<?php echo $this->lang->line('reserve-includes');?></br></br>
			<strong><?php echo $this->lang->line('reserve-1-guest');?></strong><?php echo $this->lang->line('reserve-1-guest-price');?></br>
			<strong><?php echo $this->lang->line('reserve-2-guest');?></strong><?php echo $this->lang->line('reserve-2-guest-price');?></br>
			<strong><?php echo $this->lang->line('reserve-3-guest');?></strong><?php echo $this->lang->line('reserve-3-guest-price');?></br>
			<strong><?php echo $this->lang->line('reserve-4-guest');?></strong><?php echo $this->lang->line('reserve-4-guest-price');?></br>
			<?php echo $this->lang->line('reserve-iva');?>
		</div>	
		<hr>
		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-entry-date');?></label>
			<input type="text" name="datepicker-arrival" id="datepicker-arrival">
		</div>
		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-departure-date');?></label>
			<input type="text" name="datepicker-departure" id="datepicker-departure">
		</div>

		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-name');?>＊</label>
			<input type="text" class="input" name="name" required>
		</div>
				
		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-surname');?>＊</label>
			<input type="text" class="input" name="surname" required>
		</div>
				
		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-email');?>＊</label>
			<input type="text" class="input" name="user_email" required>
		</div>

		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-adults');?>*</label>
			<input type="text" class="input" name="adults" required>
		</div>

		<div class="contact-input">
			<label class="label"><?php echo $this->lang->line('reserve-children');?></label>
			<input type="text" class="input" name="kids">
		</div>
				
		<div id="contact-mensaje">
			<label class="label"><?php echo $this->lang->line('reserve-msg');?>＊</label>
			<textarea id="text" cols="58" name="message" rows="10" placeholder="<?php echo $this->lang->line('reserve-msg-container');?>" required></textarea>
		</div>
		<input id="contact-button" type="submit" name="submit" value="<?php echo $this->lang->line('reserve-send');?>" class='submit' />
	</form>
</div>

<?php 
include("inc/home-footer.php");
?>

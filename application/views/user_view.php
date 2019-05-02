<html>
<head>
<title>Enter Your Details</title>
<link href='assets/css' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />

<a href="<?= site_url('home') ?>"><button type="<- Back"><- Back</button></a>





    
<p>Please ensure your details are as accurate as possible for our system and so we can contact you in the future</p>
    
<div id="container">
<?php echo form_open('user_ctrl'); ?>
<h1>Please enter in your details</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:grey;">Thank you for providing your details</h3></CENTER><br>
<?php } ?>
<?php echo form_label('FirstName :'); ?> <?php echo form_error('dname'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

<?php echo form_label('LastName :'); ?> <?php echo form_error('dnamee'); ?><br />
<?php echo form_input(array('id' => 'dnamee', 'name' => 'dnamee')); ?><br />

<?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

<?php echo form_label('Address :'); ?> <?php echo form_error('daddress'); ?><br />
<?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br />

<?php echo form_label('Gender :'); ?> <?php echo form_error('dgender'); ?><br />
<?php echo form_input(array('id' => 'dgender', 'name' => 'dgender')); ?><br />

<?php echo form_label('NHS ID Number :'); ?> <?php echo form_error('dnhs'); ?><br />
<?php echo form_input(array('id' => 'dnhs', 'name' => 'dnhs')); ?><br />

<?php echo form_label('Height :'); ?> <?php echo form_error('dheight'); ?><br />
<?php echo form_input(array('id' => 'dheight', 'name' => 'dheight')); ?><br />

<?php echo form_label('Weight :'); ?> <?php echo form_error('dweight'); ?><br />
<?php echo form_input(array('id' => 'dweight', 'name' => 'dweight')); ?><br />

<?php echo form_submit(array('id' => 'register', 'value' => 'register')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>
<h2>Register Yourself</h2>

<?php if($session->read('Auth.User.id')) {?>
	<p>
		Currently you are an <strong>unregistered</strong> user. You may have <span class="highlight">requested or responded to a good vibe</span> but we only
		know you through your browser cookies. If you clear your browser cache or somehow delete your cookies you will lose your account.
	</p>
	<p>
		Add a password to your account and you will become a full member of our community.
	</p>
	<?=$form->create('User', array('action' => 'register'));?>

	<?=$form->input('secret', array('type' => 'password', 'label' => 'Password', 'class' => 'large_input'));?>
	<?=$form->end('Register');?>
<?php } else { ?>
	<p>
		Currently you are an <strong>unregistered</strong> user. You may have <span class="highlight">requested or responded to a good vibe</span> but we only
		know you through your browser cookies. If you clear your browser cache or somehow delete your cookies you will lose your account.
	</p>
	<p>
		Add a password to your account and you will become a full member of our community.
	</p>
	<div class="block_label">
	<?=$form->create('User', array('action' => 'register'));?>
	
	<?=$form->input('username', array('class' => 'large_input'));?>

	<?=$form->input('email', array('class' => 'large_input'));?>

	<?=$form->input('secret', array('type' => 'password', 'label' => 'Password', 'class' => 'large_input'));?> 

	<?=$form->end('Register');?>
	</div>
<?php } ?>
<script>
    function agree(){
        var box = document.getElementById("agreebox");
        var subm = document.getElementById("submitReg");
        if(box.checked){
            subm.removeAttribute("class");
        }else{
            subm.setAttribute("class","hide");
        }
    }
    function getNewsletter(){
        var box = document.getElementById("newsletterCheck");
        var newsletterHidden = document.getElementById("newsLetter");
        if(box.checked){
            newsletterHidden.value = '1';
        }else{
            newsletterHidden.value = '0';
        }
    }
</script>
<style>
    #agreebox{
        
    }
</style>
<p>
	<?php __("Login below to sign into your account or register"); ?>.
</p>

<div id="login_panel" class="block_label">
<?php
    $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('email', array('class' => 'large_input'));
    echo $form->input('password', array('class' => 'large_input'));
    //echo $form->input('age', array('class' => 'large_input'));
    echo $form->end('Login');
?>
</div>
<p>
	Forget your password?  Click <a href="/lost_password">here</a>.
</p>
<div class="block_label">
        <?= $form->create('User', array('action' => 'register')); ?>
        <?= $form->input('username', array('class' => 'large_input')); ?>
        <?= $form->input('email', array('class' => 'large_input')); ?>
        <?= $form->input('age', array('class' => 'large_input')); ?>
        <?= $form->input('location', array('class' => 'large_input')); ?>
        <?= $form->input('website', array('class' => 'large_input')); ?>
        <?= $form->input('info', array('class' => 'large_input')); ?>
        <?= $form->input('Promocode', array('class' => 'large_input')); ?>
        <p>Do you want to subscribe to the newsletter?&nbsp;&nbsp;&nbsp; <input id="newsletterCheck" type="checkbox" name="newsletter" value="newsLetterSelect" onchange="getNewsletter()"></p>
        
        <?= $form->input('Newsletter', array('type' => 'hidden', 'label' => 'Check for newsletter', 'id' =>'newsLetter', 'value' =>'0')); ?> 
        <?= $form->input('secret', array('type' => 'password', 'label' => 'Password', 'class' => 'large_input')); ?> 
    <p>By selecting this checkbox you are acknowledging you are bound by <a target="_blank" href = "#">the terms and conditions</a> of the site
    <input id="agreebox" type="checkbox" name="terms" value="termSelect" onchange="agree()">&nbsp;&nbsp;&nbsp; </p>
    <div id="submitReg" class="hide">
        <?= $form->end('Register'); ?>
    </div>
</div>

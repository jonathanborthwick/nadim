<p>
    <?php __("You are currently an anonymous user. Login below to sign into your account, or register"); ?>.
</p>

<div id="login_panel" class="block_label">
    <?php
    $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('email', array('class' => 'large_input'));
    echo $form->input('password', array('class' => 'large_input'));
    echo $form->end('Login');
    ?>
</div>
<p>
    Forget your password?  Click <a href="/lost_password">here</a>.
</p>
<h2>Register Yourself</h2>

<?php if ($session->read('Auth.User.id')) { ?>
    <p>
        Currently you are an <strong>unregistered</strong> user. You may have <span class="highlight">requested or responded to a good vibe</span> but we only
        know you through your browser cookies. If you clear your browser cache or somehow delete your cookies you will lose your account.
    </p>
    <p>
        Add a password to your account and you will become a full member of our community.
    </p>
    
<?php } else { ?>
    <p>
        Currently you are an <strong>unregistered</strong> user. You may have <span class="highlight">requested or responded to a good vibe</span> but we only
        know you through your browser cookies. If you clear your browser cache or somehow delete your cookies you will lose your account.
    </p>
    <p>
        Add a password to your account and you will become a full member of our community.
    </p>
    <div class="block_label">
        <?= $form->create('User', array('action' => 'register')); ?>

        <?= $form->input('username', array('class' => 'large_input')); ?>

        <?= $form->input('email', array('class' => 'large_input')); ?>

        <?= $form->input('secret', array('type' => 'password', 'label' => 'Password', 'class' => 'large_input')); ?> 
        
        <div>
    <h3><?php __('Profile Image'); ?></h3>
    <?=
    $thumbnail->show(array(
        'save_path' => WWW_ROOT . 'img/thumbs',
        'display_path' => $this->webroot . 'img/thumbs',
        'error_image_path' => $this->webroot . 'img/answerAvatar.png',
        'src' => WWW_ROOT . $user_info['User']['image'],
        'w' => 75,
        'h' => 75,
        'q' => 100,
        'alt' => $user_info['User']['username'] . 'picture')
    );
    ?>
    <?=
    $trickyFileInput->draw('picker', array(
        'form' => array(
            'id' => 'User' . $user_info['User']['public_key'] . 'ImageChangeForm',
            'name' => 'User' . $user_info['User']['public_key'] . 'ImageChangeForm',
            'action' => $this->webroot . 'users/' . $user_info['User']['public_key'] . '/upload'),
        'input' => array(
            'name' => 'data[Upload][file]',
            'submitOnChange' => true),
        'image' => $this->webroot . 'img/buttons/choose_image.gif'));
    ?>
</div>
        
        <h3>Age <span class="small">An optional age to show.</span></h3>
            <input type="text" maxlength="3" name="data[User][age]" value="<?= $user_info['User']['age']; ?>"/>
        
        <h3>Website <span class="small">Have a website or social profile?</span></h3>
         <input type="text" name="data[User][website]" value="<?= $user_info['User']['website']; ?>"/>
         
         <h3>Summary <span class="small">Tell us a little about yourself.</span></h3>
            <textarea name="data[User][info]"><?= $user_info['User']['info']; ?></textarea>

        <?= $form->end('Register'); ?>
    </div>
<?php } ?>



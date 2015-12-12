
<?= form_open('profile/updatenow'); ?>

<div class="form-inline txt-center">

    <?=form_input('username', $user->username, 'placeholder="Username"'); ?>
    <br>
    <?=form_password('password', $user->password, 'placeholder="Senha"');?>
    <br>
    <?=form_input('email', $user->email, 'placeholder="E-mail"');?>
    <br>
    <?=form_textarea('about', $user->about, 'placeholder="Sobre"'); ?>
    <br>
    <?=form_submit('send','Atualizar usuario');?>

    <?=form_hidden('id', $user->id);?>
    <?=form_close();?>

</div>

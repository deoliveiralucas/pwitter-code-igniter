<?= form_open('profile/createNow'); ?>

<div class="form-inline txt-center">

	<?php $username = 'placeholder="Login"'; ?>
	<?= form_input('username', '', $username); ?>
	<br>
	<?php $senha = 'placeholder="Senha"'; ?>
    <?= form_password('password', '', $senha) ?>
	<br>
	<?php $email = 'placeholder="E-mail"'; ?>
	<?= form_input('email', '', $email); ?>
	<br>
	<?php $desc = 'placeholder="Descrição"'; ?>
	<?= form_textarea('desc', '', $desc); ?>
	<br>
	<?= form_submit('send', 'Criar Usuario'); ?>

</div>

<?= form_close(); ?>

<?= form_open('profile/updatenow'); ?>


<p>Username: </p>
<?=  form_input('username', $user->username); ?>

<p>Password: </p>
<?= form_password('password', $user->password); ?>

<p>Email: </p>
<?=  form_input('email', $user->email); ?>

<p>Descrição: </p>
<?= form_textarea('about', $user->about); ?>

<br>
<?= form_submit('send','Atualizar usuario'); ?>

<?=  form_hidden('id', $user->id); ?>
<?= form_close(); ?>
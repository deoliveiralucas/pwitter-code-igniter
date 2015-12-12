
<div class="container">
<?= form_open('authentication/login') ?>

<div class="form-inline txt-center">
    <?php $username = 'placeholder="Login"'; ?>
    <?= form_input('username', '', $username) ?>
    <br>
    <?php $senha = 'placeholder="Senha"'; ?>
    <?= form_password('password', '', $senha) ?>
    <br>
    <?= form_submit('send', 'Entrar')?>
</div>

<?= form_close() ?>
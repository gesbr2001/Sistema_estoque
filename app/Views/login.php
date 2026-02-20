<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login no Sistema</h2>

<?php if(session()->getFlashdata('erro')): ?>
    <p style="color:red"><?= session()->getFlashdata('erro') ?></p>
<?php endif; ?>

<form method="post" action="/auth/autenticar">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="senha" placeholder="Senha" required><br><br>
    <button type="submit">Entrar</button>
</form>

</body>
</html>

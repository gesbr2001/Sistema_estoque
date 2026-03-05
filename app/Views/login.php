<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<<<<<<< HEAD
</head>
<body>

<h2>Login no Sistema</h2>
=======
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>


<div class="telaLogin" >
<h2 class="loginTitle" >Login no Sistema</h2>
>>>>>>> 0e73b1d (coloquei o docker e o css)

<?php if(session()->getFlashdata('erro')): ?>
    <p style="color:red"><?= session()->getFlashdata('erro') ?></p>
<?php endif; ?>

<form method="post" action="/auth/autenticar">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="senha" placeholder="Senha" required><br><br>
    <button type="submit">Entrar</button>
</form>
<<<<<<< HEAD

=======
</div>
>>>>>>> 0e73b1d (coloquei o docker e o css)
</body>
</html>

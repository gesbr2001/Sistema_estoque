<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>
</head>
<body>

<!-- MENU -->
<div style="width:200px; float:left; background:#eee; height:100vh;">
    <h3>Menu</h3>
    <ul>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/protocolo">Protocolo</a></li>
        <li><a href="/triagem">Triagem</a></li>
        <li><a href="/separacao">Separação</a></li>
        <li><a href="/conferencia">Conferência</a></li>
        <li><a href="/expedicao">Expedição</a></li>
    </ul>
    <form action="/logout" method="get">
    <button type="submit">Sair</button>
</form>
</div>

<!-- CONTEÚDO -->
<div style="margin-left:210px; padding:20px;">
    <?= $this->renderSection('conteudo') ?>
</div>

</body>
</html>

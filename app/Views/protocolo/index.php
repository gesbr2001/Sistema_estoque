<h2>Protocolo</h2>

<?php if(session()->getFlashdata('msg')): ?>
    <p style="color:green"><?= session()->getFlashdata('msg') ?></p>
<?php endif; ?>

<a href="/protocolo/novo">Nova Requisição</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Req</th>
        <th>Destinatário</th>
        <th>Grupo</th>
        <th>Centro de Custo</th>
        <th>Status</th>
        <th>Atualmente</th>
        <th>Ações</th>
    </tr>

    <?php foreach($requisicoes as $req): ?>
    <tr>
        <td><?= $req['numero_requisicao'] ?></td>
        <td><?= $req['destinatario'] ?></td>
        <td><?= $req['grupo'] ?></td>
        <td><?= $req['centro_custo'] ?></td>
        <td><?= $req['status_protocolo'] ?></td>
        <td><?= $req['status'] ?></td>
        <td>
            <a href="/protocolo/enviarTriagem/<?= $req['id'] ?>">
                Enviar para Triagem
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
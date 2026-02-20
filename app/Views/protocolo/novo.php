<h2>Nova Requisição</h2>

<form method="post" action="/protocolo/salvar">

    <input type="text" name="destinatario" placeholder="Destinatário" required><br><br>

    <input type="text" name="grupo" placeholder="Grupo"><br><br>

    <input type="text" name="tipo_requisicao" placeholder="Tipo"><br><br>

    <input type="text" name="numero_requisicao" placeholder="Número da Requisição" required><br><br>

    <input type="text" name="centro_custo" placeholder="Centro de Custo"><br><br>

    <input type="text" name="status_protocolo" placeholder="Status"><br><br>

    <textarea name="observacao_protocolo" placeholder="Observação"></textarea><br><br>


    <button type="submit">Salvar</button>
    <a href="/protocolo">Cancelar</a>
</form>
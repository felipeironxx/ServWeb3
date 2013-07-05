{include file="view/inicio.tpl"}

<h1>Serviços</h1>

<form name="formCadServico">

    <input type="button" value="Novo Serviço" onclick="win('cadServico.php',600,420);">

</form>

<hr/><br>

<table border ="1">
    <tr>
        <td>Codigo do servico</td> 
        <td>Funcionario que anotou a solicitaçao</td> 
        <td>Solicitante</td>
        <td>Servico a ser realizado</td> 
        <td>Data da solictaçao</td>
        <td>Data e hora da realização</td>
        <td>Concluido</td>
        <td>Ações</td>        
    </tr>
    
    {foreach from=$lista item=row}
        <tr>
            <td>{$row.id} </td> 
            <td>{$row.nome_funcionario} </td>
            {if $row.nome_cliente == ''}
            <td>{$row.nome_empresa} | {$row.nome_func_empr}</td>
            {else}
            <td>{$row.nome_cliente} </td>
            {/if}
            <td>{$row.serv_solicitado} </td> 
            <td>{$row.dt_solicitacao} </td>
            <td>{$row.dt_hr_realizacao} </td>
            <td align="center"><input type="checkbox" value=""/></td>
            <td><a href="#" onclick="win('editServico.php?edit={$row.id}',450,590)">Detalhes</a> | 
                <a href="?del={$row.id}">del</a> 
                <input type="button" value="Iniciar Serviço" onclick="win('iniciar_servico.php?iniciar={$row.id}',400,135)"/> 
            </td>
        </tr>
    {/foreach}
</table>

{include file="view/fim.tpl"}

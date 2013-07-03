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
        <td>Empresa que solicitou o servico</td> 
        <td>Funcionario da empresa que solicitou</td> 
        <td>Servico a ser realizado</td> 
        <td>Data da solictaçao</td>
        <td>Data da realização</td>
        <td>Concluido</td>
        <td>Ações</td>        
    </tr>
    {foreach from=$lista item=row}
    <tr>
        <td>{$row.id} </td> 
        <td>{$row.nome_funcionario} </td>
        <td>{$row.nome_cliente} </td>
        <td>{$row.nome_empresa} </td> 
        <td>{$row.nome_func_empr} </td> 
        <td>{$row.serv_solicitado} </td> 
        <td>{$row.dt_solicitacao} </td>
        <td>{$row.dt_realizacao} </td>
        <td align="center"><input type="checkbox" value=""/></td>
        <td><a href="#" onclick="win('editServico.php?edit={$row.id}',300,450)">Edit</a> | 
            <a href="?del={$row.id}">Del</a>
        </td>
    </tr>
    {/foreach}
</table>

{include file="view/fim.tpl"}

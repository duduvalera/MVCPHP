<?php
$v_params = $this->getParams();
$v_contatos = $v_params['v_contatos'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Agenda Telef&ocirc;nica - Exemplo de MVC com PHP
    </title>
    <link rel="stylesheet" type="text/css" href="template/css/default.css" />
</head>
<body>
    <div align="center">
        <table width="80%" border="1">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th colspan="3">
                    A&ccedil;&otilde;es
                </th>
            </tr>
            <?php
            foreach($v_contatos AS $o_contato)
            {
                ?>
                <tr>
                    <td>
                        <?php echo $o_contato->getId()?>
                    </td>
                    <td>
                        <?php echo $o_contato->getNome()?>
                    </td>
                    <td>
                        <?php echo $o_contato->getEmail()?>
                    </td>
                    <td align="center">
                        <a href='?controle=Telefone&acao=listarTelefones&in_con=<?php echo $o_contato->getId()?>'>Telefones</a>
                    </td>
                    <td align="center">
                        <a href='?controle=Contato&acao=manterContato&in_con=<?php echo $o_contato->getId()?>'>Editar</a>
                    </td>
                    <td align="center">
                        <a href='?controle=Contato&acao=apagarContato&in_con=<?php echo $o_contato->getId()?>'>Apagar</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <br />
        <a href='?controle=Contato&acao=manterContato'>Novo Contato</a>
    </div>
</body>
</html>
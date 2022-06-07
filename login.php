<?php
    include 'conexao.php';

    $result = $db->query("select * from clientes");

    while($cliente = $result->fetch_assoc()) {
        $listaClientes .= 
        '<tr class="tabela">
            <td>'.$cliente['nome'].'</td>
            <td>'.$cliente['cpf'].'</td>            
            <td>'.$cliente['celular'].'</td>
            <td>'.$cliente['email'].'</td>
            <td>'.$cliente['status'].'</td>
            <td>
                <button class="buttonAcao">
                    <a class="verCliente" href="alterarTela.php?cliente_idclientes='.$cliente['idclientes'].'">
                        Ver
                    </a>
                </button>
                <button class="buttonAcao">
                    <a class="verCliente" href="excluir.php?cliente_idclientes='.$cliente['idclientes'].'">
                        Excluir
                    </a>
                </button>
            </td>
        </tr>';
    }
    echo $listaClientes;
?>
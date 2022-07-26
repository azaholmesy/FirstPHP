<!DOCTYPE html>
<?php 
    require_once '../controller/CUsuario.php';
    $cadUsuario = new CUsuario;
    $listaUsers = $cadUsuario->getUsuarios();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
    </head>
    <body>
        <div id="lista">
            <h2>Lista Usuários</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Usuário</th>
                        <th>Usuário</th>
                        <th>Tipo Perfil</th>
                        <th>Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            foreach ($listaUsers as $user):
                    ?>
                    <tr>
                        <td><?php echo $user['idUsuario']; ?></td>
                        <td><?php echo $user['nomeUsuario']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php echo $user['perfilAcesso']; ?></td>
                        <td>
                            <form action="editarUser.php" method="POST">
                                <input 
                                    type="hidden" 
                                    name="idUsuario" 
                                    value="<?php echo $user['idUsuario']; ?>"
                                    />
                                    <input type="submit" value="Editar" name="editar"/>
                                </form> 
                            <form action="../controller/DeletarUser.php" method="POST">
                                <input 
                                type="hidden" 
                                name="idUsuario" 
                                value="<?php echo $user['idUsuario']; ?>"
                                />
                                <input type="submit" value="Deletar" name="deletar"/>
                            </form>
                        </td>
                        <td>-----</td>
                    </tr>
                    <?php 
                            endforeach;
                    ?>
                </tbody>
            </table>
            <br/><br/>
            <input type="button" value="Voltar"
            onclick="location.href='./cadUsuario.php'"/>
            <input type="button" value="Voltar Para a Página Inicial"
            onclick="location.href='../index.php'"/>
            </div>
    </body>
</html>
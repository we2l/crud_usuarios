<?php
$this->assign('title', 'Home');
$this->assign('h1', 'Listagem de usuários');
?>


<?php 
if(empty($usuarios)) {
    echo "Não há usuários cadastrados";
}
foreach($usuarios as $usuario): 
?>
<div class="user-item-container">
    <div class="user-item-content">
        <h2><?= $usuario['nome'] ?></h2>
        <ul>
            <li>Email : <?= $usuario['email'] ?></li>
            <li>CPF : <?= $usuario['cpf'] ?></li>
            <li>Telefone : <?= $usuario['telefone'] ?></li>
        </ul>
        <div class="buttons">
            <a class="button-view"  id="<?= $usuario['idusuario'] ?>">Visualizar </a>
            
            <?= 
                $this->Html->link('Editar', 
                ['controller' => 'Usuarios', 'action' => 'edit', $usuario['idusuario']],
                ['class' => 'button-edit'])
            ?>

            <?= 
                $this->Html->link('Excluir', 
                ['controller' => 'Usuarios', 'action' => 'delete', $usuario['idusuario']],
                ['class' => 'button-del'])
            ?>
        </div>
    </div>
</div>
<?php endforeach ?>
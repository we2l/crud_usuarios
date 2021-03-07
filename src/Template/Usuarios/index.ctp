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
            <li><?= $usuario['email'] ?></li>
            <li><?= $usuario['telefone'] ?></li>
        </ul>
        <a class="button-view" id="<?= $usuario['idusuario'] ?>">Visualizar mais informações</a>
    </div>
</div>
<?php endforeach ?>
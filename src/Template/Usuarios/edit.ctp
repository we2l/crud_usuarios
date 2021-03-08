<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
$this->assign('title', 'Edição de usuários');
$this->assign('h1', 'Edição de usuários');
?>
<div class="form-container">
    <div><?= $this->Flash->render('success') ?></div>
    <div><?= $this->Flash->render('error') ?></div>
    <?= $this->Form->create($usuarioForm, ['type' => 'put']) ?>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('nome',[
                    'value' => [
                        'value' => $usuario['nome']
                    ]
                ]) ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('cpf', [
                    'value' => [
                        'value' => $usuario['cpf']
                    ]
                ]) ?>
            </div>
        </div>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('email', [
                    'value' => [
                        'value' => $usuario['email']
                    ]
                ]) ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('telefone', [
                    'value' => [
                        'value' => $usuario['telefone']
                    ]
                ]) ?>
            </div>
        </div>

        <div class="form-item">
            <label>Data de nascimento</label>
            <input type="date" name="data_nascimento" required >
        </div>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('cidade', [
                    'value' => [
                        'value' => $usuario['endereco']['cidade']
                    ]
                ]) ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('estado', [
                    'value' => [
                        'value' => $usuario['endereco']['estado']
                    ]
                ]) ?>
            </div>
        </div>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('bairro', [
                    'value' => [
                        'value' => $usuario['endereco']['bairro']
                    ]
                ]) ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('numero', [
                    'value' => [
                        'value' =>  $usuario['endereco']['numero']
                    ]
                ]) ?>
            </div>
        </div>

        <div class="form-item">
            <?= $this->Form->submit('Editar') ?>
        </div>

    <?= $this->Form->end() ?>
</div>

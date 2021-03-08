<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
$this->assign('h1', 'Cadastro de usuários')
?>
<div class="form-container">
    <div><?= $this->Flash->render('success') ?></div>
    <div><?= $this->Flash->render('error') ?></div>
    <?= $this->Form->create($usuarioForm) ?>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('nome') ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('cpf') ?>
            </div>
        </div>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('email') ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('telefone') ?>
            </div>
        </div>

        <div class="form-item">
            <label>Data de nascimento</label>
            <input type="date" name="data_nascimento" required>
        </div>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('cidade') ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('estado') ?>
            </div>
        </div>

        <div class="box-form flex">
            <div class="form-item">
                <?= $this->Form->control('bairro') ?>
            </div>

            <div class="form-item">
                <?= $this->Form->control('numero') ?>
            </div>
        </div>

        <div class="form-item">
            <?= $this->Form->submit('Enviar') ?>
        </div>

    <?= $this->Form->end() ?>
</div>
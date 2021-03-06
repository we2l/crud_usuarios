<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $endereco->idendereco],
                ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->idendereco)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Edit Endereco') ?></legend>
        <?php
            echo $this->Form->control('rua');
            echo $this->Form->control('numero');
            echo $this->Form->control('complemento');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
            echo $this->Form->control('id_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

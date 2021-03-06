<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->idendereco]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->idendereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->idendereco)]) ?> </li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecos view large-9 medium-8 columns content">
    <h3><?= h($endereco->idendereco) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rua') ?></th>
            <td><?= h($endereco->rua) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($endereco->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($endereco->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idendereco') ?></th>
            <td><?= $this->Number->format($endereco->idendereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($endereco->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($endereco->id_usuario) ?></td>
        </tr>
    </table>
</div>

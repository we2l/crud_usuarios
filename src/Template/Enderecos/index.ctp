<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $enderecos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos index large-9 medium-8 columns content">
    <h3><?= __('Enderecos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idendereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rua') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?= $this->Number->format($endereco->idendereco) ?></td>
                <td><?= h($endereco->rua) ?></td>
                <td><?= $this->Number->format($endereco->numero) ?></td>
                <td><?= h($endereco->complemento) ?></td>
                <td><?= h($endereco->cidade) ?></td>
                <td><?= h($endereco->estado) ?></td>
                <td><?= $this->Number->format($endereco->id_usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $endereco->idendereco]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $endereco->idendereco]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->idendereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->idendereco)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

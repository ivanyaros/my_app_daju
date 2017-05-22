<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materiales Lote'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialesLotes index large-9 medium-8 columns content">
    <h3><?= __('Materiales Lotes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('materiale_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidades') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materialesLotes as $materialesLote): ?>
            <tr>
                <td><?= $materialesLote->has('materiale') ? $this->Html->link($materialesLote->materiale->id, ['controller' => 'Materiales', 'action' => 'view', $materialesLote->materiale->id]) : '' ?></td>
                <td><?= h($materialesLote->lote) ?></td>
                <td><?= $this->Number->format($materialesLote->peso) ?></td>
                <td><?= $this->Number->format($materialesLote->metros) ?></td>
                <td><?= $this->Number->format($materialesLote->unidades) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materialesLote->materiale_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materialesLote->materiale_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materialesLote->materiale_id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesLote->materiale_id)]) ?>
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

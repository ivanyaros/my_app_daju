<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ordens Estados Utensilio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordensEstadosUtensilios index large-9 medium-8 columns content">
    <h3><?= __('Ordens Estados Utensilios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordens_estado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('utensilio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordensEstadosUtensilios as $ordensEstadosUtensilio): ?>
            <tr>
                <td><?= $this->Number->format($ordensEstadosUtensilio->id) ?></td>
                <td><?= $this->Number->format($ordensEstadosUtensilio->ordens_estado_id) ?></td>
                <td><?= $this->Number->format($ordensEstadosUtensilio->utensilio_id) ?></td>
                <td><?= h($ordensEstadosUtensilio->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordensEstadosUtensilio->ordens_estados_orden_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordensEstadosUtensilio->ordens_estados_orden_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordensEstadosUtensilio->ordens_estados_orden_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUtensilio->ordens_estados_orden_id)]) ?>
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

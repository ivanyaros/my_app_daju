<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proceso Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="procesoProducto index large-9 medium-8 columns content">
    <h3><?= __('Proceso Producto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entrada_salida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($procesoProducto as $procesoProducto): ?>
            <tr>
                <td><?= $procesoProducto->has('proceso') ? $this->Html->link($procesoProducto->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoProducto->proceso->id]) : '' ?></td>
                <td><?= $procesoProducto->has('producto') ? $this->Html->link($procesoProducto->producto->id, ['controller' => 'Producto', 'action' => 'view', $procesoProducto->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($procesoProducto->cantidad) ?></td>
                <td><?= h($procesoProducto->entrada_salida) ?></td>
                <td><?= h($procesoProducto->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $procesoProducto->proceso_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $procesoProducto->proceso_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $procesoProducto->proceso_id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoProducto->proceso_id)]) ?>
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

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salidas Productos Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salidas Productos'), ['controller' => 'SalidasProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salidas Producto'), ['controller' => 'SalidasProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidasProductosProducto index large-9 medium-8 columns content">
    <h3><?= __('Salidas Productos Producto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('salidas_productos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salidasProductosProducto as $salidasProductosProducto): ?>
            <tr>
                <td><?= $salidasProductosProducto->has('salidas_producto') ? $this->Html->link($salidasProductosProducto->salidas_producto->id, ['controller' => 'SalidasProductos', 'action' => 'view', $salidasProductosProducto->salidas_producto->id]) : '' ?></td>
                <td><?= $salidasProductosProducto->has('producto') ? $this->Html->link($salidasProductosProducto->producto->id, ['controller' => 'Producto', 'action' => 'view', $salidasProductosProducto->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($salidasProductosProducto->cantidad) ?></td>
                <td><?= h($salidasProductosProducto->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salidasProductosProducto->salidas_productos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salidasProductosProducto->salidas_productos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salidasProductosProducto->salidas_productos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasProductosProducto->salidas_productos_id)]) ?>
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

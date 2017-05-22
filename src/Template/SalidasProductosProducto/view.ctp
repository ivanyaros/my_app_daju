<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salidas Productos Producto'), ['action' => 'edit', $salidasProductosProducto->salidas_productos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salidas Productos Producto'), ['action' => 'delete', $salidasProductosProducto->salidas_productos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasProductosProducto->salidas_productos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Productos Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Productos Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Productos'), ['controller' => 'SalidasProductos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Producto'), ['controller' => 'SalidasProductos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salidasProductosProducto view large-9 medium-8 columns content">
    <h3><?= h($salidasProductosProducto->salidas_productos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Salidas Producto') ?></th>
            <td><?= $salidasProductosProducto->has('salidas_producto') ? $this->Html->link($salidasProductosProducto->salidas_producto->id, ['controller' => 'SalidasProductos', 'action' => 'view', $salidasProductosProducto->salidas_producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $salidasProductosProducto->has('producto') ? $this->Html->link($salidasProductosProducto->producto->id, ['controller' => 'Producto', 'action' => 'view', $salidasProductosProducto->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($salidasProductosProducto->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($salidasProductosProducto->cantidad) ?></td>
        </tr>
    </table>
</div>

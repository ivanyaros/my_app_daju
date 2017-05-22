<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caja'), ['action' => 'edit', $caja->producto_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caja'), ['action' => 'delete', $caja->producto_id], ['confirm' => __('Are you sure you want to delete # {0}?', $caja->producto_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cajas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caja'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cajas view large-9 medium-8 columns content">
    <h3><?= h($caja->producto_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $caja->has('producto') ? $this->Html->link($caja->producto->id, ['controller' => 'Producto', 'action' => 'view', $caja->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($caja->descripcion) ?></td>
        </tr>
    </table>
</div>

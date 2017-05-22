<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Palet'), ['action' => 'edit', $palet->producto_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Palet'), ['action' => 'delete', $palet->producto_id], ['confirm' => __('Are you sure you want to delete # {0}?', $palet->producto_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Palets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Palet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="palets view large-9 medium-8 columns content">
    <h3><?= h($palet->producto_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $palet->has('producto') ? $this->Html->link($palet->producto->id, ['controller' => 'Producto', 'action' => 'view', $palet->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($palet->descripcion) ?></td>
        </tr>
    </table>
</div>

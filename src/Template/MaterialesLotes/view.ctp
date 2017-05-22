<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiales Lote'), ['action' => 'edit', $materialesLote->materiale_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiales Lote'), ['action' => 'delete', $materialesLote->materiale_id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesLote->materiale_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiales Lotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiales Lote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materialesLotes view large-9 medium-8 columns content">
    <h3><?= h($materialesLote->materiale_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Materiale') ?></th>
            <td><?= $materialesLote->has('materiale') ? $this->Html->link($materialesLote->materiale->id, ['controller' => 'Materiales', 'action' => 'view', $materialesLote->materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($materialesLote->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($materialesLote->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros') ?></th>
            <td><?= $this->Number->format($materialesLote->metros) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidades') ?></th>
            <td><?= $this->Number->format($materialesLote->unidades) ?></td>
        </tr>
    </table>
</div>

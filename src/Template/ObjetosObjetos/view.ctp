<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Objetos Objeto'), ['action' => 'edit', $objetosObjeto->salida]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Objetos Objeto'), ['action' => 'delete', $objetosObjeto->salida], ['confirm' => __('Are you sure you want to delete # {0}?', $objetosObjeto->salida)]) ?> </li>
        <li><?= $this->Html->link(__('List Objetos Objetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objetos Objeto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objetosObjetos view large-9 medium-8 columns content">
    <h3><?= h($objetosObjeto->salida) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($objetosObjeto->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salida') ?></th>
            <td><?= $this->Number->format($objetosObjeto->salida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entrada') ?></th>
            <td><?= $this->Number->format($objetosObjeto->entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Producida') ?></th>
            <td><?= $this->Number->format($objetosObjeto->cantidad_producida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Gastada') ?></th>
            <td><?= $this->Number->format($objetosObjeto->cantidad_gastada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scrap') ?></th>
            <td><?= $this->Number->format($objetosObjeto->scrap) ?></td>
        </tr>
    </table>
</div>

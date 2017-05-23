<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ordens Estados Utensilio'), ['action' => 'edit', $ordensEstadosUtensilio->ordens_estados_orden_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ordens Estados Utensilio'), ['action' => 'delete', $ordensEstadosUtensilio->ordens_estados_orden_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstadosUtensilio->ordens_estados_orden_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados Utensilios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estados Utensilio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utensilios'), ['controller' => 'Utensilios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utensilio'), ['controller' => 'Utensilios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordensEstadosUtensilios view large-9 medium-8 columns content">
    <h3><?= h($ordensEstadosUtensilio->ordens_estados_orden_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ordens Estado') ?></th>
            <td><?= $ordensEstadosUtensilio->has('ordens_estado') ? $this->Html->link($ordensEstadosUtensilio->ordens_estado->orden_id, ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstadosUtensilio->ordens_estado->orden_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utensilio') ?></th>
            <td><?= $ordensEstadosUtensilio->has('utensilio') ? $this->Html->link($ordensEstadosUtensilio->utensilio->id, ['controller' => 'Utensilios', 'action' => 'view', $ordensEstadosUtensilio->utensilio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($ordensEstadosUtensilio->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordens Estados Orden Id') ?></th>
            <td><?= $this->Number->format($ordensEstadosUtensilio->ordens_estados_orden_id) ?></td>
        </tr>
    </table>
</div>

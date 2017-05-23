<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiale'), ['action' => 'edit', $materiale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiale'), ['action' => 'delete', $materiale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['controller' => 'Localizaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Localizacione'), ['controller' => 'Localizaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entradas Material'), ['controller' => 'EntradasMaterial', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materiales view large-9 medium-8 columns content">
    <h3><?= h($materiale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $materiale->has('material') ? $this->Html->link($materiale->material->id, ['controller' => 'Material', 'action' => 'view', $materiale->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entradas Material') ?></th>
            <td><?= $materiale->has('entradas_material') ? $this->Html->link($materiale->entradas_material->id, ['controller' => 'EntradasMaterial', 'action' => 'view', $materiale->entradas_material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materiale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Localizacione Id') ?></th>
            <td><?= $this->Number->format($materiale->localizacione_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entega') ?></th>
            <td><?= h($materiale->fecha_entega) ?></td>
        </tr>
    </table>
</div>

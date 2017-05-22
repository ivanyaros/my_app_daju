<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Localizacione'), ['action' => 'edit', $localizacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Localizacione'), ['action' => 'delete', $localizacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localizacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Localizaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Localizacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="localizaciones view large-9 medium-8 columns content">
    <h3><?= h($localizacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $localizacione->has('centro') ? $this->Html->link($localizacione->centro->id, ['controller' => 'Centros', 'action' => 'view', $localizacione->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($localizacione->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($localizacione->id) ?></td>
        </tr>
    </table>
</div>

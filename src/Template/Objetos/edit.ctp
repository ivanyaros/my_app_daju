<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $objeto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $objeto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ordens'), ['controller' => 'Ordens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Orden'), ['controller' => 'Ordens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objetos form large-9 medium-8 columns content">
    <?= $this->Form->create($objeto) ?>
    <fieldset>
        <legend><?= __('Edit Objeto') ?></legend>
        <?php
            echo $this->Form->control('producto_id', ['options' => $producto, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('productoscol');
            echo $this->Form->control('orden_id', ['options' => $ordens]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

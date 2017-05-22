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
                ['action' => 'delete', $caja->producto_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caja->producto_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cajas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cajas form large-9 medium-8 columns content">
    <?= $this->Form->create($caja) ?>
    <fieldset>
        <legend><?= __('Edit Caja') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

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
                ['action' => 'delete', $salidasProductosProducto->salidas_productos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salidasProductosProducto->salidas_productos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Salidas Productos Producto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Salidas Productos'), ['controller' => 'SalidasProductos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salidas Producto'), ['controller' => 'SalidasProductos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidasProductosProducto form large-9 medium-8 columns content">
    <?= $this->Form->create($salidasProductosProducto) ?>
    <fieldset>
        <legend><?= __('Edit Salidas Productos Producto') ?></legend>
        <?php
            echo $this->Form->control('cantidad');
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

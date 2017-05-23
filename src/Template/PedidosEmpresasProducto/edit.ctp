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
                ['action' => 'delete', $pedidosEmpresasProducto->pedidos_empresa_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresasProducto->pedidos_empresa_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas Producto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosEmpresasProducto form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidosEmpresasProducto) ?>
    <fieldset>
        <legend><?= __('Edit Pedidos Empresas Producto') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('cantidad');
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('observaciones');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

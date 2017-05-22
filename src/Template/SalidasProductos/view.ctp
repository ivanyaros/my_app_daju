<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salidas Producto'), ['action' => 'edit', $salidasProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salidas Producto'), ['action' => 'delete', $salidasProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salidasProductos view large-9 medium-8 columns content">
    <h3><?= h($salidasProducto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $salidasProducto->has('proveedores_cliente') ? $this->Html->link($salidasProducto->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $salidasProducto->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($salidasProducto->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedidos Empresa') ?></th>
            <td><?= $salidasProducto->has('pedidos_empresa') ? $this->Html->link($salidasProducto->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $salidasProducto->pedidos_empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centro') ?></th>
            <td><?= $salidasProducto->has('centro') ? $this->Html->link($salidasProducto->centro->id, ['controller' => 'Centros', 'action' => 'view', $salidasProducto->centro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($salidasProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Pedido') ?></th>
            <td><?= h($salidasProducto->fecha_pedido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Entrega') ?></th>
            <td><?= h($salidasProducto->fecha_entrega) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Producto') ?></h4>
        <?php if (!empty($salidasProducto->producto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Familia Id') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Moneda Id') ?></th>
                <th scope="col"><?= __('Iva Id') ?></th>
                <th scope="col"><?= __('Observaciones') ?></th>
                <th scope="col"><?= __('Visible') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($salidasProducto->producto as $producto): ?>
            <tr>
                <td><?= h($producto->id) ?></td>
                <td><?= h($producto->nombre) ?></td>
                <td><?= h($producto->referencia) ?></td>
                <td><?= h($producto->familia_id) ?></td>
                <td><?= h($producto->precio) ?></td>
                <td><?= h($producto->moneda_id) ?></td>
                <td><?= h($producto->iva_id) ?></td>
                <td><?= h($producto->observaciones) ?></td>
                <td><?= h($producto->visible) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Producto', 'action' => 'view', $producto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Producto', 'action' => 'edit', $producto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Producto', 'action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

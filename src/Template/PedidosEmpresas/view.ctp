<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidos Empresa'), ['action' => 'edit', $pedidosEmpresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidos Empresa'), ['action' => 'delete', $pedidosEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salidas Productos'), ['controller' => 'SalidasProductos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salidas Producto'), ['controller' => 'SalidasProductos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosEmpresas view large-9 medium-8 columns content">
    <h3><?= h($pedidosEmpresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($pedidosEmpresa->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($pedidosEmpresa->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedores Cliente') ?></th>
            <td><?= $pedidosEmpresa->has('proveedores_cliente') ? $this->Html->link($pedidosEmpresa->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $pedidosEmpresa->proveedores_cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Albaran') ?></th>
            <td><?= h($pedidosEmpresa->albaran) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedidosEmpresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedidosEmpresa->fecha) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Salidas Productos') ?></h4>
        <?php if (!empty($pedidosEmpresa->salidas_productos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proveedores Cliente Id') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Fecha Entrega') ?></th>
                <th scope="col"><?= __('Albaran') ?></th>
                <th scope="col"><?= __('Pedidos Empresa Id') ?></th>
                <th scope="col"><?= __('Centro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedidosEmpresa->salidas_productos as $salidasProductos): ?>
            <tr>
                <td><?= h($salidasProductos->id) ?></td>
                <td><?= h($salidasProductos->proveedores_cliente_id) ?></td>
                <td><?= h($salidasProductos->fecha_pedido) ?></td>
                <td><?= h($salidasProductos->fecha_entrega) ?></td>
                <td><?= h($salidasProductos->albaran) ?></td>
                <td><?= h($salidasProductos->pedidos_empresa_id) ?></td>
                <td><?= h($salidasProductos->centro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SalidasProductos', 'action' => 'view', $salidasProductos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SalidasProductos', 'action' => 'edit', $salidasProductos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SalidasProductos', 'action' => 'delete', $salidasProductos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasProductos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Producto') ?></h4>
        <?php if (!empty($pedidosEmpresa->producto)): ?>
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
            <?php foreach ($pedidosEmpresa->producto as $producto): ?>
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

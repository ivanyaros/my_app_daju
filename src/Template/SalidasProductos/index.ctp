<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salidas Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedores Clientes'), ['controller' => 'ProveedoresClientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedores Cliente'), ['controller' => 'ProveedoresClientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Centros'), ['controller' => 'Centros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Centro'), ['controller' => 'Centros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidasProductos index large-9 medium-8 columns content">
    <h3><?= __('Salidas Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedores_cliente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_entrega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('albaran') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centro_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salidasProductos as $salidasProducto): ?>
            <tr>
                <td><?= $this->Number->format($salidasProducto->id) ?></td>
                <td><?= $salidasProducto->has('proveedores_cliente') ? $this->Html->link($salidasProducto->proveedores_cliente->id, ['controller' => 'ProveedoresClientes', 'action' => 'view', $salidasProducto->proveedores_cliente->id]) : '' ?></td>
                <td><?= h($salidasProducto->fecha_pedido) ?></td>
                <td><?= h($salidasProducto->fecha_entrega) ?></td>
                <td><?= h($salidasProducto->albaran) ?></td>
                <td><?= $salidasProducto->has('pedidos_empresa') ? $this->Html->link($salidasProducto->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $salidasProducto->pedidos_empresa->id]) : '' ?></td>
                <td><?= $salidasProducto->has('centro') ? $this->Html->link($salidasProducto->centro->id, ['controller' => 'Centros', 'action' => 'view', $salidasProducto->centro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salidasProducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salidasProducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salidasProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidasProducto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

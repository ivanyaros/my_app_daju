<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresas Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedidos Empresas'), ['controller' => 'PedidosEmpresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedidos Empresa'), ['controller' => 'PedidosEmpresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Producto'), ['controller' => 'Producto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Producto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedidosEmpresasProducto index large-9 medium-8 columns content">
    <h3><?= __('Pedidos Empresas Producto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedidos_empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('producto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosEmpresasProducto as $pedidosEmpresasProducto): ?>
            <tr>
                <td><?= $this->Number->format($pedidosEmpresasProducto->id) ?></td>
                <td><?= $pedidosEmpresasProducto->has('pedidos_empresa') ? $this->Html->link($pedidosEmpresasProducto->pedidos_empresa->id, ['controller' => 'PedidosEmpresas', 'action' => 'view', $pedidosEmpresasProducto->pedidos_empresa->id]) : '' ?></td>
                <td><?= $pedidosEmpresasProducto->has('producto') ? $this->Html->link($pedidosEmpresasProducto->producto->id, ['controller' => 'Producto', 'action' => 'view', $pedidosEmpresasProducto->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($pedidosEmpresasProducto->cantidad) ?></td>
                <td><?= h($pedidosEmpresasProducto->fecha) ?></td>
                <td><?= h($pedidosEmpresasProducto->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedidosEmpresasProducto->pedidos_empresa_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidosEmpresasProducto->pedidos_empresa_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidosEmpresasProducto->pedidos_empresa_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosEmpresasProducto->pedidos_empresa_id)]) ?>
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

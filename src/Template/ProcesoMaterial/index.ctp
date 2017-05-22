<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proceso Material'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proceso'), ['controller' => 'Proceso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proceso'), ['controller' => 'Proceso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="procesoMaterial index large-9 medium-8 columns content">
    <h3><?= __('Proceso Material') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('proceso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_lineales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_cuadrados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($procesoMaterial as $procesoMaterial): ?>
            <tr>
                <td><?= $procesoMaterial->has('proceso') ? $this->Html->link($procesoMaterial->proceso->id, ['controller' => 'Proceso', 'action' => 'view', $procesoMaterial->proceso->id]) : '' ?></td>
                <td><?= $procesoMaterial->has('material') ? $this->Html->link($procesoMaterial->material->id, ['controller' => 'Material', 'action' => 'view', $procesoMaterial->material->id]) : '' ?></td>
                <td><?= $this->Number->format($procesoMaterial->metros_lineales) ?></td>
                <td><?= $this->Number->format($procesoMaterial->metros_cuadrados) ?></td>
                <td><?= h($procesoMaterial->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $procesoMaterial->proceso_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $procesoMaterial->proceso_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $procesoMaterial->proceso_id], ['confirm' => __('Are you sure you want to delete # {0}?', $procesoMaterial->proceso_id)]) ?>
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

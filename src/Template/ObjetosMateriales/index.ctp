<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Objetos Materiale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Objetos'), ['controller' => 'Objetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Objeto'), ['controller' => 'Objetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material'), ['controller' => 'Material', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Material', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="objetosMateriales index large-9 medium-8 columns content">
    <h3><?= __('Objetos Materiales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('objeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materiale_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_producida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scrap') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objetosMateriales as $objetosMateriale): ?>
            <tr>
                <td><?= $this->Number->format($objetosMateriale->id) ?></td>
                <td><?= $objetosMateriale->has('objeto') ? $this->Html->link($objetosMateriale->objeto->id, ['controller' => 'Objetos', 'action' => 'view', $objetosMateriale->objeto->id]) : '' ?></td>
                <td><?= $this->Number->format($objetosMateriale->materiale_id) ?></td>
                <td><?= $this->Number->format($objetosMateriale->cantidad_producida) ?></td>
                <td><?= $this->Number->format($objetosMateriale->uso) ?></td>
                <td><?= $this->Number->format($objetosMateriale->scrap) ?></td>
                <td><?= h($objetosMateriale->observaciones) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $objetosMateriale->objeto_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $objetosMateriale->objeto_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $objetosMateriale->objeto_id], ['confirm' => __('Are you sure you want to delete # {0}?', $objetosMateriale->objeto_id)]) ?>
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

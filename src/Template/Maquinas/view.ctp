<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Maquina'), ['action' => 'edit', $maquina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Maquina'), ['action' => 'delete', $maquina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Maquinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maquina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ordens Estados'), ['controller' => 'OrdensEstados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordens Estado'), ['controller' => 'OrdensEstados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maquinas view large-9 medium-8 columns content">
    <h3><?= h($maquina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($maquina->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($maquina->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maquinacol') ?></th>
            <td><?= h($maquina->maquinacol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maquina->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ordens Estados') ?></h4>
        <?php if (!empty($maquina->ordens_estados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Orden Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($maquina->ordens_estados as $ordensEstados): ?>
            <tr>
                <td><?= h($ordensEstados->orden_id) ?></td>
                <td><?= h($ordensEstados->estado_id) ?></td>
                <td><?= h($ordensEstados->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdensEstados', 'action' => 'view', $ordensEstados->orden_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdensEstados', 'action' => 'edit', $ordensEstados->orden_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdensEstados', 'action' => 'delete', $ordensEstados->orden_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordensEstados->orden_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

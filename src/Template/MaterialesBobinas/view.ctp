<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materiales Bobina'), ['action' => 'edit', $materialesBobina->materiale_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materiales Bobina'), ['action' => 'delete', $materialesBobina->materiale_id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesBobina->materiale_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materiales Bobinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiales Bobina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materialesBobinas view large-9 medium-8 columns content">
    <h3><?= h($materialesBobina->materiale_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Materiale') ?></th>
            <td><?= $materialesBobina->has('materiale') ? $this->Html->link($materialesBobina->materiale->id, ['controller' => 'Materiales', 'action' => 'view', $materialesBobina->materiale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($materialesBobina->lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('En Uso') ?></th>
            <td><?= h($materialesBobina->en_uso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Terminado') ?></th>
            <td><?= h($materialesBobina->terminado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($materialesBobina->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taras') ?></th>
            <td><?= $this->Number->format($materialesBobina->taras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Brutos') ?></th>
            <td><?= $this->Number->format($materialesBobina->metros_brutos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Netos') ?></th>
            <td><?= $this->Number->format($materialesBobina->metros_netos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metros Actuales') ?></th>
            <td><?= $this->Number->format($materialesBobina->metros_actuales) ?></td>
        </tr>
    </table>
</div>

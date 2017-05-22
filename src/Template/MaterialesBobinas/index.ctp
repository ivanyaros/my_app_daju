<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materiales Bobina'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materiales'), ['controller' => 'Materiales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materiale'), ['controller' => 'Materiales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialesBobinas index large-9 medium-8 columns content">
    <h3><?= __('Materiales Bobinas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('materiale_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taras') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_brutos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_netos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metros_actuales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('en_uso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('terminado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materialesBobinas as $materialesBobina): ?>
            <tr>
                <td><?= $materialesBobina->has('materiale') ? $this->Html->link($materialesBobina->materiale->id, ['controller' => 'Materiales', 'action' => 'view', $materialesBobina->materiale->id]) : '' ?></td>
                <td><?= h($materialesBobina->lote) ?></td>
                <td><?= $this->Number->format($materialesBobina->numero) ?></td>
                <td><?= $this->Number->format($materialesBobina->taras) ?></td>
                <td><?= $this->Number->format($materialesBobina->metros_brutos) ?></td>
                <td><?= $this->Number->format($materialesBobina->metros_netos) ?></td>
                <td><?= $this->Number->format($materialesBobina->metros_actuales) ?></td>
                <td><?= h($materialesBobina->en_uso) ?></td>
                <td><?= h($materialesBobina->terminado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materialesBobina->materiale_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materialesBobina->materiale_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materialesBobina->materiale_id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialesBobina->materiale_id)]) ?>
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

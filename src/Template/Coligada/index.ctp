<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coligada'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coligada index large-9 medium-8 columns content">
    <h3><?= __('Coligada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('cnpj') ?></th>
                <th><?= $this->Paginator->sort('razao_social') ?></th>
                <th><?= $this->Paginator->sort('cidade') ?></th>
                <th><?= $this->Paginator->sort('uf') ?></th>
                <th><?= $this->Paginator->sort('cep') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coligada as $coligada): ?>
            <tr>
                <td><?= $this->Number->format($coligada->id) ?></td>
                <td><?= h($coligada->nome) ?></td>
                <td><?= h($coligada->cnpj) ?></td>
                <td><?= h($coligada->razao_social) ?></td>
                <td><?= h($coligada->cidade) ?></td>
                <td><?= h($coligada->uf) ?></td>
                <td><?= h($coligada->cep) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coligada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coligada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coligada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coligada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

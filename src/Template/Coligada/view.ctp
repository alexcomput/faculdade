<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coligada'), ['action' => 'edit', $coligada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coligada'), ['action' => 'delete', $coligada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coligada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coligada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coligada'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coligada view large-9 medium-8 columns content">
    <h3><?= h($coligada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($coligada->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Cnpj') ?></th>
            <td><?= h($coligada->cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Razao Social') ?></th>
            <td><?= h($coligada->razao_social) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($coligada->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Uf') ?></th>
            <td><?= h($coligada->uf) ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= h($coligada->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($coligada->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($coligada->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Obs') ?></h4>
        <?= $this->Text->autoParagraph(h($coligada->obs)); ?>
    </div>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Coligada'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coligada form large-9 medium-8 columns content">
    <?= $this->Form->create($coligada) ?>
    <fieldset>
        <legend><?= __('Add Coligada') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('razao_social');
            echo $this->Form->input('cidade');
            echo $this->Form->input('uf');
            echo $this->Form->input('cep');
            echo $this->Form->input('telefone');
            echo $this->Form->input('obs');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

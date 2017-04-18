<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->element('navbar')?>

<div class="posts form large-9 medium-8 columns content">
<br>
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Nuevo Post') ?></legend>

        <div class="form-group has-success has-feedback">
            <label class="control-label">Título</label>
             <?= $this->Form->input('title', ['class' => 'form-control', 'label' => false]); ?>
             <span class="form-control-feedback">
                <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
             </span>
        </div>
        <div class="form-group has-success has-feedback">
            <label class="control-label">Descripción</label>
             <?= $this->Form->input('description', ['class' => 'form-control', 'label' => false]); ?>
             <span class="form-control-feedback">
                <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
             </span>
        </div>
        <div class="form-group has-success has-feedback">
            <label class="control-label">Foto</label>
             <?= $this->Form->file('photo', ['class' => 'form-control', 'label' => false]); ?>
             <span class="form-control-feedback">
                <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
             </span>
        </div>
        <div class="form-group has-success has-feedback">

             <?= $this->Form->input('photo_dir', ['class' => 'form-control', 'label' => false, 'type' => 'hidden']); ?>
             <span class="form-control-feedback">
                <span class="glyphicon glyphicon-text-width" aria-hidden="true"></span>
             </span>
        </div>
        <div class="form-group has-success has-feedback">
            <label class="control-label">Estado</label>
             <?= $this->Form->checkbox('active'); ?>
        </div>

    </fieldset>
    <?= $this->Form->button('Crear', ['class' => 'btn btn-info']) ?>
    <?= $this->Form->end() ?>
</div>

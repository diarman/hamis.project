<section class="content-header">
  <h1>
    Receipt
    <small><?= __('Edit') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-undo fa-2x"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($receipt, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('room_id', ['options' => $rooms]);
            echo $this->Form->input('speciality_id', ['options' => $specialities]);
            echo $this->Form->input('code');
            echo $this->Form->input('edition_date', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
            echo $this->Form->input('discount');
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

        <?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/input-mask/jquery.inputmask',
  'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
  'AdminLTE./plugins/datepicker/bootstrap-datepicker',
  'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    //Datemask yyyy/mm/dd
    $(".datepicker")
        .inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"})
        .datepicker({
            language:'en',
            format: 'yyyy/mm/dd'
        });
  });
</script>
<?php $this->end(); ?>
        
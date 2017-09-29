<section class="content-header">
  <h1>
    Care
    <small><?= __('Add') ?></small>
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
        <?= $this->Form->create($care, array('role' => 'form')) ?>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <?php 
                  echo $this->Form->input('hospitalization_id', ['options' => $hospitalizations]);
                  echo $this->Form->input('planning_date', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
                  echo $this->Form->input('description');
                ?>
              </div>
              <div class="col-md-6">
                <?php 
                  echo $this->Form->input('frequency');
                  echo $this->Form->input('plan');
                  echo $this->Form->input('way');
                ?>
              </div>
            </div>
          
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
    //Datemask mm/dd/yyyy
    $(".datepicker")
        .inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"})
        .datepicker({
            language:'en',
            format: 'yyyy/mm/dd'
        });
  });
</script>
<?php $this->end(); ?>
        
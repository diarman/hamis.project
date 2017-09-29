<section class="content-header">
  <h1>
    Element
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
        <?= $this->Form->create($element, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('exam_id', ['options' => $exams]);
            echo $this->Form->input('name');
            echo $this->Form->input('unit');
            echo $this->Form->input('max_value');
            echo $this->Form->input('min_value');
            echo $this->Form->input('analysis._ids', ['options' => $analysis]);
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


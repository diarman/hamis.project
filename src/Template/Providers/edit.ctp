<section class="content-header">
  <h1>
    Provider
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
        <?= $this->Form->create($provider, array('role' => 'form')) ?>
          <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <?php 
                  echo $this->Form->input('compagny_name');
                  echo $this->Form->input('last_name');
                  echo $this->Form->input('first_name');
              ?>
            </div>
            <div class="col-md-6">
              <?Php
                  echo $this->Form->input('phone_number');
                  echo $this->Form->input('email');
                  echo $this->Form->input('compagny_logo'); 
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


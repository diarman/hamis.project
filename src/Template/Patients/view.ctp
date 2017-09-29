<section class="content-header">
  <h1>
    <?php echo __('Patient'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-undo fa-2x"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                        <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $patient->has('user') ? $patient->user->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($patient->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Religion') ?></dt>
                                        <dd>
                                            <?= h($patient->religion) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Desired Service') ?></dt>
                                        <dd>
                                            <?= h($patient->desired_service) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Phone Number2') ?></dt>
                                <dd>
                                    <?= $this->Number->format($patient->phone_number2) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                                                        <dt><?= __('Active') ?></dt>
                            <dd>
                            <?= $patient->active ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Medical Background') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($patient->medical_background)); ?>
                            </dd>
                                                            </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>

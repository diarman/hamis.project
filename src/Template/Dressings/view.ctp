<section class="content-header">
  <h1>
    <?php echo __('Dressing'); ?>
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
                                                                                                        <dt><?= __('Patient') ?></dt>
                                <dd>
                                    <?= $dressing->has('patient') ? $dressing->patient->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Kit') ?></dt>
                                <dd>
                                    <?= $dressing->has('kit') ? $dressing->kit->name : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Dressing Date') ?></dt>
                                <dd>
                                    <?= $this->Number->format($dressing->dressing_date) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Apointment') ?></dt>
                                <dd>
                                    <?= h($dressing->apointment) ?>
                                </dd>
                                                                                                    
                                            
                                                                        <dt><?= __('Evolution') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($dressing->evolution)); ?>
                            </dd>
                                                    <dt><?= __('Procedure') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($dressing->procedure)); ?>
                            </dd>
                                                    <dt><?= __('Technique') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($dressing->technique)); ?>
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

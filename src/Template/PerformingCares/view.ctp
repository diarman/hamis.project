<section class="content-header">
  <h1>
    <?php echo __('Performing Care'); ?>
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
                                                                                                        <dt><?= __('Care') ?></dt>
                                <dd>
                                    <?= $performingCare->has('care') ? $performingCare->care->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Complaint') ?></dt>
                                        <dd>
                                            <?= h($performingCare->complaint) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Performing Date') ?></dt>
                                <dd>
                                    <?= $this->Number->format($performingCare->performing_date) ?>
                                </dd>
                                                                                                
                                            
                                            
                                                                        <dt><?= __('Evolution') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($performingCare->evolution)); ?>
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

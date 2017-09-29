<section class="content-header">
  <h1>
    <?php echo __('Contract'); ?>
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
                                                                                                        <dt><?= __('Staff') ?></dt>
                                <dd>
                                    <?= $contract->has('staff') ? $contract->staff->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Description') ?></dt>
                                        <dd>
                                            <?= h($contract->description) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Start Date') ?></dt>
                                <dd>
                                    <?= h($contract->start_date) ?>
                                </dd>
                                                                                                                    <dt><?= __('End Date') ?></dt>
                                <dd>
                                    <?= h($contract->end_date) ?>
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

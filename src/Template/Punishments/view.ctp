<section class="content-header">
  <h1>
    <?php echo __('Punishment'); ?>
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
                                    <?= $punishment->has('staff') ? $punishment->staff->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($punishment->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Amount') ?></dt>
                                <dd>
                                    <?= $this->Number->format($punishment->amount) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Start Date') ?></dt>
                                <dd>
                                    <?= h($punishment->start_date) ?>
                                </dd>
                                                                                                                    <dt><?= __('End Date') ?></dt>
                                <dd>
                                    <?= h($punishment->end_date) ?>
                                </dd>
                                                                                                                                                                                                            
                                            
                                                                        <dt><?= __('Pattern') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($punishment->pattern)); ?>
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

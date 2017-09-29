<section class="content-header">
  <h1>
    <?php echo __('Consultation Parameter'); ?>
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
                                                                                                        <dt><?= __('Parameter') ?></dt>
                                <dd>
                                    <?= $consultationParameter->has('parameter') ? $consultationParameter->parameter->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Consultation') ?></dt>
                                <dd>
                                    <?= $consultationParameter->has('consultation') ? $consultationParameter->consultation->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                        <dt><?= __('Value') ?></dt>
                                <dd>
                                    <?= $this->Number->format($consultationParameter->value) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Take Date') ?></dt>
                                <dd>
                                    <?= h($consultationParameter->take_date) ?>
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

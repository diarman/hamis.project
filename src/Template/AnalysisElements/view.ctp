<section class="content-header">
  <h1>
    <?php echo __('Analysis Element'); ?>
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
                                                                                                        <dt><?= __('Analysi') ?></dt>
                                <dd>
                                    <?= $analysisElement->has('analysi') ? $analysisElement->analysi->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Element') ?></dt>
                                <dd>
                                    <?= $analysisElement->has('element') ? $analysisElement->element->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Result') ?></dt>
                                <dd>
                                    <?= $analysisElement->has('result') ? $analysisElement->result->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                        <dt><?= __('Value') ?></dt>
                                <dd>
                                    <?= $this->Number->format($analysisElement->value) ?>
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

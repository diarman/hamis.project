<section class="content-header">
  <h1>
    <?php echo __('Care Product'); ?>
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
                                                                                                        <dt><?= __('Product') ?></dt>
                                <dd>
                                    <?= $careProduct->has('product') ? $careProduct->product->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Care') ?></dt>
                                <dd>
                                    <?= $careProduct->has('care') ? $careProduct->care->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                        <dt><?= __('Quantity') ?></dt>
                                <dd>
                                    <?= $this->Number->format($careProduct->quantity) ?>
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

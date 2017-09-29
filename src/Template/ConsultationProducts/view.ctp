<section class="content-header">
  <h1>
    <?php echo __('Consultation Product'); ?>
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
                                    <?= $consultationProduct->has('product') ? $consultationProduct->product->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Consultation') ?></dt>
                                <dd>
                                    <?= $consultationProduct->has('consultation') ? $consultationProduct->consultation->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Posolgy') ?></dt>
                                        <dd>
                                            <?= h($consultationProduct->posolgy) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                        <dt><?= __('Quantity') ?></dt>
                                <dd>
                                    <?= $this->Number->format($consultationProduct->quantity) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Prescription Date') ?></dt>
                                <dd>
                                    <?= h($consultationProduct->prescription_date) ?>
                                </dd>
                                                                                                                                                                                                            
                                            
                                                                        <dt><?= __('Note') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($consultationProduct->note)); ?>
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

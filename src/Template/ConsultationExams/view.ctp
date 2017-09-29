<section class="content-header">
  <h1>
    <?php echo __('Consultation Exam'); ?>
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
                                                                                                        <dt><?= __('Consultation') ?></dt>
                                <dd>
                                    <?= $consultationExam->has('consultation') ? $consultationExam->consultation->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Exam') ?></dt>
                                <dd>
                                    <?= $consultationExam->has('exam') ? $consultationExam->exam->name : '' ?>
                                </dd>
                                                                                                
                                            
                                            
                                                                                                        <dt><?= __('Prescription Date') ?></dt>
                                <dd>
                                    <?= h($consultationExam->prescription_date) ?>
                                </dd>
                                                                                                    
                                                                        <dt><?= __('Etat Payement') ?></dt>
                            <dd>
                            <?= $consultationExam->etat_payement ? __('Yes') : __('No'); ?>
                            </dd>
                                                                    
                                                                        <dt><?= __('Note') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($consultationExam->note)); ?>
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

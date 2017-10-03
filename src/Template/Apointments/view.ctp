<section class="content-header">
  <h1>
    <?php echo __('Apointment'); ?>
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
                                    <?= $apointment->has('patient') ? $apointment->patient->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $apointment->has('user') ? $apointment->user->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($apointment->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Contexte') ?></dt>
                                        <dd>
                                            <?= h($apointment->contexte) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Etat') ?></dt>
                                        <dd>
                                            <?= h($apointment->etat) ?>
                                        </dd>
                                                                                                                                    
                                            
                                            
                                                                                                        <dt><?= __('Date Rdv') ?></dt>
                                <dd>
                                    <?= h($apointment->date_rdv) ?>
                                </dd>
                                                                                                                    <dt><?= __('Heure Rdv') ?></dt>
                                <dd>
                                    <?= h($apointment->heure_rdv) ?>
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

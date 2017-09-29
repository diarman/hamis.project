<section class="content-header">
  <h1>
    <?php echo __('Rendez Vous'); ?>
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
                                    <?= $rendezVous->has('patient') ? $rendezVous->patient->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $rendezVous->has('user') ? $rendezVous->user->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($rendezVous->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Contexte') ?></dt>
                                        <dd>
                                            <?= h($rendezVous->contexte) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Etat') ?></dt>
                                        <dd>
                                            <?= h($rendezVous->etat) ?>
                                        </dd>
                                                                                                                                    
                                            
                                            
                                                                                                        <dt><?= __('Date Rdv') ?></dt>
                                <dd>
                                    <?= h($rendezVous->date_rdv) ?>
                                </dd>
                                                                                                                    <dt><?= __('Heure Rdv') ?></dt>
                                <dd>
                                    <?= h($rendezVous->heure_rdv) ?>
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

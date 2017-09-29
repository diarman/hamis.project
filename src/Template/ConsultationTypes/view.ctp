<section class="content-header">
  <h1>
    <?php echo __('Consultation Type'); ?>
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
                                                                                                                <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($consultationType->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Label') ?></dt>
                                        <dd>
                                            <?= h($consultationType->label) ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Consultations']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($consultationType->consultations)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Consultation Type Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Hospitalization Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Patient Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Pattern
                                    </th>
                                        
                                                                    
                                    <th>
                                    Date Consultation
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($consultationType->consultations as $consultations): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($consultations->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultations->consultation_type_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultations->hospitalization_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultations->patient_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultations->pattern) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultations->date_consultation) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultations->id), 'class'=>'btn btn-danger btn-xs']) ?>    
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

<section class="content-header">
  <h1>
    <?php echo __('Parameter'); ?>
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
                                                                                                                <dt><?= __('Label') ?></dt>
                                        <dd>
                                            <?= h($parameter->label) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Unit') ?></dt>
                                        <dd>
                                            <?= h($parameter->unit) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Consultation Parameters']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($parameter->consultation_parameters)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Parameter Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Consultation Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Value
                                    </th>
                                        
                                                                    
                                    <th>
                                    Take Date
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($parameter->consultation_parameters as $consultationParameters): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($consultationParameters->parameter_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationParameters->consultation_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationParameters->value) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationParameters->take_date) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ConsultationParameters', 'action' => 'view', $consultationParameters->parameter_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ConsultationParameters', 'action' => 'edit', $consultationParameters->parameter_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConsultationParameters', 'action' => 'delete', $consultationParameters->parameter_id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultationParameters->parameter_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

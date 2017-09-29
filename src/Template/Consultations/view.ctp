<section class="content-header">
  <h1>
    <?php echo __('Consultation'); ?>
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
                                                                                                        <dt><?= __('Consultation Type') ?></dt>
                                <dd>
                                    <?= $consultation->has('consultation_type') ? $consultation->consultation_type->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Hospitalization') ?></dt>
                                <dd>
                                    <?= $consultation->has('hospitalization') ? $consultation->hospitalization->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Patient') ?></dt>
                                <dd>
                                    <?= $consultation->has('patient') ? $consultation->patient->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Pattern') ?></dt>
                                        <dd>
                                            <?= h($consultation->pattern) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Date Consultation') ?></dt>
                                <dd>
                                    <?= h($consultation->date_consultation) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Consultation Exams']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($consultation->consultation_exams)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Consultation Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Exam Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Prescription Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Note
                                    </th>
                                        
                                                                    
                                    <th>
                                    Etat Payement
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($consultation->consultation_exams as $consultationExams): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($consultationExams->consultation_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationExams->exam_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationExams->prescription_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationExams->note) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationExams->etat_payement) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ConsultationExams', 'action' => 'view', $consultationExams->consultation_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ConsultationExams', 'action' => 'edit', $consultationExams->consultation_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConsultationExams', 'action' => 'delete', $consultationExams->consultation_id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultationExams->consultation_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Consultation Parameters']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($consultation->consultation_parameters)): ?>

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

                            <?php foreach ($consultation->consultation_parameters as $consultationParameters): ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Consultation Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($consultation->consultation_products)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Product Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Consultation Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Prescription Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Posolgy
                                    </th>
                                        
                                                                    
                                    <th>
                                    Note
                                    </th>
                                        
                                                                    
                                    <th>
                                    Quantity
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($consultation->consultation_products as $consultationProducts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($consultationProducts->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationProducts->consultation_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationProducts->prescription_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationProducts->posolgy) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationProducts->note) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($consultationProducts->quantity) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ConsultationProducts', 'action' => 'view', $consultationProducts->product_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ConsultationProducts', 'action' => 'edit', $consultationProducts->product_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConsultationProducts', 'action' => 'delete', $consultationProducts->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultationProducts->product_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

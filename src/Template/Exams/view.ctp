<section class="content-header">
  <h1>
    <?php echo __('Exam'); ?>
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
                                                                                                        <dt><?= __('Exam Type') ?></dt>
                                <dd>
                                    <?= $exam->has('exam_type') ? $exam->exam_type->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($exam->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($exam->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Price') ?></dt>
                                <dd>
                                    <?= $this->Number->format($exam->price) ?>
                                </dd>
                                                                                                                <dt><?= __('Duration') ?></dt>
                                <dd>
                                    <?= $this->Number->format($exam->duration) ?>
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

                <?php if (!empty($exam->consultation_exams)): ?>

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

                            <?php foreach ($exam->consultation_exams as $consultationExams): ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Elements']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($exam->elements)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Exam Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Unit
                                    </th>
                                        
                                                                    
                                    <th>
                                    Max Value
                                    </th>
                                        
                                                                    
                                    <th>
                                    Min Value
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($exam->elements as $elements): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($elements->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($elements->exam_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($elements->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($elements->unit) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($elements->max_value) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($elements->min_value) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Elements', 'action' => 'view', $elements->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Elements', 'action' => 'edit', $elements->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elements', 'action' => 'delete', $elements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elements->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

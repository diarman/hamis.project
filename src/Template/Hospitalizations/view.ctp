<section class="content-header">
  <h1>
    <?php echo __('Hospitalization'); ?>
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
                                                                                                                <dt><?= __('Entered Pattern') ?></dt>
                                        <dd>
                                            <?= h($hospitalization->entered_pattern) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Out Pattern') ?></dt>
                                        <dd>
                                            <?= h($hospitalization->out_pattern) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Out State') ?></dt>
                                        <dd>
                                            <?= h($hospitalization->out_state) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Entered Date') ?></dt>
                                <dd>
                                    <?= h($hospitalization->entered_date) ?>
                                </dd>
                                                                                                                    <dt><?= __('Out Date') ?></dt>
                                <dd>
                                    <?= h($hospitalization->out_date) ?>
                                </dd>
                                                                                                                                                                                                            
                                                                        <dt><?= __('Out Statue') ?></dt>
                            <dd>
                            <?= $hospitalization->out_statue ? __('Yes') : __('No'); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Bed Rooms']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($hospitalization->bed_rooms)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Room Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Bed Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Hospitalization Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($hospitalization->bed_rooms as $bedRooms): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($bedRooms->room_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($bedRooms->bed_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($bedRooms->hospitalization_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'BedRooms', 'action' => 'view', $bedRooms->room_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'BedRooms', 'action' => 'edit', $bedRooms->room_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BedRooms', 'action' => 'delete', $bedRooms->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bedRooms->room_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Cares']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($hospitalization->cares)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Hospitalization Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Planning Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description
                                    </th>
                                        
                                                                    
                                    <th>
                                    Frequency
                                    </th>
                                        
                                                                    
                                    <th>
                                    Plan
                                    </th>
                                        
                                                                    
                                    <th>
                                    Way
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($hospitalization->cares as $cares): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($cares->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cares->hospitalization_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cares->planning_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cares->description) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cares->frequency) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cares->plan) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($cares->way) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Cares', 'action' => 'view', $cares->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cares', 'action' => 'edit', $cares->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cares', 'action' => 'delete', $cares->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cares->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Consultations']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($hospitalization->consultations)): ?>

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

                            <?php foreach ($hospitalization->consultations as $consultations): ?>
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

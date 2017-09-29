<section class="content-header">
  <h1>
    <?php echo __('Staff'); ?>
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
                                                                                                        <dt><?= __('User') ?></dt>
                                <dd>
                                    <?= $staff->has('user') ? $staff->user->id : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Job Function') ?></dt>
                                <dd>
                                    <?= $staff->has('job_function') ? $staff->job_function->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Service') ?></dt>
                                <dd>
                                    <?= $staff->has('service') ? $staff->service->name : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Staff Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($staff->staff_id) ?>
                                </dd>
                                                                                                                <dt><?= __('Salary') ?></dt>
                                <dd>
                                    <?= $this->Number->format($staff->salary) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Hire Date') ?></dt>
                                <dd>
                                    <?= h($staff->hire_date) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Staffs']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($staff->staffs)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Staff Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Job Function Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Service Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Hire Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Salary
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($staff->staffs as $staffs): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($staffs->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($staffs->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($staffs->staff_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($staffs->job_function_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($staffs->service_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($staffs->hire_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($staffs->salary) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Staffs', 'action' => 'view', $staffs->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Staffs', 'action' => 'edit', $staffs->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Staffs', 'action' => 'delete', $staffs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staffs->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Contracts']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($staff->contracts)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Staff Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Start Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    End Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Description
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($staff->contracts as $contracts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($contracts->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contracts->staff_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contracts->start_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contracts->end_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($contracts->description) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Contracts', 'action' => 'view', $contracts->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contracts', 'action' => 'edit', $contracts->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contracts', 'action' => 'delete', $contracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contracts->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Punishments']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($staff->punishments)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Staff Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Name
                                    </th>
                                        
                                                                    
                                    <th>
                                    Pattern
                                    </th>
                                        
                                                                    
                                    <th>
                                    Amount
                                    </th>
                                        
                                                                    
                                    <th>
                                    Start Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    End Date
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($staff->punishments as $punishments): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($punishments->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($punishments->staff_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($punishments->name) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($punishments->pattern) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($punishments->amount) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($punishments->start_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($punishments->end_date) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Punishments', 'action' => 'view', $punishments->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Punishments', 'action' => 'edit', $punishments->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Punishments', 'action' => 'delete', $punishments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $punishments->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Vacations']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($staff->vacations)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Staff Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Reason
                                    </th>
                                        
                                                                    
                                    <th>
                                    Start Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    End Date
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($staff->vacations as $vacations): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($vacations->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vacations->staff_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vacations->reason) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vacations->start_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vacations->end_date) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Vacations', 'action' => 'view', $vacations->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vacations', 'action' => 'edit', $vacations->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vacations', 'action' => 'delete', $vacations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vacations->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

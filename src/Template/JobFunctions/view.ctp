<section class="content-header">
  <h1>
    <?php echo __('Job Function'); ?>
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
                                                                                                                <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($jobFunction->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Maximum Salary') ?></dt>
                                <dd>
                                    <?= $this->Number->format($jobFunction->maximum_salary) ?>
                                </dd>
                                                                                                                <dt><?= __('Minimum Salary') ?></dt>
                                <dd>
                                    <?= $this->Number->format($jobFunction->minimum_salary) ?>
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

                <?php if (!empty($jobFunction->staffs)): ?>

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

                            <?php foreach ($jobFunction->staffs as $staffs): ?>
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
</section>

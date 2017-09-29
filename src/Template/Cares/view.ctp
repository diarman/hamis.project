<section class="content-header">
  <h1>
    <?php echo __('Care'); ?>
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
                                                                                                        <dt><?= __('Hospitalization') ?></dt>
                                <dd>
                                    <?= $care->has('hospitalization') ? $care->hospitalization->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Description') ?></dt>
                                        <dd>
                                            <?= h($care->description) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Frequency') ?></dt>
                                        <dd>
                                            <?= h($care->frequency) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Way') ?></dt>
                                        <dd>
                                            <?= h($care->way) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Planning Date') ?></dt>
                                <dd>
                                    <?= h($care->planning_date) ?>
                                </dd>
                                                                                                    
                                                                        <dt><?= __('Plan') ?></dt>
                            <dd>
                            <?= $care->plan ? __('Yes') : __('No'); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Care Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($care->care_products)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Product Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Care Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Quantity
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($care->care_products as $careProducts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($careProducts->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($careProducts->care_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($careProducts->quantity) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'CareProducts', 'action' => 'view', $careProducts->product_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'CareProducts', 'action' => 'edit', $careProducts->product_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CareProducts', 'action' => 'delete', $careProducts->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $careProducts->product_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Performing Cares']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($care->performing_cares)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Care Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Performing Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Evolution
                                    </th>
                                        
                                                                    
                                    <th>
                                    Complaint
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($care->performing_cares as $performingCares): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($performingCares->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($performingCares->care_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($performingCares->performing_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($performingCares->evolution) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($performingCares->complaint) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'PerformingCares', 'action' => 'view', $performingCares->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'PerformingCares', 'action' => 'edit', $performingCares->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PerformingCares', 'action' => 'delete', $performingCares->id], ['confirm' => __('Are you sure you want to delete # {0}?', $performingCares->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

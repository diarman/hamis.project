<section class="content-header">
  <h1>
    <?php echo __('Provider'); ?>
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
                                                                                                                <dt><?= __('Compagny Name') ?></dt>
                                        <dd>
                                            <?= h($provider->compagny_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Compagny Logo') ?></dt>
                                        <dd>
                                            <?= h($provider->compagny_logo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Last Name') ?></dt>
                                        <dd>
                                            <?= h($provider->last_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('First Name') ?></dt>
                                        <dd>
                                            <?= h($provider->first_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($provider->email) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Phone Number') ?></dt>
                                <dd>
                                    <?= $this->Number->format($provider->phone_number) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Deliveries']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($provider->deliveries)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Provider Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Delivery Date
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($provider->deliveries as $deliveries): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($deliveries->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($deliveries->provider_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($deliveries->delivery_date) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Deliveries', 'action' => 'view', $deliveries->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Deliveries', 'action' => 'edit', $deliveries->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Deliveries', 'action' => 'delete', $deliveries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveries->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

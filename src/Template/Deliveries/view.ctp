<section class="content-header">
  <h1>
    <?php echo __('Delivery'); ?>
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
                                                                                                        <dt><?= __('Provider') ?></dt>
                                <dd>
                                    <?= $delivery->has('provider') ? $delivery->provider->id : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Delivery Date') ?></dt>
                                <dd>
                                    <?= h($delivery->delivery_date) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Delivery Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($delivery->delivery_products)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Delivery Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Product Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Quantity
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($delivery->delivery_products as $deliveryProducts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($deliveryProducts->delivery_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($deliveryProducts->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($deliveryProducts->quantity) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'DeliveryProducts', 'action' => 'view', $deliveryProducts->delivery_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'DeliveryProducts', 'action' => 'edit', $deliveryProducts->delivery_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DeliveryProducts', 'action' => 'delete', $deliveryProducts->delivery_id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliveryProducts->delivery_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

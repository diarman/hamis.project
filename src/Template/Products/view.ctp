<section class="content-header">
  <h1>
    <?php echo __('Product'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
        <?php
            switch ($auth ['User']['role']) 
            {
                case 'responsable vaccination':
                    echo $this->Html->link('<i class="fa fa-undo fa-2x"></i> ' . __('Back'), ['action' => 'vaccines'], ['escape' => false]);
                    break;
                case 'docteur':
                    echo $this->Html->link('<i class="fa fa-undo fa-2x"></i> ' . __('Back'), ['action' => 'pharmaceuticals'], ['escape' => false]);
                    break;
                /*case 'responsable vaccination':
                    # code...
                    break;
                case 'responsable vaccination':
                    # code...
                    break;
                case 'responsable vaccination':
                    # code...
                    break;
                case 'responsable vaccination':
                    # code...
                    break;*/
                
                default:
                    echo $this->Html->link('<i class="fa fa-undo fa-2x"></i> ' . __('Back'), ['action' => 'pharmaceuticals'], ['escape' => false]);
                    break;
            }
        ?>
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
                                                                                                        <dt><?= __('Product Category') ?></dt>
                                <dd>
                                    <?= $product->has('product_category') ? $product->product_category->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($product->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($product->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Price') ?></dt>
                                <dd>
                                    <?= $this->Number->format($product->price) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Caution') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($product->caution)); ?>
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

                <?php if (!empty($product->care_products)): ?>

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

                            <?php foreach ($product->care_products as $careProducts): ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Consultation Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($product->consultation_products)): ?>

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

                            <?php foreach ($product->consultation_products as $consultationProducts): ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Delivery Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($product->delivery_products)): ?>

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

                            <?php foreach ($product->delivery_products as $deliveryProducts): ?>
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Kit Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($product->kit_products)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Kit Id
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

                            <?php foreach ($product->kit_products as $kitProducts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($kitProducts->kit_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($kitProducts->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($kitProducts->quantity) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'KitProducts', 'action' => 'view', $kitProducts->kit_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'KitProducts', 'action' => 'edit', $kitProducts->kit_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'KitProducts', 'action' => 'delete', $kitProducts->kit_id], ['confirm' => __('Are you sure you want to delete # {0}?', $kitProducts->kit_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Order Products']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($product->order_products)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Order Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Product Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Quantiry
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($product->order_products as $orderProducts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($orderProducts->order_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($orderProducts->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($orderProducts->quantiry) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'OrderProducts', 'action' => 'view', $orderProducts->order_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderProducts', 'action' => 'edit', $orderProducts->order_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderProducts', 'action' => 'delete', $orderProducts->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderProducts->order_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Product Receipts']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($product->product_receipts)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Product Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Receipt Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Quantity
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($product->product_receipts as $productReceipts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($productReceipts->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($productReceipts->receipt_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($productReceipts->quantity) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ProductReceipts', 'action' => 'view', $productReceipts->product_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductReceipts', 'action' => 'edit', $productReceipts->product_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductReceipts', 'action' => 'delete', $productReceipts->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productReceipts->product_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
                    <h3 class="box-title"><?= __('Related {0}', ['Vaccinations']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($product->vaccinations)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Product Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Patient Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Vaccination Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dosage
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($product->vaccinations as $vaccinations): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($vaccinations->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vaccinations->product_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vaccinations->patient_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vaccinations->vaccination_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($vaccinations->dosage) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Vaccinations', 'action' => 'view', $vaccinations->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vaccinations', 'action' => 'edit', $vaccinations->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vaccinations', 'action' => 'delete', $vaccinations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccinations->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

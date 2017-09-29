<section class="content-header">
  <h1>
    <?php echo __('Kit'); ?>
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
                                                                                                                <dt><?= __('Code') ?></dt>
                                        <dd>
                                            <?= h($kit->code) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($kit->name) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Price') ?></dt>
                                <dd>
                                    <?= $this->Number->format($kit->price) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                                                        <dt><?= __('Description') ?></dt>
                            <dd>
                            <?= $this->Text->autoParagraph(h($kit->description)); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Dressings']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($kit->dressings)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Patient Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Kit Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Dressing Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Evolution
                                    </th>
                                        
                                                                    
                                    <th>
                                    Procedure
                                    </th>
                                        
                                                                    
                                    <th>
                                    Technique
                                    </th>
                                        
                                                                    
                                    <th>
                                    Apointment
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($kit->dressings as $dressings): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($dressings->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->patient_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->kit_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->dressing_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->evolution) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->procedure) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->technique) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($dressings->apointment) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Dressings', 'action' => 'view', $dressings->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dressings', 'action' => 'edit', $dressings->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dressings', 'action' => 'delete', $dressings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dressings->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

                <?php if (!empty($kit->kit_products)): ?>

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

                            <?php foreach ($kit->kit_products as $kitProducts): ?>
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
</section>

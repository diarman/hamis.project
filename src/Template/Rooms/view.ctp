<section class="content-header">
  <h1>
    <?php echo __('Room'); ?>
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
                                                                                                        <dt><?= __('Pavillon') ?></dt>
                                <dd>
                                    <?= $room->has('pavillon') ? $room->pavillon->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Label') ?></dt>
                                        <dd>
                                            <?= h($room->label) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Bed Number') ?></dt>
                                <dd>
                                    <?= $this->Number->format($room->bed_number) ?>
                                </dd>
                                                                                                                <dt><?= __('Price') ?></dt>
                                <dd>
                                    <?= $this->Number->format($room->price) ?>
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

                <?php if (!empty($room->bed_rooms)): ?>

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

                            <?php foreach ($room->bed_rooms as $bedRooms): ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Receipts']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($room->receipts)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Room Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Speciality Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Code
                                    </th>
                                        
                                                                    
                                    <th>
                                    Edition Date
                                    </th>
                                        
                                                                    
                                    <th>
                                    Discount
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($room->receipts as $receipts): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($receipts->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($receipts->room_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($receipts->speciality_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($receipts->code) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($receipts->edition_date) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($receipts->discount) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Receipts', 'action' => 'view', $receipts->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Receipts', 'action' => 'edit', $receipts->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Receipts', 'action' => 'delete', $receipts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receipts->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

<section class="content-header">
  <h1>
    <?php echo __('Vaccination'); ?>
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
                                                                                                        <dt><?= __('Product') ?></dt>
                                <dd>
                                    <?= $vaccination->has('product') ? $vaccination->product->name : '' ?>
                                </dd>
                                                                                                                <dt><?= __('Patient') ?></dt>
                                <dd>
                                    <?= $vaccination->has('patient') ? $vaccination->patient->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Dosage') ?></dt>
                                        <dd>
                                            <?= h($vaccination->dosage) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                            
                                                                                                        <dt><?= __('Vaccination Date') ?></dt>
                                <dd>
                                    <?= h($vaccination->vaccination_date) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Certificates']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($vaccination->certificates)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Vaccination Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Filename
                                    </th>
                                        
                                                                                                                                            
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($vaccination->certificates as $certificates): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($certificates->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($certificates->vaccination_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($certificates->filename) ?>
                                    </td>
                                                                                                            
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Certificates', 'action' => 'view', $certificates->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Certificates', 'action' => 'edit', $certificates->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Certificates', 'action' => 'delete', $certificates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $certificates->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

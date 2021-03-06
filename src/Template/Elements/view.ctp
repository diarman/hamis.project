<section class="content-header">
  <h1>
    <?php echo __('Element'); ?>
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
                                                                                                        <dt><?= __('Exam') ?></dt>
                                <dd>
                                    <?= $element->has('exam') ? $element->exam->name : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Name') ?></dt>
                                        <dd>
                                            <?= h($element->name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Unit') ?></dt>
                                        <dd>
                                            <?= h($element->unit) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Max Value') ?></dt>
                                <dd>
                                    <?= $this->Number->format($element->max_value) ?>
                                </dd>
                                                                                                                <dt><?= __('Min Value') ?></dt>
                                <dd>
                                    <?= $this->Number->format($element->min_value) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Analysis']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($element->analysis)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Levy Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Analysis Date
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($element->analysis as $analysis): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($analysis->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($analysis->levy_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($analysis->analysis_date) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Analysis', 'action' => 'view', $analysis->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Analysis', 'action' => 'edit', $analysis->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Analysis', 'action' => 'delete', $analysis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $analysis->id), 'class'=>'btn btn-danger btn-xs']) ?>    
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

<section class="content-header">
  <h1>
    <?php echo __('Result'); ?>
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
                        <dt><?= __('Conclusion') ?></dt>
                        <dd>
                            <?= $this->Text->autoParagraph(h($result->conclusion)); ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Analysis Elements']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($result->analysis_elements)): ?>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Analysis Id</th>
                                <th>Element Id</th>
                                <th>Result Id</th>
                                <th>Value</th>
                            </tr>
                            <?php foreach ($result->analysis_elements as $analysisElements): ?>
                            <tr>
                                <td><?= h($analysisElements->analysis_id) ?></td>
                                <td><?= h($analysisElements->element_id) ?></td>
                                <td><?= h($analysisElements->result_id) ?></td>
                                <td><?= h($analysisElements->value) ?></td>
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

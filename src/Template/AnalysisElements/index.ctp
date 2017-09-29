<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Analysis Elements') ?> 
    <div class="pull-right"><?= $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="Content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="box-title">
          <h3 class="box-title"><?= __('List of Analysis Elements') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('analysis_id') ?></th>
                <th><?= $this->Paginator->sort('element_id') ?></th>
                <th><?= $this->Paginator->sort('result_id') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($analysisElements as $analysisElement): ?>
              <tr>
                <td><?= $analysisElement->has('analysi') ? $this->Html->link($analysisElement->analysi->id, ['controller' => 'Analysis', 'action' => 'view', $analysisElement->analysi->id]) : '' ?></td>
                <td><?= $analysisElement->has('element') ? $this->Html->link($analysisElement->element->name, ['controller' => 'Elements', 'action' => 'view', $analysisElement->element->id]) : '' ?></td>
                <td><?= $analysisElement->has('result') ? $this->Html->link($analysisElement->result->id, ['controller' => 'Results', 'action' => 'view', $analysisElement->result->id]) : '' ?></td>
                  <td><?= $this->Number->format($analysisElement->value) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $analysisElement->analysis_id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $analysisElement->analysis_id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $analysisElement->analysis_id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
                    </td>
              </tr>
                <?php endforeach; ?>
                </tbody> 
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
<?php
$this->Html->css([
    'AdminLTE./plugins/datatables/dataTables.bootstrap',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/datatables/jquery.dataTables.min',
  'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php $this->end(); ?>
<!-- /.content -->

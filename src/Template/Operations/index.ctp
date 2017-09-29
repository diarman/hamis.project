<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Operations') ?> 
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
          <h3 class="box-title"><?= __('List of Operations') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('ip_adress') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('target') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($operations as $operation): ?>
              <tr>
                <td><?= $operation->has('user') ? $this->Html->link($operation->user->id, ['controller' => 'Users', 'action' => 'view', $operation->user->id]) : '' ?></td>
                  <td><?= h($operation->ip_adress) ?></td>
                    <td><?= h($operation->name) ?></td>
                    <td><?= h($operation->target) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $operation->id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $operation->id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $operation->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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

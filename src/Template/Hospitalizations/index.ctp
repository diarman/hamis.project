<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Hospitalizations') ?> 
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
          <h3 class="box-title"><?= __('List of Hospitalizations') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('entered_date') ?></th>
                <th><?= $this->Paginator->sort('entered_pattern') ?></th>
                <th><?= $this->Paginator->sort('out_date') ?></th>
                <th><?= $this->Paginator->sort('out_pattern') ?></th>
                <th><?= $this->Paginator->sort('out_state') ?></th>
                <th><?= $this->Paginator->sort('out_statue') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($hospitalizations as $hospitalization): ?>
              <tr>
                  <td><?= h($hospitalization->entered_date) ?></td>
                    <td><?= h($hospitalization->entered_pattern) ?></td>
                    <td><?= h($hospitalization->out_date) ?></td>
                    <td><?= h($hospitalization->out_pattern) ?></td>
                    <td><?= h($hospitalization->out_state) ?></td>
                    <td><?= h($hospitalization->out_statue) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $hospitalization->id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $hospitalization->id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $hospitalization->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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
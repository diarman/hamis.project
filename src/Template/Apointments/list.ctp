<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Apointments') ?> 
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
          <h3 class="box-title"><?= __('List of Apointments') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('patient_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('contexte') ?></th>
                <th><?= $this->Paginator->sort('date_rdv') ?></th>
                <th><?= $this->Paginator->sort('heure_rdv') ?></th>
                <th><?= $this->Paginator->sort('etat') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($apointments as $apointment): ?>
              <tr>
                <td><?= $apointment->has('patient') ? $this->Html->link($apointment->patient->id, ['controller' => 'Patients', 'action' => 'view', $apointment->patient->id]) : '' ?></td>
                <td><?= $apointment->has('user') ? $this->Html->link($apointment->user->id, ['controller' => 'Users', 'action' => 'view', $apointment->user->id]) : '' ?></td>
                  <td><?= h($apointment->code) ?></td>
                    <td><?= h($apointment->contexte) ?></td>
                    <td><?= h($apointment->date_rdv) ?></td>
                    <td><?= h($apointment->heure_rdv) ?></td>
                    <td><?= h($apointment->etat) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $apointment->patient_id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $apointment->patient_id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $apointment->patient_id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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

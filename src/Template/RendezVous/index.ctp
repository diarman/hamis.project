<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Rendez Vous') ?> 
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
          <h3 class="box-title"><?= __('List of Rendez Vous') ?> </h3>
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
            <?php foreach ($rendezVous as $rendezVous): ?>
              <tr>
                <td><?= $rendezVous->has('patient') ? $this->Html->link($rendezVous->patient->id, ['controller' => 'Patients', 'action' => 'view', $rendezVous->patient->id]) : '' ?></td>
                <td><?= $rendezVous->has('user') ? $this->Html->link($rendezVous->user->id, ['controller' => 'Users', 'action' => 'view', $rendezVous->user->id]) : '' ?></td>
                  <td><?= h($rendezVous->code) ?></td>
                    <td><?= h($rendezVous->contexte) ?></td>
                    <td><?= h($rendezVous->date_rdv) ?></td>
                    <td><?= h($rendezVous->heure_rdv) ?></td>
                    <td><?= h($rendezVous->etat) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $rendezVous->patient_id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $rendezVous->patient_id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $rendezVous->patient_id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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

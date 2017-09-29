<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Consultations') ?> 
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
          <h3 class="box-title"><?= __('List of Consultations') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('consultation_type_id') ?></th>
                <th><?= $this->Paginator->sort('hospitalization_id') ?></th>
                <th><?= $this->Paginator->sort('patient_id') ?></th>
                <th><?= $this->Paginator->sort('pattern') ?></th>
                <th><?= $this->Paginator->sort('date_consultation') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($consultations as $consultation): ?>
              <tr>
                <td><?= $consultation->has('consultation_type') ? $this->Html->link($consultation->consultation_type->id, ['controller' => 'ConsultationTypes', 'action' => 'view', $consultation->consultation_type->id]) : '' ?></td>
                <td><?= $consultation->has('hospitalization') ? $this->Html->link($consultation->hospitalization->id, ['controller' => 'Hospitalizations', 'action' => 'view', $consultation->hospitalization->id]) : '' ?></td>
                <td><?= $consultation->has('patient') ? $this->Html->link($consultation->patient->id, ['controller' => 'Patients', 'action' => 'view', $consultation->patient->id]) : '' ?></td>
                  <td><?= h($consultation->pattern) ?></td>
                    <td><?= h($consultation->date_consultation) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $consultation->id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $consultation->id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $consultation->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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

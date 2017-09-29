<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Consultation Exams') ?> 
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
          <h3 class="box-title"><?= __('List of Consultation Exams') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('consultation_id') ?></th>
                <th><?= $this->Paginator->sort('exam_id') ?></th>
                <th><?= $this->Paginator->sort('prescription_date') ?></th>
                <th><?= $this->Paginator->sort('etat_payement') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($consultationExams as $consultationExam): ?>
              <tr>
                <td><?= $consultationExam->has('consultation') ? $this->Html->link($consultationExam->consultation->id, ['controller' => 'Consultations', 'action' => 'view', $consultationExam->consultation->id]) : '' ?></td>
                <td><?= $consultationExam->has('exam') ? $this->Html->link($consultationExam->exam->name, ['controller' => 'Exams', 'action' => 'view', $consultationExam->exam->id]) : '' ?></td>
                  <td><?= h($consultationExam->prescription_date) ?></td>
                    <td><?= h($consultationExam->etat_payement) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $consultationExam->consultation_id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $consultationExam->consultation_id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $consultationExam->consultation_id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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

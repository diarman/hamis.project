<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Users') ?> 
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
          <h3 class="box-title"><?= __('List of Users') ?> </h3>
          </div>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover ">
                <thead>
                  <tr>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('first_name') ?></th>
                <th><?= $this->Paginator->sort('birthday') ?></th>
                <th><?= $this->Paginator->sort('birth_place') ?></th>
                <th><?= $this->Paginator->sort('sex') ?></th>
                <th><?= $this->Paginator->sort('phone_number') ?></th>
                <th class="pull-right" width="80px"><?= __('Actions') ?></th>
              </tr>
                </thead>
                <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                  <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->birthday) ?></td>
                    <td><?= h($user->birth_place) ?></td>
                    <td><?= h($user->sex) ?></td>
                    <td><?= $this->Number->format($user->phone_number) ?></td>
                      <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                      <?= $this->Html->link(__(''), ['action' => 'view', $user->id], ['class'=>'btn btn-primary fa fa-eye']) ?>
                      <?= $this->Html->link(__(''), ['action' => 'edit', $user->id], ['class'=>'btn btn-info fa fa-edit']) ?>
                      <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>' btn btn-danger fa fa-trash-o']) ?>
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

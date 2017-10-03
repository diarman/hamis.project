<?php
  if ($auth ['User']['role'] == 'responsable vaccination')
  {?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= __('Vaccines') ?> 
      </h1>
    </section>

    <!-- Main content -->
    <section class="Content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="box-title">
              <h3 class="box-title"><?= __('List of Vaccines') ?> </h3>
              </div>
              <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover ">
                    <thead>
                      <tr>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th class="pull-right" width="80px"><?= __('Actions') ?></th>
                  </tr>
                    </thead>
                    <tbody>
                <?php foreach ($products as $product): ?>
                  <tr>
                      <td><?= h($product->code) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= $this->Number->format($product->price) ?></td>
                        <td class="actions" style="white-space: nowrap; width: 80px; text-align: center;">
                          <?= $this->Html->link(__(''), ['action' => 'view', $product->id], ['class'=>'btn btn-primary fa fa-eye']) ?>
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
  }
  else
  {
    //  $this->redirect(['controller' => 'Users', 'action' => 'home']);
  }
  
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

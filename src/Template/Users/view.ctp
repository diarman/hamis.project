<section class="content-header">
  <h1>
    <?php echo __('User'); ?>
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
                                                                                                                <dt><?= __('Last Name') ?></dt>
                                        <dd>
                                            <?= h($user->last_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('First Name') ?></dt>
                                        <dd>
                                            <?= h($user->first_name) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Birth Place') ?></dt>
                                        <dd>
                                            <?= h($user->birth_place) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Sex') ?></dt>
                                        <dd>
                                            <?= h($user->sex) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($user->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Adress') ?></dt>
                                        <dd>
                                            <?= h($user->adress) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Civility') ?></dt>
                                        <dd>
                                            <?= h($user->civility) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Photo') ?></dt>
                                        <dd>
                                            <?= h($user->photo) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Role') ?></dt>
                                        <dd>
                                            <?= h($user->role) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Login') ?></dt>
                                        <dd>
                                            <?= h($user->login) ?>
                                        </dd>
                                                                                                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Phone Number') ?></dt>
                                <dd>
                                    <?= $this->Number->format($user->phone_number) ?>
                                </dd>
                                                                                                
                                                                                                        <dt><?= __('Birthday') ?></dt>
                                <dd>
                                    <?= h($user->birthday) ?>
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

</section>

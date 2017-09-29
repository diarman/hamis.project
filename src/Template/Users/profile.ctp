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
    <div class="container">
      
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?= h($user->last_name.' '.$user->first_name) ?></h3>           
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                    <?php echo $this->Html->image($user->photo, array('class' => 'img-circle img-responsive', 'alt' => 'User Image')); ?>
                </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                            <td>Date de naissance :</td>
                            <td><?= h($user->birthday) ?></td>
                        </tr>
                        <tr>
                            <td>Lieu de naissance :</td>
                            <td><?= h($user->birth_place) ?></td>
                        </tr>
                        <tr>
                            <td>Situation matrimoniale :</td>
                            <td><?= h($user->civility) ?></td>
                        </tr>
                        <tr>
                            <tr>
                                <td>Sexe</td>
                                <td><?= h($user->sex) ?></td>
                            </tr>
                            <tr>
                                <td>Home Address</td>
                                <td><?= h($user->adress) ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?= h($user->email) ?></td>
                            </tr>
                            <td>Phone Number</td>
                            <td><?= $this->Number->format($user->phone_number) ?></td>                           
                        </tr>
                         
                        <tr>
                            <td>Role :</td>
                            <td><?= h($user->role) ?></td>
                        </tr>  
                        <tr>
                            <td>Login :</td>
                            <td><?= h($user->login) ?></td>
                        </tr>                  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-footer">
                <?= $this->Html->link(__(''), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class'=>'btn btn-sm btn-warning fa fa-edit']) ?>
            </div>            
          </div>
        </div>
      </div>
    </div>
      
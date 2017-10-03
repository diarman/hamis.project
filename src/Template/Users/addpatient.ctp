<section class="content-header">
  <h1>
    User
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-undo fa-2x"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div> 
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($user, array('role' => 'form')) ?>
          <div class="box-body">
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-4">Pre Defined Image</label>
                <div class="col-md-4">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <div>
                      <span class="btn btn-file btn-primary">
                        <span class="fileupload-new">Select image</span>
                        <span class="fileupload-exists">Change</span>
                        <input name="photo" type="file" /> 
                        <!-- <?php 
                          //echo $this->Form->input('file', ['type'=> 'file']);
                        ?> -->
                      </span>
                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                  </div>
                </div>
              </div>            
            </div>          
            <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-6 col-lg-4"><!-- block de gauche  -->
                <?php 
                  echo $this->Form->input('patient.code');
                  echo $this->Form->input('last_name');
                  echo $this->Form->input('first_name');
                  echo $this->Form->input('birthday', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'text']);
                  echo $this->Form->input('birth_place');

                ?>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-6 col-lg-4"><!-- block de droite -->                
                <div class="form-group">
                  <label for="role"><?= __('sex') ?></label>
                  <select class="form-control" name="sex" style="width: 100%">
                    <option selected="selected" value="Masculin"><?= __('Masculin') ?></option>
                    <option value="Feminin"><?= __('Feminin') ?></option>
                  </select>
                </div>
                <div class="form-group">  
                  <label for="civility"><?= __('civility') ?></label>
                  <select class="form-control select2" name="civility" style="width: 100%">
                    <option value=""><?= __(' ') ?></option>
                    <option value="monsieur"><?= __('Monsieur') ?></option>
                    <option value="madame"><?= __('Madame') ?></option>
                    <option value="mademoiselle"><?= __('Mademoiselle') ?></option>
                    <option value="enfant"><?= __('Enfant') ?></option>
                    <option value="bebe"><?= __('Bébé') ?></option>
                  </select>
                </div>
                <div class="form-group">  
                  <label for="religion"><?= __('Religion') ?></label>
                  <select class="form-control select2" name="patient.religion" style="width: 100%">
                    <option value=""><?= __(' ') ?></option>
                    <option value="Catholique"><?= __('Catholique') ?></option>
                    <option value="Adventiste"><?= __('Adventiste') ?></option>
                    <option value="Musulman"><?= __('Musulman') ?></option>
                    <option value="Témoin de jehova"><?= __('Témoin de jehova') ?></option>
                    <option value="Pentécotiste"><?= __('Pentécotiste') ?></option>
                    <option value="Protestant"><?= __('Protestant') ?></option>
                  </select>
                </div>
                <?php
                  echo $this->Form->input('adress');
                  echo $this->Form->input('email');
                ?>
              </div>
              <div class="col-md-4 col-sm-12 col-xs-6 col-lg-4"><!-- block de droite -->
                <?php
                  echo $this->Form->input('phone_number');
                  echo $this->Form->input('patient.phone_number2');
                  /*echo $this->Form->input('photo', ['type'=>'file']);*/
                ?>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control select2" name="role" style="width: 100%">
                      <option value=""><?= __(' ') ?></option>
                      <option value="administrateur"><?= __('Administrateur') ?></option>
                      <option value="coordonnation"><?= __('Coordonnation') ?></option>
                      <option value="responsable stock"><?= __('Responsable stock') ?></option>
                      <option value="responsable vaccination"><?= __('Responsable vaccination') ?></option>
                      <option value="infirmier"><?= __('Infirmier') ?></option>
                      <option value="caissier"><?= __('Caissier') ?></option>
                      <option value="docteur"><?= __('Docteur') ?></option>
                      <option value="receptionnieste"><?= __('Receptionnieste') ?></option>
                      <option value="laborantin"><?= __('Laborantin') ?></option>
                      <option value="patient"><?= __('Patient') ?></option>
                    </select>
                  </div>
                <?php  
                  echo $this->Form->input('login');
                  echo $this->Form->input('password');
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-lg-8">
                <?= $this->Form->input('patient.medical_background'); ?>                
              </div>
              <div class="col-md-4 col-lg-4">
                <?php                  
                  echo $this->Form->input('patient.active');
                  echo $this->Form->input('patient.desired_service');
                ?>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer"> 
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

        <?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
    'AdminLTE./plugins/upload/bootstrap-fileupload.min',
    'AdminLTE./plugins/select2/select2.min',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/select2/select2.full.min',
  'AdminLTE./plugins/input-mask/jquery.inputmask',
  'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
  'AdminLTE./plugins/datepicker/bootstrap-datepicker',
  'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
  'AdminLTE./plugins/upload/bootstrap-fileupload',
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask yyyy/mm/dd
    $(".datepicker")
        .inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"})
        .datepicker({
            language:'en',
            format: 'yyyy/mm/dd'
        });
  });
</script>
<?php $this->end(); ?>
        
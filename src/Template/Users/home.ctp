<?php $this->layout = 'AdminLTE.home'; ?>
<!-- Main content -->
<section class="Content" >
  <div id="preloader">
      <div id="loader">
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="lading"></div>
      </div>
    </div><!-- /#preloader -->
    <!-- Preloader End-->

    <div id="page-content">
      <div class="page-body">
        <section id="about">
          <div class="section-inner">
            <div>
              <div class="section-title">
                <h1 class="text-center">Bienvenue sur HAMIS</h1>
              </div>
              <div class="clearfix column-section" align="center">
                <?php
                  if ($auth)
                  {
                    switch ($auth ['User']['role']) 
                    {
                      case 'administrateur': ?>                        
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/users/list'); ?>">
                            <?php echo $this->Html->image('user_groups.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/users/list'); ?>">
                              <span><?= __('Gestion des utilisateurs')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/services'); ?>">
                            <?php echo $this->Html->image('setting.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/services'); ?>">
                              <span><?= __('Parametrage système')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/operations'); ?>">
                            <?php echo $this->Html->image('detail.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/operations'); ?>">
                              <span><?= __('Journal du système')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-6 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-6 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'coordonnation': ?>
                        <div class="col-sm-4 items">
                            <a href="<?php echo $this->Url->build('/staffs'); ?>">
                              <?php echo $this->Html->image('user_groups.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                            </a>
                            <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                              <a href="<?php echo $this->Url->build('/staffs'); ?>">
                                <span><?= __('Personnels')?></span>
                              </a>
                            </h5>
                        </div>
                        <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/contrats'); ?>">
                                <?php echo $this->Html->image('contract.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                              </a>
                              <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/contrats'); ?>">
                                  <span><?= __('Contrats')?></span>
                                </a>
                              </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/vacations'); ?>">
                            <?php echo $this->Html->image('vacations.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/vacations'); ?>">
                              <span><?= __('Congés')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/services'); ?>">
                            <?php echo $this->Html->image('services.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/services'); ?>">
                              <span><?= __('Services')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/job-functions'); ?>">
                            <?php echo $this->Html->image('functions.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/job-functions'); ?>">
                              <span><?= __('Fonctions')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/punishments'); ?>">
                            <?php echo $this->Html->image('punishments.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/punishments'); ?>">
                              <span><?= __('Sanctions')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/specialities'); ?>">
                            <?php echo $this->Html->image('specialities.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/specialities'); ?>">
                              <span><?= __('Spécialités')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('#'); ?>">
                            <?php echo $this->Html->image('stat.png', array('class' => 'user-image', 'alt' => 'User Image'));?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('#'); ?>">
                              <span><?= __('Statistiques')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-12 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'infirmier': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/patients'); ?>">
                            <?php echo $this->Html->image('patients.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/patients'); ?>">
                              <span><?= __('Patients')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/kits'); ?>">
                            <?php echo $this->Html->image('kits.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/kits'); ?>">
                              <span><?= __('Kits')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/dressings'); ?>">
                            <?php echo $this->Html->image('dressings.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/dressings'); ?>">
                              <span><?= __('Pansements')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/cares'); ?>">
                            <?php echo $this->Html->image('cares.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/cares'); ?>">
                              <span><?= __('Getions des Soins')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/consultation-parameters'); ?>">
                            <?php echo $this->Html->image('consultation-parameters.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/consultation-parameters'); ?>">
                              <span><?= __('Paramètres de consultation')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-12 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'docteur': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/patients'); ?>">
                            <?php echo $this->Html->image('patients.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/patients'); ?>">
                              <span><?= __('Patients')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/consultations'); ?>">
                            <?php echo $this->Html->image('consultation.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/consultations'); ?>">
                              <span><?= __('Consultations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/hospitalizations'); ?>">
                            <?php echo $this->Html->image('hospitalizations.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/hospitalizations'); ?>">
                              <span><?= __('hospitalisations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/products'); ?>">
                            <?php echo $this->Html->image('products.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/products'); ?>">
                              <span><?= __('Produits')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/rendrez-vous'); ?>">
                            <?php echo $this->Html->image('rendez-vous.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/rendrez-vous'); ?>">
                              <span><?= __('Rendrez-vous')?></span>
                            </a>
                          </h5>
                        </div>

                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-12 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'laborantin': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/patients'); ?>">
                            <?php echo $this->Html->image('patients.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/patients'); ?>">
                              <span><?= __('Patients')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/exams'); ?>">
                            <?php echo $this->Html->image('exams.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/exams'); ?>">
                              <span><?= __('Examens')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/analysis'); ?>">
                            <?php echo $this->Html->image('analysis.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/analysis'); ?>">
                              <span><?= __('Analyses médicales')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/levies'); ?>">
                            <?php echo $this->Html->image('levies.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/levies'); ?>">
                              <span><?= __('Prélèvements')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'receptionniste': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/patients'); ?>">
                            <?php echo $this->Html->image('patients.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/patients'); ?>">
                              <span><?= __('Patients')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/bed-rooms'); ?>">
                            <?php echo $this->Html->image('bed-rooms.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/bed-rooms'); ?>">
                              <span><?= __('hospitalisations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/rendrez-vous'); ?>">
                            <?php echo $this->Html->image('rendez-vous.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/rendrez-vous'); ?>">
                              <span><?= __('Rendrez-vous')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-6 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-6 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'caissier': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/patients'); ?>">
                            <?php echo $this->Html->image('patients.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/patients'); ?>">
                              <span><?= __('Patients')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/receipts'); ?>">
                            <?php echo $this->Html->image('receipts.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/receipts'); ?>">
                              <span><?= __('Facturations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/etat-caisse'); ?>">
                            <?php echo $this->Html->image('etat-caisse.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/etat-caisse'); ?>">
                              <span><?= __('Etat-caisse')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-6 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-6 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'responsable stock': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/providers'); ?>">
                            <?php echo $this->Html->image('providers.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/providers'); ?>">
                              <span><?= __('Fournisseurs')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/product-categories'); ?>">
                            <?php echo $this->Html->image('product-categories.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/product-categories'); ?>">
                              <span><?= __('Catégories de produits')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/products'); ?>">
                            <?php echo $this->Html->image('products.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/products'); ?>">
                              <span><?= __('Produits')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/orders'); ?>">
                            <?php echo $this->Html->image('orders.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/orders'); ?>">
                              <span><?= __('Commandes')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/deliveries'); ?>">
                            <?php echo $this->Html->image('deliveries.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/deliveries'); ?>">
                              <span><?= __('Livraisons')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/kits'); ?>">
                            <?php echo $this->Html->image('kits.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/kits'); ?>">
                              <span><?= __('Kits')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('#'); ?>">
                            <?php echo $this->Html->image('Stat.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('#'); ?>">
                              <span><?= __('Statistiques')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      case 'responsable vaccination': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/patients'); ?>">
                            <?php echo $this->Html->image('patients.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/patients'); ?>">
                              <span><?= __('Patients')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/vaccinations'); ?>">
                            <?php echo $this->Html->image('vaccinations.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/vaccinations'); ?>">
                              <span><?= __('vaccinations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/certificates'); ?>">
                            <?php echo $this->Html->image('certificates.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/certificates'); ?>">
                              <span><?= __('certificats de vaccinations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/products'); ?>">
                            <?php echo $this->Html->image('products.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/products'); ?>">
                              <span><?= __('Vaccins')?></span>
                            </a>
                          </h5>
                        </div>

                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;                            
                      case 'patient': ?>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/vaccinations'); ?>">
                            <?php echo $this->Html->image('vaccinations.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/vaccinations'); ?>">
                              <span><?= __('vaccinations')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/rendrez-vous'); ?>">
                            <?php echo $this->Html->image('rendez-vous.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/rendrez-vous'); ?>">
                              <span><?= __('Rendrez-vous')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/orders'); ?>">
                            <?php echo $this->Html->image('orders.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/orders'); ?>">
                              <span><?= __('Commandes')?></span>
                            </a>
                          </h5>
                        </div>
                        <div class="col-sm-4 items">
                          <a href="<?php echo $this->Url->build('/cares'); ?>">
                            <?php echo $this->Html->image('cares.png', array('class' => 'user-image', 'alt' => 'User Image')); ?> 
                          </a>
                          <h5 align="center" style="margin-top: 10px;" style="margin-top: 10px;">
                            <a href="<?php echo $this->Url->build('/cares'); ?>">
                              <span><?= __('Soins')?></span>
                            </a>
                          </h5>
                        </div>
                        <?php
                          if ($auth['User']['id'] != 0) 
                          {  ?>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                <?php echo $this->Html->image($auth ['User']['photo'], array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build('/users/profile/'.$auth['User']['id']); ?>">
                                  <span><?= __('Mon profil')?></span>
                                </a>
                              </h5>
                            </div>
                            <div class="col-sm-4 items">
                              <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                <?php echo $this->Html->image('logout.png', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                              </a>
                              <h5 align="center" style="margin-top: 10px;">
                                <a href="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'logout')); ?>"">
                                  <span><?= __('Déconnexion')?></span>
                                </a>
                              </h5>
                            </div>
                            <?php
                                }      
                                break;
                      default: 
                        return $this->redirect(['controller' => 'Users', 'action' => 'logout']);
                        break;
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <footer id="footer-section">
            <div class="footerinner">
              <p class="copyright">
                Copyright &copy; 2017| design by <strong><i>Armand BOUTCHOUANG</i></strong> develop by <em style="margin-top: 10px;"><a href="<?php echo $this->Url->build('/users/add'); ?>">X-developers</a></em>
              </p>
            </div>
          </footer>
        </section>
      </div>
    </div>

    <!-- jQuery Library -->
    <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
    <script>
      $(window).load(function () {    
          "use strict";
          $("#loader").fadeOut();
          $("#preloader").delay(1000).fadeOut("slow");
      });
    </script>
</section>
<!-- /.content -->

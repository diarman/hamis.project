<?php
namespace App\Controller;

use App\Controller\AppController;
use cake\Event\Event;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforFilter(Event $event)
    {
        $this->Auth->deny();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function home()
    {
        
    }

    /**
     * list method
     *
     * @return \Cake\Http\Response|void
     */
    public function list()
    {
        //OperationsController::journalisation($auth ['User']['id'], 'Lister les utilisateurs', 'utilisateurs');

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['JobFunctions', 'Services']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * profile method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function profile($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data, ['associated'=>['Operations']]);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'list']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function addstaff()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post'))
        {
            $filename = $this->request->data['photo'];
            $dossier = 'img/';
            $Uploadfile = $dossier . $filename;
            if (move_uploaded_file($this->request->data['photo'], $Uploadfile)) 
            { 
                $user = $this->Users->patchEntity($user, $this->request->data, ['associated'=>['Staffs']]);
                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The {0} has been saved.', 'User'));
                    return $this->redirect(['controller' => 'Staffs', 'action' => 'index']);
                } else
                {
                    $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
                }
            }
            else
            {
                $this->Flash->error(__('The {0} could not be upload. Please, try again.', 'User'));
            }
            
            ;
        }

        $jobFunctions = $this->Users->Staffs->JobFunctions->find('list', ['limit' => 200]);
        $services = $this->Users->Staffs->Services->find('list', ['limit' => 200]);
        $this->set(compact('user', 'staffs', 'jobFunctions', 'services'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function addpatient()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) 
        {
            $filename = $this->request->data['file']['name'];
            $dossier = 'img/';
            $Uploadfile = $dossier . $filename;
            if (move_uploaded_file($this->request->data['file']['tmp_name'], $Uploadfile)) 
            {
                $user = $this->Users->patchEntity($user, $this->request->data, ['associated'=>['Patients']]);
                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The {0} has been saved.', 'User'));
                    return $this->redirect(['controller' => 'Patients', 'action' => 'index']);
                } 
                else 
                {
                    $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
                }
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The {0} has been saved.', 'User'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * login method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function login()
    { 
        //verifie si l'utilisateur est déconnecté
        if ($this->Auth->user('id')) //si l'user est déja connecté
        {
            $this->Flash->warning(__('Vous vous etes déjà connecté')); 
            //redirection à completer pour afficher la page ou il était
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }

        
        // vérifie si le formulaire de d'authentification a été envoyé
        if ($this->request->is('post'))
        {
                $user = $this->Auth->identify();
                if ($user)
                {
                    $this->Auth->setUser($user);
                    $this->Flash->success(__('bienvenue à votre espace de travail')); 
                    //redirection
                    return $this->redirect(['controller' => 'Users', 'action' => 'home']);
                }
                $this->Flash->error(__('desolé, login ou mot de passe incorrect.'));
        }       
    }

    public function forgotPassword()
    {
        //fonction pour le mot de passe oublié
    }
    
    /**
     * login method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function logout()
    {
        $this->Flash->success(__('Vous avez été déconnecté')); 

        return $this->redirect($this->Auth->logout());
    }
    
    /**
     * signup method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function lockscreen()
    {
        //pour le time out
    }

}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Operations Controller
 *
 * @property \App\Model\Table\OperationsTable $Operations
 *
 * @method \App\Model\Entity\Operation[] paginate($object = null, array $settings = [])
 */
class OperationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $operations = $this->paginate($this->Operations);

        $this->set(compact('operations'));
        $this->set('_serialize', ['operations']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $operation = $this->Operations->newEntity();
        if ($this->request->is('post')) {
            $operation = $this->Operations->patchEntity($operation, $this->request->data);
            if ($this->Operations->save($operation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Operation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please,  try again.', 'Operation'));
            }
        }
        $users = $this->Operations->Users->find('list', ['limit' => 200]);
        $this->set(compact('operation', 'users'));
        $this->set('_serialize', ['operation']);
    }

    /**
     * journalisation method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public static function journalisation($user, $name, $target)
    {
        $ip_adres= $_SERVER['REMOTE_ADDR'];

        if (!empty($user)||!empty($name)||!empty($target)) 
        {
            $operation = $this->Operations->newEntity();
            $operation->user_id = $user;
            $operation->ip_adres = $ip_adres;
            $operation->name = $name;
            $operation->target = $target;
            $operation->created = date('Y-m-d H:i:s');
            $this->Operations->save($operation);
        }
    }


    /**
     * Delete method
     *
     * @param string|null $id Operation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $operation = $this->Operations->get($id);
        if ($this->Operations->delete($operation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Operation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Operation'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Staffs Controller
 *
 * @property \App\Model\Table\StaffsTable $Staffs
 *
 * @method \App\Model\Entity\Staff[] paginate($object = null, array $settings = [])
 */
class StaffsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'JobFunctions', 'Services']
        ];
        $staffs = $this->paginate($this->Staffs);

        $this->set(compact('staffs'));
        $this->set('_serialize', ['staffs']);
    }

    /**
     * View method
     *
     * @param string|null $id Staff id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staff = $this->Staffs->get($id, [
            'contain' => ['Users', 'JobFunctions', 'Services', 'Staffs', 'Contracts', 'Punishments', 'Vacations']
        ]);

        $this->set('staff', $staff);
        $this->set('_serialize', ['staff']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staff = $this->Staffs->newEntity();
        if ($this->request->is('post')) {
            $staff = $this->Staffs->patchEntity($staff, $this->request->data);
            if ($this->Staffs->save($staff)) {
                $this->Flash->success(__('The {0} has been saved.', 'Staff'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Staff'));
            }
        }
        $users = $this->Staffs->Users->find('list', ['limit' => 200]);
        $jobFunctions = $this->Staffs->JobFunctions->find('list', ['limit' => 200]);
        $services = $this->Staffs->Services->find('list', ['limit' => 200]);
        $this->set(compact('staff', 'users', 'jobFunctions', 'services'));
        $this->set('_serialize', ['staff']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Staff id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staff = $this->Staffs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staff = $this->Staffs->patchEntity($staff, $this->request->data);
            if ($this->Staffs->save($staff)) {
                $this->Flash->success(__('The {0} has been saved.', 'Staff'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Staff'));
            }
        }
        $users = $this->Staffs->Users->find('list', ['limit' => 200]);
        $jobFunctions = $this->Staffs->JobFunctions->find('list', ['limit' => 200]);
        $services = $this->Staffs->Services->find('list', ['limit' => 200]);
        $this->set(compact('staff', 'users', 'jobFunctions', 'services'));
        $this->set('_serialize', ['staff']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Staff id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staff = $this->Staffs->get($id);
        if ($this->Staffs->delete($staff)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Staff'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Staff'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Apointments Controller
 *
 * @property \App\Model\Table\ApointmentsTable $Apointments
 *
 * @method \App\Model\Entity\Apointment[] paginate($object = null, array $settings = [])
 */
class ApointmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Users']
        ];
        $apointments = $this->paginate($this->Apointments);

        $this->set(compact('apointments'));
        $this->set('_serialize', ['apointments']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function list()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Users']
        ];
        $apointments = $this->paginate($this->Apointments);

        $this->set(compact('apointments'));
        $this->set('_serialize', ['apointments']);
    }

    /**
     * View method
     *
     * @param string|null $id Apointment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $apointment = $this->Apointments->get($id, [
            'contain' => ['Patients', 'Users']
        ]);

        $this->set('apointment', $apointment);
        $this->set('_serialize', ['apointment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $apointment = $this->Apointments->newEntity();
        if ($this->request->is('post')) {
            $apointment = $this->Apointments->patchEntity($apointment, $this->request->data);
            if ($this->Apointments->save($apointment)) {
                $this->Flash->success(__('The {0} has been saved.', 'Apointment'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Apointment'));
            }
        }
        $patients = $this->Apointments->Patients->find('list', ['limit' => 200]);
        $users = $this->Apointments->Users->find('list', ['limit' => 200]);
        $this->set(compact('apointment', 'patients', 'users'));
        $this->set('_serialize', ['apointment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Apointment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $apointment = $this->Apointments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $apointment = $this->Apointments->patchEntity($apointment, $this->request->data);
            if ($this->Apointments->save($apointment)) {
                $this->Flash->success(__('The {0} has been saved.', 'Apointment'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Apointment'));
            }
        }
        $patients = $this->Apointments->Patients->find('list', ['limit' => 200]);
        $users = $this->Apointments->Users->find('list', ['limit' => 200]);
        $this->set(compact('apointment', 'patients', 'users'));
        $this->set('_serialize', ['apointment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Apointment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $apointment = $this->Apointments->get($id);
        if ($this->Apointments->delete($apointment)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Apointment'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Apointment'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

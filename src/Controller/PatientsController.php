<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Patients Controller
 *
 * @property \App\Model\Table\PatientsTable $Patients
 *
 * @method \App\Model\Entity\Patient[] paginate($object = null, array $settings = [])
 */
class PatientsController extends AppController
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
        $patients = $this->paginate($this->Patients);

        $this->set(compact('patients'));
        $this->set('_serialize', ['patients']);
    }

    /**
     * View method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patient = $this->Patients->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('patient', $patient);
        $this->set('_serialize', ['patient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patient = $this->Patients->newEntity();
        if ($this->request->is('post')) {
            $patient = $this->Patients->patchEntity($patient, $this->request->data);
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The {0} has been saved.', 'Patient'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Patient'));
            }
        }
        $users = $this->Patients->Users->find('list', ['limit' => 200]);
        $this->set(compact('patient', 'users'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $patient = $this->Patients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patient = $this->Patients->patchEntity($patient, $this->request->data);
            if ($this->Patients->save($patient)) {
                $this->Flash->success(__('The {0} has been saved.', 'Patient'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Patient'));
            }
        }
        $users = $this->Patients->Users->find('list', ['limit' => 200]);
        $this->set(compact('patient', 'users'));
        $this->set('_serialize', ['patient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Patient id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patient = $this->Patients->get($id);
        if ($this->Patients->delete($patient)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Patient'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Patient'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

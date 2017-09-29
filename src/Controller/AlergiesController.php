<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alergies Controller
 *
 * @property \App\Model\Table\AlergiesTable $Alergies
 *
 * @method \App\Model\Entity\Alergy[] paginate($object = null, array $settings = [])
 */
class AlergiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients']
        ];
        $alergies = $this->paginate($this->Alergies);

        $this->set(compact('alergies'));
        $this->set('_serialize', ['alergies']);
    }

    /**
     * View method
     *
     * @param string|null $id Alergy id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alergy = $this->Alergies->get($id, [
            'contain' => ['Patients']
        ]);

        $this->set('alergy', $alergy);
        $this->set('_serialize', ['alergy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alergy = $this->Alergies->newEntity();
        if ($this->request->is('post')) {
            $alergy = $this->Alergies->patchEntity($alergy, $this->request->data);
            if ($this->Alergies->save($alergy)) {
                $this->Flash->success(__('The {0} has been saved.', 'Alergy'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Alergy'));
            }
        }
        $patients = $this->Alergies->Patients->find('list', ['limit' => 200]);
        $this->set(compact('alergy', 'patients'));
        $this->set('_serialize', ['alergy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alergy id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alergy = $this->Alergies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alergy = $this->Alergies->patchEntity($alergy, $this->request->data);
            if ($this->Alergies->save($alergy)) {
                $this->Flash->success(__('The {0} has been saved.', 'Alergy'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Alergy'));
            }
        }
        $patients = $this->Alergies->Patients->find('list', ['limit' => 200]);
        $this->set(compact('alergy', 'patients'));
        $this->set('_serialize', ['alergy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alergy id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alergy = $this->Alergies->get($id);
        if ($this->Alergies->delete($alergy)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Alergy'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Alergy'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Specialities Controller
 *
 * @property \App\Model\Table\SpecialitiesTable $Specialities
 *
 * @method \App\Model\Entity\Speciality[] paginate($object = null, array $settings = [])
 */
class SpecialitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $specialities = $this->paginate($this->Specialities);

        $this->set(compact('specialities'));
        $this->set('_serialize', ['specialities']);
    }

    /**
     * View method
     *
     * @param string|null $id Speciality id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $speciality = $this->Specialities->get($id, [
            'contain' => ['Receipts']
        ]);

        $this->set('speciality', $speciality);
        $this->set('_serialize', ['speciality']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $speciality = $this->Specialities->newEntity();
        if ($this->request->is('post')) {
            $speciality = $this->Specialities->patchEntity($speciality, $this->request->data);
            if ($this->Specialities->save($speciality)) {
                $this->Flash->success(__('The {0} has been saved.', 'Speciality'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Speciality'));
            }
        }
        $this->set(compact('speciality'));
        $this->set('_serialize', ['speciality']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Speciality id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $speciality = $this->Specialities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $speciality = $this->Specialities->patchEntity($speciality, $this->request->data);
            if ($this->Specialities->save($speciality)) {
                $this->Flash->success(__('The {0} has been saved.', 'Speciality'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Speciality'));
            }
        }
        $this->set(compact('speciality'));
        $this->set('_serialize', ['speciality']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Speciality id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $speciality = $this->Specialities->get($id);
        if ($this->Specialities->delete($speciality)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Speciality'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Speciality'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

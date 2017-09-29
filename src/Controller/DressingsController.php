<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dressings Controller
 *
 * @property \App\Model\Table\DressingsTable $Dressings
 *
 * @method \App\Model\Entity\Dressing[] paginate($object = null, array $settings = [])
 */
class DressingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Kits']
        ];
        $dressings = $this->paginate($this->Dressings);

        $this->set(compact('dressings'));
        $this->set('_serialize', ['dressings']);
    }

    /**
     * View method
     *
     * @param string|null $id Dressing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dressing = $this->Dressings->get($id, [
            'contain' => ['Patients', 'Kits']
        ]);

        $this->set('dressing', $dressing);
        $this->set('_serialize', ['dressing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dressing = $this->Dressings->newEntity();
        if ($this->request->is('post')) {
            $dressing = $this->Dressings->patchEntity($dressing, $this->request->data);
            if ($this->Dressings->save($dressing)) {
                $this->Flash->success(__('The {0} has been saved.', 'Dressing'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Dressing'));
            }
        }
        $patients = $this->Dressings->Patients->find('list', ['limit' => 200]);
        $kits = $this->Dressings->Kits->find('list', ['limit' => 200]);
        $this->set(compact('dressing', 'patients', 'kits'));
        $this->set('_serialize', ['dressing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dressing id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dressing = $this->Dressings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dressing = $this->Dressings->patchEntity($dressing, $this->request->data);
            if ($this->Dressings->save($dressing)) {
                $this->Flash->success(__('The {0} has been saved.', 'Dressing'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Dressing'));
            }
        }
        $patients = $this->Dressings->Patients->find('list', ['limit' => 200]);
        $kits = $this->Dressings->Kits->find('list', ['limit' => 200]);
        $this->set(compact('dressing', 'patients', 'kits'));
        $this->set('_serialize', ['dressing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dressing id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dressing = $this->Dressings->get($id);
        if ($this->Dressings->delete($dressing)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Dressing'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Dressing'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

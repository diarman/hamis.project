<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PerformingCares Controller
 *
 * @property \App\Model\Table\PerformingCaresTable $PerformingCares
 *
 * @method \App\Model\Entity\PerformingCare[] paginate($object = null, array $settings = [])
 */
class PerformingCaresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cares']
        ];
        $performingCares = $this->paginate($this->PerformingCares);

        $this->set(compact('performingCares'));
        $this->set('_serialize', ['performingCares']);
    }

    /**
     * View method
     *
     * @param string|null $id Performing Care id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $performingCare = $this->PerformingCares->get($id, [
            'contain' => ['Cares']
        ]);

        $this->set('performingCare', $performingCare);
        $this->set('_serialize', ['performingCare']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $performingCare = $this->PerformingCares->newEntity();
        if ($this->request->is('post')) {
            $performingCare = $this->PerformingCares->patchEntity($performingCare, $this->request->data);
            if ($this->PerformingCares->save($performingCare)) {
                $this->Flash->success(__('The {0} has been saved.', 'Performing Care'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Performing Care'));
            }
        }
        $cares = $this->PerformingCares->Cares->find('list', ['limit' => 200]);
        $this->set(compact('performingCare', 'cares'));
        $this->set('_serialize', ['performingCare']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Performing Care id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $performingCare = $this->PerformingCares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $performingCare = $this->PerformingCares->patchEntity($performingCare, $this->request->data);
            if ($this->PerformingCares->save($performingCare)) {
                $this->Flash->success(__('The {0} has been saved.', 'Performing Care'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Performing Care'));
            }
        }
        $cares = $this->PerformingCares->Cares->find('list', ['limit' => 200]);
        $this->set(compact('performingCare', 'cares'));
        $this->set('_serialize', ['performingCare']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Performing Care id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $performingCare = $this->PerformingCares->get($id);
        if ($this->PerformingCares->delete($performingCare)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Performing Care'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Performing Care'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

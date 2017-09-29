<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cares Controller
 *
 * @property \App\Model\Table\CaresTable $Cares
 *
 * @method \App\Model\Entity\Care[] paginate($object = null, array $settings = [])
 */
class CaresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hospitalizations']
        ];
        $cares = $this->paginate($this->Cares);

        $this->set(compact('cares'));
        $this->set('_serialize', ['cares']);
    }

    /**
     * View method
     *
     * @param string|null $id Care id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $care = $this->Cares->get($id, [
            'contain' => ['Hospitalizations', 'CareProducts', 'PerformingCares']
        ]);

        $this->set('care', $care);
        $this->set('_serialize', ['care']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $care = $this->Cares->newEntity();
        if ($this->request->is('post')) {
            $care = $this->Cares->patchEntity($care, $this->request->data);
            if ($this->Cares->save($care)) {
                $this->Flash->success(__('The {0} has been saved.', 'Care'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Care'));
            }
        }
        $hospitalizations = $this->Cares->Hospitalizations->find('list', ['limit' => 200]);
        $this->set(compact('care', 'hospitalizations'));
        $this->set('_serialize', ['care']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Care id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $care = $this->Cares->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $care = $this->Cares->patchEntity($care, $this->request->data);
            if ($this->Cares->save($care)) {
                $this->Flash->success(__('The {0} has been saved.', 'Care'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Care'));
            }
        }
        $hospitalizations = $this->Cares->Hospitalizations->find('list', ['limit' => 200]);
        $this->set(compact('care', 'hospitalizations'));
        $this->set('_serialize', ['care']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Care id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $care = $this->Cares->get($id);
        if ($this->Cares->delete($care)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Care'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Care'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

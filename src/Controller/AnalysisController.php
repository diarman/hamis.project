<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Analysis Controller
 *
 * @property \App\Model\Table\AnalysisTable $Analysis
 *
 * @method \App\Model\Entity\Analysi[] paginate($object = null, array $settings = [])
 */
class AnalysisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Levies']
        ];
        $analysis = $this->paginate($this->Analysis);

        $this->set(compact('analysis'));
        $this->set('_serialize', ['analysis']);
    }

    /**
     * View method
     *
     * @param string|null $id Analysi id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $analysi = $this->Analysis->get($id, [
            'contain' => ['Levies', 'Elements']
        ]);

        $this->set('analysi', $analysi);
        $this->set('_serialize', ['analysi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $analysi = $this->Analysis->newEntity();
        if ($this->request->is('post')) {
            $analysi = $this->Analysis->patchEntity($analysi, $this->request->data);
            if ($this->Analysis->save($analysi)) {
                $this->Flash->success(__('The {0} has been saved.', 'Analysi'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Analysi'));
            }
        }
        $levies = $this->Analysis->Levies->find('list', ['limit' => 200]);
        $elements = $this->Analysis->Elements->find('list', ['limit' => 200]);
        $this->set(compact('analysi', 'levies', 'elements'));
        $this->set('_serialize', ['analysi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Analysi id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $analysi = $this->Analysis->get($id, [
            'contain' => ['Elements']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $analysi = $this->Analysis->patchEntity($analysi, $this->request->data);
            if ($this->Analysis->save($analysi)) {
                $this->Flash->success(__('The {0} has been saved.', 'Analysi'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Analysi'));
            }
        }
        $levies = $this->Analysis->Levies->find('list', ['limit' => 200]);
        $elements = $this->Analysis->Elements->find('list', ['limit' => 200]);
        $this->set(compact('analysi', 'levies', 'elements'));
        $this->set('_serialize', ['analysi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Analysi id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analysi = $this->Analysis->get($id);
        if ($this->Analysis->delete($analysi)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Analysi'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Analysi'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

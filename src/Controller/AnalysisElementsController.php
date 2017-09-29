<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AnalysisElements Controller
 *
 * @property \App\Model\Table\AnalysisElementsTable $AnalysisElements
 *
 * @method \App\Model\Entity\AnalysisElement[] paginate($object = null, array $settings = [])
 */
class AnalysisElementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Analysis', 'Elements', 'Results']
        ];
        $analysisElements = $this->paginate($this->AnalysisElements);

        $this->set(compact('analysisElements'));
        $this->set('_serialize', ['analysisElements']);
    }

    /**
     * View method
     *
     * @param string|null $id Analysis Element id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $analysisElement = $this->AnalysisElements->get($id, [
            'contain' => ['Analysis', 'Elements', 'Results']
        ]);

        $this->set('analysisElement', $analysisElement);
        $this->set('_serialize', ['analysisElement']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $analysisElement = $this->AnalysisElements->newEntity();
        if ($this->request->is('post')) {
            $analysisElement = $this->AnalysisElements->patchEntity($analysisElement, $this->request->data);
            if ($this->AnalysisElements->save($analysisElement)) {
                $this->Flash->success(__('The {0} has been saved.', 'Analysis Element'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Analysis Element'));
            }
        }
        $analysis = $this->AnalysisElements->Analysis->find('list', ['limit' => 200]);
        $elements = $this->AnalysisElements->Elements->find('list', ['limit' => 200]);
        $results = $this->AnalysisElements->Results->find('list', ['limit' => 200]);
        $this->set(compact('analysisElement', 'analysis', 'elements', 'results'));
        $this->set('_serialize', ['analysisElement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Analysis Element id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $analysisElement = $this->AnalysisElements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $analysisElement = $this->AnalysisElements->patchEntity($analysisElement, $this->request->data);
            if ($this->AnalysisElements->save($analysisElement)) {
                $this->Flash->success(__('The {0} has been saved.', 'Analysis Element'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Analysis Element'));
            }
        }
        $analysis = $this->AnalysisElements->Analysis->find('list', ['limit' => 200]);
        $elements = $this->AnalysisElements->Elements->find('list', ['limit' => 200]);
        $results = $this->AnalysisElements->Results->find('list', ['limit' => 200]);
        $this->set(compact('analysisElement', 'analysis', 'elements', 'results'));
        $this->set('_serialize', ['analysisElement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Analysis Element id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analysisElement = $this->AnalysisElements->get($id);
        if ($this->AnalysisElements->delete($analysisElement)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Analysis Element'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Analysis Element'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

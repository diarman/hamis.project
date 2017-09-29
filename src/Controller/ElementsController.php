<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Elements Controller
 *
 * @property \App\Model\Table\ElementsTable $Elements
 *
 * @method \App\Model\Entity\Element[] paginate($object = null, array $settings = [])
 */
class ElementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Exams']
        ];
        $elements = $this->paginate($this->Elements);

        $this->set(compact('elements'));
        $this->set('_serialize', ['elements']);
    }

    /**
     * View method
     *
     * @param string|null $id Element id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $element = $this->Elements->get($id, [
            'contain' => ['Exams', 'Analysis']
        ]);

        $this->set('element', $element);
        $this->set('_serialize', ['element']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $element = $this->Elements->newEntity();
        if ($this->request->is('post')) {
            $element = $this->Elements->patchEntity($element, $this->request->data);
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('The {0} has been saved.', 'Element'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Element'));
            }
        }
        $exams = $this->Elements->Exams->find('list', ['limit' => 200]);
        $analysis = $this->Elements->Analysis->find('list', ['limit' => 200]);
        $this->set(compact('element', 'exams', 'analysis'));
        $this->set('_serialize', ['element']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Element id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $element = $this->Elements->get($id, [
            'contain' => ['Analysis']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $element = $this->Elements->patchEntity($element, $this->request->data);
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('The {0} has been saved.', 'Element'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Element'));
            }
        }
        $exams = $this->Elements->Exams->find('list', ['limit' => 200]);
        $analysis = $this->Elements->Analysis->find('list', ['limit' => 200]);
        $this->set(compact('element', 'exams', 'analysis'));
        $this->set('_serialize', ['element']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Element id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $element = $this->Elements->get($id);
        if ($this->Elements->delete($element)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Element'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Element'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

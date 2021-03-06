<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parameters Controller
 *
 * @property \App\Model\Table\ParametersTable $Parameters
 *
 * @method \App\Model\Entity\Parameter[] paginate($object = null, array $settings = [])
 */
class ParametersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $parameters = $this->paginate($this->Parameters);

        $this->set(compact('parameters'));
        $this->set('_serialize', ['parameters']);
    }

    /**
     * View method
     *
     * @param string|null $id Parameter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parameter = $this->Parameters->get($id, [
            'contain' => ['ConsultationParameters']
        ]);

        $this->set('parameter', $parameter);
        $this->set('_serialize', ['parameter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parameter = $this->Parameters->newEntity();
        if ($this->request->is('post')) {
            $parameter = $this->Parameters->patchEntity($parameter, $this->request->data);
            if ($this->Parameters->save($parameter)) {
                $this->Flash->success(__('The {0} has been saved.', 'Parameter'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Parameter'));
            }
        }
        $this->set(compact('parameter'));
        $this->set('_serialize', ['parameter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Parameter id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parameter = $this->Parameters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parameter = $this->Parameters->patchEntity($parameter, $this->request->data);
            if ($this->Parameters->save($parameter)) {
                $this->Flash->success(__('The {0} has been saved.', 'Parameter'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Parameter'));
            }
        }
        $this->set(compact('parameter'));
        $this->set('_serialize', ['parameter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Parameter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parameter = $this->Parameters->get($id);
        if ($this->Parameters->delete($parameter)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Parameter'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Parameter'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

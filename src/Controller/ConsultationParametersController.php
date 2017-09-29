<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsultationParameters Controller
 *
 * @property \App\Model\Table\ConsultationParametersTable $ConsultationParameters
 *
 * @method \App\Model\Entity\ConsultationParameter[] paginate($object = null, array $settings = [])
 */
class ConsultationParametersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Parameters', 'Consultations']
        ];
        $consultationParameters = $this->paginate($this->ConsultationParameters);

        $this->set(compact('consultationParameters'));
        $this->set('_serialize', ['consultationParameters']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultation Parameter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultationParameter = $this->ConsultationParameters->get($id, [
            'contain' => ['Parameters', 'Consultations']
        ]);

        $this->set('consultationParameter', $consultationParameter);
        $this->set('_serialize', ['consultationParameter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultationParameter = $this->ConsultationParameters->newEntity();
        if ($this->request->is('post')) {
            $consultationParameter = $this->ConsultationParameters->patchEntity($consultationParameter, $this->request->data);
            if ($this->ConsultationParameters->save($consultationParameter)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Parameter'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Parameter'));
            }
        }
        $parameters = $this->ConsultationParameters->Parameters->find('list', ['limit' => 200]);
        $consultations = $this->ConsultationParameters->Consultations->find('list', ['limit' => 200]);
        $this->set(compact('consultationParameter', 'parameters', 'consultations'));
        $this->set('_serialize', ['consultationParameter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultation Parameter id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultationParameter = $this->ConsultationParameters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultationParameter = $this->ConsultationParameters->patchEntity($consultationParameter, $this->request->data);
            if ($this->ConsultationParameters->save($consultationParameter)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Parameter'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Parameter'));
            }
        }
        $parameters = $this->ConsultationParameters->Parameters->find('list', ['limit' => 200]);
        $consultations = $this->ConsultationParameters->Consultations->find('list', ['limit' => 200]);
        $this->set(compact('consultationParameter', 'parameters', 'consultations'));
        $this->set('_serialize', ['consultationParameter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation Parameter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultationParameter = $this->ConsultationParameters->get($id);
        if ($this->ConsultationParameters->delete($consultationParameter)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Consultation Parameter'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Consultation Parameter'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

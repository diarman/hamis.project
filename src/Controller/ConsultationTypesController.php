<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsultationTypes Controller
 *
 * @property \App\Model\Table\ConsultationTypesTable $ConsultationTypes
 *
 * @method \App\Model\Entity\ConsultationType[] paginate($object = null, array $settings = [])
 */
class ConsultationTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $consultationTypes = $this->paginate($this->ConsultationTypes);

        $this->set(compact('consultationTypes'));
        $this->set('_serialize', ['consultationTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultation Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultationType = $this->ConsultationTypes->get($id, [
            'contain' => ['Consultations']
        ]);

        $this->set('consultationType', $consultationType);
        $this->set('_serialize', ['consultationType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultationType = $this->ConsultationTypes->newEntity();
        if ($this->request->is('post')) {
            $consultationType = $this->ConsultationTypes->patchEntity($consultationType, $this->request->data);
            if ($this->ConsultationTypes->save($consultationType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Type'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Type'));
            }
        }
        $this->set(compact('consultationType'));
        $this->set('_serialize', ['consultationType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultation Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultationType = $this->ConsultationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultationType = $this->ConsultationTypes->patchEntity($consultationType, $this->request->data);
            if ($this->ConsultationTypes->save($consultationType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Type'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Type'));
            }
        }
        $this->set(compact('consultationType'));
        $this->set('_serialize', ['consultationType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultationType = $this->ConsultationTypes->get($id);
        if ($this->ConsultationTypes->delete($consultationType)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Consultation Type'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Consultation Type'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

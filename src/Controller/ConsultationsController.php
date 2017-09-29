<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultations Controller
 *
 * @property \App\Model\Table\ConsultationsTable $Consultations
 *
 * @method \App\Model\Entity\Consultation[] paginate($object = null, array $settings = [])
 */
class ConsultationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ConsultationTypes', 'Hospitalizations', 'Patients']
        ];
        $consultations = $this->paginate($this->Consultations);

        $this->set(compact('consultations'));
        $this->set('_serialize', ['consultations']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultation = $this->Consultations->get($id, [
            'contain' => ['ConsultationTypes', 'Hospitalizations', 'Patients', 'ConsultationExams', 'ConsultationParameters', 'ConsultationProducts']
        ]);

        $this->set('consultation', $consultation);
        $this->set('_serialize', ['consultation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultation = $this->Consultations->newEntity();
        if ($this->request->is('post')) {
            $consultation = $this->Consultations->patchEntity($consultation, $this->request->data);
            if ($this->Consultations->save($consultation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation'));
            }
        }
        $consultationTypes = $this->Consultations->ConsultationTypes->find('list', ['limit' => 200]);
        $hospitalizations = $this->Consultations->Hospitalizations->find('list', ['limit' => 200]);
        $patients = $this->Consultations->Patients->find('list', ['limit' => 200]);
        $this->set(compact('consultation', 'consultationTypes', 'hospitalizations', 'patients'));
        $this->set('_serialize', ['consultation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultation = $this->Consultations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultation = $this->Consultations->patchEntity($consultation, $this->request->data);
            if ($this->Consultations->save($consultation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation'));
            }
        }
        $consultationTypes = $this->Consultations->ConsultationTypes->find('list', ['limit' => 200]);
        $hospitalizations = $this->Consultations->Hospitalizations->find('list', ['limit' => 200]);
        $patients = $this->Consultations->Patients->find('list', ['limit' => 200]);
        $this->set(compact('consultation', 'consultationTypes', 'hospitalizations', 'patients'));
        $this->set('_serialize', ['consultation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultation = $this->Consultations->get($id);
        if ($this->Consultations->delete($consultation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Consultation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Consultation'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

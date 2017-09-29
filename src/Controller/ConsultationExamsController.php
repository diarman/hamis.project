<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsultationExams Controller
 *
 * @property \App\Model\Table\ConsultationExamsTable $ConsultationExams
 *
 * @method \App\Model\Entity\ConsultationExam[] paginate($object = null, array $settings = [])
 */
class ConsultationExamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultations', 'Exams']
        ];
        $consultationExams = $this->paginate($this->ConsultationExams);

        $this->set(compact('consultationExams'));
        $this->set('_serialize', ['consultationExams']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultation Exam id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultationExam = $this->ConsultationExams->get($id, [
            'contain' => ['Consultations', 'Exams']
        ]);

        $this->set('consultationExam', $consultationExam);
        $this->set('_serialize', ['consultationExam']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultationExam = $this->ConsultationExams->newEntity();
        if ($this->request->is('post')) {
            $consultationExam = $this->ConsultationExams->patchEntity($consultationExam, $this->request->data);
            if ($this->ConsultationExams->save($consultationExam)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Exam'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Exam'));
            }
        }
        $consultations = $this->ConsultationExams->Consultations->find('list', ['limit' => 200]);
        $exams = $this->ConsultationExams->Exams->find('list', ['limit' => 200]);
        $this->set(compact('consultationExam', 'consultations', 'exams'));
        $this->set('_serialize', ['consultationExam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultation Exam id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultationExam = $this->ConsultationExams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultationExam = $this->ConsultationExams->patchEntity($consultationExam, $this->request->data);
            if ($this->ConsultationExams->save($consultationExam)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Exam'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Exam'));
            }
        }
        $consultations = $this->ConsultationExams->Consultations->find('list', ['limit' => 200]);
        $exams = $this->ConsultationExams->Exams->find('list', ['limit' => 200]);
        $this->set(compact('consultationExam', 'consultations', 'exams'));
        $this->set('_serialize', ['consultationExam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation Exam id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultationExam = $this->ConsultationExams->get($id);
        if ($this->ConsultationExams->delete($consultationExam)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Consultation Exam'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Consultation Exam'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

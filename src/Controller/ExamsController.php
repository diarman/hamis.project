<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Exams Controller
 *
 * @property \App\Model\Table\ExamsTable $Exams
 *
 * @method \App\Model\Entity\Exam[] paginate($object = null, array $settings = [])
 */
class ExamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExamTypes']
        ];
        $exams = $this->paginate($this->Exams);

        $this->set(compact('exams'));
        $this->set('_serialize', ['exams']);
    }

    /**
     * View method
     *
     * @param string|null $id Exam id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exam = $this->Exams->get($id, [
            'contain' => ['ExamTypes', 'ConsultationExams', 'Elements']
        ]);

        $this->set('exam', $exam);
        $this->set('_serialize', ['exam']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exam = $this->Exams->newEntity();
        if ($this->request->is('post')) {
            $exam = $this->Exams->patchEntity($exam, $this->request->data);
            if ($this->Exams->save($exam)) {
                $this->Flash->success(__('The {0} has been saved.', 'Exam'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Exam'));
            }
        }
        $examTypes = $this->Exams->ExamTypes->find('list', ['limit' => 200]);
        $this->set(compact('exam', 'examTypes'));
        $this->set('_serialize', ['exam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Exam id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exam = $this->Exams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exam = $this->Exams->patchEntity($exam, $this->request->data);
            if ($this->Exams->save($exam)) {
                $this->Flash->success(__('The {0} has been saved.', 'Exam'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Exam'));
            }
        }
        $examTypes = $this->Exams->ExamTypes->find('list', ['limit' => 200]);
        $this->set(compact('exam', 'examTypes'));
        $this->set('_serialize', ['exam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Exam id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exam = $this->Exams->get($id);
        if ($this->Exams->delete($exam)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Exam'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Exam'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

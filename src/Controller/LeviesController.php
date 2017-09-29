<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Levies Controller
 *
 * @property \App\Model\Table\LeviesTable $Levies
 *
 * @method \App\Model\Entity\Levy[] paginate($object = null, array $settings = [])
 */
class LeviesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients']
        ];
        $levies = $this->paginate($this->Levies);

        $this->set(compact('levies'));
        $this->set('_serialize', ['levies']);
    }

    /**
     * View method
     *
     * @param string|null $id Levy id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $levy = $this->Levies->get($id, [
            'contain' => ['Patients', 'Analysis']
        ]);

        $this->set('levy', $levy);
        $this->set('_serialize', ['levy']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $levy = $this->Levies->newEntity();
        if ($this->request->is('post')) {
            $levy = $this->Levies->patchEntity($levy, $this->request->data);
            if ($this->Levies->save($levy)) {
                $this->Flash->success(__('The {0} has been saved.', 'Levy'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Levy'));
            }
        }
        $patients = $this->Levies->Patients->find('list', ['limit' => 200]);
        $this->set(compact('levy', 'patients'));
        $this->set('_serialize', ['levy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Levy id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $levy = $this->Levies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $levy = $this->Levies->patchEntity($levy, $this->request->data);
            if ($this->Levies->save($levy)) {
                $this->Flash->success(__('The {0} has been saved.', 'Levy'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Levy'));
            }
        }
        $patients = $this->Levies->Patients->find('list', ['limit' => 200]);
        $this->set(compact('levy', 'patients'));
        $this->set('_serialize', ['levy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Levy id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $levy = $this->Levies->get($id);
        if ($this->Levies->delete($levy)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Levy'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Levy'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

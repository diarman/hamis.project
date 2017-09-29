<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vacations Controller
 *
 * @property \App\Model\Table\VacationsTable $Vacations
 *
 * @method \App\Model\Entity\Vacation[] paginate($object = null, array $settings = [])
 */
class VacationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs']
        ];
        $vacations = $this->paginate($this->Vacations);

        $this->set(compact('vacations'));
        $this->set('_serialize', ['vacations']);
    }

    /**
     * View method
     *
     * @param string|null $id Vacation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vacation = $this->Vacations->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('vacation', $vacation);
        $this->set('_serialize', ['vacation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vacation = $this->Vacations->newEntity();
        if ($this->request->is('post')) {
            $vacation = $this->Vacations->patchEntity($vacation, $this->request->data);
            if ($this->Vacations->save($vacation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Vacation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Vacation'));
            }
        }
        $staffs = $this->Vacations->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('vacation', 'staffs'));
        $this->set('_serialize', ['vacation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vacation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vacation = $this->Vacations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vacation = $this->Vacations->patchEntity($vacation, $this->request->data);
            if ($this->Vacations->save($vacation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Vacation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Vacation'));
            }
        }
        $staffs = $this->Vacations->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('vacation', 'staffs'));
        $this->set('_serialize', ['vacation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vacation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vacation = $this->Vacations->get($id);
        if ($this->Vacations->delete($vacation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Vacation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Vacation'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

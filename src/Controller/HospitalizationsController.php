<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hospitalizations Controller
 *
 * @property \App\Model\Table\HospitalizationsTable $Hospitalizations
 *
 * @method \App\Model\Entity\Hospitalization[] paginate($object = null, array $settings = [])
 */
class HospitalizationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hospitalizations = $this->paginate($this->Hospitalizations);

        $this->set(compact('hospitalizations'));
        $this->set('_serialize', ['hospitalizations']);
    }

    /**
     * View method
     *
     * @param string|null $id Hospitalization id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospitalization = $this->Hospitalizations->get($id, [
            'contain' => ['BedRooms', 'Cares', 'Consultations']
        ]);

        $this->set('hospitalization', $hospitalization);
        $this->set('_serialize', ['hospitalization']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hospitalization = $this->Hospitalizations->newEntity();
        if ($this->request->is('post')) {
            $hospitalization = $this->Hospitalizations->patchEntity($hospitalization, $this->request->data);
            if ($this->Hospitalizations->save($hospitalization)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hospitalization'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hospitalization'));
            }
        }
        $this->set(compact('hospitalization'));
        $this->set('_serialize', ['hospitalization']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hospitalization id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hospitalization = $this->Hospitalizations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospitalization = $this->Hospitalizations->patchEntity($hospitalization, $this->request->data);
            if ($this->Hospitalizations->save($hospitalization)) {
                $this->Flash->success(__('The {0} has been saved.', 'Hospitalization'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Hospitalization'));
            }
        }
        $this->set(compact('hospitalization'));
        $this->set('_serialize', ['hospitalization']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hospitalization id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospitalization = $this->Hospitalizations->get($id);
        if ($this->Hospitalizations->delete($hospitalization)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Hospitalization'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Hospitalization'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

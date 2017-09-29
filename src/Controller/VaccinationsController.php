<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vaccinations Controller
 *
 * @property \App\Model\Table\VaccinationsTable $Vaccinations
 *
 * @method \App\Model\Entity\Vaccination[] paginate($object = null, array $settings = [])
 */
class VaccinationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Patients']
        ];
        $vaccinations = $this->paginate($this->Vaccinations);

        $this->set(compact('vaccinations'));
        $this->set('_serialize', ['vaccinations']);
    }

    /**
     * View method
     *
     * @param string|null $id Vaccination id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaccination = $this->Vaccinations->get($id, [
            'contain' => ['Products', 'Patients', 'Certificates']
        ]);

        $this->set('vaccination', $vaccination);
        $this->set('_serialize', ['vaccination']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaccination = $this->Vaccinations->newEntity();
        if ($this->request->is('post')) {
            $vaccination = $this->Vaccinations->patchEntity($vaccination, $this->request->data);
            if ($this->Vaccinations->save($vaccination)) {
                $this->Flash->success(__('The {0} has been saved.', 'Vaccination'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Vaccination'));
            }
        }
        $products = $this->Vaccinations->Products->find('list', ['limit' => 200]);
        $patients = $this->Vaccinations->Patients->find('list', ['limit' => 200]);
        $this->set(compact('vaccination', 'products', 'patients'));
        $this->set('_serialize', ['vaccination']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaccination id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaccination = $this->Vaccinations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaccination = $this->Vaccinations->patchEntity($vaccination, $this->request->data);
            if ($this->Vaccinations->save($vaccination)) {
                $this->Flash->success(__('The {0} has been saved.', 'Vaccination'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Vaccination'));
            }
        }
        $products = $this->Vaccinations->Products->find('list', ['limit' => 200]);
        $patients = $this->Vaccinations->Patients->find('list', ['limit' => 200]);
        $this->set(compact('vaccination', 'products', 'patients'));
        $this->set('_serialize', ['vaccination']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaccination id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaccination = $this->Vaccinations->get($id);
        if ($this->Vaccinations->delete($vaccination)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Vaccination'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Vaccination'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

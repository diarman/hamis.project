<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deliveries Controller
 *
 * @property \App\Model\Table\DeliveriesTable $Deliveries
 *
 * @method \App\Model\Entity\Delivery[] paginate($object = null, array $settings = [])
 */
class DeliveriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Providers']
        ];
        $deliveries = $this->paginate($this->Deliveries);

        $this->set(compact('deliveries'));
        $this->set('_serialize', ['deliveries']);
    }

    /**
     * View method
     *
     * @param string|null $id Delivery id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $delivery = $this->Deliveries->get($id, [
            'contain' => ['Providers', 'DeliveryProducts']
        ]);

        $this->set('delivery', $delivery);
        $this->set('_serialize', ['delivery']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $delivery = $this->Deliveries->newEntity();
        if ($this->request->is('post')) {
            $delivery = $this->Deliveries->patchEntity($delivery, $this->request->data);
            if ($this->Deliveries->save($delivery)) {
                $this->Flash->success(__('The {0} has been saved.', 'Delivery'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Delivery'));
            }
        }
        $providers = $this->Deliveries->Providers->find('list', ['limit' => 200]);
        $this->set(compact('delivery', 'providers'));
        $this->set('_serialize', ['delivery']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Delivery id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $delivery = $this->Deliveries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $delivery = $this->Deliveries->patchEntity($delivery, $this->request->data);
            if ($this->Deliveries->save($delivery)) {
                $this->Flash->success(__('The {0} has been saved.', 'Delivery'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Delivery'));
            }
        }
        $providers = $this->Deliveries->Providers->find('list', ['limit' => 200]);
        $this->set(compact('delivery', 'providers'));
        $this->set('_serialize', ['delivery']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Delivery id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $delivery = $this->Deliveries->get($id);
        if ($this->Deliveries->delete($delivery)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Delivery'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Delivery'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DeliveryProducts Controller
 *
 * @property \App\Model\Table\DeliveryProductsTable $DeliveryProducts
 *
 * @method \App\Model\Entity\DeliveryProduct[] paginate($object = null, array $settings = [])
 */
class DeliveryProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Deliveries', 'Products']
        ];
        $deliveryProducts = $this->paginate($this->DeliveryProducts);

        $this->set(compact('deliveryProducts'));
        $this->set('_serialize', ['deliveryProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Delivery Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deliveryProduct = $this->DeliveryProducts->get($id, [
            'contain' => ['Deliveries', 'Products']
        ]);

        $this->set('deliveryProduct', $deliveryProduct);
        $this->set('_serialize', ['deliveryProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deliveryProduct = $this->DeliveryProducts->newEntity();
        if ($this->request->is('post')) {
            $deliveryProduct = $this->DeliveryProducts->patchEntity($deliveryProduct, $this->request->data);
            if ($this->DeliveryProducts->save($deliveryProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Delivery Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Delivery Product'));
            }
        }
        $deliveries = $this->DeliveryProducts->Deliveries->find('list', ['limit' => 200]);
        $products = $this->DeliveryProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('deliveryProduct', 'deliveries', 'products'));
        $this->set('_serialize', ['deliveryProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Delivery Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deliveryProduct = $this->DeliveryProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deliveryProduct = $this->DeliveryProducts->patchEntity($deliveryProduct, $this->request->data);
            if ($this->DeliveryProducts->save($deliveryProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Delivery Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Delivery Product'));
            }
        }
        $deliveries = $this->DeliveryProducts->Deliveries->find('list', ['limit' => 200]);
        $products = $this->DeliveryProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('deliveryProduct', 'deliveries', 'products'));
        $this->set('_serialize', ['deliveryProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Delivery Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deliveryProduct = $this->DeliveryProducts->get($id);
        if ($this->DeliveryProducts->delete($deliveryProduct)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Delivery Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Delivery Product'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

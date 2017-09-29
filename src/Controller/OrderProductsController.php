<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderProducts Controller
 *
 * @property \App\Model\Table\OrderProductsTable $OrderProducts
 *
 * @method \App\Model\Entity\OrderProduct[] paginate($object = null, array $settings = [])
 */
class OrderProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Products']
        ];
        $orderProducts = $this->paginate($this->OrderProducts);

        $this->set(compact('orderProducts'));
        $this->set('_serialize', ['orderProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderProduct = $this->OrderProducts->get($id, [
            'contain' => ['Orders', 'Products']
        ]);

        $this->set('orderProduct', $orderProduct);
        $this->set('_serialize', ['orderProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderProduct = $this->OrderProducts->newEntity();
        if ($this->request->is('post')) {
            $orderProduct = $this->OrderProducts->patchEntity($orderProduct, $this->request->data);
            if ($this->OrderProducts->save($orderProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order Product'));
            }
        }
        $orders = $this->OrderProducts->Orders->find('list', ['limit' => 200]);
        $products = $this->OrderProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('orderProduct', 'orders', 'products'));
        $this->set('_serialize', ['orderProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderProduct = $this->OrderProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderProduct = $this->OrderProducts->patchEntity($orderProduct, $this->request->data);
            if ($this->OrderProducts->save($orderProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order Product'));
            }
        }
        $orders = $this->OrderProducts->Orders->find('list', ['limit' => 200]);
        $products = $this->OrderProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('orderProduct', 'orders', 'products'));
        $this->set('_serialize', ['orderProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderProduct = $this->OrderProducts->get($id);
        if ($this->OrderProducts->delete($orderProduct)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Order Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Order Product'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[] paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProductCategories']
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['ProductCategories', 'CareProducts', 'ConsultationProducts', 'DeliveryProducts', 'KitProducts', 'OrderProducts', 'ProductReceipts', 'Vaccinations']
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product'));
            }
        }
        $productCategories = $this->Products->ProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'productCategories'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product'));
            }
        }
        $productCategories = $this->Products->ProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'productCategories'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Product'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * médicaments method
     *
     * @return \Cake\Http\Response|void
     */
    public function pharmaceuticals()
    {
        
    }

    /**
     * vaccins method
     *
     * @return \Cake\Http\Response|void
     */
    public function vaccines()
    {

    }
}

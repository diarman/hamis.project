<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductReceipts Controller
 *
 * @property \App\Model\Table\ProductReceiptsTable $ProductReceipts
 *
 * @method \App\Model\Entity\ProductReceipt[] paginate($object = null, array $settings = [])
 */
class ProductReceiptsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Receipts']
        ];
        $productReceipts = $this->paginate($this->ProductReceipts);

        $this->set(compact('productReceipts'));
        $this->set('_serialize', ['productReceipts']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Receipt id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productReceipt = $this->ProductReceipts->get($id, [
            'contain' => ['Products', 'Receipts']
        ]);

        $this->set('productReceipt', $productReceipt);
        $this->set('_serialize', ['productReceipt']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productReceipt = $this->ProductReceipts->newEntity();
        if ($this->request->is('post')) {
            $productReceipt = $this->ProductReceipts->patchEntity($productReceipt, $this->request->data);
            if ($this->ProductReceipts->save($productReceipt)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product Receipt'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product Receipt'));
            }
        }
        $products = $this->ProductReceipts->Products->find('list', ['limit' => 200]);
        $receipts = $this->ProductReceipts->Receipts->find('list', ['limit' => 200]);
        $this->set(compact('productReceipt', 'products', 'receipts'));
        $this->set('_serialize', ['productReceipt']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Receipt id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productReceipt = $this->ProductReceipts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productReceipt = $this->ProductReceipts->patchEntity($productReceipt, $this->request->data);
            if ($this->ProductReceipts->save($productReceipt)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product Receipt'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product Receipt'));
            }
        }
        $products = $this->ProductReceipts->Products->find('list', ['limit' => 200]);
        $receipts = $this->ProductReceipts->Receipts->find('list', ['limit' => 200]);
        $this->set(compact('productReceipt', 'products', 'receipts'));
        $this->set('_serialize', ['productReceipt']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Receipt id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productReceipt = $this->ProductReceipts->get($id);
        if ($this->ProductReceipts->delete($productReceipt)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Product Receipt'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Product Receipt'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CareProducts Controller
 *
 * @property \App\Model\Table\CareProductsTable $CareProducts
 *
 * @method \App\Model\Entity\CareProduct[] paginate($object = null, array $settings = [])
 */
class CareProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Cares']
        ];
        $careProducts = $this->paginate($this->CareProducts);

        $this->set(compact('careProducts'));
        $this->set('_serialize', ['careProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Care Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $careProduct = $this->CareProducts->get($id, [
            'contain' => ['Products', 'Cares']
        ]);

        $this->set('careProduct', $careProduct);
        $this->set('_serialize', ['careProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $careProduct = $this->CareProducts->newEntity();
        if ($this->request->is('post')) {
            $careProduct = $this->CareProducts->patchEntity($careProduct, $this->request->data);
            if ($this->CareProducts->save($careProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Care Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Care Product'));
            }
        }
        $products = $this->CareProducts->Products->find('list', ['limit' => 200]);
        $cares = $this->CareProducts->Cares->find('list', ['limit' => 200]);
        $this->set(compact('careProduct', 'products', 'cares'));
        $this->set('_serialize', ['careProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Care Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $careProduct = $this->CareProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $careProduct = $this->CareProducts->patchEntity($careProduct, $this->request->data);
            if ($this->CareProducts->save($careProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Care Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Care Product'));
            }
        }
        $products = $this->CareProducts->Products->find('list', ['limit' => 200]);
        $cares = $this->CareProducts->Cares->find('list', ['limit' => 200]);
        $this->set(compact('careProduct', 'products', 'cares'));
        $this->set('_serialize', ['careProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Care Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $careProduct = $this->CareProducts->get($id);
        if ($this->CareProducts->delete($careProduct)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Care Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Care Product'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

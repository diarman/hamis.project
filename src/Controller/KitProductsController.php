<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * KitProducts Controller
 *
 * @property \App\Model\Table\KitProductsTable $KitProducts
 *
 * @method \App\Model\Entity\KitProduct[] paginate($object = null, array $settings = [])
 */
class KitProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Kits', 'Products']
        ];
        $kitProducts = $this->paginate($this->KitProducts);

        $this->set(compact('kitProducts'));
        $this->set('_serialize', ['kitProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Kit Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kitProduct = $this->KitProducts->get($id, [
            'contain' => ['Kits', 'Products']
        ]);

        $this->set('kitProduct', $kitProduct);
        $this->set('_serialize', ['kitProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kitProduct = $this->KitProducts->newEntity();
        if ($this->request->is('post')) {
            $kitProduct = $this->KitProducts->patchEntity($kitProduct, $this->request->data);
            if ($this->KitProducts->save($kitProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Kit Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Kit Product'));
            }
        }
        $kits = $this->KitProducts->Kits->find('list', ['limit' => 200]);
        $products = $this->KitProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('kitProduct', 'kits', 'products'));
        $this->set('_serialize', ['kitProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kit Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kitProduct = $this->KitProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kitProduct = $this->KitProducts->patchEntity($kitProduct, $this->request->data);
            if ($this->KitProducts->save($kitProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Kit Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Kit Product'));
            }
        }
        $kits = $this->KitProducts->Kits->find('list', ['limit' => 200]);
        $products = $this->KitProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('kitProduct', 'kits', 'products'));
        $this->set('_serialize', ['kitProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kit Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kitProduct = $this->KitProducts->get($id);
        if ($this->KitProducts->delete($kitProduct)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Kit Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Kit Product'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

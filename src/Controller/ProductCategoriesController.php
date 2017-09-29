<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductCategories Controller
 *
 * @property \App\Model\Table\ProductCategoriesTable $ProductCategories
 *
 * @method \App\Model\Entity\ProductCategory[] paginate($object = null, array $settings = [])
 */
class ProductCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $productCategories = $this->paginate($this->ProductCategories);

        $this->set(compact('productCategories'));
        $this->set('_serialize', ['productCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productCategory', $productCategory);
        $this->set('_serialize', ['productCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productCategory = $this->ProductCategories->newEntity();
        if ($this->request->is('post')) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->data);
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product Category'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product Category'));
            }
        }
        $this->set(compact('productCategory'));
        $this->set('_serialize', ['productCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productCategory = $this->ProductCategories->patchEntity($productCategory, $this->request->data);
            if ($this->ProductCategories->save($productCategory)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product Category'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product Category'));
            }
        }
        $this->set(compact('productCategory'));
        $this->set('_serialize', ['productCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productCategory = $this->ProductCategories->get($id);
        if ($this->ProductCategories->delete($productCategory)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Product Category'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Product Category'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

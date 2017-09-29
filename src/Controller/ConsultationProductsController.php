<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsultationProducts Controller
 *
 * @property \App\Model\Table\ConsultationProductsTable $ConsultationProducts
 *
 * @method \App\Model\Entity\ConsultationProduct[] paginate($object = null, array $settings = [])
 */
class ConsultationProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Consultations']
        ];
        $consultationProducts = $this->paginate($this->ConsultationProducts);

        $this->set(compact('consultationProducts'));
        $this->set('_serialize', ['consultationProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Consultation Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultationProduct = $this->ConsultationProducts->get($id, [
            'contain' => ['Products', 'Consultations']
        ]);

        $this->set('consultationProduct', $consultationProduct);
        $this->set('_serialize', ['consultationProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultationProduct = $this->ConsultationProducts->newEntity();
        if ($this->request->is('post')) {
            $consultationProduct = $this->ConsultationProducts->patchEntity($consultationProduct, $this->request->data);
            if ($this->ConsultationProducts->save($consultationProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Product'));
            }
        }
        $products = $this->ConsultationProducts->Products->find('list', ['limit' => 200]);
        $consultations = $this->ConsultationProducts->Consultations->find('list', ['limit' => 200]);
        $this->set(compact('consultationProduct', 'products', 'consultations'));
        $this->set('_serialize', ['consultationProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultation Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultationProduct = $this->ConsultationProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultationProduct = $this->ConsultationProducts->patchEntity($consultationProduct, $this->request->data);
            if ($this->ConsultationProducts->save($consultationProduct)) {
                $this->Flash->success(__('The {0} has been saved.', 'Consultation Product'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Consultation Product'));
            }
        }
        $products = $this->ConsultationProducts->Products->find('list', ['limit' => 200]);
        $consultations = $this->ConsultationProducts->Consultations->find('list', ['limit' => 200]);
        $this->set(compact('consultationProduct', 'products', 'consultations'));
        $this->set('_serialize', ['consultationProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultation Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultationProduct = $this->ConsultationProducts->get($id);
        if ($this->ConsultationProducts->delete($consultationProduct)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Consultation Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Consultation Product'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

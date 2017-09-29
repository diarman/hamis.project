<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kits Controller
 *
 * @property \App\Model\Table\KitsTable $Kits
 *
 * @method \App\Model\Entity\Kit[] paginate($object = null, array $settings = [])
 */
class KitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $kits = $this->paginate($this->Kits);

        $this->set(compact('kits'));
        $this->set('_serialize', ['kits']);
    }

    /**
     * View method
     *
     * @param string|null $id Kit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kit = $this->Kits->get($id, [
            'contain' => ['Dressings', 'KitProducts']
        ]);

        $this->set('kit', $kit);
        $this->set('_serialize', ['kit']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kit = $this->Kits->newEntity();
        if ($this->request->is('post')) {
            $kit = $this->Kits->patchEntity($kit, $this->request->data);
            if ($this->Kits->save($kit)) {
                $this->Flash->success(__('The {0} has been saved.', 'Kit'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Kit'));
            }
        }
        $this->set(compact('kit'));
        $this->set('_serialize', ['kit']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kit id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kit = $this->Kits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kit = $this->Kits->patchEntity($kit, $this->request->data);
            if ($this->Kits->save($kit)) {
                $this->Flash->success(__('The {0} has been saved.', 'Kit'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Kit'));
            }
        }
        $this->set(compact('kit'));
        $this->set('_serialize', ['kit']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kit id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kit = $this->Kits->get($id);
        if ($this->Kits->delete($kit)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Kit'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Kit'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

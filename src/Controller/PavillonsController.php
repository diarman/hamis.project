<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pavillons Controller
 *
 * @property \App\Model\Table\PavillonsTable $Pavillons
 *
 * @method \App\Model\Entity\Pavillon[] paginate($object = null, array $settings = [])
 */
class PavillonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pavillons = $this->paginate($this->Pavillons);

        $this->set(compact('pavillons'));
        $this->set('_serialize', ['pavillons']);
    }

    /**
     * View method
     *
     * @param string|null $id Pavillon id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pavillon = $this->Pavillons->get($id, [
            'contain' => ['Rooms']
        ]);

        $this->set('pavillon', $pavillon);
        $this->set('_serialize', ['pavillon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pavillon = $this->Pavillons->newEntity();
        if ($this->request->is('post')) {
            $pavillon = $this->Pavillons->patchEntity($pavillon, $this->request->data);
            if ($this->Pavillons->save($pavillon)) {
                $this->Flash->success(__('The {0} has been saved.', 'Pavillon'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Pavillon'));
            }
        }
        $this->set(compact('pavillon'));
        $this->set('_serialize', ['pavillon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pavillon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pavillon = $this->Pavillons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pavillon = $this->Pavillons->patchEntity($pavillon, $this->request->data);
            if ($this->Pavillons->save($pavillon)) {
                $this->Flash->success(__('The {0} has been saved.', 'Pavillon'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Pavillon'));
            }
        }
        $this->set(compact('pavillon'));
        $this->set('_serialize', ['pavillon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pavillon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pavillon = $this->Pavillons->get($id);
        if ($this->Pavillons->delete($pavillon)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Pavillon'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Pavillon'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

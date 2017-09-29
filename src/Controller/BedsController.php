<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Beds Controller
 *
 * @property \App\Model\Table\BedsTable $Beds
 *
 * @method \App\Model\Entity\Bed[] paginate($object = null, array $settings = [])
 */
class BedsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $beds = $this->paginate($this->Beds);

        $this->set(compact('beds'));
        $this->set('_serialize', ['beds']);
    }

    /**
     * View method
     *
     * @param string|null $id Bed id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bed = $this->Beds->get($id, [
            'contain' => ['BedRooms']
        ]);

        $this->set('bed', $bed);
        $this->set('_serialize', ['bed']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bed = $this->Beds->newEntity();
        if ($this->request->is('post')) {
            $bed = $this->Beds->patchEntity($bed, $this->request->data);
            if ($this->Beds->save($bed)) {
                $this->Flash->success(__('The {0} has been saved.', 'Bed'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Bed'));
            }
        }
        $this->set(compact('bed'));
        $this->set('_serialize', ['bed']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bed id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bed = $this->Beds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bed = $this->Beds->patchEntity($bed, $this->request->data);
            if ($this->Beds->save($bed)) {
                $this->Flash->success(__('The {0} has been saved.', 'Bed'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Bed'));
            }
        }
        $this->set(compact('bed'));
        $this->set('_serialize', ['bed']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bed id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bed = $this->Beds->get($id);
        if ($this->Beds->delete($bed)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Bed'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Bed'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

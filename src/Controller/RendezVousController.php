<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RendezVous Controller
 *
 * @property \App\Model\Table\RendezVousTable $RendezVous
 *
 * @method \App\Model\Entity\RendezVous[] paginate($object = null, array $settings = [])
 */
class RendezVousController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Users']
        ];
        $rendezVous = $this->paginate($this->RendezVous);

        $this->set(compact('rendezVous'));
        $this->set('_serialize', ['rendezVous']);
    }

    /**
     * View method
     *
     * @param string|null $id Rendez Vous id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rendezVous = $this->RendezVous->get($id, [
            'contain' => ['Patients', 'Users']
        ]);

        $this->set('rendezVous', $rendezVous);
        $this->set('_serialize', ['rendezVous']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rendezVous = $this->RendezVous->newEntity();
        if ($this->request->is('post')) {
            $rendezVous = $this->RendezVous->patchEntity($rendezVous, $this->request->data);
            if ($this->RendezVous->save($rendezVous)) {
                $this->Flash->success(__('The {0} has been saved.', 'Rendez Vous'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Rendez Vous'));
            }
        }
        $patients = $this->RendezVous->Patients->find('list', ['limit' => 200]);
        $users = $this->RendezVous->Users->find('list', ['limit' => 200]);
        $this->set(compact('rendezVous', 'patients', 'users'));
        $this->set('_serialize', ['rendezVous']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rendez Vous id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rendezVous = $this->RendezVous->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rendezVous = $this->RendezVous->patchEntity($rendezVous, $this->request->data);
            if ($this->RendezVous->save($rendezVous)) {
                $this->Flash->success(__('The {0} has been saved.', 'Rendez Vous'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Rendez Vous'));
            }
        }
        $patients = $this->RendezVous->Patients->find('list', ['limit' => 200]);
        $users = $this->RendezVous->Users->find('list', ['limit' => 200]);
        $this->set(compact('rendezVous', 'patients', 'users'));
        $this->set('_serialize', ['rendezVous']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rendez Vous id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rendezVous = $this->RendezVous->get($id);
        if ($this->RendezVous->delete($rendezVous)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Rendez Vous'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Rendez Vous'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

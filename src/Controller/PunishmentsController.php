<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Punishments Controller
 *
 * @property \App\Model\Table\PunishmentsTable $Punishments
 *
 * @method \App\Model\Entity\Punishment[] paginate($object = null, array $settings = [])
 */
class PunishmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs']
        ];
        $punishments = $this->paginate($this->Punishments);

        $this->set(compact('punishments'));
        $this->set('_serialize', ['punishments']);
    }

    /**
     * View method
     *
     * @param string|null $id Punishment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $punishment = $this->Punishments->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('punishment', $punishment);
        $this->set('_serialize', ['punishment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $punishment = $this->Punishments->newEntity();
        if ($this->request->is('post')) {
            $punishment = $this->Punishments->patchEntity($punishment, $this->request->data);
            if ($this->Punishments->save($punishment)) {
                $this->Flash->success(__('The {0} has been saved.', 'Punishment'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Punishment'));
            }
        }
        $staffs = $this->Punishments->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('punishment', 'staffs'));
        $this->set('_serialize', ['punishment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Punishment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $punishment = $this->Punishments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $punishment = $this->Punishments->patchEntity($punishment, $this->request->data);
            if ($this->Punishments->save($punishment)) {
                $this->Flash->success(__('The {0} has been saved.', 'Punishment'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Punishment'));
            }
        }
        $staffs = $this->Punishments->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('punishment', 'staffs'));
        $this->set('_serialize', ['punishment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Punishment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $punishment = $this->Punishments->get($id);
        if ($this->Punishments->delete($punishment)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Punishment'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Punishment'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

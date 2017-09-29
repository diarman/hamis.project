<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BedRooms Controller
 *
 * @property \App\Model\Table\BedRoomsTable $BedRooms
 *
 * @method \App\Model\Entity\BedRoom[] paginate($object = null, array $settings = [])
 */
class BedRoomsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms', 'Beds', 'Hospitalizations']
        ];
        $bedRooms = $this->paginate($this->BedRooms);

        $this->set(compact('bedRooms'));
        $this->set('_serialize', ['bedRooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Bed Room id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bedRoom = $this->BedRooms->get($id, [
            'contain' => ['Rooms', 'Beds', 'Hospitalizations']
        ]);

        $this->set('bedRoom', $bedRoom);
        $this->set('_serialize', ['bedRoom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bedRoom = $this->BedRooms->newEntity();
        if ($this->request->is('post')) {
            $bedRoom = $this->BedRooms->patchEntity($bedRoom, $this->request->data);
            if ($this->BedRooms->save($bedRoom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Bed Room'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Bed Room'));
            }
        }
        $rooms = $this->BedRooms->Rooms->find('list', ['limit' => 200]);
        $beds = $this->BedRooms->Beds->find('list', ['limit' => 200]);
        $hospitalizations = $this->BedRooms->Hospitalizations->find('list', ['limit' => 200]);
        $this->set(compact('bedRoom', 'rooms', 'beds', 'hospitalizations'));
        $this->set('_serialize', ['bedRoom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bed Room id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bedRoom = $this->BedRooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bedRoom = $this->BedRooms->patchEntity($bedRoom, $this->request->data);
            if ($this->BedRooms->save($bedRoom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Bed Room'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Bed Room'));
            }
        }
        $rooms = $this->BedRooms->Rooms->find('list', ['limit' => 200]);
        $beds = $this->BedRooms->Beds->find('list', ['limit' => 200]);
        $hospitalizations = $this->BedRooms->Hospitalizations->find('list', ['limit' => 200]);
        $this->set(compact('bedRoom', 'rooms', 'beds', 'hospitalizations'));
        $this->set('_serialize', ['bedRoom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bed Room id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bedRoom = $this->BedRooms->get($id);
        if ($this->BedRooms->delete($bedRoom)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Bed Room'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Bed Room'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

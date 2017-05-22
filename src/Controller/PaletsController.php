<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Palets Controller
 *
 * @property \App\Model\Table\PaletsTable $Palets
 *
 * @method \App\Model\Entity\Palet[] paginate($object = null, array $settings = [])
 */
class PaletsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Producto']
        ];
        $palets = $this->paginate($this->Palets);

        $this->set(compact('palets'));
        $this->set('_serialize', ['palets']);
    }

    /**
     * View method
     *
     * @param string|null $id Palet id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $palet = $this->Palets->get($id, [
            'contain' => ['Producto']
        ]);

        $this->set('palet', $palet);
        $this->set('_serialize', ['palet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $palet = $this->Palets->newEntity();
        if ($this->request->is('post')) {
            $palet = $this->Palets->patchEntity($palet, $this->request->getData());
            if ($this->Palets->save($palet)) {
                $this->Flash->success(__('The palet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The palet could not be saved. Please, try again.'));
        }
        $producto = $this->Palets->Producto->find('list', ['limit' => 200]);
        $this->set(compact('palet', 'producto'));
        $this->set('_serialize', ['palet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Palet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $palet = $this->Palets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $palet = $this->Palets->patchEntity($palet, $this->request->getData());
            if ($this->Palets->save($palet)) {
                $this->Flash->success(__('The palet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The palet could not be saved. Please, try again.'));
        }
        $producto = $this->Palets->Producto->find('list', ['limit' => 200]);
        $this->set(compact('palet', 'producto'));
        $this->set('_serialize', ['palet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Palet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $palet = $this->Palets->get($id);
        if ($this->Palets->delete($palet)) {
            $this->Flash->success(__('The palet has been deleted.'));
        } else {
            $this->Flash->error(__('The palet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

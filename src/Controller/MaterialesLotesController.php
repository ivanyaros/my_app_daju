<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaterialesLotes Controller
 *
 * @property \App\Model\Table\MaterialesLotesTable $MaterialesLotes
 *
 * @method \App\Model\Entity\MaterialesLote[] paginate($object = null, array $settings = [])
 */
class MaterialesLotesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materiales']
        ];
        $materialesLotes = $this->paginate($this->MaterialesLotes);

        $this->set(compact('materialesLotes'));
        $this->set('_serialize', ['materialesLotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Materiales Lote id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialesLote = $this->MaterialesLotes->get($id, [
            'contain' => ['Materiales']
        ]);

        $this->set('materialesLote', $materialesLote);
        $this->set('_serialize', ['materialesLote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialesLote = $this->MaterialesLotes->newEntity();
        if ($this->request->is('post')) {
            $materialesLote = $this->MaterialesLotes->patchEntity($materialesLote, $this->request->getData());
            if ($this->MaterialesLotes->save($materialesLote)) {
                $this->Flash->success(__('The materiales lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiales lote could not be saved. Please, try again.'));
        }
        $materiales = $this->MaterialesLotes->Materiales->find('list', ['limit' => 200]);
        $this->set(compact('materialesLote', 'materiales'));
        $this->set('_serialize', ['materialesLote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materiales Lote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialesLote = $this->MaterialesLotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialesLote = $this->MaterialesLotes->patchEntity($materialesLote, $this->request->getData());
            if ($this->MaterialesLotes->save($materialesLote)) {
                $this->Flash->success(__('The materiales lote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiales lote could not be saved. Please, try again.'));
        }
        $materiales = $this->MaterialesLotes->Materiales->find('list', ['limit' => 200]);
        $this->set(compact('materialesLote', 'materiales'));
        $this->set('_serialize', ['materialesLote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materiales Lote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialesLote = $this->MaterialesLotes->get($id);
        if ($this->MaterialesLotes->delete($materialesLote)) {
            $this->Flash->success(__('The materiales lote has been deleted.'));
        } else {
            $this->Flash->error(__('The materiales lote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

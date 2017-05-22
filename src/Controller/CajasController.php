<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cajas Controller
 *
 * @property \App\Model\Table\CajasTable $Cajas
 *
 * @method \App\Model\Entity\Caja[] paginate($object = null, array $settings = [])
 */
class CajasController extends AppController
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
        $cajas = $this->paginate($this->Cajas);

        $this->set(compact('cajas'));
        $this->set('_serialize', ['cajas']);
    }

    /**
     * View method
     *
     * @param string|null $id Caja id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caja = $this->Cajas->get($id, [
            'contain' => ['Producto']
        ]);

        $this->set('caja', $caja);
        $this->set('_serialize', ['caja']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caja = $this->Cajas->newEntity();
        if ($this->request->is('post')) {
            $caja = $this->Cajas->patchEntity($caja, $this->request->getData());
            if ($this->Cajas->save($caja)) {
                $this->Flash->success(__('The caja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caja could not be saved. Please, try again.'));
        }
        $producto = $this->Cajas->Producto->find('list', ['limit' => 200]);
        $this->set(compact('caja', 'producto'));
        $this->set('_serialize', ['caja']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Caja id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caja = $this->Cajas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caja = $this->Cajas->patchEntity($caja, $this->request->getData());
            if ($this->Cajas->save($caja)) {
                $this->Flash->success(__('The caja has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caja could not be saved. Please, try again.'));
        }
        $producto = $this->Cajas->Producto->find('list', ['limit' => 200]);
        $this->set(compact('caja', 'producto'));
        $this->set('_serialize', ['caja']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Caja id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caja = $this->Cajas->get($id);
        if ($this->Cajas->delete($caja)) {
            $this->Flash->success(__('The caja has been deleted.'));
        } else {
            $this->Flash->error(__('The caja could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

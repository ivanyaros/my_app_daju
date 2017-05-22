<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalidasProductosProducto Controller
 *
 * @property \App\Model\Table\SalidasProductosProductoTable $SalidasProductosProducto
 *
 * @method \App\Model\Entity\SalidasProductosProducto[] paginate($object = null, array $settings = [])
 */
class SalidasProductosProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SalidasProductos', 'Productos', 'Producto']
        ];
        $salidasProductosProducto = $this->paginate($this->SalidasProductosProducto);

        $this->set(compact('salidasProductosProducto'));
        $this->set('_serialize', ['salidasProductosProducto']);
    }

    /**
     * View method
     *
     * @param string|null $id Salidas Productos Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salidasProductosProducto = $this->SalidasProductosProducto->get($id, [
            'contain' => ['SalidasProductos', 'Productos', 'Producto']
        ]);

        $this->set('salidasProductosProducto', $salidasProductosProducto);
        $this->set('_serialize', ['salidasProductosProducto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salidasProductosProducto = $this->SalidasProductosProducto->newEntity();
        if ($this->request->is('post')) {
            $salidasProductosProducto = $this->SalidasProductosProducto->patchEntity($salidasProductosProducto, $this->request->getData());
            if ($this->SalidasProductosProducto->save($salidasProductosProducto)) {
                $this->Flash->success(__('The salidas productos producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salidas productos producto could not be saved. Please, try again.'));
        }
        $salidasProductos = $this->SalidasProductosProducto->SalidasProductos->find('list', ['limit' => 200]);
        $productos = $this->SalidasProductosProducto->Productos->find('list', ['limit' => 200]);
        $producto = $this->SalidasProductosProducto->Producto->find('list', ['limit' => 200]);
        $this->set(compact('salidasProductosProducto', 'salidasProductos', 'productos', 'producto'));
        $this->set('_serialize', ['salidasProductosProducto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Salidas Productos Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salidasProductosProducto = $this->SalidasProductosProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salidasProductosProducto = $this->SalidasProductosProducto->patchEntity($salidasProductosProducto, $this->request->getData());
            if ($this->SalidasProductosProducto->save($salidasProductosProducto)) {
                $this->Flash->success(__('The salidas productos producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salidas productos producto could not be saved. Please, try again.'));
        }
        $salidasProductos = $this->SalidasProductosProducto->SalidasProductos->find('list', ['limit' => 200]);
        $productos = $this->SalidasProductosProducto->Productos->find('list', ['limit' => 200]);
        $producto = $this->SalidasProductosProducto->Producto->find('list', ['limit' => 200]);
        $this->set(compact('salidasProductosProducto', 'salidasProductos', 'productos', 'producto'));
        $this->set('_serialize', ['salidasProductosProducto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Salidas Productos Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salidasProductosProducto = $this->SalidasProductosProducto->get($id);
        if ($this->SalidasProductosProducto->delete($salidasProductosProducto)) {
            $this->Flash->success(__('The salidas productos producto has been deleted.'));
        } else {
            $this->Flash->error(__('The salidas productos producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

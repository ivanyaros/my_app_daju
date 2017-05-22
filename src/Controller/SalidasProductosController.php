<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalidasProductos Controller
 *
 * @property \App\Model\Table\SalidasProductosTable $SalidasProductos
 *
 * @method \App\Model\Entity\SalidasProducto[] paginate($object = null, array $settings = [])
 */
class SalidasProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros']
        ];
        $salidasProductos = $this->paginate($this->SalidasProductos);

        $this->set(compact('salidasProductos'));
        $this->set('_serialize', ['salidasProductos']);
    }

    /**
     * View method
     *
     * @param string|null $id Salidas Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salidasProducto = $this->SalidasProductos->get($id, [
            'contain' => ['ProveedoresClientes', 'PedidosEmpresas', 'Centros', 'Producto']
        ]);

        $this->set('salidasProducto', $salidasProducto);
        $this->set('_serialize', ['salidasProducto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salidasProducto = $this->SalidasProductos->newEntity();
        if ($this->request->is('post')) {
            $salidasProducto = $this->SalidasProductos->patchEntity($salidasProducto, $this->request->getData());
            if ($this->SalidasProductos->save($salidasProducto)) {
                $this->Flash->success(__('The salidas producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salidas producto could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->SalidasProductos->ProveedoresClientes->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->SalidasProductos->PedidosEmpresas->find('list', ['limit' => 200]);
        $centros = $this->SalidasProductos->Centros->find('list', ['limit' => 200]);
        $producto = $this->SalidasProductos->Producto->find('list', ['limit' => 200]);
        $this->set(compact('salidasProducto', 'proveedoresClientes', 'pedidosEmpresas', 'centros', 'producto'));
        $this->set('_serialize', ['salidasProducto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Salidas Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salidasProducto = $this->SalidasProductos->get($id, [
            'contain' => ['Producto']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salidasProducto = $this->SalidasProductos->patchEntity($salidasProducto, $this->request->getData());
            if ($this->SalidasProductos->save($salidasProducto)) {
                $this->Flash->success(__('The salidas producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salidas producto could not be saved. Please, try again.'));
        }
        $proveedoresClientes = $this->SalidasProductos->ProveedoresClientes->find('list', ['limit' => 200]);
        $pedidosEmpresas = $this->SalidasProductos->PedidosEmpresas->find('list', ['limit' => 200]);
        $centros = $this->SalidasProductos->Centros->find('list', ['limit' => 200]);
        $producto = $this->SalidasProductos->Producto->find('list', ['limit' => 200]);
        $this->set(compact('salidasProducto', 'proveedoresClientes', 'pedidosEmpresas', 'centros', 'producto'));
        $this->set('_serialize', ['salidasProducto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Salidas Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salidasProducto = $this->SalidasProductos->get($id);
        if ($this->SalidasProductos->delete($salidasProducto)) {
            $this->Flash->success(__('The salidas producto has been deleted.'));
        } else {
            $this->Flash->error(__('The salidas producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

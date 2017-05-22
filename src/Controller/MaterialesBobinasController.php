<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaterialesBobinas Controller
 *
 * @property \App\Model\Table\MaterialesBobinasTable $MaterialesBobinas
 *
 * @method \App\Model\Entity\MaterialesBobina[] paginate($object = null, array $settings = [])
 */
class MaterialesBobinasController extends AppController
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
        $materialesBobinas = $this->paginate($this->MaterialesBobinas);

        $this->set(compact('materialesBobinas'));
        $this->set('_serialize', ['materialesBobinas']);
    }

    /**
     * View method
     *
     * @param string|null $id Materiales Bobina id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialesBobina = $this->MaterialesBobinas->get($id, [
            'contain' => ['Materiales']
        ]);

        $this->set('materialesBobina', $materialesBobina);
        $this->set('_serialize', ['materialesBobina']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialesBobina = $this->MaterialesBobinas->newEntity();
        if ($this->request->is('post')) {
            $materialesBobina = $this->MaterialesBobinas->patchEntity($materialesBobina, $this->request->getData());
            if ($this->MaterialesBobinas->save($materialesBobina)) {
                $this->Flash->success(__('The materiales bobina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiales bobina could not be saved. Please, try again.'));
        }
        $materiales = $this->MaterialesBobinas->Materiales->find('list', ['limit' => 200]);
        $this->set(compact('materialesBobina', 'materiales'));
        $this->set('_serialize', ['materialesBobina']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Materiales Bobina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialesBobina = $this->MaterialesBobinas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialesBobina = $this->MaterialesBobinas->patchEntity($materialesBobina, $this->request->getData());
            if ($this->MaterialesBobinas->save($materialesBobina)) {
                $this->Flash->success(__('The materiales bobina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materiales bobina could not be saved. Please, try again.'));
        }
        $materiales = $this->MaterialesBobinas->Materiales->find('list', ['limit' => 200]);
        $this->set(compact('materialesBobina', 'materiales'));
        $this->set('_serialize', ['materialesBobina']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Materiales Bobina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialesBobina = $this->MaterialesBobinas->get($id);
        if ($this->MaterialesBobinas->delete($materialesBobina)) {
            $this->Flash->success(__('The materiales bobina has been deleted.'));
        } else {
            $this->Flash->error(__('The materiales bobina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

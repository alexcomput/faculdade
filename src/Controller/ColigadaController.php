<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coligada Controller
 *
 * @property \App\Model\Table\ColigadaTable $Coligada
 */
class ColigadaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $coligada = $this->paginate($this->Coligada);

        $this->set(compact('coligada'));
        $this->set('_serialize', ['coligada']);
    }

    /**
     * View method
     *
     * @param string|null $id Coligada id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coligada = $this->Coligada->get($id, [
            'contain' => []
        ]);

        $this->set('coligada', $coligada);
        $this->set('_serialize', ['coligada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coligada = $this->Coligada->newEntity();
        if ($this->request->is('post')) {
            $coligada = $this->Coligada->patchEntity($coligada, $this->request->data);
            if ($this->Coligada->save($coligada)) {
                $this->Flash->success(__('The coligada has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The coligada could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coligada'));
        $this->set('_serialize', ['coligada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Coligada id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coligada = $this->Coligada->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coligada = $this->Coligada->patchEntity($coligada, $this->request->data);
            if ($this->Coligada->save($coligada)) {
                $this->Flash->success(__('The coligada has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The coligada could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('coligada'));
        $this->set('_serialize', ['coligada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Coligada id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coligada = $this->Coligada->get($id);
        if ($this->Coligada->delete($coligada)) {
            $this->Flash->success(__('The coligada has been deleted.'));
        } else {
            $this->Flash->error(__('The coligada could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

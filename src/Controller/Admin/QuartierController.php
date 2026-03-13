<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Quartier Controller
 *
 * @property \App\Model\Table\QuartierTable $Quartier
 */
class QuartierController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Quartier->find();
        $quartier = $this->paginate($query);

        $this->set(compact('quartier'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id Quartier id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quartier = $this->Quartier->get($id, contain: []);
        $this->set(compact('quartier'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quartier = $this->Quartier->newEmptyEntity();
        if ($this->request->is('post')) {
            $quartier = $this->Quartier->patchEntity($quartier, $this->request->getData());
            if ($this->Quartier->save($quartier)) {
                $this->Flash->success(__('The quartier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quartier could not be saved. Please, try again.'));
        }
        $this->set(compact('quartier'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quartier id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quartier = $this->Quartier->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quartier = $this->Quartier->patchEntity($quartier, $this->request->getData());
            if ($this->Quartier->save($quartier)) {
                $this->Flash->success(__('The quartier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quartier could not be saved. Please, try again.'));
        }
        $this->set(compact('quartier'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quartier id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quartier = $this->Quartier->get($id);
        if ($this->Quartier->delete($quartier)) {
            $this->Flash->success(__('The quartier has been deleted.'));
        } else {
            $this->Flash->error(__('The quartier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

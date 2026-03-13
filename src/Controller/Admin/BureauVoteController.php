<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BureauVote Controller
 *
 * @property \App\Model\Table\BureauVoteTable $BureauVote
 */
class BureauVoteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->BureauVote->find();
        $bureauVote = $this->paginate($query);

        $this->set(compact('bureauVote'));
    }

    /**
     * View method
     *
     * @param string|null $id Bureau Vote id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bureauVote = $this->BureauVote->get($id, contain: []);
        $this->set(compact('bureauVote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bureauVote = $this->BureauVote->newEmptyEntity();
        if ($this->request->is('post')) {
            $bureauVote = $this->BureauVote->patchEntity($bureauVote, $this->request->getData());
            if ($this->BureauVote->save($bureauVote)) {
                $this->Flash->success(__('The bureau vote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bureau vote could not be saved. Please, try again.'));
        }
        $this->set(compact('bureauVote'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bureau Vote id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bureauVote = $this->BureauVote->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bureauVote = $this->BureauVote->patchEntity($bureauVote, $this->request->getData());
            if ($this->BureauVote->save($bureauVote)) {
                $this->Flash->success(__('The bureau vote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bureau vote could not be saved. Please, try again.'));
        }
        $this->set(compact('bureauVote'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bureau Vote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bureauVote = $this->BureauVote->get($id);
        if ($this->BureauVote->delete($bureauVote)) {
            $this->Flash->success(__('The bureau vote has been deleted.'));
        } else {
            $this->Flash->error(__('The bureau vote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

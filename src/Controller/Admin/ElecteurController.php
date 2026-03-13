<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Electeur Controller
 *
 * @property \App\Model\Table\ElecteurTable $Electeur
 */
class ElecteurController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Electeur->find();
        $electeur = $this->paginate($query);

        $this->set(compact('electeur'));
    }

    /**
     * View method
     *
     * @param string|null $id Electeur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $electeur = $this->Electeur->get($id, contain: []);
        $this->set(compact('electeur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $electeur = $this->Electeur->newEmptyEntity();
        if ($this->request->is('post')) {
            $electeur = $this->Electeur->patchEntity($electeur, $this->request->getData());
            if ($this->Electeur->save($electeur)) {
                $this->Flash->success(__('The electeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The electeur could not be saved. Please, try again.'));
        }
        $this->set(compact('electeur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Electeur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $electeur = $this->Electeur->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $electeur = $this->Electeur->patchEntity($electeur, $this->request->getData());
            if ($this->Electeur->save($electeur)) {
                $this->Flash->success(__('The electeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The electeur could not be saved. Please, try again.'));
        }
        $this->set(compact('electeur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Electeur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $electeur = $this->Electeur->get($id);
        if ($this->Electeur->delete($electeur)) {
            $this->Flash->success(__('The electeur has been deleted.'));
        } else {
            $this->Flash->error(__('The electeur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function apiList()
    {
        // On récupère les électeurs avec leurs bureaux
        $electeurs = $this->Electeur->find()
            ->contain(['BureauVote'])
            ->all();

        // On définit les variables à passer à la vue
        $this->set(compact('electeurs'));

        // On demande à CakePHP de sérialiser la variable 'electeurs' en JSON
        $this->viewBuilder()
            ->setClassName('Json')
            ->setOption('serialize', 'electeurs');
    }
}

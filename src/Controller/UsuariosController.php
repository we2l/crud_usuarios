<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\UsuarioForm;
use Cake\ORM\TableRegistry;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 *
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('layout');
        $usuarioForm = new UsuarioForm();
        $this->set('usuarioForm', $usuarioForm);

    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);

        $this->set('usuario', $usuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('layout');
        $usuarioForm = new UsuarioForm();
        
        $data = $this->request->getData();
        
        if($this->request->is('post')) {
            if($usuarioForm->execute($data)) {
                
                $tableUsuarios = TableRegistry::get('Usuarios');
                
                $usuarios = $tableUsuarios->newEntity();
                $usuarios->nome = $data['nome'];
                $usuarios->cpf = $data['cpf'];
                $usuarios->email = $data['email'];
                $usuarios->data_nascimento = $data['data_nascimento']['year'].'-'.$data['data_nascimento']['month'].'-'.$data['data_nascimento']['day'];
                $usuarios->telefone = $data['telefone'];
                
                $save = $tableUsuarios->save($usuarios);
                
                if($save) {
                    $this->Flash->success('Enviado com sucesso', [
                        'key' => 'success'
                    ]);
                }
                
            } else {
                $this->Flash->error('Ocorreu um erro ao enviar o formulário', [
                    'key' => 'error'
                ]);
            }
        }

        $this->set('usuarioForm', $usuarioForm);

        // $usuario = $this->Usuarios->newEntity();
        // if ($this->request->is('post')) {
        //     $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
        //     if ($this->Usuarios->save($usuario)) {
        //         $this->Flash->success(__('The usuario has been saved.'));
                
        //         return $this->redirect(['controller' => 'Home', 'action' => 'index']);
        //     }
        //     $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        // }
        // $this->set(compact('usuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {   

        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('usuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

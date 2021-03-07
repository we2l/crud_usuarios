<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\UsuarioForm;
use Cake\I18n\Date;
use Cake\I18n\Time;
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

        $tableUsuarios = TableRegistry::get('Usuarios');
        $usuarios = $tableUsuarios->find('all')->toArray();

        $this->set('usuarios', $usuarios);

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
        
        $this->autoRender = false;
        $tableUsuarios = TableRegistry::get('Usuarios');
        $usuarios = $tableUsuarios->find('all')->contain('Enderecos')->where(['idusuario' => $id])->toArray();
        $result = [];
        if($usuarios) {
            $result['status'] = 'ok';
            $result['result'] = $usuarios;
            
            return $this->response->withType('application/json')->withStringBody(json_encode($result,JSON_PRETTY_PRINT));
        } else {
            $result['status'] = 'error';
            $result['result'] = '';
            return $this->response->withType('application/json')->withStringBody(json_encode($result,JSON_PRETTY_PRINT));
        }
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
                $usuarios->data_nascimento = $data['data_nascimento'];
                $usuarios->telefone = $data['telefone'];
                
                $usuarios->data_nascimento = $data['data_nascimento'];

                $saveUsuario = $tableUsuarios->save($usuarios);

                $tableEnderecos = TableRegistry::get('Enderecos');
                $enderecos = $tableEnderecos->newEntity();
                $enderecos->cidade = $data['cidade'];
                $enderecos->estado = $data['estado'];
                $enderecos->id_usuario = $saveUsuario['idusuario'];
                $enderecos->bairro = $data['bairro'];
                $enderecos->numero = $data['numero'];

                $saveEndereco = $tableEnderecos->save($enderecos);

                if($saveUsuario && $saveEndereco) {
                    $this->Flash->success('Enviado com sucesso', [
                        'key' => 'success'
                    ]);
                } else {
                    $this->Flash->error('Ocorreu um erro ao enviar o formulário', [
                        'key' => 'error'
                    ]);
                }
                
            } else {
                $this->Flash->error('Ocorreu um erro ao enviar o formulário', [
                    'key' => 'error'
                ]);
            }
        }

        $this->set('usuarioForm', $usuarioForm);

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

        $this->viewBuilder()->setLayout('layout');

        $usuarioForm = new UsuarioForm();
        $requestUsuario = $this->request->getData();

        $tableUsuarios = TableRegistry::getTableLocator()->get('Usuarios');
        $usuarioEndereco = $tableUsuarios->get($id, ['contain' => ['Enderecos']]);
        
        if($this->request->is(['post', 'put', 'patch'])) {
            if($usuarioForm->execute($requestUsuario)) {

                $data = [
                    'idusuario' => $id,
                    'nome' => $requestUsuario['nome'],
                    'cpf' => $requestUsuario['cpf'],
                    'email' => $requestUsuario['email'],
                    'data_nascimento' => $requestUsuario['data_nascimento'],
                    'telefone' => $requestUsuario['telefone'],
                    'endereco' => [
                        'cidade' => $requestUsuario['cidade'],
                        'estado' => $requestUsuario['estado'],
                        'id_usuario' => $id,
                        'bairro' => $requestUsuario['bairro'],
                        'numero' => $requestUsuario['numero'],
                    ]
                ];
        
                
                $usuarioEnderecoSave = $tableUsuarios->patchEntity($usuarioEndereco, $data, [
                    'associated' => ['Enderecos']
                ]);

                $save = $this->Usuarios->save($usuarioEnderecoSave);
                
                if($save) {
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error('Ocorreu um erro ao editar o usuário! verifique se todos os campos estão preenchidos', [
                        'key' => 'error'
                    ]);
                }
            }
            
        }
        $this->set('usuario', $usuarioEndereco);
        $this->set('usuarioForm', $usuarioForm);

        // $updateUsuario = $tableUsuarios->newEntity($data, [
        //     'associated' => ['Enderecos']
        // ]);
        // $tableUsuarios->save($updateUsuario);
        
        // $usuarioEndereco->cidade = $requestUsuario['cidade'];

        //     'associated' => ['Enderecos']
        // ]);
        
            // debug($usuarioEndereco['endereco']['cidade']);
        
        // // $usuario = $tableUsuarios->find('all')->contain('Enderecos')->where(['idusuario' => $id])->toArray();

        // $tableEnderecos = TableRegistry::getTableLocator('Enderecos')->get('Usuarios');
        // // $updateUsuario = $t;
        // // debug($data);
        // // $endereco = $tableEnderecos->find('all')->where(['id_usuario' => $usuario[0]['idusuario'] ])->toArray();


        // $this->set('updateUsuario', $updateUsuario);
        // $usuario = $this->Usuarios->get($id, [
        //     'contain' => []
        // ]);
        // if ($this->request->is(['patch', 'post', 'put'])) {
        //     $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
        //     if ($this->Usuarios->save($usuario)) {
        //         $this->Flash->success(__('The usuario has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        // }
        
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
        $this->autoRender = false;
        // $this->request->allowMethod(['post']);
        // $usuario = $this->Usuarios->get($id);
        // if ($this->Usuarios->delete($usuario)) {
        //     $this->Flash->success(__('The usuario has been deleted.'));
        // } else {
        //     $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        // }

        // return $this->redirect(['action' => 'index']);
        echo $id;
    }
}

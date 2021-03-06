<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HomeController Controller
 *
 *
 * @method \App\Model\Entity\HomeController[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('homelayout');

        $this->render('home');
    }

    
}

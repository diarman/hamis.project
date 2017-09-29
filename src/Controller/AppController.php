<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * journalisation method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function journalisation($user, $name, $target)
    {
        $ip_adres= $_SERVER['REMOTE_ADDR'];

        if (!empty($user)||!empty($name)||!empty($target)) 
        {
            $operation = $this->Operations->newEntity();
            $operation->user_id = $user;
            $operation->ip_adres = $ip_adres;
            $operation->name = $name;
            $operation->target = $target;
            $operation->created = date('Y-m-d H:i:s');
            $this->Operations->save($operation);
        }
    }
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', 
        [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'logoutRedirect'=>[
                'controller'=>'Users',
                'action'=>'login'
            ],
            'authError' => 'Vous croyez vraiment que vous pouvez faire cela?',
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'login', 'password' => 'password']
                ]
            ],
            'storage' => 'Session'
        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        $this->viewBuilder()->theme('AdminLTE');
         $this->viewBuilder()->className('AdminLTE.AdminLTE'); 

        $this->set('auth', $this->request->session()->read('Auth'));  
    }
}

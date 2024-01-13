<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function Auth()
    {
        if($this->request->getVar()){
            $session = session();
            $model = new AuthModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $data = $model->Auth($username);
            if(!is_null($data)){
                $pass = $data->password;
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $session_data = [
                        'user' => $data,
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($session_data);
                    //$userActivityModel = new UserActivity();
                    //$agent = getDeviceInfo();
                    /* $userActivityModel->insert([
                        'user_id'=>$data->user_id,
                        'institute_id'=>$data->institute_id,
                        'ip'=>$agent['ip_address'],
                        'login'=>getCurrentDate(),
                        'agent'=>json_encode($agent)
                    ]); */
                    /* $this->generateFlash([
                        'type'=>'success',
                        'title'=>'Success',
                        'message'=>'Welcome to dashboard',
                    ]); */
                    return redirect()->to('dashboard');
                }else{
                    $this->generateFlash([
                        'type'=>'error',
                        'title'=>'Error',
                        'message'=>'Password is incorrect.',
                    ]);
                    return redirect()->to('/');
                }
            }else{
                /* $this->generateFlash([
                    'type'=>'error',
                    'title'=>'Error',
                    'message'=>'Email does not exist.',
                ]); */
                return redirect()->to('/');
            }
        }
        return view('auth/login');
    }
}

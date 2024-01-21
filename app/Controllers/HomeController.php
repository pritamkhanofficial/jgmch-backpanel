<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;


class HomeController extends BaseController
{
    public function Slider(){
        $crud = new GroceryCrud();
        $crud->displayAs('name','State Name');
        $crud->displayAs('is_active','Status');
        // $crud->where("state.institute_id =".getCurrentUserData()->institute_id);
        $crud->columns(['name', 'is_active']);
        $crud->fields(['name', 'is_active','created_by','institute_id']);
        $crud->fieldType('is_active', 'dropdown', [
            '0' => 'InActive',
            '1' => 'Active'
        ]);
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        /* $crud->callbackAfterInsert(function ($stateParameters) {
            return $this->saveLogData('add','state',$stateParameters->data);
        }); */
        $crud->unsetDelete();
        $crud->unsetAdd();
        $crud->unsetPrint();
        $crud->unsetExport();
        /* $crud->callbackBeforeUpdate(function ($stateParameters) {
            return $this->saveLogData('edit','state',$stateParameters->data);
        }); */
        $crud->setTable('sliders');
        $crud->setSubject('Slider');
        $output = $crud->render();
        return view('common', (array)$output);
    }
}

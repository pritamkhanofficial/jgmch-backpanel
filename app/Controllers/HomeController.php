<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;
use App\Models\WebsiteModel;


class HomeController extends BaseController
{
    function showFile($value)
    {
        $type = pathinfo($value)['extension'];
        if($type == 'pdf' or $type == 'xls' or $type == 'xlsx' or $type == 'doc' or $type == 'docx' or $type == 'txt'){
            $path = '<a target="_new" href="'.base_url() . 'uploads/' . $value.'">Download / View</a>';
        }elseif($type == 'png' or $type == 'jpg' or $type == 'jpeg' or $type == 'bmp' or $type == 'webp' or $type == 'gif'){
            $path = '<img src=' . base_url() . 'uploads/' . $value . ' height="60">'; 
        }
        
         return $path;
    }
    public function Slider(){
        $crud = new GroceryCrud();
        $crud->displayAs('image','Slider');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['image', 'is_active']);
        $crud->fields(['image', 'is_active','created_by']);
        // $crud->setFieldUpload(['image', 'is_active','created_by']);
        $crud->callbackColumn('image', array($this, 'showFile'));
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        /* $crud->callbackAfterInsert(function ($stateParameters) {
            return $this->saveLogData('add','state',$stateParameters->data);
        }); */

        $crud->callbackAddField(
            'image',
            function () {
                return  '<input id="field-image" type="file" class="form-control w-100 " name="image" value="">';
            }
        );

        $crud->callbackEditField(
            'image',
            function ($data) {
                $path = base_url() . 'uploads/' . $data;
 
                $html = '<img src="' . $path . '" width=100>';
                $html .= '<input id="field-image" type="file" class="form-control" name="image" value="">';
 
                $html .= '<input id="field-image" type="hidden" class="form-control" name="image_hidden" value="' . $data . '">';
                return $html;
            }
        );

        $crud->callbackBeforeUpdate(
            function ($cbData) {
                $toUpload = $this->request->getFile('image');
 
                $ach_img_var = $this->request->getVar('image_hidden');
 
                if (isset($toUpload)) {
                    $image = UploadFile($toUpload, null, $ach_img_var);
                    $cbData->data['image'] = $image;
                } else {
                    $cbData->data['image'] = $ach_img_var;
                }
 
                return $cbData;
            }
        );

        $crud->callbackBeforeInsert(
            function ($cbData) {
                $toUpload = $this->request->getFile('image');
                if (isset($toUpload)) {
                    $image = UploadFile($toUpload);
                    $cbData->data['image'] = $image;
 
                    return $cbData;
                }
            }
        );


        $crud->unsetDelete();
        // $crud->unsetAdd();
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
    public function Documents(){
        $crud = new GroceryCrud();
        $crud->displayAs('file','Document File');
        $crud->displayAs('doc_type','Document Type');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title','file', 'doc_type', 'is_active']);
        $crud->fields(['title','file', 'doc_type', 'is_active','created_by']);
        // $crud->setFieldUpload(['file', 'is_active','created_by']);
        $crud->callbackColumn('file', array($this, 'showFile'));
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        /* $crud->callbackAfterInsert(function ($stateParameters) {
            return $this->saveLogData('add','state',$stateParameters->data);
        }); */

        $crud->callbackAddField(
            'file',
            function () {
                return  '<input id="field-file" type="file" class="form-control w-100 " name="file" value="">';
            }
        );

        $crud->callbackEditField(
            'file',
            function ($data) {
                $path = base_url() . 'uploads/' . $data;
 
                $html = '<img src="' . $path . '" width=100>';
                $html .= '<input id="field-file" type="file" class="form-control" name="file" value="">';
 
                $html .= '<input id="field-file" type="hidden" class="form-control" name="file_hidden" value="' . $data . '">';
                return $html;
            }
        );

        $crud->callbackBeforeInsert(
            function ($cbData) {
                $toUpload = $this->request->getFile('file');
                if (isset($toUpload)) {
                    // echo "<pre>"; print_r($toUpload); die;
                    $file = UploadFile($toUpload);
                    $cbData->data['file'] = $file;
 
                    return $cbData;
                }
            }
        );

        $crud->callbackBeforeUpdate(
            function ($cbData) {
                $toUpload = $this->request->getFile('file');
 
                $ach_img_var = $this->request->getVar('file_hidden');
 
                if (isset($toUpload)) {
                    $file = UploadFile($toUpload, null, $ach_img_var);
                    $cbData->data['file'] = $file;
                } else {
                    $cbData->data['file'] = $ach_img_var;
                }
 
                return $cbData;
            }
        );

        


        $crud->unsetDelete();
        // $crud->unsetAdd();
        $crud->unsetPrint();
        $crud->unsetExport();
        /* $crud->callbackBeforeUpdate(function ($stateParameters) {
            return $this->saveLogData('edit','state',$stateParameters->data);
        }); */
        $crud->setTable('documents');
        $crud->setSubject('Document');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function aboutHospital(){
        
        $webModel = new WebsiteModel();
        $crud = new GroceryCrud();
        $crud->displayAs('history_and_heritage','History and Heritage');
        $crud->displayAs('description','About');
        $crud->displayAs('is_active','Status');
        // $crud->where("deleted_at", NULL);
        $crud->columns(['affiliated_to','vice_chancellor', 'registrar', 'year_of_affiliation']);
        $crud->fields(['affiliated_to','vice_chancellor', 'registrar', 'year_of_affiliation','description', 'history_and_heritage', 'map', 'address', 'created_by']);
        $crud->setTexteditor(['description', 'history_and_heritage','address']);
        // $crud->setFieldUpload(['file', 'is_active','created_by']);
        $crud->callbackColumn('file', array($this, 'showFile'));
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        /* $crud->callbackAfterInsert(function ($stateParameters) {
            return $this->saveLogData('add','state',$stateParameters->data);
        }); */
        


        $crud->unsetDelete();
        if($webModel->getCountAboutHospital() >= 1){

            $crud->unsetAdd();
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        /* $crud->callbackBeforeUpdate(function ($stateParameters) {
            return $this->saveLogData('edit','state',$stateParameters->data);
        }); */
        $crud->setTable('about_hospital');
        $crud->setSubject('About Hospital');
        $output = $crud->render();
        return view('common', (array)$output);
    }
}

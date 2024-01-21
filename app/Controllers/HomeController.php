<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;
use App\Models\WebsiteModel;


class HomeController extends BaseController
{
    function showFile($value)
    {
        $url = base_url('uploads/');
        $type = pathinfo($value)['extension'];
        // die($type);
        $icon = '';
        if($type === 'pdf'){
            $icon = '<i class=" fas fa-file-pdf text-danger  fs-1  "></i>';
        }elseif($type === 'xls' || $type === 'xlsx'){
            $icon = '<i class="fas fa-file-excel text-success  fs-1  "></i>';
        }elseif($type === 'doc' || $type === 'docx'){
            $icon = '<i class=" fas fa-file-word  text-primary   fs-1  "></i>';
        }elseif($type === 'txt'){
                $icon = '<i class="fas fa-images fs-1"></i>';
        }else{
            $icon = '<i class="fas fa-images"></i>';
        }
        
        // $icon = $type;
        if($type == 'pdf' or $type == 'xls' or $type == 'xlsx' or $type == 'doc' or $type == 'docx' or $type == 'txt'){

            $path = '<a target="_new" href="'.$url . $value.'"> '. $icon .' </a>';
        }elseif($type == 'png' or $type == 'jpg' or $type == 'jpeg' or $type == 'bmp' or $type == 'webp' or $type == 'gif'){
            $path = '<img src=' . $url . $value . ' height="100" width="100">'; 
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
                return  '<input id="field-image" type="file" class="form-control w-100 " accept=".jpg, .jpeg, .png" name="image" value="">';
            }
        );

        $crud->callbackEditField(
            'image',
            function ($data) {
                $path = base_url() . 'uploads/' . $data;
 
                $html = $this->showFile($data);
                $html .= '<input id="field-image" type="file" class="form-control" accept=".jpg, .jpeg, .png" name="image" value="">';
 
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
                return  '<input id="field-file" type="file" class="form-control w-100 " accept=".pdf, .doc, .docx" name="file" value="">';
            }
        );

        $crud->callbackEditField(
            'file',
            function ($data) {
                $path = base_url() . 'uploads/' . $data;
 
                $html = $this->showFile($data);
                $html .= '<input id="field-file" type="file" class="form-control" accept=".pdf, .doc, .docx" name="file" value="">';
 
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

    public function Gallery(){
        $crud = new GroceryCrud();
        $crud->displayAs('image','Gallery Image');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['title','image', 'is_active']);
        $crud->fields(['title','image', 'is_active','created_by']);
        $crud->callbackColumn('image', array($this, 'showFile'));
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        /* $crud->callbackAfterInsert(function ($stateParameters) {
            return $this->saveLogData('add','state',$stateParameters->data);
        }); */

        $crud->callbackAddField(
            'image',
            function () {
                return  '<input id="field-image" type="file" class="form-control w-100 " accept=".jpg, .jpeg, .png" name="image" value="">';
            }
        );

        $crud->callbackEditField(
            'image',
            function ($data) {
                $path = base_url() . 'uploads/' . $data;
 
                $html = $this->showFile($data);
                $html .= '<input id="field-image" type="file" class="form-control" accept=".jpg, .jpeg, .png" name="image" value="">';
 
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
        $crud->setTable('gallery');
        $crud->setSubject('Gallery');
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

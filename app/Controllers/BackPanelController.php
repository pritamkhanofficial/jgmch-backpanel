<?php

namespace App\Controllers;
use App\Libraries\GroceryCrud;
use App\Models\WebsiteModel;


class BackPanelController extends BaseController
{
    public $websiteModel = NULL;
    public function __construct(Type $var = null) {
        $this->websiteModel = new WebsiteModel();
    }
    
    public function Slider(){
        $crud = new GroceryCrud();
        $crud->displayAs('image','Slider');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['image', 'is_active']);
        $crud->fields(['image', 'is_active','created_by','updated_at','updated_by']);
        $this->fileHandle($crud, 'image','image');
        // $crud->unsetDelete();
        // $crud->unsetAdd();
        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('sliders', $crud->getStateInfo()->primary_key);
            // getPrint($result);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
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
        $crud->columns(['title','file', 'doc_type', 'end_date', 'is_active']);
        $crud->fields(['title','file','description', 'doc_type', 'end_date', 'is_active','created_by','updated_at','updated_by']);
        $crud->setTexteditor(['description']);
        $crud->fieldType('doc_type', 'dropdown', [
            'NOTICE' => 'Notice',
            'TENDER' => 'Tender',
            'NE' => 'News / Events',
            // 'ARS' => 'Anti Ragging Section',
            'NEWS' => 'News'
        ]);
        $this->fileHandle($crud, 'file','document');

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('documents', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
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
        $crud->columns(['title','image','show_on_home', 'is_active']);
        $crud->fields(['title','image', 'show_on_home','is_active','created_by','updated_at','updated_by']);
        $this->fileHandle($crud, 'image','image');
        $crud->fieldType('show_on_home', 'checkbox_boolean');

        $crud->fieldType('show_on_home', 'dropdown', [
            '0' => 'No',
            '1' => 'Yes'
        ]);


        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('gallery', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
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
        $crud->columns(['affiliated_to','vice_chancellor', 'registrar', 'year_of_affiliation','mail','hospital_phone']);
        $crud->fields(['affiliated_to','vice_chancellor', 'registrar', 'year_of_affiliation','description', 'history_and_heritage', 'map', 'address','principle_phone','msvp_phone','msvp_phone_2','mail','contact_info','hospital_phone','footer_text', 'created_by','updated_by']);
        $crud->setTexteditor(['description', 'history_and_heritage','address','contact_info']);
        // $crud->setFieldUpload(['file', 'is_active','created_by']);
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        $crud->fieldType('updated_by', 'hidden', getUserData()->id);        
        $crud->callbackBeforeUpdate(
            function ($cbData) {    
                $cbData->data['updated_by'] = \getUserData()->id;
 
                return $cbData;
            }
        );


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

    public function contentManagement(){
        $crud = new GroceryCrud();
        $crud->displayAs('file','Document File');
        $crud->displayAs('page_id','Page');
        $crud->displayAs('is_active','Status');
        $crud->columns(['page_id','banner']);
        $crud->fields(['page_id','banner','content','title_1', 'file_1', 'title_2','file_2','title_3','file_3','title_4','file_4','title_5','file_5','title_6','file_6','title_7','file_7','title_8','file_8','created_by']);
        $crud->setTexteditor(['content']);
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        $crud->requiredFields(['page_id']);
        $crud->setRelation('page_id', 'page', 'label',['is_active' => 1,'deleted_at'=>NULL]);

        /* Work With File */
        $crud->callbackColumn('banner', array($this, 'showFile'));
        $crud->callbackColumn('file_1', array($this, 'showFile'));
        $crud->callbackColumn('file_2', array($this, 'showFile'));
        $crud->callbackColumn('file_3', array($this, 'showFile'));
        $crud->callbackColumn('file_4', array($this, 'showFile'));
        $crud->callbackColumn('file_5', array($this, 'showFile'));
        $crud->callbackColumn('file_6', array($this, 'showFile'));
        $crud->callbackColumn('file_7', array($this, 'showFile'));
        $crud->callbackColumn('file_8', array($this, 'showFile'));


        $crud->callbackAddField(
            'banner',
            function () {
                return  '<input id="field-banner" type="file" class="form-control" name="banner" value="">';
            }
        );
        $crud->callbackAddField(
            'file_1',
            function () {
                return  '<input id="field-file_1" type="file" class="form-control  " name="file_1" value="">';
            }
        );
        $crud->callbackAddField(
            'file_2',
            function () {
                return  '<input id="field-file_2" type="file" class="form-control  " name="file_2" value="">';
            }
        );
        $crud->callbackAddField(
            'file_3',
            function () {
                return  '<input id="field-file_3" type="file" class="form-control  " name="file_3" value="">';
            }
        );
        $crud->callbackAddField(
            'file_4',
            function () {
                return  '<input id="field-file_4" type="file" class="form-control  " name="file_4" value="">';
            }
        );
        $crud->callbackAddField(
            'file_5',
            function () {
                return  '<input id="field-file_5" type="file" class="form-control  " name="file_5" value="">';
            }
        );
        $crud->callbackAddField(
            'file_6',
            function () {
                return  '<input id="field-file_6" type="file" class="form-control  " name="file_6" value="">';
            }
        );
        $crud->callbackAddField(
            'file_7',
            function () {
                return  '<input id="field-file_7" type="file" class="form-control  " name="file_7" value="">';
            }
        );
        $crud->callbackAddField(
            'file_8',
            function () {
                return  '<input id="field-file_8" type="file" class="form-control  " name="file_8" value="">';
            }
        );

        $crud->callbackBeforeInsert(
            function ($cbData) {
                $banner = $this->request->getFile('banner');
                if (isset($banner)) {
                    $file = UploadFile($banner);
                    $cbData->data['banner'] = $file;
                }
                $file_1 = $this->request->getFile('file_1');
                if (isset($file_1)) {
                    $file = UploadFile($file_1);
                    $cbData->data['file_1'] = $file;
                }
                $file_2 = $this->request->getFile('file_2');
                if (isset($file_2)) {
                    $file = UploadFile($file_2);
                    $cbData->data['file_2'] = $file;
                }
                $file_3 = $this->request->getFile('file_3');
                if (isset($file_3)) {
                    $file = UploadFile($file_3);
                    $cbData->data['file_3'] = $file;
                }
                $file_4 = $this->request->getFile('file_4');
                if (isset($file_4)) {
                    $file = UploadFile($file_4);
                    $cbData->data['file_4'] = $file;
                }
                $file_5 = $this->request->getFile('file_5');
                if (isset($file_5)) {
                    $file = UploadFile($file_5);
                    $cbData->data['file_5'] = $file;
                }
                $file_6 = $this->request->getFile('file_6');
                if (isset($file_6)) {
                    $file = UploadFile($file_6);
                    $cbData->data['file_6'] = $file;
                }
                $file_7 = $this->request->getFile('file_7');
                if (isset($file_7)) {
                    $file = UploadFile($file_7);
                    $cbData->data['file_7'] = $file;
                }
                $file_8 = $this->request->getFile('file_8');
                if (isset($file_8)) {
                    $file = UploadFile($file_8);
                    $cbData->data['file_8'] = $file;
                }
                return $cbData;
            }
        );

        $crud->callbackEditField(
            'banner',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-banner" type="file" class="form-control mt-2" name="banner" value="">';

                $html .= '<input id="field-hidden-banner" type="hidden" class="form-control" name="file_hidden_banner" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_1',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_1" type="file" class="form-control mt-2" name="file_1" value="">';

                $html .= '<input id="field-hidden-file_1" type="hidden" class="form-control" name="file_hidden_file_1" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_2',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_2" type="file" class="form-control mt-2" name="file_2" value="">';

                $html .= '<input id="field-hidden-file_2" type="hidden" class="form-control" name="file_hidden_file_2" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_3',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_3" type="file" class="form-control mt-2" name="file_3" value="">';

                $html .= '<input id="field-hidden-file_3" type="hidden" class="form-control" name="file_hidden_file_3" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_4',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_4" type="file" class="form-control mt-2" name="file_4" value="">';

                $html .= '<input id="field-hidden-file_4" type="hidden" class="form-control" name="file_hidden_file_4" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_5',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_5" type="file" class="form-control mt-2" name="file_5" value="">';

                $html .= '<input id="field-hidden-file_5" type="hidden" class="form-control" name="file_hidden_file_5" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_6',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_6" type="file" class="form-control mt-2" name="file_6" value="">';

                $html .= '<input id="field-hidden-file_6" type="hidden" class="form-control" name="file_hidden_file_6" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_7',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_7" type="file" class="form-control mt-2" name="file_7" value="">';

                $html .= '<input id="field-hidden-file_7" type="hidden" class="form-control" name="file_hidden_file_7" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_8',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_8" type="file" class="form-control mt-2" name="file_8" value="">';

                $html .= '<input id="field-hidden-file_8" type="hidden" class="form-control" name="file_hidden_file_8" value="' . $data . '">';
                return $html;
            }
        );

        $crud->callbackBeforeUpdate(
            function ($cbData) {
                $banner = $this->request->getFile('banner');
                $file_hidden_banner = $this->request->getVar('file_hidden_banner');
                if (isset($banner)) {
                    $file = UploadFile($banner, null, $file_hidden_banner);
                    $cbData->data['banner'] = $file;
                } else {
                    $cbData->data['banner'] = $file_hidden_banner;
                }
                $file_1 = $this->request->getFile('file_1');
                $file_hidden_file_1 = $this->request->getVar('file_hidden_file_1');
                if (isset($file_1)) {
                    $file = UploadFile($file_1, null, $file_hidden_file_1);
                    $cbData->data['file_1'] = $file;
                } else {
                    $cbData->data['file_1'] = $file_hidden_file_1;
                }
                $file_2 = $this->request->getFile('file_2');
                $file_hidden_file_2 = $this->request->getVar('file_hidden_file_2');
                if (isset($file_2)) {
                    $file = UploadFile($file_2, null, $file_hidden_file_2);
                    $cbData->data['file_2'] = $file;
                } else {
                    $cbData->data['file_2'] = $file_hidden_file_2;
                }
                $file_3 = $this->request->getFile('file_3');
                $file_hidden_file_3 = $this->request->getVar('file_hidden_file_3');
                if (isset($file_3)) {
                    $file = UploadFile($file_3, null, $file_hidden_file_3);
                    $cbData->data['file_3'] = $file;
                } else {
                    $cbData->data['file_3'] = $file_hidden_file_3;
                }
                $file_4 = $this->request->getFile('file_4');
                $file_hidden_file_4 = $this->request->getVar('file_hidden_file_4');
                if (isset($file_4)) {
                    $file = UploadFile($file_4, null, $file_hidden_file_4);
                    $cbData->data['file_4'] = $file;
                } else {
                    $cbData->data['file_4'] = $file_hidden_file_4;
                }
                $file_5 = $this->request->getFile('file_5');
                $file_hidden_file_5 = $this->request->getVar('file_hidden_file_5');
                if (isset($file_5)) {
                    $file = UploadFile($file_5, null, $file_hidden_file_5);
                    $cbData->data['file_5'] = $file;
                } else {
                    $cbData->data['file_5'] = $file_hidden_file_5;
                }
                $file_6 = $this->request->getFile('file_6');
                $file_hidden_file_6 = $this->request->getVar('file_hidden_file_6');
                if (isset($file_6)) {
                    $file = UploadFile($file_6, null, $file_hidden_file_6);
                    $cbData->data['file_6'] = $file;
                } else {
                    $cbData->data['file_6'] = $file_hidden_file_6;
                }
                $file_7 = $this->request->getFile('file_7');
                $file_hidden_file_7 = $this->request->getVar('file_hidden_file_7');
                if (isset($file_7)) {
                    $file = UploadFile($file_7, null, $file_hidden_file_7);
                    $cbData->data['file_7'] = $file;
                } else {
                    $cbData->data['file_7'] = $file_hidden_file_7;
                }
                $file_8 = $this->request->getFile('file_8');
                $file_hidden_file_8 = $this->request->getVar('file_hidden_file_8');
                if (isset($file_8)) {
                    $file = UploadFile($file_8, null, $file_hidden_file_8);
                    $cbData->data['file_8'] = $file;
                } else {
                    $cbData->data['file_8'] = $file_hidden_file_8;
                }
                return $cbData;
            }
        );

        /* End */
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('content');
        $crud->setSubject('Content');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function hospitalHead(){
        $crud = new GroceryCrud();
        $crud->displayAs('image','Head Image');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['image','title','phone','email','is_active']);
        $crud->fields(['image','title','sub_title','phone','email','address','description','is_active','created_by','updated_at','updated_by']);
        $this->fileHandle($crud, 'image','image');
        $crud->setTexteditor(['address','description']);
        if ($crud->getState() === 'delete') {
            $result = $this->websiteModel->softDelete('hospital_head', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('hospital_head');
        $crud->setSubject('Hospital Head');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function page(){
        $crud = new GroceryCrud();
        $crud->displayAs('label','Page Name');
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['label', 'is_active']);
        $crud->fields(['label','is_active','created_by','updated_at','updated_by']);
        
        $crud->fieldType('created_by', 'hidden', \getUserData()->id);
        $crud->fieldType('updated_at', 'hidden', NULL);
        $crud->fieldType('updated_by', 'hidden', NULL);

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('page', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('page');
        $crud->setSubject('Page');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function department(){
        $crud = new GroceryCrud();
        $crud->displayAs('is_active','Status');
        $crud->displayAs('label','Department Name');
        $crud->displayAs('is_active','Status');
        $crud->columns(['label','image','is_active']);
        $crud->fields(['label','image','description','title_1', 'file_1', 'title_2','file_2','title_3','file_3','title_4','file_4','title_5','file_5','title_6','file_6','title_7','file_7','title_8','file_8','is_active','created_by']);
        $crud->setTexteditor(['description']);
        $crud->fieldType('created_by', 'hidden', getUserData()->id);
        $crud->requiredFields(['label']);

        /* Work With File */
        $crud->callbackColumn('image', array($this, 'showFile'));
        $crud->callbackColumn('file_1', array($this, 'showFile'));
        $crud->callbackColumn('file_2', array($this, 'showFile'));
        $crud->callbackColumn('file_3', array($this, 'showFile'));
        $crud->callbackColumn('file_4', array($this, 'showFile'));
        $crud->callbackColumn('file_5', array($this, 'showFile'));
        $crud->callbackColumn('file_6', array($this, 'showFile'));
        $crud->callbackColumn('file_7', array($this, 'showFile'));
        $crud->callbackColumn('file_8', array($this, 'showFile'));


        $crud->callbackAddField(
            'image',
            function () {
                return  '<input id="field-image" type="file" class="form-control" name="image" value="">';
            }
        );
        $crud->callbackAddField(
            'file_1',
            function () {
                return  '<input id="field-file_1" type="file" class="form-control  " name="file_1" value="">';
            }
        );
        $crud->callbackAddField(
            'file_2',
            function () {
                return  '<input id="field-file_2" type="file" class="form-control  " name="file_2" value="">';
            }
        );
        $crud->callbackAddField(
            'file_3',
            function () {
                return  '<input id="field-file_3" type="file" class="form-control  " name="file_3" value="">';
            }
        );
        $crud->callbackAddField(
            'file_4',
            function () {
                return  '<input id="field-file_4" type="file" class="form-control  " name="file_4" value="">';
            }
        );
        $crud->callbackAddField(
            'file_5',
            function () {
                return  '<input id="field-file_5" type="file" class="form-control  " name="file_5" value="">';
            }
        );
        $crud->callbackAddField(
            'file_6',
            function () {
                return  '<input id="field-file_6" type="file" class="form-control  " name="file_6" value="">';
            }
        );
        $crud->callbackAddField(
            'file_7',
            function () {
                return  '<input id="field-file_7" type="file" class="form-control  " name="file_7" value="">';
            }
        );
        $crud->callbackAddField(
            'file_8',
            function () {
                return  '<input id="field-file_8" type="file" class="form-control  " name="file_8" value="">';
            }
        );

        $crud->callbackBeforeInsert(
            function ($cbData) {
                $image = $this->request->getFile('image');
                if (isset($image)) {
                    $file = UploadFile($image);
                    $cbData->data['image'] = $file;
                }
                $file_1 = $this->request->getFile('file_1');
                if (isset($file_1)) {
                    $file = UploadFile($file_1);
                    $cbData->data['file_1'] = $file;
                }
                $file_2 = $this->request->getFile('file_2');
                if (isset($file_2)) {
                    $file = UploadFile($file_2);
                    $cbData->data['file_2'] = $file;
                }
                $file_3 = $this->request->getFile('file_3');
                if (isset($file_3)) {
                    $file = UploadFile($file_3);
                    $cbData->data['file_3'] = $file;
                }
                $file_4 = $this->request->getFile('file_4');
                if (isset($file_4)) {
                    $file = UploadFile($file_4);
                    $cbData->data['file_4'] = $file;
                }
                $file_5 = $this->request->getFile('file_5');
                if (isset($file_5)) {
                    $file = UploadFile($file_5);
                    $cbData->data['file_5'] = $file;
                }
                $file_6 = $this->request->getFile('file_6');
                if (isset($file_6)) {
                    $file = UploadFile($file_6);
                    $cbData->data['file_6'] = $file;
                }
                $file_7 = $this->request->getFile('file_7');
                if (isset($file_7)) {
                    $file = UploadFile($file_7);
                    $cbData->data['file_7'] = $file;
                }
                $file_8 = $this->request->getFile('file_8');
                if (isset($file_8)) {
                    $file = UploadFile($file_8);
                    $cbData->data['file_8'] = $file;
                }
                return $cbData;
            }
        );

        $crud->callbackEditField(
            'image',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-image" type="file" class="form-control mt-2" name="image" value="">';

                $html .= '<input id="field-hidden-image" type="hidden" class="form-control" name="file_hidden_image" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'banner',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-banner" type="file" class="form-control mt-2" name="banner" value="">';

                $html .= '<input id="field-hidden-banner" type="hidden" class="form-control" name="file_hidden_banner" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_1',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_1" type="file" class="form-control mt-2" name="file_1" value="">';

                $html .= '<input id="field-hidden-file_1" type="hidden" class="form-control" name="file_hidden_file_1" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_2',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_2" type="file" class="form-control mt-2" name="file_2" value="">';

                $html .= '<input id="field-hidden-file_2" type="hidden" class="form-control" name="file_hidden_file_2" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_3',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_3" type="file" class="form-control mt-2" name="file_3" value="">';

                $html .= '<input id="field-hidden-file_3" type="hidden" class="form-control" name="file_hidden_file_3" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_4',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_4" type="file" class="form-control mt-2" name="file_4" value="">';

                $html .= '<input id="field-hidden-file_4" type="hidden" class="form-control" name="file_hidden_file_4" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_5',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_5" type="file" class="form-control mt-2" name="file_5" value="">';

                $html .= '<input id="field-hidden-file_5" type="hidden" class="form-control" name="file_hidden_file_5" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_6',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_6" type="file" class="form-control mt-2" name="file_6" value="">';

                $html .= '<input id="field-hidden-file_6" type="hidden" class="form-control" name="file_hidden_file_6" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_7',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_7" type="file" class="form-control mt-2" name="file_7" value="">';

                $html .= '<input id="field-hidden-file_7" type="hidden" class="form-control" name="file_hidden_file_7" value="' . $data . '">';
                return $html;
            }
        );
        $crud->callbackEditField(
            'file_8',
            function ($data) {

                $html = $this->showFile($data);
                $html .= '<input id="field-file_8" type="file" class="form-control mt-2" name="file_8" value="">';

                $html .= '<input id="field-hidden-file_8" type="hidden" class="form-control" name="file_hidden_file_8" value="' . $data . '">';
                return $html;
            }
        );

        $crud->callbackBeforeUpdate(
            function ($cbData) {
                $image = $this->request->getFile('image');
                $file_hidden_image = $this->request->getVar('file_hidden_image');
                if (isset($image)) {
                    $file = UploadFile($image, null, $file_hidden_image);
                    $cbData->data['image'] = $file;
                } else {
                    $cbData->data['image'] = $file_hidden_image;
                }
                $file_1 = $this->request->getFile('file_1');
                $file_hidden_file_1 = $this->request->getVar('file_hidden_file_1');
                if (isset($file_1)) {
                    $file = UploadFile($file_1, null, $file_hidden_file_1);
                    $cbData->data['file_1'] = $file;
                } else {
                    $cbData->data['file_1'] = $file_hidden_file_1;
                }
                $file_2 = $this->request->getFile('file_2');
                $file_hidden_file_2 = $this->request->getVar('file_hidden_file_2');
                if (isset($file_2)) {
                    $file = UploadFile($file_2, null, $file_hidden_file_2);
                    $cbData->data['file_2'] = $file;
                } else {
                    $cbData->data['file_2'] = $file_hidden_file_2;
                }
                $file_3 = $this->request->getFile('file_3');
                $file_hidden_file_3 = $this->request->getVar('file_hidden_file_3');
                if (isset($file_3)) {
                    $file = UploadFile($file_3, null, $file_hidden_file_3);
                    $cbData->data['file_3'] = $file;
                } else {
                    $cbData->data['file_3'] = $file_hidden_file_3;
                }
                $file_4 = $this->request->getFile('file_4');
                $file_hidden_file_4 = $this->request->getVar('file_hidden_file_4');
                if (isset($file_4)) {
                    $file = UploadFile($file_4, null, $file_hidden_file_4);
                    $cbData->data['file_4'] = $file;
                } else {
                    $cbData->data['file_4'] = $file_hidden_file_4;
                }
                $file_5 = $this->request->getFile('file_5');
                $file_hidden_file_5 = $this->request->getVar('file_hidden_file_5');
                if (isset($file_5)) {
                    $file = UploadFile($file_5, null, $file_hidden_file_5);
                    $cbData->data['file_5'] = $file;
                } else {
                    $cbData->data['file_5'] = $file_hidden_file_5;
                }
                $file_6 = $this->request->getFile('file_6');
                $file_hidden_file_6 = $this->request->getVar('file_hidden_file_6');
                if (isset($file_6)) {
                    $file = UploadFile($file_6, null, $file_hidden_file_6);
                    $cbData->data['file_6'] = $file;
                } else {
                    $cbData->data['file_6'] = $file_hidden_file_6;
                }
                $file_7 = $this->request->getFile('file_7');
                $file_hidden_file_7 = $this->request->getVar('file_hidden_file_7');
                if (isset($file_7)) {
                    $file = UploadFile($file_7, null, $file_hidden_file_7);
                    $cbData->data['file_7'] = $file;
                } else {
                    $cbData->data['file_7'] = $file_hidden_file_7;
                }
                $file_8 = $this->request->getFile('file_8');
                $file_hidden_file_8 = $this->request->getVar('file_hidden_file_8');
                if (isset($file_8)) {
                    $file = UploadFile($file_8, null, $file_hidden_file_8);
                    $cbData->data['file_8'] = $file;
                } else {
                    $cbData->data['file_8'] = $file_hidden_file_8;
                }
                return $cbData;
            }
        );

        /* End */
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('department');
        $crud->setSubject('Department');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function designation(){
        $crud = new GroceryCrud();
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['label', 'is_active']);
        $crud->fields(['label','description','is_active','created_by','updated_at','updated_by']);
        
        $crud->setTexteditor(['description']);
        $crud->fieldType('created_by', 'hidden', \getUserData()->id);
        $crud->fieldType('updated_at', 'hidden', NULL);
        $crud->fieldType('updated_by', 'hidden', NULL);

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('designation', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('designation');
        $crud->setSubject('Designation');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function committee(){
        $crud = new GroceryCrud();
        $crud->displayAs('is_active','Status');
        $crud->where("deleted_at", NULL);
        $crud->columns(['label', 'is_active']);
        $crud->fields(['label','is_active','created_by','updated_at','updated_by']);
        
        $crud->fieldType('created_by', 'hidden', \getUserData()->id);
        $crud->fieldType('updated_at', 'hidden', NULL);
        $crud->fieldType('updated_by', 'hidden', NULL);

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('designation', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('committee');
        $crud->setSubject('Committee');
        $output = $crud->render();
        return view('common', (array)$output);
    }

    public function staff(){
        $crud = new GroceryCrud();
        $crud->displayAs('department_id','Department');
        $crud->displayAs('designation_id','Designation');
        $crud->displayAs('is_active','Status');
        $crud->where("staff.deleted_at", NULL);
        $crud->columns(['department_id','designation_id','label','type', 'is_active']);
        $crud->fields(['department_id','designation_id','committee_id','label', 'type','description','is_active','created_by','updated_at','updated_by']);
        $crud->setRelation('department_id', 'department', 'label');
        $crud->setRelation('designation_id', 'designation', 'label');
        $crud->setRelation('committee_id', 'committee', 'label');
        $crud->fieldType('type', 'dropdown', [
            'TS' => 'Teaching staff',
            'NTS' => 'Non-teaching staff'
        ]);
        $crud->setTexteditor(['description']);
        $crud->fieldType('created_by', 'hidden', \getUserData()->id);
        $crud->fieldType('updated_at', 'hidden', NULL);
        $crud->fieldType('updated_by', 'hidden', NULL);

        if ($crud->getState() === 'delete') {
            
            $result = $this->websiteModel->softDelete('gallery', $crud->getStateInfo()->primary_key);
            if($result){
                return $this->response->setJSON([
                    'success'=>true,
                    'success_message'=>"<p>Your data has been successfully deleted from the database.</p>",
                ]);
            }
            
        }
        $crud->unsetPrint();
        $crud->unsetExport();
        $crud->setTable('staff');
        $crud->setSubject('Staff');
        $output = $crud->render();
        return view('common', (array)$output);
    }
}

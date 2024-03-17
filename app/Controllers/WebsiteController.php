<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\WebsiteModel;
class WebsiteController extends BaseController
{
    public $websiteModel = NULL;
    public function __construct(Type $var = null) {
        $this->websiteModel = new WebsiteModel();
    }
    public function home()
    {
        $sliders = $this->websiteModel->getSlider();
        $news = $this->websiteModel->getDocument('NE');
        $scroll_news = $this->websiteModel->getDocument('NEWS');
        $tender = $this->websiteModel->getDocument('TENDER');
        $notice = $this->websiteModel->getDocument('NOTICE');
        $anti_ragging_section = $this->websiteModel->getDocument('ARS');
        $gallery = $this->websiteModel->getGallery();
        $hospital_head = $this->websiteModel->getHospitalHead();
        return view('website/home',[
            'sliders'=>$sliders,
            'news'=>$news,
            'scroll_news'=>$scroll_news,
            'tender'=>$tender,
            'notice'=>$notice,
            'gallery'=>$gallery,
            'hospital_head'=>$hospital_head,
            'anti_ragging_section'=>$anti_ragging_section,
        ]);
    }
    public function department()
    {
        $department = $this->websiteModel->getDepartment();
        return view('website/department',[
            'department'=>$department
        ]);
    }
    public function departmentDetails($id)
    {
        $department = $this->websiteModel->getDepartment($id);
        $staff = $this->websiteModel->getStaff($id,'department');
        return view('website/department-details',[
            'department'=>$department,
            'staff'=>$staff,
        ]);
    }
    public function committeeDetails($id)
    {
        $committee = getCommittee($id);
        $staff = $this->websiteModel->getStaff($id,'committee');
        return view('website/committee-details',[
            'committee'=>$committee,
            'staff'=>$staff,
        ]);
    }
    public function gallery()
    {
        $gallery = $this->websiteModel->getGallery('gallery');
        return view('website/gallery',[
            'gallery'=>$gallery
        ]);
    }
    public function contact()
    {
        $gallery = $this->websiteModel->getGallery('gallery');
        return view('website/contact');
    }

    public function innerPage($id)
    {
        /* $rules = [
            'id' => ['rules' => 'required|numeric']

        ]; */
        /* if(!$this->validate($rules)){
            return redirect()->back();
        } */
        if(!is_numeric($id)){
            return redirect()->back();
        }
        // $id = $this->request->getVar('id');
        
        $content = $this->websiteModel->getInnerPage($id);
        if(is_null($content)){
            return redirect('/');
        }
        
        return view('website/inner-page',['content'=>$content]);
    }

    public function headAbout($id)
    {
       
        if(!is_numeric($id)){
            return redirect()->back();
        }        
        $content = $this->websiteModel->headAbout($id);
        if(is_null($content)){
            return redirect('/');
        }
        
        return view('website/head-about',['content'=>$content]);
    }
}

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
        $tender = $this->websiteModel->getDocument('TENDER');
        $notice = $this->websiteModel->getDocument('NOTICE');
        $anti_ragging_section = $this->websiteModel->getDocument('ARS');
        $gallery = $this->websiteModel->getGallery();
        $hospital_head = $this->websiteModel->getHospitalHead();
        return view('website/home',[
            'sliders'=>$sliders,
            'news'=>$news,
            'tender'=>$tender,
            'notice'=>$notice,
            'gallery'=>$gallery,
            'hospital_head'=>$hospital_head,
            'anti_ragging_section'=>$anti_ragging_section,
        ]);
    }
}

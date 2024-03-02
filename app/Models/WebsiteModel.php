<?php

namespace App\Models;

use CodeIgniter\Model;

class WebsiteModel extends Model
{
    protected $table            = 'websites';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];



    public function addSlider($data){

        $data['created_by'] = getUserData()->id;
        return $this->db->table('sliders')->insert($data);
    }
    public function getCountAboutHospital(){

        return $this->db->table('about_hospital')->get()->getNumRows();
    }
    public function softDelete($table, $id){
        return  $this->db->table($table)->update([
            'deleted_at'=> getCurrentDate()
        ], ['id'=>$id]);
    }

    public function getSlider(){

        return $this->db->table('sliders')->where(['is_active'=>1,'deleted_at'=>NULL])->get()->getResult();

    }
    public function getDocument($type){
        $where = ['doc_type'=>$type,'is_active'=>1,'deleted_at'=>NULL];

        if($type != 'ARS'){
            $where['end_date <='] = \getCurrentDate();
        }
        return $this->db->table('documents')->where($where)->get()->getResult();

    }
    public function getGallery(){
        return $this->db->table('gallery')->where(['show_on_home'=>1,'is_active'=>1,'deleted_at'=>NULL])->get()->getResult();

    }
    public function getHospitalHead(){
        return $this->db->table('hospital_head')->where(['is_active'=>1,'deleted_at'=>NULL])->limit(3)->get()->getResult();

    }

}

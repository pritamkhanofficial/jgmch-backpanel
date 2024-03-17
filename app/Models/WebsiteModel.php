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
        $builder = $this->db->table('documents');
        if($type != 'ARS'){
            $builder->groupStart();
                $builder->where(['end_date >=' => \getCurrentDate()]);
                $builder->orWhere(['end_date'=> NULL]);
            $builder->groupEnd();
        }
        $builder->where($where);
        return $builder->get()->getResult();

    }
    public function getGallery($page_type = NULL){
        $data = [
            'is_active'=>1,
            'deleted_at'=>NULL
        ];
        if(empty($page_type)){
            $data['show_on_home'] = 1;
        }
        return $this->db->table('gallery')->where($data)->get()->getResult();

    }
    public function getHospitalHead(){
        return $this->db->table('hospital_head')->where(['is_active'=>1,'deleted_at'=>NULL])->limit(3)->get()->getResult();

    }

    public function getDepartment($id = NULL){
        if(!empty($id)){

            return $this->db->table('department')->where(['id'=>$id,'is_active'=>1,'deleted_at'=>NULL])->get()->getRow();
        }
        return $this->db->table('department')->where(['is_active'=>1,'deleted_at'=>NULL])->get()->getResult();

    }
    public function getStaff($id, $type = NULL){
        $query = $this->db->table('staff');
        $query->select('department.label AS department, designation.label AS designation, committee.label AS committee, staff.*');
        if(!empty($type)){
            if($type == 'department'){
                $query->where(['department_id'=>$id]);
            }
            if($type == 'designation'){
                $query->where(['designation_id'=>$id]);
            }
            if($type == 'committee'){
                $query->where(['committee_id'=>$id]);
            }
        }
        $query->join('department','staff.department_id=department.id','left');
        $query->join('designation','staff.designation_id=designation.id','left');
        $query->join('committee','staff.committee_id=committee.id','left');
        $query->where(['staff.is_active'=>1,'staff.deleted_at'=>NULL]);
        return $query->get()->getResult();
    }

    public function getInnerPage($id){
        $where = ['content.id'=>$id];

        $builder = $this->db->table('content');
        $builder->select('page.label AS page, content.*');
        $builder->join('page','content.page_id=page.id','left');
        $builder->where($where);
        return $builder->get()->getRow();

    }

    public function headAbout($id){
        $where = ['is_active'=>1,'deleted_at'=>NULL,'id'=>$id];
        $builder = $this->db->table('hospital_head');
        $builder->where($where);
        return $builder->get()->getRow();

    }

}

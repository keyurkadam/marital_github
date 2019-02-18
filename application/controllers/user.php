<?php
session_start();
class user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if (!isset($_SESSION["exchange_rate"])) {
            $_SESSION["currency_symbol"] = "&#8360;";
            $_SESSION["exchange_rate"]   = 1;
            $_SESSION["currency_tag"]    = "INR";
        }
    }
    public function index()
    {
        $this->load->view('user/index');
    }
    
    public function register($param1 = "")
    {
        if ($param1 == "create") {
            $data['member_name']                      = $this->input->post('txt_full_name');
            $data['member_father_name']               = $this->input->post('txt_father_name');
            $data['member_gender']                    = $this->input->post('rdo_gender');
            $data['member_address']                   = $this->input->post('txt_address');
            $data['country_id']                       = $this->input->post('cmb_country');
            $data['state_id']                         = $this->input->post('cmb_state');
            $data['city_id']                          = $this->input->post('cmb_city');
            $data['member_other_city']                = $this->input->post('txt_other_city');
            $data['member_postal_code']               = $this->input->post('txt_postal_code');
            $data['member_phone']                     = $this->input->post('txt_phone');
            $data['member_mobile_no']                 = $this->input->post('txt_mobile');
            $data['member_email']                     = $this->input->post('txt_email');
            $data['member_password']                  = $this->input->post('txt_password');
            $data['member_gol']                       = $this->input->post('txt_gol_name');
            $data['member_dob']                       = $this->input->post('txt_dob');
            $data['member_birth_place']               = $this->input->post('txt_birth_place');
            $data['member_birth_time']                = $this->input->post('txt_birth_time');
            $data['member_belive_horoscope']          = $this->input->post('rdo_belive_horoscope');
            $data['member_shani_mangal']              = $this->input->post('rdo_shani_mangal');
            $data['member_shani_mangal_desc']         = $this->input->post('txt_shani_mangal');
            $data['member_education']                 = $this->input->post('txt_education');
            $data['member_occupation']                = $this->input->post('cmb_occupation');
            $data['member_other_occupation']          = $this->input->post('txt_other_occupation');
            $data['member_monthly_income']            = $this->input->post('txt_monthly_income');
            $data['member_job_desc']                  = $this->input->post('txt_job_description');
            $data['member_height']                    = $this->input->post('txt_height');
            $data['member_weight']                    = $this->input->post('txt_weight');
            $data['member_body_type']                 = $this->input->post('cmb_body_type');
            $data['member_spectables']                = $this->input->post('rdo_spectacles');
            $data['member_spectables_no']             = $this->input->post('txt_spectacles_no');
            $data['member_physical_disable']          = $this->input->post('rdo_physical_disablity');
            $data['member_physical_disable_desc']     = $this->input->post('txt_physical_disablity');
            $data['member_parents_alive']             = $this->input->post('rdo_mother_father_alive');
            $data['member_father_occupation']         = $this->input->post('cmb_father_occupation');
            $data['member_brother']                   = $this->input->post('txt_no_of_brothers');
            $data['member_sister']                    = $this->input->post('txt_no_of_sisters');
            $data['member_married_brother']           = $this->input->post('txt_no_of_brothers_married');
            $data['member_married_sister']            = $this->input->post('txt_no_of_sisters_married');
            $data['member_marital_status']            = $this->input->post('rdo_marital_status');
            $data['member_children_girl']             = $this->input->post('txt_girl_child');
            $data['member_children_boy']              = $this->input->post('txt_boy_child');
            $data['member_residence_status']          = $this->input->post('cmb_residence');
            $data['member_nri_candidates_applicable'] = $this->input->post('rdo_marry_nri');
            $data['member_expectation']               = $this->input->post('txt_expectation');
            
            if ($_FILES["img_photo1"]["error"] == 0) {
                $newname = $_FILES["img_photo1"]["name"];
                $newname = $this->generate_random_name($newname);
                
                //$newname_footer=rand(100000,10000000)."_".$_FILES["img_logo_footer"]["name"];
                $config['file_name']     = $newname;
                $config['upload_path']   = 'files/user/profile/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_photo1');
                $data['member_photo1'] = $newname;
                $this->smart_resize_image("files/user/profile/" . $newname, 262, 200, true, "files/user/profile/thumb/" . $newname, false, false);
                
            }
            
            if ($_FILES["img_photo2"]["error"] == 0) {
                $newname = $_FILES["img_photo2"]["name"];
                $newname = $this->generate_random_name($newname);
                
                //$newname_footer=rand(100000,10000000)."_".$_FILES["img_logo_footer"]["name"];
                $config['file_name']     = $newname;
                $config['upload_path']   = 'files/user/profile/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_photo2');
                $data['member_photo2'] = $newname;
                $this->smart_resize_image("files/user/profile/" . $newname, 262, 200, true, "files/user/profile/thumb/" . $newname, false, false);
                
            }
            
            if ($_FILES["img_photo3"]["error"] == 0) {
                $newname = $_FILES["img_photo3"]["name"];
                $newname = $this->generate_random_name($newname);
                
                //$newname_footer=rand(100000,10000000)."_".$_FILES["img_logo_footer"]["name"];
                $config['file_name']     = $newname;
                $config['upload_path']   = 'files/user/profile/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_photo3');
                $data['member_photo3'] = $newname;
                $this->smart_resize_image("files/user/profile/" . $newname, 262, 200, true, "files/user/profile/thumb/" . $newname, false, false);
                
            }
            
            if ($_FILES["img_photo4"]["error"] == 0) {
                $newname = $_FILES["img_photo4"]["name"];
                $newname = $this->generate_random_name($newname);
                
                //$newname_footer=rand(100000,10000000)."_".$_FILES["img_logo_footer"]["name"];
                $config['file_name']     = $newname;
                $config['upload_path']   = 'files/user/profile/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_photo4');
                $data['member_photo4'] = $newname;
                $this->smart_resize_image("files/user/profile/" . $newname, 262, 200, true, "files/user/profile/thumb/" . $newname, false, false);
                
            }
            
            if ($_FILES["img_photo5"]["error"] == 0) {
                $newname = $_FILES["img_photo5"]["name"];
                $newname = $this->generate_random_name($newname);
                
                //$newname_footer=rand(100000,10000000)."_".$_FILES["img_logo_footer"]["name"];
                $config['file_name']     = $newname;
                $config['upload_path']   = 'files/user/profile/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_photo5');
                $data['member_photo5'] = $newname;
                $this->smart_resize_image("files/user/profile/" . $newname, 262, 200, true, "files/user/profile/thumb/" . $newname, false, false);
                
            }
            $this->db->insert('tbl_member', $data);
            
        }
        
        $this->load->view('user/register_view');
    }
    
    public function login($param1 = "")
    {
        if ($param1 == "check") {
            
            $email    = $this->input->post('txt_email');
            $password = $this->input->post('txt_password');
            
            $login_res = $this->db->get_where('tbl_member', array(
                'member_email' => $email,
                'member_password' => $password
            ));
            if ($login_res->num_rows() > 0) {
                foreach ($login_res->result() as $login_row) {
                    $_SESSION["member_id"] = $login_row->member_id;
                    redirect(base_url() . 'user/dashboard');
                }
            } else {
                $page_data['msg'] = '<div class="alert alert-danger">
      <strong>Wrong!</strong> Username or Password is Wrong
    </div>';
            }
        }
        
    }

    public function logout()
    {
        unset($_SESSION["member_id"]);
        session_destroy();

        redirect(base_url().'user/home');
    }

    public function dashboard()
    {
        $this->load->view('user/dashboard_view');
    }

    public function edit_profile($param1="")
    {
        
    }

    public function change_password($param1="")
    {
        $page_data=array();
        if($param1=="update")
        {
            $old_pwd = $this->input->post('txt_old_password');
            $new_pwd = $this->input->post('txt_new_password');
            $confirm_pwd = $this->input->post('txt_confirm_password');

            if($new_pwd == $confirm_pwd)
            {
                $member_res=$this->db->get_where('tbl_member',array("member_id"=>$_SESSION["member_id"],
                    "member_password"=>$old_pwd));
                if($member_res->num_rows()>0)
                {
                    $update_data['member_password']=$new_pwd;
                    $this->db->where('member_id',$_SESSION["member_id"]);
                    $this->db->update('tbl_member',$update_data);
                    //echo "Password is Changed successfully";
                    $page_data['msg']='<div class="alert alert-success">
  <strong>Success!</strong> Password successfully changed
</div>';
                }
                else
                {
                    $page_data['msg']='<div class="alert alert-danger">
  <strong>Wrong!</strong> Old Password is wrong
</div>';
                }
            }
            else
            {
                $page_data['msg']='<div class="alert alert-danger">
  <strong>Wrong!</strong> New and Confirm Password not matched
</div>';
            }
        }
        $this->load->view('user/change_password_view',$page_data);
    }
    
    public function event()
    {
        $today_date                  = date('Y-m-d');
        $pass_event_query            = "select * from tbl_event where event_date<" . $today_date;
        $page_data['event_pass_res'] = $this->db->query($pass_event_query);
        
        $upcoming_event_query            = "select * from tbl_event where event_date>=" . $today_date;
        $page_date['event_upcoming_res'] = $this->db->query($upcoming_event_query);
        
        $this->load->view('user/event_view', $page_data);
    }
    
    public function event_full($event_id)
    {
        $page_data['event_full_res'] = $this->db->get_where('tbl_event', array(
            'event_id' => $event_id
        ));
        $this->load->view('user/event_full_view');
    }
    
    public function photo_album()
    {
        $page_data['photo_res'] = $this->db->get("tbl_photo_album");
        $this->load->view('user/photo_album_view', $page_data);
    }
    
    public function feedback($param1 = "")
    {
        $page_data = array();
        if ($param1 == "create") {
            $data['feedback_name']         = $this->input->post('txt_name');
            $data['feedback_company_name'] = $this->input->post('txt_company_name');
            $data['feedback_email']        = $this->input->post('txt_email');
            $data['feedback_mobile_no']    = $this->input->post('txt_mobile_no');
            $data['feedback_address']      = $this->input->post('txt_address');
            $data['feedback_message']      = $this->input->post('txt_message');
            $data['feedback_date']         = date('Y-m-d');
            $this->db->insert('tbl_feedback', $data);
            
            $page_data['msg'] = '<div class="alert alert-success">
                <strong>Success!</strong> Your Feedback has been submitted successfully.
            </div>';
            
        }
        $this->load->view('user/feedback_view', $page_data);
        
    }
    
    public function photo($photo_album_id)
    {
        $page_data['photo_res'] = $this->db->get_where('tbl_photo', array(
            'photo_album_id' => $photo_album_id
        ));
        $this->load->view('user/photo_view', $page_data);
    }
    
    public function video()
    {
        $page_data['video_res'] = $this->db->get_where('tbl_video', array(
            'video_status' => 'Active'
        ));
        
        $this->load->view('user/video_view' . $page_data);
    }
    
    public function about_us()
    {
        
    }
    
    public function contact_us()
    {
        $this->load->view('user/contact_view');
    }
    
    public function profile_update()
    {
        $data['member_profile_status'] = $this->input->post('chk_private_profile');
        $data['member_image_blur']     = $this->input->post('chk_image_blur');
        $this->db->where('member_id', $_SESSION["member_id"]);
        $this->db->update('tbl_member', $data);
    }
    
    public function profile_request($member_id)
    {
        $data['from_member_id']         = $_SESSION["member_id"];
        $data['to_member_id']           = $member_id;
        $data['profile_request_status'] = 'Unread';
        $data['profile_request_date']   = date('Y-m-d');
        
        $url = $_SERVER['HTTP_REFERER'];
        redirect($url);
    }

    public function request_approval($profile_request_id,$action)
    {
        $update_data=array();
        if($action=="Approve")
        {
            $update_data['profile_request_status']='Approved';
        }
        if($action=="Reject")
        {
            $update_data['profile_request_status']='Rejected';
        }
        $this->db->where('profile_request_id',$profile_request_id);
        $this->db->update('tbl_profile_request',$update_data);
    }

    


    
    
    
    
}
?> 
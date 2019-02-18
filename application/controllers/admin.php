<?php
session_start();
class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $_SESSION["per_page"]="10";
        if(!isset($_SESSION["admin_email"]))
        {
            redirect(base_url().'admin_login');
        }
    }
    
    public function index()
    {
        
        //$_SESSION["per_page"]="10";
        /*
        $page_data['page_title'] = "Welcome";
        $page_data['page_name']  = 'dashboard_view';
        $this->load->view('admin/index', $page_data);
        */
        $this->load->view('admin/slider_view_new');
    }

    public function manage_interest($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["interest_name"]=$this->input->post("txt_interest");
            $this->db->insert("tbl_interest",$data);
            redirect(base_url()."admin/manage_interest");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["interest_name"]=$this->input->post("txt_interest");
            $this->db->where("interest_id",$param3);
            $this->db->update("tbl_interest",$data);
            redirect(base_url()."admin/manage_interest");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_interest",array("interest_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("interest_id",$param2);
            $this->db->delete("tbl_interest");
            redirect(base_url()."admin/manage_interest");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_interest");

        $resultset=$this->db->get("tbl_interest");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_interest",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Interest View";
        $page_data["page_name"]="interest_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_hobby($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["hobby_name"]=$this->input->post("txt_hobby_name");
            $this->db->insert("tbl_hobby",$data);
            redirect(base_url()."admin/manage_hobby");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["hobby_name"]=$this->input->post("txt_hobby_name");
            $this->db->where("hobby_id",$param3);
            $this->db->update("tbl_hobby",$data);
            redirect(base_url()."admin/manage_hobby");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_hobby",array("hobby_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("hobby_id",$param2);
            $this->db->delete("tbl_hobby");
            redirect(base_url()."admin/manage_hobby");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_hobby");

        $resultset=$this->db->get("tbl_hobby");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_hobby",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Hobby View";
        $page_data["page_name"]="hobby_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_sms_provider($param1 = "", $param2 = "", $param3 = "")
    {
        if ($param1 == "create") {
            $data["sms_provider_name"]     = $this->input->post("txt_sms_provider_name");
            $data["sms_provider_url"]      = $this->input->post("txt_sms_provider_url");
            $data["sms_provider_user"]     = $this->input->post("txt_sms_provider_user");
            $data["sms_provider_password"] = $this->input->post("txt_sms_provider_password");
            $data["sms_provider_status"]   = $this->input->post("rdo_sms_provider_status");
            $this->db->insert("tbl_sms_provider", $data);
            redirect(base_url() . "admin/manage_sms_provider");
        }
        if ($param1 == "edit" && $param2 == "do_update") {
            $data["sms_provider_name"]     = $this->input->post("txt_sms_provider_name");
            $data["sms_provider_url"]      = $this->input->post("txt_sms_provider_url");
            $data["sms_provider_user"]     = $this->input->post("txt_sms_provider_user");
            $data["sms_provider_password"] = $this->input->post("txt_sms_provider_password");
            $data["sms_provider_status"]   = $this->input->post("rdo_sms_provider_status");
            $this->db->where("sms_provider_id", $param3);
            $this->db->update("tbl_sms_provider", $data);
            redirect(base_url() . "admin/manage_sms_provider");
        } else if ($param1 == "edit") {
            $page_data["edit_profile"] = $this->db->get_where("tbl_sms_provider", array(
                "sms_provider_id" => $param2
            ));
        }
        if ($param1 == "delete") {
            $this->db->where("sms_provider_id", $param2);
            $this->db->delete("tbl_sms_provider");
            redirect(base_url() . "admin/manage_sms_provider");
        }
        
        /* paging starts here */
        $per_page = "10";
        $this->db->limit($per_page, $param1);
        
        $page_data["resultset"] = $this->db->get("tbl_sms_provider");
        
        $resultset                  = $this->db->get("tbl_sms_provider");
        $total_rows                 = $resultset->num_rows();
        $page_data["paging_string"] = $this->paging_init("manage_sms_provider", $total_rows, $per_page);
        
        
        $page_data["start_position"] = intval($param1) + 1;
        $page_data["page_title"]     = "SMS Provider View";
        $page_data["page_name"]      = "sms_provider_view";
        
        $this->load->view("admin/index", $page_data);
    }
    
    public function manage_settings($param1 = "", $param2 = "")
    {
        if ($param1 == "edit" && $param2 == "do_update") {
            $data['settings_website_title'] = $this->input->post('txt_title');
            $data['settings_meta_keywords'] = $this->input->post('txt_keyword');
            $data['settings_meta_desc']     = $this->input->post('txt_desc');
            $data['settings_website_name']  = $this->input->post('txt_name');
            $data['settings_show_badges']   = $this->input->post('chk_show_badges');
            
            if ($_FILES["img_logo"]["error"] == 0) {
                $newname = $_FILES["img_logo"]["name"];
                $newname = $this->generate_random_name($newname);
                
                //$newname=rand(100000,10000000)."_".$_FILES["img_logo"]["name"];
                //$config['file_name']='logonew.png';
                $config["file_name"]     = $newname;
                $config['upload_path']   = 'files/admin/logo/';
                //$confing['upload_path']='./template/user/img/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_logo');
                $data['settings_logo'] = $newname;
                
                //$data['settings_logo']='logonew.png';
                
                $this->smart_resize_image("files/admin/logo/" . $newname, 262, 200, true, "files/admin/logo/" . $newname, false, false);
                
                
            }
            
            if ($_FILES["img_logo_small"]["error"] == 0) {
                
                $newname_small = $_FILES["img_logo_small"]["name"];
                $newname_small = $this->generate_random_name($newname_small);
                
                //$newname_small=rand(100000,10000000)."_".$_FILES["img_logo_small"]["name"];
                $config['file_name']     = $newname_small;
                $config['upload_path']   = 'files/admin/logo/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_logo_small');
                $data['settings_small_logo'] = $newname_small;
            }
            
            if ($_FILES["img_logo_footer"]["error"] == 0) {
                $newname_footer = $_FILES["img_logo_footer"]["name"];
                $newname_footer = $this->generate_random_name($newname_footer);
                
                //$newname_footer=rand(100000,10000000)."_".$_FILES["img_logo_footer"]["name"];
                $config['file_name']     = $newname_footer;
                $config['upload_path']   = 'files/admin/logo/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_logo_footer');
                $data['settings_footer_logo'] = $newname_small;
            }
            
            if ($_FILES["img_favicon"]["error"] == 0) {
                $newname_favicon = $_FILES["img_favicon"]["name"];
                $newname_favicon = $this->generate_random_name($newname_favicon);
                
                //$newname_favicon=rand(100000,10000000)."_".$_FILES["img_favicon"]["name"];
                $config['file_name']     = $newname_favicon;
                $config['upload_path']   = 'files/admin/logo/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg|ico';
                $config['max_width']     = '102400';
                $config['max_height']    = '76800';
                $config['max_size']      = 1024 * 1024 * 2;
                $this->load->library('upload');
                $this->upload->initialize($config);
                $this->upload->do_upload('img_favicon');
                $data['settings_favicon'] = $newname_small;
            }
            
            
            $data['settings_currency_code']   = $this->input->post('txt_code');
            $data['settings_currency_symbol'] = $this->input->post('txt_symbol');
            $data['settings_address']         = $this->input->post('txt_addr');
            $data['settings_phone']           = $this->input->post('txt_phone');
            $data['settings_fax']             = $this->input->post('txt_fax');
            $data['settings_contact_email']   = $this->input->post('txt_email');
            $data['settings_map_address']     = $this->input->post('txt_map_addr');
            $data['settings_toll_free']       = $this->input->post('txt_toll_free');
            $data['facebook_url']             = $this->input->post('txt_fb_url');
            $data['google_plus_url']          = $this->input->post('txt_google_url');
            $data['twitter_url']              = $this->input->post('txt_twitter_url');
            $data['pinterest_url']             = $this->input->post('txt_linkedin_url');
            $data['instagram_url']            = $this->input->post('txt_instagram_url');
            
            $data['settings_single_min_qty'] = $this->input->post('txt_single_min_qty');
            $data['settings_total_min_qty '] = $this->input->post('txt_total_min_qty');
            //$data['unit_name']=$this->input->post('txt_unit');
            $this->db->update("tbl_settings", $data);
            
            
            
            redirect(base_url() . 'index.php/admin/manage_settings');
        } else if ($param1 == "edit") {
            $page_data['edit_profile'] = $this->db->get('tbl_settings');
        }
        
        $page_data['function_name'] = 'manage_settings';
        $page_data['page_name']     = 'settings_view';
        $page_data['page_title']    = 'Website Settings';
        $page_data['settings']      = $this->db->get("tbl_settings");
        //echo $this->db->get("tbl_settings")->num_rows();
        $this->load->view('admin/index', $page_data);
    }

    public function manage_cms($param1 = "", $param2 = "", $param3 = "")
    {
        if ($param1 == "edit" && $param2 == "do_update") {
            $data["cms_about_us"]         = $this->input->post("txt_about_us");
            $data["cms_privacy_policy"]   = $this->input->post("txt_privacy_policy");
            $data["cms_copy_right"]       = $this->input->post("txt_copy_right");
            $data["cms_trademark"]        = $this->input->post("txt_trademark");
            $data["cms_terms_conditions"] = $this->input->post("txt_terms_conditions");
            $data["cms_contact_us"]       = $this->input->post("txt_contact_us");
            $data["cms_bank_details"]     = $this->input->post("txt_bank_details");
            
            $this->db->update("tbl_cms", $data);
            redirect(base_url() . "admin/manage_cms");
        } else if ($param1 == "edit") {
            $page_data["edit_profile"] = $this->db->get_where("tbl_cms", array(
                "" => $param2
            ));
        }
        if ($param1 == "delete") {
            $this->db->where("", $param2);
            $this->db->delete("tbl_cms");
            redirect(base_url() . "admin/manage_cms");
        }
        
        /* paging starts here */
        $per_page = "10";
        $this->db->limit($per_page, $param1);
        
        $page_data["resultset"] = $this->db->get("tbl_cms");
        
        $resultset                  = $this->db->get("tbl_cms");
        $total_rows                 = $resultset->num_rows();
        $page_data["paging_string"] = $this->paging_init("manage_cms", $total_rows, $per_page);
        
        
        $page_data["start_position"] = intval($param1) + 1;
        $page_data["page_title"]     = "CMS View";
        $page_data["page_name"]      = "cms_view";
        
        $this->load->view("admin/index", $page_data);
    }

    public function manage_slider($param1 = "", $param2 = "", $param3 = "")
    {
        if ($param1 == "create") {
            $data["slider_title"] = $this->input->post("txt_slider_title");
            if ($_FILES["img_slider"]["error"] == 0) {
                $newname = $_FILES["img_slider"]["name"];
                $newname = $this->generate_random_name($newname);
                
                $config["file_name"]     = $newname;
                $config["upload_path"]   = "files/user/slider/";
                $config["allowed_types"] = "gif|jpg|png|bmp|jpeg|ico|jpeg";
                $config["max_width"]     = "102400";
                $config["max_height"]    = "76800";
                $config["max_size"]      = 1024 * 1024 * 2;
                
                $this->load->library("upload");
                $this->upload->initialize($config);
                $this->upload->do_upload("img_slider");
                
                $data["slider_image"] = $newname;
                $this->smart_resize_image("files/user/slider/" . $newname, 262, 200, true, "files/user/slider/thumb/" . $newname, false, false);
            }
            $data["slider_href"]             = $this->input->post("txt_slider_href");
            $data["slider_order"]            = $this->input->post("txt_slider_order");
            $data["slider_content"]          = $this->input->post("txt_slider_content");
            $data["slider_content_position"] = $this->input->post("txt_slider_position");
            $data["slider_status"]           = $this->input->post("rdo_status");
            $this->db->insert("tbl_slider", $data);
            redirect(base_url() . "admin/manage_slider");
        }
        if ($param1 == "edit" && $param2 == "do_update") {
            $data["slider_title"] = $this->input->post("txt_slider_title");
            if ($_FILES["img_slider"]["error"] == 0) {
                $newname = $_FILES["img_slider"]["name"];
                $newname = $this->generate_random_name($newname);
                
                $config["file_name"]     = $newname;
                $config["upload_path"]   = "files/user/slider/";
                $config["allowed_types"] = "gif|jpg|png|bmp|jpeg|ico|jpeg";
                $config["max_width"]     = "102400";
                $config["max_height"]    = "76800";
                $config["max_size"]      = 1024 * 1024 * 2;
                
                $this->load->library("upload");
                $this->upload->initialize($config);
                $this->upload->do_upload("img_slider");
                
                $data["slider_image"] = $newname;
                $this->smart_resize_image("files/user/slider/" . $newname, 262, 200, true, "files/user/slider/thumb/" . $newname, false, false);
            }
            $data["slider_href"]             = $this->input->post("txt_slider_href");
            $data["slider_order"]            = $this->input->post("txt_slider_order");
            $data["slider_content"]          = $this->input->post("txt_slider_content");
            $data["slider_content_position"] = $this->input->post("txt_slider_position");
            $data["slider_status"]           = $this->input->post("rdo_status");
            $this->db->where("slider_id", $param3);
            $this->db->update("tbl_slider", $data);
            redirect(base_url() . "admin/manage_slider");
        } else if ($param1 == "edit") {
            $page_data["edit_profile"] = $this->db->get_where("tbl_slider", array(
                "slider_id" => $param2
            ));
        }
        if ($param1 == "delete") {
            $this->db->where("slider_id", $param2);
            $this->db->delete("tbl_slider");
            redirect(base_url() . "admin/manage_slider");
        }
        
        /* paging starts here */
        $per_page = "10";
        $this->db->limit($per_page, $param1);
        
        $page_data["resultset"] = $this->db->get("tbl_slider");
        
        $resultset                  = $this->db->get("tbl_slider");
        $total_rows                 = $resultset->num_rows();
        $page_data["paging_string"] = $this->paging_init("manage_slider", $total_rows, $per_page);
        
        
        $page_data["start_position"] = intval($param1) + 1;
        $page_data["page_title"]     = "Slider";
        $page_data["page_name"]      = "slider_view";
        
        $this->load->view("admin/index", $page_data);
    }

    public function manage_religion($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["religion_name"]=$this->input->post("txt_religion_name");$data["religion_sort_order"]=$this->input->post("txt_religon_sort_order");$data["religion_status"]=$this->input->post("txt_religion_status");
            $this->db->insert("tbl_religion",$data);
            redirect(base_url()."admin/manage_religion");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["religion_name"]=$this->input->post("txt_religion_name");$data["religion_sort_order"]=$this->input->post("txt_religon_sort_order");$data["religion_status"]=$this->input->post("txt_religion_status");
            $this->db->where("religion_id",$param3);
            $this->db->update("tbl_religion",$data);
            redirect(base_url()."admin/manage_religion");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_religion",array("religion_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("religion_id",$param2);
            $this->db->delete("tbl_religion");
            redirect(base_url()."admin/manage_religion");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_religion");

        $resultset=$this->db->get("tbl_religion");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_religion",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Religion View";
        $page_data["page_name"]="religion_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_caste($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["caste_name"]=$this->input->post("txt_caste_name");$data["caste_sort_order"]=$this->input->post("txt_caste_sort_order");$data["caste_status"]=$this->input->post("rdo_caste_status");$data["religion_id"]=$this->input->post("cmb_religion");
            $this->db->insert("tbl_caste",$data);
            redirect(base_url()."admin/manage_caste");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["caste_name"]=$this->input->post("txt_caste_name");$data["caste_sort_order"]=$this->input->post("txt_caste_sort_order");$data["caste_status"]=$this->input->post("rdo_caste_status");$data["religion_id"]=$this->input->post("cmb_religion");
            $this->db->where("caste_id",$param3);
            $this->db->update("tbl_caste",$data);
            redirect(base_url()."admin/manage_caste");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_caste",array("caste_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("caste_id",$param2);
            $this->db->delete("tbl_caste");
            redirect(base_url()."admin/manage_caste");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_religion","tbl_caste.religion_id=tbl_religion.religion_id");
        $page_data["resultset"]=$this->db->get("tbl_caste");

        $resultset=$this->db->get("tbl_caste");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_caste",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Caste View";
        $page_data["page_name"]="caste_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_country($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["country_name"]=$this->input->post("txt_country_name");$data["country_code"]=$this->input->post("txt_country_code");$data["country_std_code"]=$this->input->post("txt_country_std_code");
            $this->db->insert("tbl_country",$data);
            redirect(base_url()."admin/manage_country");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["country_name"]=$this->input->post("txt_country_name");$data["country_code"]=$this->input->post("txt_country_code");$data["country_std_code"]=$this->input->post("txt_country_std_code");
            $this->db->where("country_id",$param3);
            $this->db->update("tbl_country",$data);
            redirect(base_url()."admin/manage_country");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_country",array("country_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("country_id",$param2);
            $this->db->delete("tbl_country");
            redirect(base_url()."admin/manage_country");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_country");

        $resultset=$this->db->get("tbl_country");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_country",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Country View";
        $page_data["page_name"]="country_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_state($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["state_name"]=$this->input->post("txt_state_name");$data["country_id"]=$this->input->post("cmb_country");
            $this->db->insert("tbl_state",$data);
            redirect(base_url()."admin/manage_state");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["state_name"]=$this->input->post("txt_state_name");$data["country_id"]=$this->input->post("cmb_country");
            $this->db->where("state_id",$param3);
            $this->db->update("tbl_state",$data);
            redirect(base_url()."admin/manage_state");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_state",array("state_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("state_id",$param2);
            $this->db->delete("tbl_state");
            redirect(base_url()."admin/manage_state");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_country","tbl_state.country_id=tbl_country.country_id");
        $page_data["resultset"]=$this->db->get("tbl_state");

        $resultset=$this->db->get("tbl_state");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_state",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="State View";
        $page_data["page_name"]="state_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_city($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["city_name"]=$this->input->post("txt_city_name");$data["state_id"]=$this->input->post("cmb_state");
            $this->db->insert("tbl_city",$data);
            redirect(base_url()."admin/manage_city");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["city_name"]=$this->input->post("txt_city_name");$data["state_id"]=$this->input->post("cmb_state");
            $this->db->where("city_id",$param3);
            $this->db->update("tbl_city",$data);
            redirect(base_url()."admin/manage_city");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_city",array("city_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("city_id",$param2);
            $this->db->delete("tbl_city");
            redirect(base_url()."admin/manage_city");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_state","tbl_city.state_id=tbl_state.state_id");
        $page_data["resultset"]=$this->db->get("tbl_city");

        $resultset=$this->db->get("tbl_city");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_city",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="City View";
        $page_data["page_name"]="city_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_member_photo($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["member_id"]=$this->input->post("cmb_member");
                if($_FILES["img_photo1"]["error"]==0)
                {
                    $newname = $_FILES["img_photo1"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_photo1");

                    $data["member_photo1"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                $data["member_photo1_status"]=$this->input->post("rdo_photo1_status");
                if($_FILES["img_photo2"]["error"]==0)
                {
                    $newname = $_FILES["img_photo2"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_photo2");

                    $data["member_photo2"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                $data["member_photo2_status"]=$this->input->post("rdo_photo2_status");
                if($_FILES["img_photo3"]["error"]==0)
                {
                    $newname = $_FILES["img_photo3"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_photo3");

                    $data["member_photo3"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                $data["member_photo3_status"]=$this->input->post("rdo_photo3_status");
                if($_FILES["img_scanned_horroscope"]["error"]==0)
                {
                    $newname = $_FILES["img_scanned_horroscope"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_scanned_horroscope");

                    $data["member_scanned_horroscope"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                
            $this->db->insert("tbl_member_photo",$data);
            redirect(base_url()."admin/manage_member_photo");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["member_id"]=$this->input->post("cmb_member");
                if($_FILES["img_photo1"]["error"]==0)
                {
                    $newname = $_FILES["img_photo1"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_photo1");

                    $data["member_photo1"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                $data["member_photo1_status"]=$this->input->post("rdo_photo1_status");
                if($_FILES["img_photo2"]["error"]==0)
                {
                    $newname = $_FILES["img_photo2"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_photo2");

                    $data["member_photo2"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                $data["member_photo2_status"]=$this->input->post("rdo_photo2_status");
                if($_FILES["img_photo3"]["error"]==0)
                {
                    $newname = $_FILES["img_photo3"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_photo3");

                    $data["member_photo3"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                $data["member_photo3_status"]=$this->input->post("rdo_photo3_status");
                if($_FILES["img_scanned_horroscope"]["error"]==0)
                {
                    $newname = $_FILES["img_scanned_horroscope"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/member/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_scanned_horroscope");

                    $data["member_scanned_horroscope"]=$newname;
                        $this->smart_resize_image("files/member/".$newname,262,200,true, "files/member/thumb/".$newname,false,false);
                }
                
            $this->db->where("member_photo_id",$param3);
            $this->db->update("tbl_member_photo",$data);
            redirect(base_url()."admin/manage_member_photo");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_member_photo",array("member_photo_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("member_photo_id",$param2);
            $this->db->delete("tbl_member_photo");
            redirect(base_url()."admin/manage_member_photo");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_member","tbl_member_photo.member_id=tbl_member.member_id");
        $page_data["resultset"]=$this->db->get("tbl_member_photo");

        $resultset=$this->db->get("tbl_member_photo");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_member_photo",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Member Photo View";
        $page_data["page_name"]="member_photo_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_success_story($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["success_story_bride_name"]=$this->input->post("txt_bride_name");$data["success_story_bride_matri_id"]=$this->input->post("txt_bride_matrimonial_id");$data["success_story_groom_name"]=$this->input->post("txt_groom_name");$data["success_story_groom_matri_id"]=$this->input->post("txt_groom_matrimonial_id");$data["success_story_wedding_date"]=$this->input->post("txt_wedding_date");$data["success_story_mobile_number"]=$this->input->post("txt_mobile_number");$data["success_story_contact_address"]=$this->input->post("txt_contact_address");$data["success_story_comments"]=$this->input->post("txt_comments");
                if($_FILES["img_wedding_photo"]["error"]==0)
                {
                    $newname = $_FILES["img_wedding_photo"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/success_story/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_wedding_photo");

                    $data["success_story_wedding_photo"]=$newname;
                        $this->smart_resize_image("files/success_story/".$newname,262,200,true, "files/success_story/thumb/".$newname,false,false);
                }
                $data["success_story_status"]=$this->input->post("rdo_status");
            $this->db->insert("tbl_success_story",$data);
            redirect(base_url()."admin/manage_success_story");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["success_story_bride_name"]=$this->input->post("txt_bride_name");$data["success_story_bride_matri_id"]=$this->input->post("txt_bride_matrimonial_id");$data["success_story_groom_name"]=$this->input->post("txt_groom_name");$data["success_story_groom_matri_id"]=$this->input->post("txt_groom_matrimonial_id");$data["success_story_wedding_date"]=$this->input->post("txt_wedding_date");$data["success_story_mobile_number"]=$this->input->post("txt_mobile_number");$data["success_story_contact_address"]=$this->input->post("txt_contact_address");$data["success_story_comments"]=$this->input->post("txt_comments");
                if($_FILES["img_wedding_photo"]["error"]==0)
                {
                    $newname = $_FILES["img_wedding_photo"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/success_story/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_wedding_photo");

                    $data["success_story_wedding_photo"]=$newname;
                        $this->smart_resize_image("files/success_story/".$newname,262,200,true, "files/success_story/thumb/".$newname,false,false);
                }
                $data["success_story_status"]=$this->input->post("rdo_status");
            $this->db->where("success_story_id",$param3);
            $this->db->update("tbl_success_story",$data);
            redirect(base_url()."admin/manage_success_story");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_success_story",array("success_story_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("success_story_id",$param2);
            $this->db->delete("tbl_success_story");
            redirect(base_url()."admin/manage_success_story");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_success_story");

        $resultset=$this->db->get("tbl_success_story");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_success_story",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Success Story View";
        $page_data["page_name"]="success_story_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_staff($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["staff_name"]=$this->input->post("txt_staff_name");$data["staff_username"]=$this->input->post("txt_staff_username");$data["staff_email"]=$this->input->post("txt_staff_email");$data["staff_password"]=$this->input->post("txt_staff_password");$data["staff_about"]=$this->input->post("txt_staff_about");$data["staff_status"]=$this->input->post("rdo_staff_status");$data["staff_doj"]=$this->input->post("txt_staff_doj");$data["staff_last_login_date"]=$this->input->post("txt_staff_last_login");
            $this->db->insert("tbl_staff",$data);
            redirect(base_url()."admin/manage_staff");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["staff_name"]=$this->input->post("txt_staff_name");$data["staff_username"]=$this->input->post("txt_staff_username");$data["staff_email"]=$this->input->post("txt_staff_email");$data["staff_password"]=$this->input->post("txt_staff_password");$data["staff_about"]=$this->input->post("txt_staff_about");$data["staff_status"]=$this->input->post("rdo_staff_status");$data["staff_doj"]=$this->input->post("txt_staff_doj");$data["staff_last_login_date"]=$this->input->post("txt_staff_last_login");
            $this->db->where("staff_id",$param3);
            $this->db->update("tbl_staff",$data);
            redirect(base_url()."admin/manage_staff");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_staff",array("staff_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("staff_id",$param2);
            $this->db->delete("tbl_staff");
            redirect(base_url()."admin/manage_staff");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_staff");

        $resultset=$this->db->get("tbl_staff");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_staff",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Staff View";
        $page_data["page_name"]="staff_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_mother_tongue($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["mother_tongue_name"]=$this->input->post("txt_mother_tongue");
            $this->db->insert("tbl_mother_tongue",$data);
            redirect(base_url()."admin/manage_mother_tongue");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["mother_tongue_name"]=$this->input->post("txt_mother_tongue");
            $this->db->where("mother_tongue_id",$param3);
            $this->db->update("tbl_mother_tongue",$data);
            redirect(base_url()."admin/manage_mother_tongue");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_mother_tongue",array("mother_tongue_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("mother_tongue_id",$param2);
            $this->db->delete("tbl_mother_tongue");
            redirect(base_url()."admin/manage_mother_tongue");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_mother_tongue");

        $resultset=$this->db->get("tbl_mother_tongue");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_mother_tongue",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Mother Tongue View";
        $page_data["page_name"]="mother_tongue_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_subscribe($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["subscribe_name"]=$this->input->post("txt_subscribe_name");$data["subscribe_email"]=$this->input->post("txt_subscribe_email");$data["subscribe_phone"]=$this->input->post("txt_subscribe_phone");$data["subscribe_status"]=$this->input->post("rdo_subscribe_status");$data["member_id"]=$this->input->post("cmb_member");
            $this->db->insert("tbl_subscribe",$data);
            redirect(base_url()."admin/manage_subscribe");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["subscribe_name"]=$this->input->post("txt_subscribe_name");$data["subscribe_email"]=$this->input->post("txt_subscribe_email");$data["subscribe_phone"]=$this->input->post("txt_subscribe_phone");$data["subscribe_status"]=$this->input->post("rdo_subscribe_status");$data["member_id"]=$this->input->post("cmb_member");
            $this->db->where("subscribe_id",$param3);
            $this->db->update("tbl_subscribe",$data);
            redirect(base_url()."admin/manage_subscribe");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_subscribe",array("subscribe_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("subscribe_id",$param2);
            $this->db->delete("tbl_subscribe");
            redirect(base_url()."admin/manage_subscribe");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_member","tbl_subscribe.member_id=tbl_member.member_id");
        $page_data["resultset"]=$this->db->get("tbl_subscribe");

        $resultset=$this->db->get("tbl_subscribe");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_subscribe",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Subscribe View";
        $page_data["page_name"]="subscribe_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_sub_email_campaign($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["campaign_subject"]=$this->input->post("txt_campaign_subject");$data["campaign_message"]=$this->input->post("txt_campaign_message");$data["campaign_status"]=$this->input->post("rdo_campaign_status");$data["campaign_date_time"]=$this->input->post("txt_campaigne_date");
            $this->db->insert("tbl_subscribe_email_campaign",$data);
            redirect(base_url()."admin/manage_sub_email_campaign");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["campaign_subject"]=$this->input->post("txt_campaign_subject");$data["campaign_message"]=$this->input->post("txt_campaign_message");$data["campaign_status"]=$this->input->post("rdo_campaign_status");$data["campaign_date_time"]=$this->input->post("txt_campaigne_date");
            $this->db->where("campaign_id",$param3);
            $this->db->update("tbl_subscribe_email_campaign",$data);
            redirect(base_url()."admin/manage_sub_email_campaign");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_subscribe_email_campaign",array("campaign_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("campaign_id",$param2);
            $this->db->delete("tbl_subscribe_email_campaign");
            redirect(base_url()."admin/manage_sub_email_campaign");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_subscribe_email_campaign");

        $resultset=$this->db->get("tbl_subscribe_email_campaign");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_sub_email_campaign",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Subscribe Email Campaign View";
        $page_data["page_name"]="sub_email_campaign_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_subscribe_email($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["campaign_id"]=$this->input->post("cmb_campaign");$data["member_id"]=$this->input->post("cmb_member");
            $this->db->insert("tbl_subscribe_email",$data);
            redirect(base_url()."admin/manage_subscribe_email");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["campaign_id"]=$this->input->post("cmb_campaign");$data["member_id"]=$this->input->post("cmb_member");
            $this->db->where("subscribe_email_id",$param3);
            $this->db->update("tbl_subscribe_email",$data);
            redirect(base_url()."admin/manage_subscribe_email");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_subscribe_email",array("subscribe_email_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("subscribe_email_id",$param2);
            $this->db->delete("tbl_subscribe_email");
            redirect(base_url()."admin/manage_subscribe_email");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_subscribe_email_campaign","tbl_subscribe_email.campaign_id=tbl_subscribe_email_campaign.campaign_id");$this->db->join("tbl_member","tbl_subscribe_email.member_id=tbl_member.member_id");
        $page_data["resultset"]=$this->db->get("tbl_subscribe_email");

        $resultset=$this->db->get("tbl_subscribe_email");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_subscribe_email",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Subscribe Email View";
        $page_data["page_name"]="subscribe_email_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_banner_ads($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["banner_place"]=$this->input->post("rdo_banner_place");$data["banner_href"]=$this->input->post("txt_banner_href");$data["banner_start_date"]=$this->input->post("txt_banner_start_date");$data["banner_end_date"]=$this->input->post("txt_banner_end_date");
                if($_FILES["img_banner_ad"]["error"]==0)
                {
                    $newname = $_FILES["img_banner_ad"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/banner_ad/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_banner_ad");

                    $data["banner_image"]=$newname;
                        $this->smart_resize_image("files/banner_ad/".$newname,262,200,true, "files/banner_ad/thumb/".$newname,false,false);
                }
                $data["banner_amount"]=$this->input->post("txt_banner_amount");$data["banner_status"]=$this->input->post("rdo_banner_status");
            $this->db->insert("tbl_banner_ads",$data);
            redirect(base_url()."admin/manage_banner_ads");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["banner_place"]=$this->input->post("rdo_banner_place");$data["banner_href"]=$this->input->post("txt_banner_href");$data["banner_start_date"]=$this->input->post("txt_banner_start_date");$data["banner_end_date"]=$this->input->post("txt_banner_end_date");
                if($_FILES["img_banner_ad"]["error"]==0)
                {
                    $newname = $_FILES["img_banner_ad"]["name"];
                    $newname = $this->generate_random_name($newname);
                    
                    $config["file_name"]=$newname;
                    $config["upload_path"]="files/banner_ad/";
                        $config["allowed_types"]="gif|jpg|png|bmp|jpeg|ico|jpeg";
                    $config["max_width"]="102400";
                    $config["max_height"]="76800";
                    $config["max_size"]=1024*1024*2;
                    
                    $this->load->library("upload");
                    $this->upload->initialize($config);
                    $this->upload->do_upload("img_banner_ad");

                    $data["banner_image"]=$newname;
                        $this->smart_resize_image("files/banner_ad/".$newname,262,200,true, "files/banner_ad/thumb/".$newname,false,false);
                }
                $data["banner_amount"]=$this->input->post("txt_banner_amount");$data["banner_status"]=$this->input->post("rdo_banner_status");
            $this->db->where("banner_id",$param3);
            $this->db->update("tbl_banner_ads",$data);
            redirect(base_url()."admin/manage_banner_ads");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_banner_ads",array("banner_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("banner_id",$param2);
            $this->db->delete("tbl_banner_ads");
            redirect(base_url()."admin/manage_banner_ads");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_banner_ads");

        $resultset=$this->db->get("tbl_banner_ads");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_banner_ads",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Banner Ads View";
        $page_data["page_name"]="banner_ads_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_plan($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["plan_name"]=$this->input->post("txt_plan_name");$data["plan_profile_views"]=$this->input->post("txt_plan_profile_view_limit");$data["plan_days_validity"]=$this->input->post("txt_plan_validity_days");$data["plan_amount"]=$this->input->post("txt_plan_amount");$data["plan_description"]=$this->input->post("txt_plan_description");$data["plan_status"]=$this->input->post("rdo_plan_status");
            $this->db->insert("tbl_plan",$data);
            redirect(base_url()."admin/manage_plan");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["plan_name"]=$this->input->post("txt_plan_name");$data["plan_profile_views"]=$this->input->post("txt_plan_profile_view_limit");$data["plan_days_validity"]=$this->input->post("txt_plan_validity_days");$data["plan_amount"]=$this->input->post("txt_plan_amount");$data["plan_description"]=$this->input->post("txt_plan_description");$data["plan_status"]=$this->input->post("rdo_plan_status");
            $this->db->where("plan_id",$param3);
            $this->db->update("tbl_plan",$data);
            redirect(base_url()."admin/manage_plan");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_plan",array("plan_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("plan_id",$param2);
            $this->db->delete("tbl_plan");
            redirect(base_url()."admin/manage_plan");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        
        $page_data["resultset"]=$this->db->get("tbl_plan");

        $resultset=$this->db->get("tbl_plan");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_plan",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Plan View";
        $page_data["page_name"]="plan_view";

        $this->load->view("admin/index",$page_data);
    } 

    public function manage_member_plan($param1="",$param2="",$param3="")
    {
        if($param1=="create")
        {
            $data["member_id"]=$this->input->post("cmb_member");$data["plan_id"]=$this->input->post("cmb_plan");$data["member_plan_start_date"]=$this->input->post("txt_member_plan_start_date");$data["member_plan_end_date"]=$this->input->post("txt_member_plan_end_date");$data["member_plan_views"]=$this->input->post("txt_member_plan_views");$data["member_plan_status"]=$this->input->post("txt_member_plan_status");
            $this->db->insert("tbl_member_plan",$data);
            redirect(base_url()."admin/manage_member_plan");
        }
        if($param1=="edit" && $param2=="do_update")
        {
            $data["member_id"]=$this->input->post("cmb_member");$data["plan_id"]=$this->input->post("cmb_plan");$data["member_plan_start_date"]=$this->input->post("txt_member_plan_start_date");$data["member_plan_end_date"]=$this->input->post("txt_member_plan_end_date");$data["member_plan_views"]=$this->input->post("txt_member_plan_views");$data["member_plan_status"]=$this->input->post("txt_member_plan_status");
            $this->db->where("member_plan_id",$param3);
            $this->db->update("tbl_member_plan",$data);
            redirect(base_url()."admin/manage_member_plan");
        }
        else if($param1=="edit")
        {
            $page_data["edit_profile"]=$this->db->get_where("tbl_member_plan",array("member_plan_id"=>$param2));
        }
        if($param1=="delete")
        {
            $this->db->where("member_plan_id",$param2);
            $this->db->delete("tbl_member_plan");
            redirect(base_url()."admin/manage_member_plan");
        }

        /* paging starts here */
        $per_page=$_SESSION["per_page"];
        $this->db->limit($per_page,$param1);
        $this->db->join("tbl_member","tbl_member_plan.member_id=tbl_member.member_id");$this->db->join("tbl_plan","tbl_member_plan.plan_id=tbl_plan.plan_id");
        $page_data["resultset"]=$this->db->get("tbl_member_plan");

        $resultset=$this->db->get("tbl_member_plan");
        $total_rows=$resultset->num_rows();
        $page_data["paging_string"]=$this->paging_init("manage_member_plan",$total_rows,$per_page);


        $page_data["start_position"]=intval($param1)+1;    
        $page_data["page_title"]="Member Plan View";
        $page_data["page_name"]="member_plan_view";

        $this->load->view("admin/index",$page_data);
    } 



    //common functions starts here
    
    public function paging_init($controller_name, $total_row, $per_page)
    {
        /* pagination class starts here */
        //echo $controller_name;
        $this->load->library('pagination');
        $config['base_url']   = base_url() . 'admin/' . $controller_name;
        $config['total_rows'] = $total_row;
        $config['per_page']   = $per_page;
        
        // this extra 
        //$config['uri_segment'] = 4;
        //$config['use_page_numbers'] = TRUE;
        //$config['page_query_string'] = TRUE;
        // this extra ends here
        
        $config['first_tag_open']  = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
        $config['cur_tag_open']    = "<li class='active'><span>";
        $config['cur_tag_close']   = "</span></li>";
        
        $this->pagination->initialize($config);
        $paging_string = $this->pagination->create_links();
        return $paging_string;
        /* pagination class ends here */
    }
    
    public function generate_random_name($filename)
    {
        $ext         = pathinfo($filename, PATHINFO_EXTENSION);
        //echo $ext;
        //$newfilename = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5) . "_" . substr(str_shuffle('aBcEeFgHiJkLmNoPqRstUvWxYz0123456789'), 0, 5) . "_" . rand(1000000, 100000000) .  "_".str_replace(" ", "", $filename)."." . $ext;
        $newfilename = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5) . "_" . substr(str_shuffle('aBcEeFgHiJkLmNoPqRstUvWxYz0123456789'), 0, 5) . "_" . rand(1000000, 100000000) . "_" . str_replace(" ", "", $filename);
        return $newfilename;
    }
    
    public function smart_resize_image($file, $width = 0, $height = 0, $proportional = false, $output = 'file', $delete_original = true, $use_linux_commands = false)
    {
        if ($height <= 0 && $width <= 0) {
            return false;
        }
        
        $info  = getimagesize($file);
        $image = '';
        
        $final_width  = 0;
        $final_height = 0;
        list($width_old, $height_old) = $info;
        
        if ($proportional) {
            if ($width == 0)
                $factor = $height / $height_old;
            elseif ($height == 0)
                $factor = $width / $width_old;
            else
                $factor = min($width / $width_old, $height / $height_old);
            
            $final_width  = round($width_old * $factor);
            $final_height = round($height_old * $factor);
            
        } else {
            $final_width  = ($width <= 0) ? $width_old : $width;
            $final_height = ($height <= 0) ? $height_old : $height;
        }
        
        switch ($info[2]) {
            case IMAGETYPE_GIF:
                $image = imagecreatefromgif($file);
                break;
            case IMAGETYPE_JPEG:
                $image = imagecreatefromjpeg($file);
                break;
            case IMAGETYPE_PNG:
                $image = imagecreatefrompng($file);
                break;
            default:
                return false;
        }
        
        $image_resized = imagecreatetruecolor($final_width, $final_height);
        
        if (($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG)) {
            $trnprt_indx = imagecolortransparent($image);
            
            // If we have a specific transparent color
            if ($trnprt_indx >= 0) {
                
                // Get the original image's transparent color's RGB values
                $trnprt_color = imagecolorsforindex($image, $trnprt_indx);
                
                // Allocate the same color in the new image resource
                $trnprt_indx = imagecolorallocate($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
                
                // Completely fill the background of the new image with allocated color.
                imagefill($image_resized, 0, 0, $trnprt_indx);
                
                // Set the background color for new image to transparent
                imagecolortransparent($image_resized, $trnprt_indx);
                
                
            }
            // Always make a transparent background color for PNGs that don't have one allocated already
            elseif ($info[2] == IMAGETYPE_PNG) {
                
                // Turn off transparency blending (temporarily)
                imagealphablending($image_resized, false);
                
                // Create a new transparent color for image
                $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
                
                // Completely fill the background of the new image with allocated color.
                imagefill($image_resized, 0, 0, $color);
                
                // Restore transparency blending
                imagesavealpha($image_resized, true);
            }
        }
        
        imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);
        
        if ($delete_original) {
            if ($use_linux_commands)
                exec('rm ' . $file);
            else
                @unlink($file);
        }
        
        switch (strtolower($output)) {
            case 'browser':
                $mime = image_type_to_mime_type($info[2]);
                header("Content-type: $mime");
                $output = NULL;
                break;
            case 'file':
                $output = $file;
                break;
            case 'return':
                return $image_resized;
                break;
            default:
                break;
        }
        
        switch ($info[2]) {
            case IMAGETYPE_GIF:
                imagegif($image_resized, $output);
                break;
            case IMAGETYPE_JPEG:
                imagejpeg($image_resized, $output);
                break;
            case IMAGETYPE_PNG:
                imagepng($image_resized, $output);
                break;
            default:
                return false;
        }
        
        return true;
    }

    public function manage_unzip()
    {
        $data['volume_id']=$this->input->post('txt_volume_id');
        $newname = $_FILES["zip_file"]["name"];
        $newname = $this->generate_random_name($newname);
        $config['file_name']=$newname;
        $config['upload_path']='files/admin/product_zip/';
        $config['allowed_types']='zip';
        $config['max_width']='102400';
        $config['max_height']='76800';
        $config['max_size']=1024*1024*20;
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->upload->do_upload('zip_file');

        $zip = new ZipArchive;
        $res = $zip->open('files/admin/product_zip/'.$newname);
        if ($res === TRUE) 
        {
            $zip->extractTo('files/admin/product/');
            for($i=0; $i<$zip->numFiles; $i++)
            {
                $oldname = $zip->getNameIndex($i);
                $newname = rand(10000,1000000)."_".str_replace(" ", "_", $zip->getNameIndex($i));
                rename('files/admin/product/'.$oldname,'files/admin/product/'.$newname);
                $this->smart_resize_image("files/admin/product/" . $newname, 262, 200, true, "files/admin/product/thumb/" . $newname, false, false);
                $this->smart_resize_image("files/admin/product/" . $newname, 600, 615, true, "files/admin/product/med/" . $newname, false, false);
                $data['volume_product_image']=$newname;
                $data['volume_product_status']='Active';
                $this->db->insert('tbl_volume_product',$data);
            }
            $zip->close();
            $page_data['category_msg']='<h2 style="color:green">Catalogue Product Images Uploaded Successfully</h2>';
        } else {
            $page_data['category_msg']='<h2 style="color:red">There is problem while uploading</h2>';
        }

        $url=$_SERVER['HTTP_REFERER'];
        redirect($url);
    }
    
    public function readxls($file)
    {
        $this->load->library('excel');
        //read file from path
        $objPHPExcel     = PHPExcel_IOFactory::load($file);
        //get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
        //extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
            $column     = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row        = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }
        //send the data in an array format
        $data['header'] = $header;
        $data['values'] = $arr_data;
        
        return $data;
        
        /*      echo "<table>";
        foreach($data['header'][1] as $key => $value){
        echo "<th>".$value."</th>";
        }
        
        foreach($data['values'] as $datakey=>$datavalue)
        {
        echo "<tr>";
        foreach($datavalue as $key=>$value)
        {
        echo "<td>".$value."</td>";
        }
        echo "</tr>";
        }
        echo "</table>";
        */
    }

    //common functions ends here
}
?>
<?php

    Class Category{

        public function create($DATA){

            $DB = Database::getInstance();

            $arr['category'] = ucwords($DATA->data);

            if(!preg_match("/[a-zA-Z ]+$/",trim($arr['category']))){

                $_SESSION['error'] = "Please enter a valid category name";

            }

            if(!isset($_SESSION['error']) || $_SESSION['error'] == ""){

                $query = "insert into categories (category) values (:category)";
                $check = $DB->write($query,$arr);

                if($check){
                    
                    return true;
                }
                
            }

            return false;
            
        }

        public function edit($DATA){
            
        }

        public function delete($DATA){
            
        }

        public function get_all(){
            
            $DB = Database::newInstance();
            return $DB->read("select * from categories order by id desc");
        }

        public function make_table($cats){

            $result="";
            if(is_array($cats)){

                foreach ($cats as $cat_row){
                    
                    $cat_row->disabled = $cat_row->disabled ? "Disabled" : "Enabled";
                    $args = $cat_row->id.",'".$cat_row->disabled."'";
                    $result .= '
                    <td><a href="basic_table.html#">'.$cat_row->category.'</a></td>
                    <td><span  onclick="disable_row('.$args.')"class="label label-info label-mini" style="cursor:pointer;">'.$cat_row->disabled.'</span></td>
                    <td>
                        <button onclick="edit_row('.$cat_row->id.')" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button onclick="delete_row('.$cat_row->id.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                    </td>
                    ';
                        
                   
                    $result .= "</tr>";
                }
            }

            return $result;
        }
    }
?>
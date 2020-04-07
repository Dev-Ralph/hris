<?php
class User{
    private $_db,
            $_data,
            $_sessionName,
            $_cookieName,
            $_isLoggedIn;


    public function __construct($user = null){
        $this->_db = DB::getInstance();
        $this->_sessionName= Conf::get('session/session_name');
        $this->_cookieName= Conf::get('remember/cookie_name');
        if(!$user){
            if(Session::exists($this->_sessionName)){
                $user= Session::get($this->_sessionName);
                if($this->find($user)){
                    $this->_isLoggedIn = true;
                }else{

                }
            }
        }else {
            $this->find($user);
        }
    }
    public function create($fields){
        if($this->_db->insert('tbl_accounts',$fields)){
            return true;
        }else{
            return false;
        }
    }

    public function find($user=null){
        if($user){
            $field=(is_numeric($user)) ? 'id' :'email';
            $data = $this->_db->get('tbl_accounts',array($field,'=',$user));
            if($data->count()){
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }
    public function login($email=null, $password=null,$remember=false){
        if(!$email && !$password && $this->exists()){
            Session::put($this->_sessionName,$this->data()->id);

        }else{
            $user = $this->find($email);
            if($user){
                if($this->data()->password === Hash::make($password,$this->data()->salt)){
                    Session::put($this->_sessionName,$this->data()->id);
                    if($remember){
                        $hash = Hash::unique();
                        $hashCheck = $this->_db->get('user_session',array('user_id','=',$this->data()->id));
                        if(!$hashCheck->count()){
                                $this->_db->insert('user_session',array(
                                'user_id'=>$this->data()->id,
                                'hash'=>$hash
                            ));
                        }else{
                            $hash =$hashCheck->first()->hash;
                        }
                        Cookie::put($this->_cookieName,$hash,Conf::get('remember/cookie_expiry'));
                    }
                    return true;
                }
            }
        }
        return false;
    }
    public function exists(){
        return (!empty($this->_data)) ? true :false;
    }
    public function data(){
        return $this->_data;
    }
    public function isLoggedIn(){
        return $this->_isLoggedIn;

    }
    public function logout(){
        $this->_db->delete('user_session',array('user_id','=',$this->data()->id));
        Cookie::delete($this->_sessionName);
        Session::delete($this->_sessionName);
    }
    public function update($fields = array(),$id=null){
        if(!$id && $this->isLoggedIn()){
            $id = $this->data()->id;
        }
        if(!$this->_db->update('tbl_accounts',$id,$fields)){
            throw new Exception('There was a problem updating your profile');
        }else{

        }
    }
}
 ?>
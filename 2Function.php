<?php

class TwoFunction{

    public $users;

    public function __construct($users) {
        $this->users = $users;
    }

    public function generate_token($params){
        foreach($this->users as $user){
            if($user['nama'] == $params){
                $token = uniqid();
                $tokenCount = count($user['token']);
                if($tokenCount < 10){
                    array_push($user['token'], $token);
                }else{
                    array_shift($user['token']);
                    array_push($user['token'], $token);
                }
                $this->users = [$user];
            }
        }
    }
    
    public function verify_token($params, $token){
        $status = false;
        foreach($this->users as $user){
            if($user['nama'] == $params){
                for($i = 0; $i < count($user['token']); $i++){
                    if($user['token'][$i] == $token){
                        unset($user['token'][$i]);
                        $status = true;
                    }
                }
            }
        }
        return $status;
    }

}

$user = array(array('nama' => 'Adam', 'token' => ['adamadam']));
$class = new TwoFunction($user);
// set generate token
for($i = 0; $i < 2; $i++){
    $class->generate_token('Adam');
}
// verification token
echo $class->verify_token('Adam', 'adamadam');
?>
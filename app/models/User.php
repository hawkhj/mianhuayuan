<?php
class User extends AppModel
{
    var $name = 'User';
    var $primaryKey ='Id';
    var $validate = array(
            'username'=>array(
                array(
                    'rule'=>'notEmpty',
                    'message'=>'Username must not be empty!'
                ),

                array(
                    'rule'=>'isUnique',
                    'message'=>'Username must be Unique!'
                )
            ),

            'password'=>array(
                array(
                    'rule'=>'NotEmpty',
                    'message'=>'Password must not be empty!'
                ),

                array(
                    'rule'=>array('minLength','8'),
                    'message'=>'password must be at least 8 characters!'
                )

            )
        );
	    function beforeValidate() {
	        if (!$this->id) {
	            if ($this->findCount(array('User.username' 
	                            => $this->data['User']['username'])) > 0) {
	                $this->invalidate('username_unique');
	                return false;
	            }
	        }
	        return true;
	    }
}
?>
		
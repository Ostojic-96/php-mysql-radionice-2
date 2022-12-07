<?php

class User
{
    public $name = 'Ivan';
    public $age = 12;
    protected $password = 'lozinka';
    private $jmbg = '12349874462134';

    private function isValidJmbg()
    {
        return strlen($this->jmbg) === 13;
    }

    public function getJmbg()
    {
        if ($this->isValidJmbg()) {
            return $this->jmbg;
        } else {
            return 'JMBG nije u redu.';
        }
    }
}

class Admin extends User
{
    public $name = 'Administrator';

    public function selfResetPassword()
    {
        $randomInteger = rand();
        $newPassword = md5($randomInteger);
        $this->password = $newPassword;
    }

    public function resetPasswordForUser(User $user)
    {
        $randomInteger = rand();
        $newPassword = md5($randomInteger);
        $user->password = $newPassword;
    }
}

$Ivan = new User();
$admin = new Admin();
echo $Ivan->name;
echo "<br>";
echo $Ivan->getJmbg();
echo "<br>";
echo $admin->name;
$admin->resetPasswordForUser($Ivan);
//dd($Ivan);
dd($admin);

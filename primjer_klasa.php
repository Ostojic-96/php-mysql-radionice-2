<?php

class User
{
    public $name = 'Ivan';
    public $age;
    protected $password = 'lozinka';
    private $jmbg;

    public function __construct(string $name, int $age, string $jmbg)
    {
        $this->name = $name;
        $this->age = $age;
        $this->jmbg = $jmbg;
    }

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

$Ivan = new User('Ivan', 13, '1234567899123');
$admin = new Admin('Administrator', 23, '9987667876521');
echo $Ivan->name;
echo "<br>";
echo $Ivan->getJmbg();
echo "<br>";
echo $admin->name;
$admin->resetPasswordForUser($Ivan);
//dd($Ivan);
dd($admin);

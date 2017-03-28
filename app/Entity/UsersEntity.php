<?php
namespace App\Entity;

use Core\Entity\Entity;

class UsersEntity extends Entity
{
    public function getAge()
    {
        return (int)((time()-strtotime($this->birth_date))/(60*60*24*365));
    }
}

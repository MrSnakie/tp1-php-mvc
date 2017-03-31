<?php
namespace App\Table;

use Core\Table\Table;
/**
* 
*/
class UserTable extends Table
{
    protected $table = "users";

    public function byServiceName()
    {
        return $this->query(" SELECT users.id,
                                     users.first_name,
                                     users.last_name,
                                     users.birth_date,
                                     users.adress,
                                     users.postal_code,
                                     users.phone,
                                     services.name as service
                                FROM users
                                LEFT JOIN services
                                       ON service_id = services.id
                                ORDER BY users.first_name
                            ");
    }

    public function bySearchId($id)
    {
        return $this->query(" SELECT users.id,
                                     users.first_name,
                                     users.last_name,
                                     users.birth_date,
                                     users.adress,
                                     users.postal_code,
                                     users.phone,
                                     services.name as service
                                FROM users
                                LEFT JOIN services
                                       ON service_id = services.id
                                WHERE service_id = ?
                                ORDER BY users.first_name
                            ", [$id]);
    }
}
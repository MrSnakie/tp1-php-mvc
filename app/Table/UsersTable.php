<?php
namespace App\Table;

use Core\Table\Table;
/**
* 
*/
class UsersTable extends Table
{
    protected $table = "users";

    public function all()
    {
        return $this->query(" SELECT users.id,
                                     users.first_name,
                                     users.last_name,
                                     users.birth_date,
                                     users.adress,
                                     users.postal_code,
                                     users.phone,
                                     service.name as service
                                FROM users
                                LEFT JOIN service
                                       ON service_id = service.id
                            ");
    }

    // public function find($id)
    // {
    //     return $this->query(" SELECT users.id,
    //                                  users.first_name,
    //                                  users.last_name,
    //                                  users.birth_date,
    //                                  users.adress,
    //                                  users.postal_code,
    //                                  users.phone,
    //                                  service.name as services
    //                             FROM users
    //                             LEFT JOIN service
    //                                    ON services_id = service.id
    //                             WHERE users.id = ?
    //                         ", [$id], true);
    // }
}
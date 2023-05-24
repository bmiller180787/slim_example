<?php

namespace App\Models;

use App\Entities\Book;
use App\Entities\Staff;
use PDO;

class StaffsModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    public function getStaffs(): array
    {

        $sql = 'SELECT `id`, `name`, `position`, `years_of_service`
            FROM `staff`;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Staff::class);
        $query->execute();
        return $query->fetchAll();
    }
}

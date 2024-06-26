<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnouncementsModel extends Model
{
    protected $table = 'announcements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content'];
}

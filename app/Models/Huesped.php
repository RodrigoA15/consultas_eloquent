<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    use HasFactory;

    public function ScopeBuscar()
    {
        $this->where('nombres', 'LIKE', 'a'. '%' .'a');
    }

    

}

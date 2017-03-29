<?php

namespace App\Repositories\Admin;

use App\Models\Property;
use App\Repositories\BaseRepository;

class PropertyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Property::class;
    }
}

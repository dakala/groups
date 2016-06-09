<?php

namespace Dajonems\Groups\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Baum\Node;

class Group extends Node
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name',  'slug', 'description', 'active' ];

    /**
     * Scope a query to only include active groups.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * Accessor for status field.
     *
     * @return string
     */
    public function getFormattedStatusAttribute() {
        return $this->active ? 'active' : 'inactive';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


}

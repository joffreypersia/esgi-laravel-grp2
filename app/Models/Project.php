<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getAll()
    {
        return [
            [
                'title' => 'Ma web app Laravel',
                'description' => 'App SPA codée avec Laravel',
                'technologies' => ['Laravel', 'TailwindCSS', 'AlpineJS']
            ],
            [
                'title' => 'Mon site e-commerce',
                'description' => 'Site e-commerce développé avec WooCommerce',
                'technologies' => ['WordPress', 'WooCommerce', 'PHP']
            ],
            [
                'title' => 'Portfolio React',
                'description' => 'Portfolio personnel réalisé en React',
                'technologies' => ['React', 'CSS Modules', 'Netlify']
            ]
        ];
    }

    public function retrieve($id)
    {
        $projects = $this->getAll();
        $project = Arr::get($projects, $id);
        return $project;
    }
}

<?php 
namespace App\Services;

use App\Models\Proyecto;

class PortafolioService{
    /**
     * It returns a paginated collection of Proyecto models
     * 
     * return A collection of Proyecto objects.
     */
    public function getProyectos()
    {
        return (new Proyecto())->paginate(10);
    }
    public function getSkills()
    {
        return [
            (object)[
                'title' => 'QA',
                'description'   => 'Servicios como QA (Analista de calidad del software).',
                'tools'        => 'GitHub <br>GitLab',
                'icon_class'    => 'fa-solid fa-list-check'
            ],
            (object)[
                'title' => 'Desarrolladora Web',
                'description'   => 'Desarrollo de aplicaciones web a medida y soporte.',
                'tools'        => 'PHP <br>JavaScript <br>Laravel',
                'icon_class'    => 'fa fa-globe'
            ],
            (object)[
                'title' => 'DBA',
                'description'   => '',
                'tools'        => 'MySQL Workbench <br>phpMyAdmin <br>Oracle SQL Developer',
                'icon_class'    => 'fa fa-database'
            ],
        ];
    }
}
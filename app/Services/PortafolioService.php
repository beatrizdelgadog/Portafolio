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
}
<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //colocar la ruta ue no necesita traer token porque no lo podes 
        //contorlar, te va a dejar realizar todas las peticiones que se realizan
        //es nece que sea una pag segura
    ];
}

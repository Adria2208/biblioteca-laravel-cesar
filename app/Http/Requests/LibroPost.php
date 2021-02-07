<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Libro;

class LibroPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function store(LibroPost $request)
    {

    }

    public function update(LibroPost $request, Libro $libro)
    {

    }

}

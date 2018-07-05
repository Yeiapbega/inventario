<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use Validator;

class ProviderController extends Controller
{
    public function create()
    {
    	$data = request()->all();
    	$data = Validator::make($data,
    	[
    		'name' => 'required',
    		'address' => 'max:180',
    		'phone' => 'required|numeric',
    		'mail' => 'required|unique:providers|email',
    	], 
    	[
    		'name.required' => 'El campo nombre es requerido',
    		'address.max:180' => 'Sobrepasas el limite de caracteres en la dirección',
    		'phone.required' => 'Completa el campo Teléfono',
    		'phone.numeric' => 'El Telefono sólo puede contener numeros',
    		'mail.required' => 'Completa el campo Email',
    		'mail.unique' => 'Email ya existente en la base de datos',
    		'mail.email' => 'Ingresa una dirección de email valida',
    	]);

    	Provider::create(
    	[
    		'name' => $data['name'],
    		'address' => $data['address'],
    		'phone' => $data['phone'],
    		'mail' => $data['mail'],
    		'state' => 't',
    		// 'company' => $_SESSION['company'],
    	]);
    }
}

<?php

namespace CodeCommerce\Http\Controllers;

class ContatoController extends Controller
{
    public function __construct()
    {

    }

    public function contato()
    {
    	$nome = 'Michel Teixeira';
    	$email = 'michel.soares.teixeira@gmail.com';

    	return view('contato', compact('nome', 'email'));
    }
}

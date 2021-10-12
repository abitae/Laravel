<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;
class ListadoClientes extends Component
{
    public function render()
    {
        $clientes = Cliente::all();
        return view('livewire.clientes.listado-clientes',compact('clientes'));
    }
}

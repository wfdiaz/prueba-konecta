<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;
use App\Models\productos;

class IndexVentas extends Component
{
    
    public function render()
    {
        $products = productos::paginate(10);

        return view('livewire.ventas.index-ventas',compact('products'));
    }

    public function venta($id){
        
        dd($id);
    }


}

<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;
use App\Models\ventas;
use App\Models\productos;

class DetailVentas extends Component
{

    public $precio_compra, $search;
    public $sort = 'nombre_producto';
    public $direction = 'asc';
    protected $listeners = ['render', 'deletepro' => 'delete'];


    public function mount($id)
    {
        if($id != "nuevo"){
            $producto = productos::find($id);

            if($producto->stock > 0){
                $producto->stock = ($producto->stock) - 1;
                $producto->save();

                $ventass = new ventas;
                $ventass->nombre_producto = $producto->nombre_producto;
                $ventass->referencia = $producto->referencia;
                $ventass->precio = $producto->precio;
                $ventass->peso = $producto->peso;
                $ventass->categoria = $producto->categoria;
                $ventass->stock = $producto->stock;
                $ventass->id_producto = $producto->id;
                $ventass->save();
            }else{
                
                $this->emit('alert', 'Producto no tiene stock');
            }
        }   
        

        
        
    }

    public function render()
    {
        $ventas = ventas::where('nombre_producto', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort, $this->direction)->paginate(10);

        // dd($ventas);

        return view('livewire.ventas.detail-ventas',compact('ventas'));
    }

    public function order($sort){

        if($this->sort == $sort) {

            if($this->direction == 'desc'){
                $this->direction = 'asc';
            }else {
                $this->direction = 'desc';
            }
        }  else{
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function delete(ventas $id){
        $id->delete();
    }

   
}

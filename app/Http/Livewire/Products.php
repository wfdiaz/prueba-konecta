<?php

namespace App\Http\Livewire;
use App\Models\productos;

use Livewire\Component;

class Products extends Component
{

    public $search, $codigo, $proveedor, $total, $created_at, $updated_at, $banderaIva;
    public $sort = 'nombre_producto';
    public $direction = 'asc';
    protected $listeners = ['render', 'deletepro' => 'delete'];
    public $open_view = false;
    public productos $producto;

    protected $rules = [
        'producto.nombre_producto' => 'required|string',
        'producto.referencia' => 'required|string',
        'producto.precio' => 'string',
        'producto.peso' => 'required|numeric',
        'producto.categoria' => 'string',
        'producto.stock' => 'string',
    
    ];

    public function render()
    {
        $products = productos::where('nombre_producto', 'like', '%' . $this->search . '%')
        ->orderBy($this->sort, $this->direction)->paginate(10);

        return view('livewire.products',compact('products'));
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

    public function delete(productos $id){
        $id->delete();
    }
}

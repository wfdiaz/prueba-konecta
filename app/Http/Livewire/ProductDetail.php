<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\productos;

class ProductDetail extends Component
{

    public $codigo, $descripcion, $descripcion_2, $created_at, $updated_at, $total, $precio,
    $precio_compra, $bandera, $ivaValor;

    public $listeners = ['Guardar' => 'Save'];
    public productos $producto;

    protected $rules = [
        'producto.nombre_producto' => 'required|string',
        'producto.referencia' => 'required|string',
        'producto.precio' => 'string',
        'producto.peso' => 'required|numeric',
        'producto.categoria' => 'string',
        'producto.stock' => 'string',
    
    ];

    protected $validationAttributes =  [
        'producto.nombre_producto' => 'Nombre',
        'producto.referencia' => 'Referencia',
        'producto.precio' => 'Precio',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        
            if ($id == "nuevo") {
                $this->producto = new productos;
                $this->bandera = 1;
            }
            else {

                $this->producto = productos::find($id);
                // dd($this->producto);
                $this->bandera = 0;      

                // $this->created_at = $this->producto->created_at->toDateTimeString();
                // $this->updated_at = $this->producto->updated_at->toDateTimeString();
                // $this->total = '$'.number_format($this->producto->precio_iva);
                // $this->precio = $this->producto->precio;
                // $this->producto->precio = '$'.number_format($this->producto->precio);
                // $this->precio_compra = $this->producto->precio_compra;
                // $this->producto->precio_compra = '$'.number_format($this->producto->precio_compra);
                
            }   

    }

    public function render()
    {
        return view('livewire.product-detail');
    }

    public function Save(){

        
        if ($this->bandera == 1) {
               
                // if (is_null($this->producto->iva)){
                //         $this->producto->iva = 0;  
                // }
    
                // if (is_null($this->producto->activo)){
                //     $this->producto->activo = false;
                // }            
    
                // $precio = (($this->producto->precio * ($this->producto->iva/100)) + $this->producto->precio);
    
                $this->validate();
    
    
                    productos::create([
                        'nombre_producto' => $this->producto->nombre_producto,
                        'referencia' => $this->producto->referencia, 
                        'precio' => $this->producto->precio,
                        'peso' => $this->producto->peso,
                        'categoria' => $this->producto->categoria,
                        'stock' => $this->producto->stock,
                        
                    ]);
    
                    $this->emit('alert', 'Producto creado correctamente');
         
        }
            else{
                // precio
                // if (floatval($this->producto->precio) == 0){
                //     $this->producto->precio = $this->precio;
                // }
                // else{
                //     $this->producto->precio = floatval($this->producto->precio);
                // }
                
                // precio compra
                // if (floatval($this->producto->precio_compra) == 0){
                //     $this->producto->precio_compra = $this->precio_compra;
                // }
                // else{
                //     $this->producto->precio_compra = floatval($this->producto->precio_compra);
                // }
    
                // $precio = $this->producto->precio;
                // $precio_compra = $this->producto->precio_compra;
                // $precioTotal = (($this->producto->precio * ($this->producto->iva/100)) + $this->producto->precio);
                
                // $this->producto->precio = $precio;
                // $this->producto->precio_iva = $precioTotal;
                // $this->producto->precio_compra = $precio_compra;
                // $this->producto->usuario_edicion = auth()->user()->name;

                
                $this->producto->save();

                $this->emit('alert', 'Producto actualizado correctamente');
        
            }
          
        }

        public function Volver(){

            return redirect()->to(route('product.index')); 
        }

}

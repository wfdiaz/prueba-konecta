
<div class="flex flex-col p-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="my-2 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

            <h1 class="p-2 text-2xl text-center text-blue3 font-bold border-blue3 my-2">Ventas Realizadas</h1>    
        
        </div> 


        <div class="w-full px-4 py-5 bg-white sm:w-full p-6 lg:w-full">

            <div class="grid grid-cols-12 gap-12">
                <div class="col-span-5 sm:col-span-5">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search" type="search" wire:model="search" placeholder="Ingrese el nombre del producto a buscar">
                   
                </div>

                
            </div>
                
        </div>
        

        </div>

     @if($ventas->count() > 0)
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
     
        <table class="min-w-full divide-y divide-gray-200 sm:table-auto">
            <thead class="hidden md:table-header-group">
            <tr class="items-center">
                <th scope="col" class="cursor-pointer px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('nombre_producto')">
                Nombre Producto
                    @if ($sort == 'nombre_producto')
                            @if ($direction == 'asc')
                                <i class="fas fa-arrow-up float-right"></i>
                            @else
                                <i class="fas fa-arrow-down float-right"></i>
                            @endif
                        @else
                                <i class="fas fa-arrow-up float-right"></i>
                        @endif
                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('referencia')">
                Referencia
                    @if ($sort == 'referencia')
                        @if ($direction == 'asc')
                            <i class="fas fa-arrow-up float-right"></i>
                        @else
                            <i class="fas fa-arrow-down float-right"></i>
                        @endif
                    @else
                            <i class="fas fa-arrow-up float-right"></i>
                    @endif
                
                </th>

                <th scope="col" class="cursor-pointer px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('precio')">
                Precio
                    @if ($sort == 'precio')
                        @if ($direction == 'asc')
                            <i class="fas fa-arrow-up float-right"></i>
                        @else
                            <i class="fas fa-arrow-down float-right"></i>
                        @endif
                    @else
                            <i class="fas fa-arrow-up float-right"></i>
                    @endif

                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('peso')">
                Peso
                    @if ($sort == 'peso')
                        @if ($direction == 'asc')
                            <i class="fas fa-arrow-up float-right"></i>
                        @else
                            <i class="fas fa-arrow-down float-right"></i>
                        @endif
                    @else
                            <i class="fas fa-arrow-up float-right"></i>
                    @endif

                </th>
                <th scope="col" class="cursor-pointer px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('categoria')">
                Categoria
                @if ($sort == 'categoria')
                    @if ($direction == 'asc')
                        <i class="fas fa-arrow-up float-right"></i>
                    @else
                        <i class="fas fa-arrow-down float-right"></i>
                    @endif
                @else
                        <i class="fas fa-arrow-up float-right"></i>
                @endif

                </th>

                <th scope="col" class="cursor-pointer px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider"
                    wire:click="order('categoria')">
                    Stock
                    @if ($sort == 'stock')
                        @if ($direction == 'asc')
                            <i class="fas fa-arrow-up float-right"></i>
                        @else
                            <i class="fas fa-arrow-down float-right"></i>
                        @endif
                    @else
                            <i class="fas fa-arrow-up float-right"></i>
                    @endif

                </th>

            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
               
                @foreach ($ventas as $item)
                    <tr class="flex flex-col mb-1 md:table-row">
                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-center md:table-cell">
                          
                            <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Nombre Producto</span>
                            <span class="flex-grow p-1">{{ $item->nombre_producto }}</span>
                    
                        </td>
                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-center md:table-cell">
                          
                            <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Referencia</span>
                            <span class="flex-grow p-1">{{ $item->referencia }}</span>
                    
                        </td>

                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-center md:table-cell">

                            <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Precio</span>
                            <span class="flex-grow p-1">{{ $item->precio }}</span>

                        </td>
                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-center md:table-cell">

                            <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Peso</span>
                            <span class="flex-grow p-1">{{ $item->peso }}</span>

                        </td>


                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-center md:table-cell">

                            <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Categoria</span>
                            <span class="flex-grow p-1">{{ $item->categoria }}</span>

                        </td> 
                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-center md:table-cell">

                            <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Stock</span>
                            <span class="flex-grow p-1">{{ $item->stock }}</span>

                        </td>
                        {{-- <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-left md:table-cell">                                                                   
                           
                                <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Ver</span>                
                                    <span class="flex-grow p-1 px-24 sm:flex-grow">
                                        <a wire:click="view({{$producto->id}})" class="font-bold bg-blue3 rounded cursor-pointer text-center" >
                                            <i class="far fa-eye w-full h-6"> Ver</i>
                                        </a>
                                    </span>     
                            
                        </td>                                                           --}}
                                                                                      
                        <td class="flex flex-no-wrap whitespace-nowrap text-sm text-gray-700 text-left md:table-cell">                                                                   
                             
                    
                                <span class="w-20 flex-initial p-1 text-left text-gray-900 md:hidden">Eliminar</span>                
                                    <span class="flex-grow p-1 px-24 sm:flex-grow">
                    
                                        <a wire:click="$emit('deleteproduct', {{$item->id}})" class="font-bold bg-blue3 rounded cursor-pointer text-center">
                                            <i class="far fa-trash-alt w-full h-6"> Eliminar</i>
                                        </a>
                                    </span>     
                                   
                        </td>
                  

                       
                    </tr>
                    @endforeach

                    
            </tbody>
        </table>

            {{ $ventas->links() }}
        </div>

    </div>
@endif

    

    </div>
    <br>
    <a href="{{route('ventas.index') }}" class="w-60 p-2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a> 

    @push('js')
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            
            <script>
                
                Livewire.on('deleteproduct', productId => {
                    Swal.fire({
                    title: 'Esta seguro de eliminar la venta ?',
                    text: "si lo borra ahora ya no podra revertir los cambios !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Borrar',
                    cancelButtonText: 'Cancelar',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        
                        Livewire.emit('deletepro',productId);

                        Swal.fire(
                        'Eliminado!',
                        'venta eliminada con exito.',
                        'success'
                        )
                    }
                    })

                });               
              

            </script>


        @endpush

</div>


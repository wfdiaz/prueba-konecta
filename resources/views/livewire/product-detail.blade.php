<div class="flex flex-wrap justify-between px-20">

    
    <h1 class="w-full p-2 text-2xl text-center text-blue3 font-bold border-blue3 my-2">Creacion Productos</h1>

            <div class="w-full px-4 py-5 bg-white sm:w-full p-6 lg:w-full">
                <div class="grid grid-cols-6 gap-6">
                
                    <div class="col-span-6 sm:col-span-3">
                        <label for="codigo1" class="block text-sm font-medium text-gray-700 p-2">Nombre Producto</label>
       
                        <input wire:model="producto.nombre_producto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded" id="codigo" type="text">
                 

                            @error('producto.nombre_producto')
                                <span>                                
                                    <p class="text-sm text-red-600">{{$message}}</p>
                                </span>
                            @enderror   
                            
                        
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="referencia" class="block text-sm font-medium text-gray-700 p-2">Referencia</label>
                    
                        <input wire:model="producto.referencia" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline rounded" id="descripcion" type="text">              
                  
                        @error('producto.referencia')
                            <span>                                
                                <p class="text-sm text-red-600">{{$message}}</p>
                            </span>
                         @enderror   
                        
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="precio" class="block text-sm font-medium text-gray-700 p-2">Precio</label>
                       
                            <input wire:model="producto.precio" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text">            
                            @error('producto.precio')
                            <span>                                
                                <p class="text-sm text-red-600">{{$message}}</p>
                            </span>
                         @enderror  
                    
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="peso" class="block text-sm font-medium text-gray-700 p-2">Peso (Kg)</label>
                       
                            <input wire:model="producto.peso" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number">            
                         
                    
                    </div>

                     <div class="col-span-6 sm:col-span-3">
                        <label for="categoria" class="block text-sm font-medium text-gray-700 p-2">Categoria</label>
                       
                            <input wire:model="producto.categoria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text">            
                        
                    
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="stock" class="block text-sm font-medium text-gray-700 p-2">Stock</label>
                       
                        <input wire:model="producto.stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number">            
                               
                    </div>
                   
                </div>
            </div>        
          

            <div class="px-6 py-4 text-right">
                <button wire:click="Save()" class="w-40 p-2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>

                 <button wire:click="Volver()" class="w-40 p-2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </button>
                

            </div>
 
    </div>
       

 <h1 class="w-full p-2 text-2xl text-center text-blue3 font-bold border-blue3 my-2"> Productos</h1>
    
    <div class="px-2 p-4">
        <a href="{{ route('ventas.detail', 'nuevo') }}" class="w-60 p-2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ventas realizadas</a>
    </div>

    <div class="card-columns">
        @foreach ($products as $p)

                    <div class="card" style="width: 18rem; ">
                           
                            <div class="card-body">
                                <p class="card-text">Nombre Producto: {{ $p->nombre_producto }}</p>
                                <p class="card-text">Referencia: {{ $p->referencia }}</p>
                                <p class="card-text">Precio: {{ $p->precio }}</p>
                                <p class="card-text">Peso: {{ $p->peso }}</p>
                                <p class="card-text">Categoria: {{ $p->categoria }}</p>
                                <p class="card-text">Stock: {{ $p->stock }}</p>
                                <br>
                                <br>
                              
                                <a href="{{ route('ventas.detail', $p->id) }}" class="w-60 p-2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >
                                     Vender
                                 </a>                
        
                            </div>
                    </div>
                    <div class="flex-initial">
                    <button class="mr-4"> </button>

                </div>

        <br>

        @endforeach
    
  </div>
    <div class="card-footer">
        {{ $products->links() }}

    </div>
  {{-- @else
  <div class="card-body">
      
  <h1>No se encontraron registros</h1> --}}
  </div>

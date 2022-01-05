
<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                 @if ($id == "nuevo")
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                        
                            @livewire('product-detail', ['id'=> $id])

                        </div>
                    </div>
                @else
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                            @livewire('product-detail', ['id'=> $id])
    
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
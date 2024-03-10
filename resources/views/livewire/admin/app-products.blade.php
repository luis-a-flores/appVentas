<div class="">


<!-- component -->
<section class="container mx-auto text-gray-500">
    <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
        <header class="px-5 py-4 border-b border-gray-100 flex flex-col md:flex-row md:items-center gap-3 md:gap-5  ">
            <div class="w-full md:w-3/5 flex flex-col md:flex-row gap-2 md:gap-5  items-center">
                <h2 class="w-full md:w-1/2  titleTable">Productos</h2>


                {{-- flex flex-col w-full md:w-3/5 md:flex-row justify-between    --}}
                <div class="w-full md:w-2/5 relative">

                    <i class="fa-solid fa-magnifying-glass iconSearch"></i>
                    <input wire:model="search" type="text" class="inputTextSearch " placeholder="Buscar">

                </div>




            </div>


            <div class="w-full md:w-1/2 flex flex-row   justify-between    md:justify-end  gap-4">



                <select wire:model="perPage" name="" id="" class=" inputText">

                    <option value="15">15 por página</option>
                    <option value="25">25 por página</option>
                    <option value="50">50 por página</option>
                    <option value="100">100 por página</option>

                </select>

                <button wire:click="toggle()" class=" btnAdd">
                    <i class="fa-solid fa-plus"></i> Nuevo </button>

            </div>



        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                <table class="bgTable">
                    <thead class="bgTableHead">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">id</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Producto</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Precio</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Presentaciones</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Acciones</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">

                        @foreach ($productos as $producto)
                        <tr>
                            <td class="p-2 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://m.media-amazon.com/images/I/71m97KvDUFL.__AC_SX300_SY300_QL70_ML2_.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                    <div class="font-medium text-gray-800">{{$producto->id}}</div>
                                </div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left">{{$producto->clave}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap">
                                <div class="text-left font-medium text-green-500">{{$producto->nombre}}</div>
                            </td>
                            <td class="p-2 whitespace-nowrap text-center">

                                    <button wire:click="addPresentation({{$producto->id}})"
                                    class="btnAdd"><i class="fa-solid fa-sitemap"></i></button>

                            </td>
                            <td class="p-2 whitespace-nowrap text-center">
                                <button wire:click="$emit('deleteItem', )"
                                    class="btnDelete"><i
                                        class="fa-solid fa-trash"></i></button>

                                <button wire:click="edit({{$producto->id}})"
                                    class="btnEdit"><i
                                        class=" fa-solid fa-pen-to-square"></i></button>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

    </section>

 <!-- Modal -->
 <div class="  @if ($modal == true) fixed   @else hidden @endif  bgBaseModal">

    <div class=" modalDetails" style="height: auto;  max-height: 88%;}">
        <header class=" modalHeader">
            <div class="relative">
                <h1 class="titleModal">
                    @if(blank($id_update)) Nuevo Producto  @else   Actualizar Producto @endif </h1>
                <div class="absolute top-0 right-0">
                    <i wire:click="toggle()" class="fa-solid fa-rectangle-xmark btnClose "></i>
                </div>
            </div>

        </header>

        <div class="modalBody ">
            <!-- Es un flex de 2 inputs  -->



            <div class="slotFormx2">


                <div class="sectionInputx2">
                    <label class=" inputTextTitle " for="grid-name">
                        Nombre Producto
                    </label>


                    <input wire:model.defer="nombre" type="text" class="inputText">

                    @error('nombre')
                    <span class="errorBack"> {{$message}}</span>
                    @enderror
                </div>



                <div class="sectionInputx2">
                    <label class=" inputTextTitle " for="grid-name">
                        Clave
                    </label>


                    <input wire:model.defer="clave" type="text" class="inputText">

                    @error('clave')
                    <span class="errorBack"> {{$message}}</span>
                    @enderror
                </div>




            </div>

            <div class="slotFormx2">

                <div class="sectionInputx2">
                    <label class=" inputTextTitle " for="grid-name">
                        Marca
                    </label>


                    <input wire:model.defer="marca" type="text" class="inputText">

                    @error('marca')
                    <span class="errorBack"> {{$message}}</span>
                    @enderror
                </div>



                <div class="sectionInputx2" >
                    <div wire:ignore>
                        <label class=" inputTextTitle " for="grid-category">Categoría: </label>


                        <select wire:model="id_categoria" name="" id="id_category"
                            class="searchSelectCategory inputText">
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                            @endforeach

                        </select>
                    </div>


                    @error('id_categoria')
                    <span class="errorBack"> {{$message}}</span>
                    @enderror

                </div>
            </div>
        </div>



        <footer class=" modalFooter ">
            <button wire:click="toggle()" class="btnDelete">Cancelar &nbsp; <i
                    class="fa-solid fa-ban"></i></button>
            <button wire:click="save({{$id_update}})" class="btnAdd">Guardar &nbsp; <i
                    class="fa-solid fa-floppy-disk"></i></button>
        </footer>
    </div>

</div>


 {{-- Modal subproducts --}}
 <div class="  @if ($idproductosSelect == true) fixed   @else hidden @endif  bgBaseModal">
    @livewire('admin.components.app-products-presentation')

    {{-- @livewire('publication.components.app-publication-slot1', ['date' =>  $day, 'search' => $search, 'byType' => $byType, 'filter' => $filter, 'arrayDates' => $days, 'key'=> $key], key($keyComponent)) --}}
    @livewireScripts
    @stack('js')

</div>


<div class="fixed z-50 w-full h-screen top-0 left-0" wire:loading>
    <div class="bg-gray-200 opacity-50 w-full h-screen absolute"></div>
    {{-- <div class="loader relative top-48 left-0"></div> --}}


    <div class="banter-loader relative top-48 ">
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
        <div class="banter-loader__box"></div>
      </div>

</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@push('js')
<script>
    Livewire.on('deleteItem', deletebyId => {
                Swal.fire({
                    title: '¿Seguro que deseas eliminar este elemento?',
                    text: "Esta acción es irreversible",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#202a33',
                    cancelButtonColor: '#dd2826',
                    confirmButtonText: '<i class="fa-solid fa-check"></i> Eliminar',
                    cancelButtonText: '<i class="fa-solid fa-ban"></i> Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.livewire.emit('delete', deletebyId);
                        // Swal.fire(
                        //   '¡Eliminado!',
                        //   'Tu elemento ha sido eliminado.',
                        //   'Exito'
                        // )
                    }
                })
            });

        document.addEventListener('livewire:load', function(){
                $('.searchSelectCategory').select2();
                $('.searchSelectCategory').on('change', function () {
                    @this.set('id_categoria', this.value);
                });

                // $('.searchSelectUnit').select2();
                // $('.searchSelectUnit').on('change', function () {
                //     @this.set('id_unit', this.value);
                // });
            });


        //  Livewire.on('setUnit', opcion => {
        //    $('#id_unit').val(opcion).trigger('change.select2').trigger('select2:select');
        // });

        Livewire.on('setcategoria', opcion => {
           $('#id_category').val(opcion).trigger('change.select2').trigger('select2:select');
        });
</script>
@endpush
</div>

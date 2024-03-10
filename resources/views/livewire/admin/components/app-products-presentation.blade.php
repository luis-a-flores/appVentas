<div>

    <div class=" modalDetails lg:w-9/12" style="height: auto;  max-height: 88%; ">
        <header class=" modalHeader">
            <div class="relative">
                <h1 class="titleModal">Nuevo Sub Producto {{$idProductSelect}}</h1>
                <div class="absolute top-0 right-0">
                    <i wire:click="closeSelf()" class="fa-solid fa-rectangle-xmark bntClose "></i>
                </div>
            </div>

        </header>

        <div class="modalBody flex flex-col sm:flex-row ">

            <div class="w-ful sm:w-1/2">
                <div class="slotFormx1">
                    <div class="sectionInputx1">
                        <label class=" inputTextTitle " for="grid-name">
                            Nombre subproducto
                        </label>


                        <div class="flex">
                            <input wire:model="name_subproduct" type="text" class="inputText">
                            <button wire:click="save()" class="btnAdd">Agregar</button>
                        </div>


                        @error('name_subproduct')
                        <span class="errorBack"> {{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="w-ful sm:w-1/2">

                <div class="w-full mb-12 ">
                    <div class="bgTable">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="titleTable ">
                                    <h3 class=" ">Sub Productos</h3>
                                </div>

                                <button wire:click="toggle()" class="sm:hidden btnAdd">
                                    <i class="fa-solid fa-plus "></i> Agregar </button>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto ">
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                    <tr>
                                        <th class="thTable  " wire:click="setFilter('materials.id')">
                                            id


                                        </th>
                                        <th class="thTable" wire:click="setFilter('materials.name_material')">
                                            Nombre



                                        </th>
                                        <th class="thTable" wire:click="setFilter('materials_labels.label_name')">
                                            Costo

                                        </th>
                                        <th class="thTable">
                                           Receta
                                        </th>

                                        <th class="thTable">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>


                                    <td class="tdTable">
                                       1
                                    </td>



                                    <td class="tdTable">
                                        Costa
                                    </td>

                                    <td class="tdTable">
                                        fgd
                                    </td>

                                    <td class="tdTable">


                                        <button wire:click="addRecipe(1)" class="btnEdit"><i class="fa-solid fa-kitchen-set"></i></button>

                                    </td>


                                    <td class="tdTable text-right">
                                        <div class="flex items-center">


                                            <div class="flex gap-2">
                                                <button wire:click="$emit('deleteItem', 1)" class="btnDelete"><i
                                                        class="fa-solid fa-trash"></i></button>


                                                <button wire:click="edit(1)" class="btnEdit"><i
                                                        class=" fa-solid fa-pen-to-square"></i></button>



                                            </div>
                                        </div>


                                    </td>

                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>





        </div>




        <footer class=" modalFooter ">
            <button wire:click="closeSelf()" class="btnTransparentCancel">Cancelar &nbsp; <i
                    class="fa-solid fa-ban"></i></button>
            <button wire:click="" class="btnTransparentSave">Guardar &nbsp; <i
                    class="fa-solid fa-floppy-disk"></i></button>
        </footer>
    </div>




    @push('js')
    <script>

Livewire.on('deleteItem', deletebyId => {
                Swal.fire({
                    title: '¿Seguro que deseas eliminar este elemento?',
                    text: "Esta acción es irreversible",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#202a33',
                    cancelButtonColor: '#fb7185',
                    confirmButtonText: 'Si, Eliminar!'
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


    </script>
@endpush


</div>

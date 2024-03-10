<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class AppProductsPresentation extends Component
{

    public $idProductSelect, $id_unidad, $precio_compra, $precio_venta, $cantidad_almacen, $cantidad_min, $cantidad_max, $venta_min;
    protected $listeners = [ 'delete', 'idProductSelectFather' => 'updateProductSelect', 'closeModalSonRecipe' => 'closeModal'];

    public function updateProductSelect($dato)
    {   // Actualizar la variable del componente hijo con el valor recibido
        $this->idProductSelect = $dato;
    }
    public function render()
    {
        return view('livewire.admin.components.app-products-presentation');
    }
}

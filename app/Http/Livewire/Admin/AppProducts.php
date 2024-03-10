<?php


namespace App\Http\Livewire\Admin;

use Livewire\Component;
use DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\productos;
use App\Models\unidad;
use App\Models\categoria;


class AppProducts extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    use WithPagination;

    public $id_categoria, $nombre, $id_update, $modal = false, $modal_presentation = true, $marca, $clave, $idproductosSelect = 0; // columnas de la tabla

    protected $rules = [];
    protected $validationAttributes  = [
        'nombre' => "Nombre de producto",
        'marca' => "Marca",
        'id_categoria' => "Categoría",
        'clave' => "Clave"
    ];



    public function toggle(){

        if ($this->modal) {
           $this->modal = false;

           $this->reset(['id_categoria', 'nombre', 'id_update', 'idproductosSelect' ]);
        }else{
            $this->modal = true;
        }

    }


    public function render()
    {

        $this->id_company = 1;  // companya a la que le agrega

        $unidades = unidad::all();
        $categorias = categoria::all();
        $productos = productos::all();





       /* $products = DB::table('Products')
        ->leftJoin('units', 'Products.id_unit', 'units.id')
        ->select('Products.*', 'units.unit_name')
        ->orderBy('Products.name')
        ->get();
        $products = DB::table('products')
        ->orderBy('name_product')
        ->get();*/


        return view('livewire.admin.app-products')
        ->with('unidades', $unidades)
        ->with('categorias', $categorias)
        ->with('productos', $productos);
    }



    public function save($id = null){

        $this->rules += [
            'nombre' => 'required|max:80',
            'clave' => 'required|max:80',
            'id_categoria' => 'required',
            'marca' => 'required|max:80',
        ];


        $this->validate();

        try{

            // Save meterial new or edit
            if($id == null){
                $productos = new productos();
            }else{
                $productos = productos::find($id);
            }

            $productos->id_categoria  = $this->id_categoria;
            $productos->nombre = $this->nombre;
            $productos->clave = $this->clave;
            $productos->marca= $this->marca;
            $productos->save();

            $this->alert('success', '¡Guardado con éxito!', [
                'timer' => 3000,
                'toast' => true,
            ]);

        }catch (\Exception $exception) {
            $this->alert('error', '¡Error al guardar!', [
                'timer' => 3000,
                'toast' => true,
               ]);
        }




        $this->modal = false;
        $this->reset(['id_categoria','nombre', 'clave',  'marca']);
        $this->emit('setcategoria',  $this->id_categoria );
    }


    public function edit($id){

        $productos = productos::find($id);
        $this->id_categoria = $productos->id_categoria;
        $this->nombre = $productos->nombre;
        $this->clave = $productos->clave;
        $this->marca =  $productos->marca;

        $this->id_update = $productos->id;


        $this->modal = true;
        $this->emit('setcategoria',  $this->id_categoria );  // emite para que los select de catagorias actualicen su al actual
    }



    public function addPresentation($id){

        if ($this->modal_presentation) {
            $this->modal_presentation = false;
            $this->idproductosSelect = $id;
        }else{
            $this->modal_presentation = true;
            $this->idproductosSelect = 0;
        }


        $this->emit('idProductSelectFather', $id);  //usuario del area seleccionada

    }

}

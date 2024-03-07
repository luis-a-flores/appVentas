<?php


namespace App\Http\Livewire\Admin;

use Livewire\Component;
use DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\productos;
use App\Models\categoria;


class AppProducts extends Component
{

    use LivewireAlert;
    use WithFileUploads;
    use WithPagination;

    public $id_categoria, $nombre, $id_update, $modal = true,  $idproductosSelect = 0; // columnas de la tabla


    protected $validationAttributes  = [
        'nombre' => "Nombre de producto",
        'details' => "Detalles del material",
        'id_categoria' => "Categoría",
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
        ->with('productos', $productos)
        ->with('categorias', $categorias);
    }



    public function save($id = null){

        $this->rules += [
            'nombre' => 'required|max:80',
            'details' => 'required|max:255',
            'id_categoria' => 'required',
        ];


        $this->validate();

        try{
            //Calcula precio por millares es decir 1 litro lo convierte a mililitro
            //y saca su precio por unidad ya que al usar productes normalmente se uan porciones ejemplo 25ml leche o 50 gr de azucar

            // Save meterial new or edit
            if($id == null){
                $productos = new productos();
            }else{
                $productos = productos::find($id);
            }

            $productos->id_categoria  = $this->id_categoria;
            $productos->nombre = $this->nombre;
            $productos->details = $this->details;
            $productos->id_company= $this->id_company;
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
        $this->reset(['id_categoria','nombre', 'details',  'id_update']);
        $this->emit('setcategoria',  $this->id_categoria );
    }


    public function edit($id){

        $this->rules += [
            'nombre' => 'required|max:80',
            'details' => 'required|max:255',
            'id_categoria' => 'required',
        ];

        $productos = productos::find($id);

        $this->id_categoria = $productos->id_categoria;
        $this->nombre = $productos->nombre;
        $this->details = $productos->details;
        $this->id_company =  $productos->id_company;

        $this->id_update = $productos->id;


        $this->modal = true;
        $this->emit('setcategoria',  $this->id_categoria );  // emite para que los select de catagorias actualicen su al actual
    }




}

<?php

namespace App\Http\Livewire;

use App\Models\categorias;
use App\Models\User;
use App\Models\vehiculos;
use Livewire\Component;
use Livewire\WithPagination;

class VehiculosComponent extends Component
{
    use WithPagination; 
    public $listeners = ['reseteo'];
    public $criterio;
    public  $Id,$nombre,$marca, $modelo, $color,$categoria,$usuario;
   
    

    public function render()
    {
   
        if($this->criterio == ""){

             $vehiculos = vehiculos::paginate(3);
       
        }else{
            $vehiculos = vehiculos::where('categoria_id','like',"%$this->criterio%")->paginate(3);
            
        }
        $categorias = categorias::all();
        $users= User::all();
        return view('livewire.vehiculos-component',compact('vehiculos','categorias','users'));
    }
    public function store(){

        

        $vehiculos=new vehiculos();
        
        $vehiculos -> marca= $this->marca;
        $vehiculos -> modelo=$this-> modelo;
        $vehiculos -> color=$this-> color;
        $vehiculos -> categoria_id=$this->categoria;
        $vehiculos -> usuario_id=$this->usuario;
        $vehiculos -> save();
        $this->clear();
        
    }
    
    public function clear(){
        $this->marca=null;
        $this-> modelo =null;
        $this-> color=null;
        $this->categoria=null;
        $this->usuario=null;
        $this->Id=null;

    }
    public function edit($id){
        $vehiculos = vehiculos::find($id);
        $this->clear();
        $this->marca= $vehiculos -> marca;
        $this->color=$vehiculos -> modelo;
        $this->modelo =$vehiculos -> modelo;
        $this->categoria= $vehiculos -> categoria_id;
        $this->usuario= $vehiculos -> usuario_id;
        $this->Id=$vehiculos->id;
        
    }

    public function update($id){
        
     $vehiculos = vehiculos::find($id);
     $vehiculos -> marca= $this->marca;
     $vehiculos -> modelo=$this-> modelo;
     $vehiculos -> color=$this-> color;
     $vehiculos -> categoria_id=$this->categoria;
     $vehiculos -> usuario_id=$this->usuario;
     $vehiculos -> save();
     $this->clear();
     
    

}
    public function delete($id){
        $vehiculos = vehiculos::find($id);
        $vehiculos->delete();
        $this->clear();
    }
}

<div>
    <section style="margin-left: 120px;"  class="content">
        <div style="margin-left: 120px; margin-"  class="col-md-11">
           <div>
             <div class="input-group mb-3">
             <input type="text" class="form-control" wire:model="criterio" placeholder="Buscar...." aria-label="Username" aria-describedby="basic-addon1" >
             <button type="button" class="btn btn-primary  rounded" data-bs-toggle="modal" data-bs-target="#FormaModal" >New</button>
            </div>
            <p>solo busca por el id de categoria ya que no pude realizar el cambio para mostrar el nombre de la categoria   </p>

             <div>
                 <table class="table" > 
                    <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">color</th>
                    <th scope="col">categoria</th>
                    <th scope="col">usuario</th>
                    <th scope="col" class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($vehiculos as $items )
                        
    
                  <tr>
                    <th scope="row">{{$items->id}}</th>
                    <td>{{$items->marca}}</td>
                    <td>{{$items->color}}</td>
                    <td>{{$items->categoria_id}}</td>
                    <td>{{$items->usuario_id}}</td>
                    <td class="text-end">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary m-2 rounded" data-bs-toggle="modal" data-bs-target="#FormaModal" wire:click='edit("{{$items->id}}")'>edit</button>
                            <button type="button" class="btn btn-danger m-2 rounded"  wire:click='delete("{{$items->id}}")'>delete</button>
                           
                          </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  </table>
                {{$vehiculos->links()}}
            </div>
         
            @include('components.modalheader')
  <div>
    <select class="form-select" aria-label="Default select example" wire:model="categoria">
        <option  >Seleccione una categoria</option>
        @foreach( $categorias as  $categoria)
        <option value="{{  $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach 
        @error('categoria') <span class="error"  style="color: red">{{ $message }}</span> @enderror
    </select>
   
</div>

  <div class="mb-3">
    <label for="marca" class="form-label">Marca:</label>
    <input type="text"  name="marca"   wire:model="marca" class="form-control" id="exampleFormControlInput1" placeholder="marca...">
    @error('marca') <span class="error" style="color: red">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="categoria" class="form-label">modelo:</label>
    <input type="modelo" name="modelo" wire:model="modelo" class="form-control" id="exampleFormControlInput1" placeholder="modelo.....">
    @error('modelo') <span class="error"  style="color: red">{{ $message }}</span> @enderror 
  </div>
  <div class="mb-3">
    <label for="color" class="form-label">color:</label>
    <input type="text" name="color" wire:model="color" class="form-control" id="exampleFormControlInput1" placeholder="color.....">
    @error('color') <span class="error"  style="color: red">{{ $message }}</span> @enderror 
  </div>
  <div>
    <select class="form-select" aria-label="Default select example" wire:model="usuario">
        <option  >Seleccione una usuario</option>
        @foreach( $users as  $items)
        <option value="{{  $items->id }}">{{ $items->name }}</option>
        @endforeach 
        @error('usuario') <span class="error"  style="color: red">{{ $message }}</span> @enderror
    </select>
   
</div>

  @include('components.modalfooter')
           
           </div>
           
      
    
    </section>
</div>

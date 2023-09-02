
<!-- Modal edit -->
<div class="modal fade" id="edit{{$contacto->id_medidor}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=" {{route('home.update', $contacto->id_medidor)}} " method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
      <div class="modal-body">

      <label form= "">medidor</label>
        <input type="text" name= "id_medidor" id="" class="form-control" value="{{$contacto->id_medidor}}">
        
        <label form= "">Nombre</label>
        <input type="text" name= "Nombre" id="" class="form-control" value="{{$contacto->nombre}}">
        
        <label form= "">Cedula</label>
        <input type="text" name= "Cedula" id="" class="form-control" value="{{$contacto->cedula}}">
        
        <label form= "">direccion</label>
        <input type="text" name= "direccion" id="" class="form-control" value="{{$contacto->direccion}}">
     
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
        <button type="submit" class="btn btn-primary">Actaulizar</button>
      </div>
    </div>
</form>
  </div>
</div>



<!-- Modal delete-->
<div class="modal fade" id="delete{{$contacto->id_medidor}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('home.destroy', $contacto->id_medidor)}} " method="POST" enctype="multipart/form-data">
     @csrf
     @method('DELETE')
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">confirmar</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
</form>
  </div>
</div>
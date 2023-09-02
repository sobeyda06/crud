
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('home.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
    
      <div class="modal-body">

      <label form= "">medidor</label>
        <input type="text" name= "id_medidor" id="" class="form-control">
        
        <label form= "">Nombre</label>
        <input type="text" name= "nombre" id="" class="form-control">
        
        <label form= "">Cedula</label>
        <input type="text" name= "cedula" id="" class="form-control">
        
        <label form= "">direccion</label>
        <input type="text" name= "direccion" id="" class="form-control">
     
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
</form>
  </div>
</div>
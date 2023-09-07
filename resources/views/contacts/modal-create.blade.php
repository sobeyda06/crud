<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <label form="name">Nombre</label>
                    <input type="text" name="name" class="form-control">

                    <label form="identification">Cedula</label>
                    <input type="text" name="identification" class="form-control">

                    <label form="measurer">N medidor</label>
                    <input type="text" name="measurer" class="form-control">

                    <label form="current_reading">Lectura actual</label>
                    <input type="text" name="current_reading" class="form-control">

                    <label form="previous_reading">Lectura anterior</label>
                    <input type="text" name="previous_reading" class="form-control">

                    <label form="monthly_consumption">Consumo mensual</label>
                    <input type="text" name="monthly_consumption" class="form-control">

                    <label form="amount_payable">Monto a pagar</label>
                    <input type="text" name="amount_payable" class="form-control">

                    <label form="arrears">Mora</label>
                    <input type="text" name="arrears" class="form-control">

                    <label form="location">direccion</label>
                    <input type="text" name="location" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

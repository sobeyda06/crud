@extends('home')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h1>Lista de Usuarios de agua potable</h1>
            <br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">identificacion</th>
                        <th scope="col">N medidor</th>
                        <th scope="col">Lectura actual</th>
                        <th scope="col">Lectura anterior</th>
                        <th scope="col">Consumo mensual</th>
                        <th scope="col">Mora</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <th>{{ $contact->id }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->identification }}</td>
                            <td>{{ $contact->measurer }}</td>
                            <td>{{ $contact->current_reading }}</td>
                            <td>{{ $contact->previous_reading }}</td>
                            <td>{{ $contact->monthly_consumption }}</td>
                            <td>{{ $contact->amount_payable }}</td>
                            <td>{{ $contact->arrears }}</td>
                            <td>{{ $contact->location }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit-{{ $contact->id }}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-{{ $contact->id }}">
                                    Eliminar
                                </button>
                                <a href="{{ route('contacts.pdf', ['contact' => $contact->id]) }}" class="btn btn-primary">PDF</a>
                            </td>
                        </tr>

                        @include('contacts.modal-info')
                    @endforeach


                </tbody>
            </table>
        </div>
        @include('contacts.modal-create')
    </div>
    <div class="col-md-2"></div>
    </div>
@endsection

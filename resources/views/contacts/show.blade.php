@extends('home')
@section('content')

    <div>
        <h3>Contacto {{ $contact->id }}</h3>
        <p>Nombre: {{ $contact->name }}</p>
        <p>Cedula: {{ $contact->identification }}</p>
        <p>N medidor: {{ $contact->measurer }}</p>
        <p>Lectura actual: {{ $contact->current_reading }}</p>
        <p>Lectura anterior: {{ $contact->previous_reading }}</p>
        <p>Consumo mensual: {{ $contact->monthly_consumption }}</p>
        <p>Monto a pagar: {{ $contact->amount_payable }}</p>
        <p>Mora: {{ $contact->arrears }}</p>
        <p>Direccion: {{ $contact->location }}</p>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div>
        <h2>{{ $contact->name }}</h2>
        <p>Email: {{ $contact->email }}</p>
        <p>Phone: {{ $contact->phone }}</p>
        <p>Address: {{ $contact->address }}</p>
        <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
        <form method="POST" action="{{ route('contacts.destroy', $contact) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ route('contacts.index') }}">Back to List</a>
    </div>
@endsection

@extends('layout')

@section('title', 'Contact Details')

@section('content')
<h1>Contact Details</h1>
<p><strong>Name:</strong> {{ $contact->name }}</p>
<p><strong>Contact:</strong> {{ $contact->contact }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
<form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection

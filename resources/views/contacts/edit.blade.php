@extends('layout')

@section('title', 'Edit Contact')

@section('content')
<h1>Edit Contact</h1>
<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $contact->name }}" required>
    <label for="contact">Contact:</label>
    <input type="text" id="contact" name="contact" value="{{ $contact->contact }}" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
    <button type="submit">Save</button>
</form>
@endsection

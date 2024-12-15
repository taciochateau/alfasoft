@extends('layout')

@section('title', 'Add New Contact')

@section('content')
<h1>Add New Contact</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="contact">Contact:</label>
    <input type="text" id="contact" name="contact" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Save</button>
</form>
@endsection

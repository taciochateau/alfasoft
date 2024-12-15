@extends('layout')

@section('title', 'Contact List')

@section('content')
<h1>Contact List</h1>
<a href="{{ route('contacts.create') }}">Add New Contact</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->email }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}">View</a>
                    <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@extends('layouts.base')
@section('content')
    {{-- use flowbite for the ui --}}
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Contact name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Organization
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- loop through the contacts and display them -->
                <!--check if the contacts is not empty -->
                <!--use the isset() function to check if the contacts variable is not empty -->
                {{-- @if (isset($contacts)) --}}
                @if ($contacts->isEmpty())
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4" colspan="4">
                            No contacts found.
                        </td>
                    </tr>
                @else

@foreach ($contacts as $contact)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <td class="px-6 py-4">
        {{-- Display contact name --}}
        {{ $contact->first_name }} {{ $contact->last_name }}
    </td>
    <td class="px-6 py-4">
        {{ $contact->email }}
    </td>
    <td class="px-6 py-4">
        {{ $contact->phone }}
    </td>
    <td class="px-6 py-4">
        {{-- Display contact organization --}}
        {{ $contact->organization->name }}
    </td>
    <td class="px-6 py-4">
        {{-- Edit button --}}
 <!-- Edit button -->
<a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary">Edit</a>

<!-- Update button (part of the edit form) -->
<form action="{{ route('contact.update', $contact->id) }}" method="POST" class="d-inline">
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-success">Update</button>
</form>

<!-- Delete button -->
<form action="{{ route('contact.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?')" class="d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>



    </td>
</tr>
@endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

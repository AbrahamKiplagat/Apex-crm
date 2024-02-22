@extends('layouts.base')

@section('content')
    <div class="container mx-auto mt-6 p-4">
        <h1 class="text-2xl font-semibold mb-4">Edit Contact</h1>

        <form action="{{ route('contact.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ $contact->first_name }}" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ $contact->last_name }}" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $contact->email }}" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="tel" name="phone" id="phone" value="{{ $contact->phone }}" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="job_title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input type="text" name="job_title" id="job_title" value="{{ $contact->job_title }}" class="mt-1 p-2 border rounded-md w-full" required>
            </div>

            <div class="mb-4">
                <label for="organization_id" class="block text-sm font-medium text-gray-700">Organization</label>
                <select name="organization_id" id="organization_id" class="mt-1 p-2 border rounded-md w-full" required>
                    @foreach ($org as $organization)
                        <option value="{{ $organization->id }}" {{ $organization->id == $contact->organization_id ? 'selected' : '' }}>
                            {{ $organization->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update Contact</button>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Kundli')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 to-purple-300 p-6">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Generate Your Kundali</h2>

        <form method="POST" action="{{ route('submit.kundali') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-1">Name</label>
                <input name="name" placeholder="Your Name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Gender</label>
                <select name="gender"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Date of Birth</label>
                <input name="dob" type="date"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Time of Birth</label>
                <input name="tob" type="time"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Place of Birth</label>
                <input name="place" placeholder="e.g., Delhi"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 shadow-sm">
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition duration-300 shadow-md">
                Get My Kundli
            </button>
        </form>
    </div>
</div>

@endsection
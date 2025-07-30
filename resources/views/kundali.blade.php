@extends('layouts.app')

@section('title', 'Chatbot')

@section('content')
    <div class="container">
        <div class="chatbot-container">
            <form method="POST" action="{{ route('submit.kundali') }}">
                @csrf
                <input name="name" placeholder="Your Name">
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <input name="dob" placeholder="Date of Birth (YYYY-MM-DD)">
                <input name="tob" placeholder="Time of Birth (HH:MM)">
                <input name="place" placeholder="Place of Birth (e.g., Delhi)">
                <button type="submit">Get My Kundli</button>
            </form>

        </div>
    </div>
@endsection
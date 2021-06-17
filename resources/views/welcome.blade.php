@extends('layout')

<style>
    .welcome-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        padding: 1rem;
    }

    .welcome-heading {
        font-size: 3.5rem;
        font-weight: bold;
        font-family: 'United Sans'
    }

    .welcome-message {
        font-size: 1.25rem;
        color: #757575;
    }
</style>

@section('content')
    <div class="welcome-container">
        <h1 class="welcome-heading">PULSIS Web Theme</h1>
        <p class="welcome-message">You've successfully installed the PULSIS web theme.</p>
    </div>
@endsection

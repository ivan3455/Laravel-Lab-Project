@extends('layouts.app')

@push('styles')
<style>
    .teacher-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 16px;
        margin-bottom: 16px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .teacher-card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }
    .teacher-info h3 {
        margin: 0;
        color: #333;
    }
    .teacher-info p {
        margin: 4px 0 0;
        color: #555;
    }
    .filters {
        margin-bottom: 20px;
        display: flex;
        gap: 10px;
    }
    .filters a {
        display: inline-block;
        padding: 8px 15px;
        background-color: #eee;
        color: #333;
        text-decoration: none;
        border-radius: 20px;
        font-size: 0.9em;
    }
    .filters a.active {
        background-color: #0077cc;
        color: #fff;
    }
</style>
@endpush

@section('content')
<main style="max-width: 900px;">
    <h1>Викладачі</h1>

    <div class="filters">
        <a href="{{ route('teachers') }}"
           class="{{ !$currentFilter ? 'active' : '' }}">
           Всі спеціалізації
        </a>
        <a href="{{ route('teachers', ['specialization' => 'Програмування']) }}"
           class="{{ $currentFilter == 'Програмування' ? 'active' : '' }}">
           Програмування
        </a>
        <a href="{{ route('teachers', ['specialization' => 'Бізнес']) }}"
           class="{{ $currentFilter == 'Бізнес' ? 'active' : '' }}">
           Бізнес
        </a>
    </div>

    <div class="teacher-list">
        @forelse ($teachers as $teacher)
            <div class="teacher-card">
                <img src="{{ $teacher['photo'] }}" alt="Фото {{ $teacher['name'] }}">
                <div class="teacher-info">
                    <h3>{{ $teacher['name'] }}</h3>
                    <p><strong>Спеціалізація:</strong> {{ $teacher['specialization'] }}</p>
                </div>
            </div>
        @empty
            <p>Викладачів за вашим запитом не знайдено.</p>
        @endforelse
    </div>

</main>
@endsection

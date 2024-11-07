@extends('layouts.app')
@section('title', 'Конаткты')
@section('content')
    <h1>Контакты - {{ $theme }}</h1>

    <x-contact-text :theme="$theme" :contacts="$contacts"/>

    <x-theme-button :theme="session('theme', 'classic')" :back="$back">Назад</x-theme-button>
@endsection

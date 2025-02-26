<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-bold mb-4">Personalize seu Site</h2>

    <label class="block mb-2">Nome do Casal:</label>
    <input type="text" wire:model="couple_names" class="w-full border p-2 rounded-md mb-4">

    <label class="block mb-2">Data do Casamento:</label>
    <input type="date" wire:model="wedding_date" class="w-full border p-2 rounded-md mb-4">

    <label class="block mb-2">Cor do Tema:</label>
    <input type="color" wire:model="theme_color">

    <button wire:click="save" class="bg-blue-500 text-white px-4 py-2 rounded-md">Salvar</button>

    @if (session()->has('message'))
        <p class="text-green-500 mt-2">{{ session('message') }}</p>
    @endif
</div>
@extends('layouts.app')

@section('content')
    <h1>Configurações</h1>
    @livewire('customization')
@endsection
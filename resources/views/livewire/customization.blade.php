<div>
    <h2>Personalização do Site</h2>

    <label>Cor Primária:</label>
    <input type="color" wire:model="primary_color">

    <label>Cor Secundária:</label>
    <input type="color" wire:model="secondary_color">

    <label>Fonte:</label>
    <select wire:model="font_family">
        <option value="Roboto">Roboto</option>
        <option value="Arial">Arial</option>
        <option value="Georgia">Georgia</option>
    </select>

    <label>Mensagem de Boas-Vindas:</label>
    <textarea wire:model="welcome_message"></textarea>

    <button wire:click="save">Salvar</button>

    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif
</div>
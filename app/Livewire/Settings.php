<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;

class Settings extends Component
{
    public $theme_color;
    public $wedding_date;
    public $couple_names;

    public function mount()
    {
        $this->theme_color = Setting::where('key', 'theme_color')->value('value') ?? '#ffcc00';
        $this->wedding_date = Setting::where('key', 'wedding_date')->value('value') ?? now()->format('Y-m-d');
        $this->couple_names = Setting::where('key', 'couple_names')->value('value') ?? 'Noivo & Noiva';
    }

    public function save()
    {
        Setting::updateOrCreate(['key' => 'theme_color'], ['value' => $this->theme_color]);
        Setting::updateOrCreate(['key' => 'wedding_date'], ['value' => $this->wedding_date]);
        Setting::updateOrCreate(['key' => 'couple_names'], ['value' => $this->couple_names]);

        session()->flash('message', 'Configurações salvas!');
    }

    public function render()
    {
        return view('livewire.settings');
    }
}

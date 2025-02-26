<?php

namespace App\Livewire;

use App\Models\SiteCustomization;
use Livewire\Component;

class Customization extends Component
{
    public $primary_color, $secondary_color, $font_family, $banner_image, $welcome_message, $sections_visibility = [];

    public function mount()
    {
        dd(tenant());
        $customization = SiteCustomization::where('tenant_id', tenant()->id)->first();
        if ($customization) {
            $this->primary_color = $customization->primary_color;
            $this->secondary_color = $customization->secondary_color;
            $this->font_family = $customization->font_family;
            $this->banner_image = $customization->banner_image;
            $this->welcome_message = $customization->welcome_message;
            $this->sections_visibility = $customization->sections_visibility ?? [];
        }
    }

    public function save()
    {
        SiteCustomization::updateOrCreate(
            ['tenant_id' => tenant()->id],
            [
                'primary_color' => $this->primary_color,
                'secondary_color' => $this->secondary_color,
                'font_family' => $this->font_family,
                'banner_image' => $this->banner_image,
                'welcome_message' => $this->welcome_message,
                'sections_visibility' => $this->sections_visibility,
            ]
        );

        session()->flash('message', 'Personalização salva com sucesso!');
    }

    public function render()
    {
        return view('livewire.customization');
    }
}

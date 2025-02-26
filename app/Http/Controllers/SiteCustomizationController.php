<?php

namespace App\Http\Controllers;

use App\Models\SiteCustomization;
use Illuminate\Http\Request;

class SiteCustomizationController extends Controller
{
    public function getCustomization()
    {
        $customization = SiteCustomization::where('tenant_id', tenant()->id)->firstOrFail();
        return response()->json($customization);
    }

    public function updateCustomization(Request $request)
    {
        $customization = SiteCustomization::updateOrCreate(
            ['tenant_id' => tenant()->id],
            $request->validate([
                'primary_color' => 'nullable|string',
                'secondary_color' => 'nullable|string',
                'font_family' => 'nullable|string',
                'banner_image' => 'nullable|string',
                'welcome_message' => 'nullable|string',
                'sections_visibility' => 'nullable|array',
            ])
        );

        return response()->json($customization);
    }
}

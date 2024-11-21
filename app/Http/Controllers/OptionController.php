<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function Options()
    {
        $options = Option::whereIn('key', [
            'name',
            'phone',
            'email',
            'address',
            'description',
            'instagram',
            'facebook',
            'twitter',
            'linkedin',
            'discord',
            'youtube',
            'github',
            'web_logo',
            'gmap_link',
            'privacy_policy',
            'tos',
        ])->get()->keyBy('key');

        // Extract individual options or set default values if not found
        $name = $options['name']->value ?? '';
        $phone = $options['phone']->value ?? '';
        $email = $options['email']->value ?? '';
        $address = $options['address']->value ?? '';
        $description = $options['description']->value ?? '';
        $instagram = $options['instagram']->value ?? '';
        $facebook = $options['facebook']->value ?? '';
        $twitter = $options['twitter']->value ?? '';
        $linkedin = $options['linkedin']->value ?? '';
        $discord = $options['discord']->value ?? '';
        $youtube = $options['youtube']->value ?? '';
        $github = $options['github']->value ?? '';
        $gmap_link = $options['gmap_link']->value ?? '';
        $privacyPolicyContent = $options['privacy_policy']->value ?? '';
        $tosContent = $options['tos']->value ?? '';

        // Fetch the image URL from the media collection
        $web_logo = isset($options['web_logo'])
            ? $options['web_logo']->getFirstMediaUrl('info_img')
            : null;

        return view('admin.all-options', compact(
            'name',
            'phone',
            'email',
            'address',
            'description',
            'instagram',
            'facebook',
            'twitter',
            'linkedin',
            'youtube',
            'github',
            'discord',
            'web_logo',
            'gmap_link',
            'privacyPolicyContent',
            'tosContent'
        ));
    }

    public function saveOptions(Request $request)
    {
        $request->validate([
            'privacy_policy' => 'required',
            'tos' => 'required',
        ]);

        // Save the content to the database or file system
        Option::updateOrCreate(
            ['key' => 'privacy_policy'],
            ['value' => $request->input('privacy_policy')]
        );

        Option::updateOrCreate(
            ['key' => 'tos'],
            ['value' => $request->input('tos')]
        );

        return redirect()->back()->with([
            'success' => true,
            'message' => 'Options saved successfully',
        ]);
    }

    public function getOptions()
    {
        // Retrieve the current content of the Privacy Policy and Terms of Service
        $privacyPolicyContent = Option::where('key', 'privacy_policy')->value('value') ?? '';
        $tosContent = Option::where('key', 'tos')->value('value') ?? '';

        // Return the content as JSON
        return response()->json([
            'privacy_policy' => $privacyPolicyContent,
            'tos' => $tosContent,
        ]);
    }

    public function saveWeb(Request $request)
    {
        // dd($request->web_logo);
        $request->validate([
            'web_logo' => 'nullable|image|max:20048|mimes:jpeg,png,jpg',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'gmap_link' => 'required|url',
        ]);

        $fields = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
            'gmap_link' => $request->input('gmap_link'),
        ];

        // Loop through each field and save it
        foreach ($fields as $key => $value) {
            Option::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        if ($request->hasFile('web_logo')) {
            $webLogo = $request->file('web_logo');
            $option = Option::updateOrCreate(
                ['key' => 'web_logo'],
                ['value' => $webLogo->getClientOriginalName()]
            );
            $option->clearMediaCollection('info_img');
            $option->addMedia($webLogo)->toMediaCollection('info_img');
        }

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Options saved successfully',
        ]);
    }

    public function saveSocials(Request $request)
    {
        $request->validate([
            'discord' => 'nullable|url',
            'youtube' => 'nullable|url',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
        ]);

        // Prepare an array of fields to update or create
        $socialFields = [
            'discord',
            'youtube',
            'facebook',
            'instagram',
            'twitter',
            'linkedin',
            'github',
        ];

        // Loop through each field and save it if provided
        foreach ($socialFields as $field) {
            $value = $request->input($field);

            // Only update or create if the value is not null
            if (!is_null($value)) {
                Option::updateOrCreate(
                    ['key' => $field],
                    ['value' => $value]
                );
            }
        }

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Socials saved successfully',
        ]);
    }
}

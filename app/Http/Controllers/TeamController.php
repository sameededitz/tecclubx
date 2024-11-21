<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.all-teams', compact('teams'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'discord' => 'nullable|url',
            'youtube' => 'nullable|url',
            'image' => 'nullable|image|max:20480|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['openModal' => true]);
        }

        $team = Team::create([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'linkedin' => $request->input('linkedin'),
            'github' => $request->input('github'),
            'discord' => $request->input('discord'),
            'youtube' => $request->input('youtube'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $team->clearMediaCollection('team_info');
            $team->addMedia($image)->toMediaCollection('team_info');
        }

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Team member added successfully',
        ]);
    }

    public function edit(Team $team)
    {
        return view('admin.edit-team', compact('team'));
    }

    public function update(Request $request, Team $team)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'github' => 'nullable|url',
            'discord' => 'nullable|url',
            'youtube' => 'nullable|url',
            'image' => 'nullable|image|max:20480|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $team->update([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'facebook' => $request->input('facebook'),
            'twitter' => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'linkedin' => $request->input('linkedin'),
            'github' => $request->input('github'),
            'discord' => $request->input('discord'),
            'youtube' => $request->input('youtube'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $team->clearMediaCollection('team_info');
            $team->addMedia($image)->toMediaCollection('team_info');
        }

        return redirect()->route('all-teams')->with([
            'status' => 'success',
            'message' => 'Team member updated successfully',
        ]);
    }

    public function delete(Team $team)
    {
        $team->clearMediaCollection('team_info');
        $team->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Team member deleted successfully',
        ]);
    }
}

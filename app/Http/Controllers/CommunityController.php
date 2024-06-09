<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;

class CommunityController extends Controller
{
    // Menampilkan form untuk membuat community baru
    public function create()
    {
        return view('community');
    }

    // Menyimpan community baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'nullable|required|string|max:255',
            'tagline' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'guide' => 'required|string',
            'members_id' => 'nullable|string|max:255',
        ]);

        Community::create($validatedData);

        return redirect()->route('community')->with('success', 'Community created successfully.');
    }
}

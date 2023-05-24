<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $profile = Profile::with('educations', 'experiences', 'skills')
            ->where('user_id', $user_id)->first();

        return view('profile.profile', [
            'profile' => $profile,
        ]);
    }


    public function show(Profile $profile)
    {
        $profile->with('educations', 'experiences', 'skills')->get();
        return view('profile.profile', [
            'profile' => $profile,
        ]);
    }


    public function create(Request $request)
    {
        $counselors = null;
        if ($request->search) {
            $counselors = User::with(['profile'])->where('role', 'c')
            ->whereRelation('profile', 'profession', '!=' , 'NA')
            ->whereRelation('profile', 'profession', 'LIKE', '%' . $request->search . '%')->paginate(100);
        } else {
            $counselors = User::with(['profile'])->where('role', 'c')
            ->whereRelation('profile', 'profession', '!=' , 'NA')->paginate(8);
        }

        return view('profile.findprofile', [
            'counselors' => $counselors,
        ]);
    }


    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'intro' => 'required|min:50|max:500',
            'profession' => 'required|max:50',
            'profile_image' => 'image|mimes:png,jpg,jpeg|max:5000'
        ]);

        $imageName = null;
        if ($request->profile_image) {
            $imageName = time() . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('images'), $imageName);
            Profile::where('id', $profile->id)
                ->update([
                    'intro' => $request->intro,
                    'profession' => $request->profession,
                    'profile_image' => $imageName,
                ]);
        } else {
            Profile::where('id', $profile->id)
                ->update([
                    'intro' => $request->intro,
                    'profession' => $request->profession,
                ]);
        }

        return redirect()->back()->with('success', 'profile info updated successfully');
    }
}

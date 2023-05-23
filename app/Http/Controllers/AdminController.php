<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Question;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $month = [
            'january', 'february', 'march', 'april', 'may', 'june',
            'july', 'august', 'september', 'october', 'november', 'december'
        ];
        $user = [];
        $student = [];
        $counselor = [];
        foreach ($month as $key => $value) {
            $user[] = User::where(DB::raw("DATE_FORMAT(created_at, '%M')"), $value)
                ->whereYear('created_at', Carbon::now()->format('Y'))->count();

            $student[] = User::where(DB::raw("DATE_FORMAT(created_at, '%M')"), $value)->where('role', 's')
                ->whereYear('created_at', Carbon::now()->format('Y'))->count();

            $counselor[] = User::where(DB::raw("DATE_FORMAT(created_at, '%M')"), $value)->where('role', 'c')
                ->whereYear('created_at', Carbon::now()->format('Y'))->count();
        }

        $total_students = User::where('role', 's')->count();
        $total_counselors = User::where('role', 'c')->count();
        $total_questions = Question::all()->count();

        return view('admin.dashboard', [
            'total_students' => $total_students,
            'total_counselors' => $total_counselors,
            'total_questions' => $total_questions,
            'user' => json_encode($user),
            'student' => json_encode($student),
            'counselor' => json_encode($counselor),
            'month' => json_encode($month)
        ]);
    }


    public function showStudents(Request $request)
    {
        $students = null;
        if ($request->search) {
            $students = User::with(['profile'])->where('role', 's')
            ->where('name', 'LIKE', '%' . $request->search . '%')->paginate(1000);
        } else {
            $students = User::with('profile')->where('role', 's')->paginate(4);
        }
        
        return view('admin.students', [
            'students' => $students,
        ]);
    }

    public function showCounselors(Request $request)
    {
        $counselors = null;
        if ($request->search) {
            $counselors = User::with(['profile'])->where('role', 'c')
            ->where('name', 'LIKE', '%' . $request->search . '%')->paginate(1000);
        } else {
            $counselors = User::with('profile')->where('role', 'c')->paginate(4);
        }
        
        return view('admin.counselors', [
            'counselors' => $counselors,
        ]);
    }

    public function deleteStudent(User $user)
    {
        $profile = Profile::where('user_id', $user->id)->first();

        $Questions = Question::where('user_id', $user->id)->latest()->get();
        foreach ($Questions as $Question) {
            $Question->delete();
        }

        $answers = Answer::where('user_id', $user->id)->latest()->get();
        foreach ($answers as $answer) {
            $answer->delete();
        }

        $educations = Education::where('profile_id', $profile->id)->latest()->get();
        foreach ($educations as $education) {
            $education->delete();
        }

        $experiences = Experience::where('profile_id', $profile->id)->latest()->get();
        foreach ($experiences as $experience) {
            $experience->delete();
        }

        $skills = Skill::where('profile_id', $profile->id)->latest()->get();
        foreach ($skills as $skill) {
            $skill->delete();
        }


        $profile->delete();
        $user->delete();
        return redirect()->back()->with('success', 'Student deleted successfully');
    }

    public function deleteCounselor(User $user)
    {

        $profile = Profile::where('user_id', $user->id)->first();

        $Questions = Question::where('user_id', $user->id)->latest()->get();
        foreach ($Questions as $Question) {
            $Question->delete();
        }

        $answers = Answer::where('user_id', $user->id)->latest()->get();
        foreach ($answers as $answer) {
            $answer->delete();
        }

        $educations = Education::where('profile_id', $profile->id)->latest()->get();
        foreach ($educations as $education) {
            $education->delete();
        }

        $experiences = Experience::where('profile_id', $profile->id)->latest()->get();
        foreach ($experiences as $experience) {
            $experience->delete();
        }

        $skills = Skill::where('profile_id', $profile->id)->latest()->get();
        foreach ($skills as $skill) {
            $skill->delete();
        }


        $profile->delete();
        $user->delete();
        return redirect()->back()->with('success', 'Counselor deleted successfully');
    }


    public function verifyCounselor(User $user){
        $updated = User::where('id', $user->id)->update([
            'verified' => true,
        ]);
        return redirect()->back()->with('success', 'Counselor verified successfully');
    }
}

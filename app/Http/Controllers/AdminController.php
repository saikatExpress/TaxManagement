<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        $clients = Client::all()->count();

        if(Auth::check())
        {
            return view('landing.dashboard', compact('clients'));
        }

        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    }

    public function serach(Request $request)
    {
        $query = Client::query();
        $searchTerm = $request->input('search');

        if ($searchTerm) {
            $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('mobile_no', 'like', '%' . $searchTerm . '%')
                    ->orWhere('tin_no', 'like', '%' . $searchTerm . '%')
                    ->orWhere('nid_no', 'like', '%' . $searchTerm . '%')
                    ->orWhere('payment', 'like', '%' . $searchTerm . '%')
                    ->orWhere('source_income', 'like', '%' . $searchTerm . '%')
                    ->orWhere('register_number', 'like', '%' . $searchTerm . '%')
                    ->orWhere('submission_date', 'like', '%' . $searchTerm . '%');
            });
        }

        $results = $query->get();

        session(['results' => $results]);
        return redirect()->route('search.result');

        // return view('search.results', compact('results'));
    }

    public function searchResult()
    {
        $results = session('results');
        // return $results;
        return view('admin.search.results', compact('results'));
    }
}
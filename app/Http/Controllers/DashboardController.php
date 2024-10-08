<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\ClassTime;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            'totalUpcomingBookings' => ClassTime::where('trainer_id', $request->user()
                ->trainer?->id)->count(),
            'totalBookings' => Booking::count(),
            'totalTrainer' => Trainer::count(),
            'totalTrainee' => User::where('is_trainee', true)->count(),
            'totalEmployee' => User::where('is_trainee', false)->count(),
        ];

        return view('dashboard', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use RTippin\Messenger\Contracts\MessengerProvider;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getDemoAccounts(): JsonResponse
    {
        $users = User::demo()
            ->get()
            ->shuffle()
            ->filter(fn (User $user) => $user->getProviderOnlineStatus() === MessengerProvider::OFFLINE)
            ->take(5);

        return new JsonResponse([
            'html' => view('auth.demoAcc')->with('users', $users)->render(),
        ]);
    }
    public function labels()
    {
        // DB::table('users')->select('name')->all();
        return response()->json(DB::table('users')->select('name')->get(),200);
    }
    

    /**
     * @return JsonResponse
     */
    public function csrfHeartbeat(): JsonResponse
    {
        return new JsonResponse([
            'auth' => true,
        ]);
    }
}

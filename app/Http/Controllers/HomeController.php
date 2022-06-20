<?php

namespace App\Http\Controllers;


use App\Http\Requests\SendMessageRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{

    /**
     * The index page, where returns the view with full user's info
     *
     * @param $userLogin
     * @return Factory|View|Application
     */
    public function userIndex($userLogin): Factory|View|Application
    {
        $user = User::query()->where('login', $userLogin)->first();
        return view('welcome', compact('user'));
    }

    /**
     * Method in which sending the message to user
     *
     * @param SendMessageRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function sendMessage(SendMessageRequest $request, User $user): RedirectResponse
    {
        Message::query()->create($request->validated()+['user_id' => $user->id]);
        return redirect()->route('user.index', $user->login)->with(['sent' => true]);
    }

}

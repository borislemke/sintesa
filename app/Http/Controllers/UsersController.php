<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        $super_admins = [];
        $web_masters = [];
        $analysts = [];

        foreach ($users as $user) {
            switch ($user->role_id) {
                case 1:
                    $super_admins[] = $user;
                    break;
                case 2:
                    $web_masters[] = $user;
                    break;
                case 3:
                    $analysts[] = $user;
                    break;
            }
        }

        return [
            [
                'group' => 'Super Admin',
                'info' => 'Super admins have full access to every feature',
                'users' => $super_admins
            ],
            [
                'group' => 'Web Master',
                'info' => 'Web masters have full access except user management',
                'users' => $web_masters
            ],
            [
                'group' => 'Analyst',
                'info' => 'Analysts can only view data without editing them',
                'users' => $analysts
            ]
        ];
    }

    public function store(Request $request)
    {
        if ($request->id) return $this->update($request);

        $error = [];

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->image = $request->image;
        $user->active = $request->active;

        if (User::where('username', $request->username)->first()) {
            $error['username'] = 'Username already exists. Please choose a different username';
        }

        if (User::where('email', $request->email)->first()) {
            $error['email'] = 'Email already exists. Please choose a different email';
        }

        if (strlen($request->password) < 8) {
            $error['password'] = 'Password must be at least 8 characters';
        }

        if ($request->email == '') {
            $error['email'] = 'Email cannot be empty';
        }

        if ($request->username == '') {
            $error['username'] = 'Username cannot be empty';
        }

        if ($request->firstname == '') {
            $error['first_name'] = 'First name cannot be empty';
        }

        if (filter_var($user->email, FILTER_VALIDATE_EMAIL) === false) {
            $error['email'] = 'Email is not a valid email address';
        }


        if ($error == []) {
            if ($user->save()) {
                return [
                    'status' => 200,
                    'status-text' => 'success',
                    'monolog' => [
                        'title' => 'User Added',
                        'message' => "User $user->firstname $user->lastname has been added successfully"
                    ],
                    'users' => $user
                ];
            } else {
                return [
                    'status' => 500,
                    'status-text' => 'error',
                    'monolog' => [
                        'title' => 'User Added',
                        'message' => "User $user->firstname $user->lastname could not be added. Refresh the page and try again, if the problem persists, contact your developer."
                    ]
                ];
            }
        } else {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'User Added',
                    'message' => $this->buildErrorMessage($error)
                ]
            ];
        }
    }

    public function update(Request $request)
    {
        $error = [];

        if (User::where('username', $request->username)->where('id', '<>', $request->id)->first()) {
            $error['username'] = 'Username has been taken, please choose another username.';
        }

        if (User::where('email', $request->email)->where('id', '<>', $request->id)->first()) {
            $error['email'] = 'Email has been taken, please choose another email.';
        }

        if (strlen($request->password) > 0 && strlen($request->password) < 8) {
            $error['password'] = 'Password must be at least 8 characters';
        }

        if ($request->email == '') {
            $error['email'] = 'Email cannot be empty';
        }

        if ($request->username == '') {
            $error['username'] = 'Username cannot be empty';
        }

        if ($request->firstname == '') {
            $error['first_name'] = 'First name cannot be empty';
        }

        $user = User::find($request->id);

        $user->username = $request->username;
        $user->email = $request->email;
        if (strlen($request->password) > 0) $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->image = $request->image;
        $user->active = $request->active;


        if ($error == []) {
            if ($user->save()) {
                return [
                    'status' => 200,
                    'status-text' => 'success',
                    'monolog' => [
                        'title' => 'User Updated',
                        'message' => "User $user->firstname $user->lastname has been updated successfully"
                    ],
                    'user' => $user
                ];
            } else {
                return [
                    'status' => 500,
                    'status-text' => 'error',
                    'monolog' => [
                        'title' => 'User Updated',
                        'message' => "User $user->firstname $user->lastname could not be updated. Refresh the page and try again, if the problem persists, contact your developer."
                    ]
                ];
            }
        } else {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'User Updated',
                    'message' => $this->buildErrorMessage($error)
                ]
            ];
        }
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);

        if ($user->delete()) {
            return [
                'status' => 200,
                'status-text' => 'success',
                'monolog' => [
                    'title' => 'User Delete',
                    'message' => "User deleted from system"
                ]
            ];
        } else {
            return [
                'status' => 500,
                'status-text' => 'error',
                'monolog' => [
                    'title' => 'User Delete',
                    'message' => "User could not be deleted. Refresh the page and try again, if the problem persists, contact your developer."
                ]
            ];
        }
    }

    public function buildErrorMessage($error)
    {
        $message = "";
        foreach ($error as $code => $err) {
            $message .= "$err. ";
        }
        return $message;
    }
}

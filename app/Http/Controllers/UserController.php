<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $file = $request->file("csv");
        if (!$file) {
            return abort(response()->json(["message" => "File is null"], 400));
        }

        $extension = $file->getClientOriginalExtension();
        if ($extension != "csv") {
            return abort(response()->json(["message" => "File not Accepted"], 415));
        }

        $fileOpen = fopen($file, "r");
        $columns = fgetcsv($fileOpen);

        while ($row = fgetcsv($fileOpen)) {
            $data_users[] = array_combine($columns, $row);
        }
        fclose($fileOpen);

        $data_users_with_hash_password = array_map(function($user) {
            $hash_password = Hash::make($user["senha"]);
            $user["senha"] = $hash_password;

            return $user;
        }, $data_users);

        return response(User::insert($data_users_with_hash_password), 201);
    }

}

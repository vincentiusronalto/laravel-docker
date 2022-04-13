<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Create a new UserController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }

    /**
     * Edit user data by id
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id){
        $post = User::find($id)->update($request->all()); 
        return response()->json(['message' => 'User has been updated']);
    }

    /**
     * Get user data by id
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByID($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user, 200); 
    }

    /**
     * Get user data by id
     * 
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        $user = User::all();
        return response()->json($user, 200);
    }
}
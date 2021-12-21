<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Authorization;
use App\Models\Organization;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use function view;

class PeopleController extends Controller
{
    public function index(){
        return view('people.index');
    }

    public function create_view(Request $request) {
        $user = Auth::user();

        $authorizations = Authorization::where('user_id', $user->id)->pluck('organization_id');
        $organizations = Organization::whereIn('id', $authorizations)->orderBy('id')->get();

        return view('people.create', compact('organizations'));
    }

    public function edit_view(Request $request) {
        $id = $request->id;
        $user = Auth::user();

        $person = Person::where('id', $request->id)->with('organization')->first();
        $authorizations = Authorization::where('user_id', $user->id)->pluck('organization_id');
        $organizations = Organization::whereIn('id', $authorizations)->orderBy('id')->get();

        $authorization = Authorization::where('user_id', $user->id)->where('organization_id', $person->organization_id)->first();

        if ($authorization) {
            return view('people.edit', compact('id', 'person', 'organizations'));
        }

        return redirect('/people')->with('alert', 'Not authorized to modify this person.');
//        return view('people.edit', compact('id', 'person', 'organizations'));
    }

    public function people_dt() {
        $people = Person::with('organization')->orderByDesc('created_at');

        return DataTables::of($people->get())->addIndexColumn()->make(true);
    }

    public function submit(Request $request) {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'phone' => 'required',
            'organization' => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $user = Auth::user();

        if ($request->hasFile('avatar')) {
            $path = Storage::disk('public')->putFile('avatar', $request->file('avatar'));
        } else {
            $path = null;
        }

        $person = Person::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $path,
            'organization_id' => $request->organization,
            'created_by' => $user->name,
            'updated_by' => $user->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($person->first()) {
            return $this->successResponse($person);
        } else {
            return $this->errorResponse(self::ERROR_MESSAGE_WHEN_SAVE, self::ERROR_SERVICE_UNAVAILABLE);
        }
    }

    public function edit(Request $request) {
        $validation = Validator::make($request->all(), [
            'id' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'organization' => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $user = Auth::user();

        $person = Person::where('id', $request->id)->first();

        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->organization_id = $request->organization;
        $person->updated_by = $user->name;
        $person->updated_at = Carbon::now();

        if ($request->hasFile('avatar')) {
            $path = Storage::disk('public')->putFile('avatar', $request->file('avatar'));
            $person->avatar = $path;
        }

        if ($person->save()) {
            return $this->successResponse($person);
        } else {
            return $this->errorResponse(self::ERROR_MESSAGE_WHEN_SAVE, self::ERROR_SERVICE_UNAVAILABLE);
        }
    }

    public function delete($id) {
        if ($id == null) {
            return $this->errorResponse(self::ERROR_NOT_FOUND, self::ERROR_MESSAGE_NOT_FOUND);
        }

        $person = Person::where('id', $id)->first();

        if ($person) {
            $person->delete();

            return $this->successResponse(self::SUCCESS_DELETE_DATA);
        } else {
            return $this->errorResponse(self::ERROR_DELETE_DATA, self::ERROR_SERVICE_UNAVAILABLE);
        }
    }
}

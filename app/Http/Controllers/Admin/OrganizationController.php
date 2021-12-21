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

class OrganizationController extends Controller
{
    public function index(){
        return view('organization.index');
    }

    public function create_view(Request $request) {
        return view('organization.create');
    }

    public function edit_view(Request $request) {
        $id = $request->id;
        $user = Auth::user();

        $organization = Organization::where('id', $request->id)->with('person')->first();
        $authorization = Authorization::where('user_id', $user->id)->where('organization_id', $request->id)->first();

        if ($authorization) {
            return view('organization.edit', compact('id', 'organization'));
        }

        return redirect('/organization')->with('alert', 'Not authorized to modify this organization.');
    }

    public function organization_dt() {
        $organizations = Organization::with('person')->orderByDesc('updated_at');

        return DataTables::of($organizations->get())->addIndexColumn()->make(true);
    }

    public function submit(Request $request) {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'website' => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $user = Auth::user();

        if ($request->hasFile('logo')) {
            $path = Storage::disk('public')->putFile('logo', $request->file('logo'));
        } else {
            $path = null;
        }

        $organization = Organization::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
            'logo' => $path,
            'created_by' => $user->name,
            'updated_by' => $user->name,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $authorization = Authorization::create([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
        ]);

        if ($organization->first()) {
            return $this->successResponse($organization);
        } else {
            return $this->errorResponse(self::ERROR_MESSAGE_WHEN_SAVE, self::ERROR_SERVICE_UNAVAILABLE);
        }
    }

    public function edit(Request $request) {
        $validation = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'website' => 'required',
        ]);

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $user = Auth::user();

        $organization = Organization::where('id', $request->id)->first();

        $organization->name = $request->name;
        $organization->email = $request->email;
        $organization->phone = $request->phone;
        $organization->website = $request->website;
        $organization->updated_by = $user->name;
        $organization->updated_at = Carbon::now();

        if ($request->hasFile('logo')) {
            $path = Storage::disk('public')->putFile('logo', $request->file('logo'));
            $organization->logo = $path;
        }

        if ($organization->save()) {
            return $this->successResponse($organization);
        } else {
            return $this->errorResponse(self::ERROR_MESSAGE_WHEN_SAVE, self::ERROR_SERVICE_UNAVAILABLE);
        }
    }

    public function delete($id) {
        if ($id == null) {
            return $this->errorResponse(self::ERROR_NOT_FOUND, self::ERROR_MESSAGE_NOT_FOUND);
        }

        $organization = Organization::where('id', $id)->first();
        Person::where('organization_id', $id)->delete();

        if ($organization) {
            $organization->delete();

            return $this->successResponse(self::SUCCESS_DELETE_DATA);
        } else {
            return $this->errorResponse(self::ERROR_DELETE_DATA, self::ERROR_SERVICE_UNAVAILABLE);
        }
    }
}

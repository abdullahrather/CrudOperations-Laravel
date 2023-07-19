<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $url = url('/group');
        $group = new Group();
        $title = "Group Register";
        $groups = Group::all();
        $data = compact('url', 'group', 'title', 'groups');
        return view('group')->with($data);;
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'grp_name' => 'required',
                'grp_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );
        // Handle upload file
        if ($request->hasFile('grp_logo')) {
            $file = $request->file('grp_logo');
            $filename = time() . "_" . $file->getClientOriginalName();
            $path = $file->storeAs('group-logos', $filename, 'public'); //path storage folder

            //Insert Query
            $group = new Group;
            $group->grp_name = $request['grp_name'];
            $group->grp_desc = $request['grp_desc'];
            $group->grp_logo = $path;
            $group->save();
        }
        return redirect('/group/view');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //where
            $groups = Group::where('grp_name', 'LIKE', "%$search%")->orwhere('grp_desc', 'LIKE', "%$search%")->Paginate(15);
        } else {
            $groups = Group::orderBy('grp_name')->Paginate(15);
        }

        $data = compact('groups', 'search');
        return view('group-view')->with($data);
    }

    public function trash()
    {
        $groups = Group::onlyTrashed()->get();
        $data = compact('groups');
        return view('group-trash')->with($data);
    }

    //Delete Query
    public function delete($grp_id)
    {
        $group = Group::find($grp_id);
        if (!is_null($group)) {
            $group->delete();
            $group->status = 0;
            $group->save();
        }
        return redirect('group/view');
    }

    public function restore($grp_id)
    {
        $group = Group::withTrashed()->find($grp_id);
        if (!is_null($group)) {
            $group->restore();
            $group->status = 1;
            $group->save();
        }
        return redirect('group/trash');
    }

    public function force_delete($grp_id)
    {
        $group = Group::withTrashed()->find($grp_id);
        if (!is_null($group)) {
            $group->forceDelete();
        }
        return redirect()->back();
    }

    public function edit($grp_id)
    {
        $group = Group::find($grp_id);
        if (is_null($group)) {
            //not found
            return redirect('group/view');
        } else {
            $url = url('/group/update') . "/" . $grp_id;
            $title = "Group Update";
            $data = compact('url', 'title', 'group');
            return view('group')->with($data);
        }
    }

    public function update($grp_id, Request $request)
    {
        $group = Group::find($grp_id);
        if (is_null($group)) {
            //Not Found
            return redirect('group/view');
        } else {
            $request->validate([
                'grp_name' => 'required',
                'grp_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $group->grp_name = $request['grp_name'];
            $group->grp_desc = $request['grp_desc'];
            if ($request->hasFile('grp_logo')) {
                $file = $request->file('grp_logo');
                $filename = time() . "_" . $file->getClientOriginalName();
                $path = $file->storeAs('group-logos', $filename, 'public'); // path storage folder
                $group->grp_logo = $path;
            }
            $group->save();

            return redirect('group/view');
        }
    }
}

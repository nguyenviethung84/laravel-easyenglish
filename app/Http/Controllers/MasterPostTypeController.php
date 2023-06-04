<?php

namespace App\Http\Controllers;

use App\Models\MasterPostType;
use Illuminate\Http\Request;

/**
 * Class MasterPostTypeController
 * @package App\Http\Controllers
 */
class MasterPostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masterPostTypes = MasterPostType::paginate();

        return view('master-post-type.index', compact('masterPostTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $masterPostTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masterPostType = new MasterPostType();
        return view('master-post-type.create', compact('masterPostType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MasterPostType::$rules);

        $masterPostType = MasterPostType::create($request->all());

        return redirect()->route('master-post-type.index')
            ->with('success', 'MasterPostType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masterPostType = MasterPostType::find($id);

        return view('master-post-type.show', compact('masterPostType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masterPostType = MasterPostType::find($id);

        return view('master-post-type.edit', compact('masterPostType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MasterPostType $masterPostType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterPostType $masterPostType)
    {
        request()->validate(MasterPostType::$rules);

        $masterPostType->update($request->all());

        return redirect()->route('master-post-type.index')
            ->with('success', 'MasterPostType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $masterPostType = MasterPostType::find($id)->delete();

        return redirect()->route('master-post-type.index')
            ->with('success', 'MasterPostType deleted successfully');
    }
}

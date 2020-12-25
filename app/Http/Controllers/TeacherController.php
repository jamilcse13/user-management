<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new Teacher();
        $searchParams = $request->only($model->getFillable());

        foreach ($searchParams as $field => $value) {
            if ($value) {
                $model = $model->where($field, 'LIKE', "%$value%");
            }
        }
        
        $teachers = $model->orderBy('name')->paginate();

        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Teacher $teacher)
    {
        $request->validate($this->getRules());

        $teacher = Teacher::create($request->all());

        return redirect('teachers')->with('success', 'Student has added successfuly!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->getRules());
        
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        return redirect('teachers')->with('success', 'Student has updated successfuly!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return redirect('teachers')->with('success', 'Student has deleted successfuly!');;
    }

    private function getRules()
    {
        return [
            'name' => 'required',
            'dept' => 'required'
        ];
    }
}

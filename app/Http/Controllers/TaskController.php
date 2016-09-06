<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Task;

class TaskController extends Controller
{

    public function index () {
        if (session()->has('user')) {
            $user = session('user');
            $tasks = $user->tasks()->get();

            return view('task/index', [
                'tasks' => $tasks
            ]);
        } else {
            return redirect('user/login');
        }
    }

    public function create () {
        return view('task/create');
    }

    public function store (Request $request) {
        $input = $request->all();

        $user = session('user');

        Task::create([
            'user_id' => $user->id,
            'name'    => $input['name'],
            'desc'    => $input['desc']
        ]);

        return redirect('task/index');
    }

    public function show ($id) {
        $task = Task::find($id);

        return view('task/view', [
            'task' => $task
        ]);
    }

    public function edit ($id) {
        $task = Task::find($id);

        return view('task/edit', [
            'task' => $task
        ]);
    }

    public function done ($id) {
        $task = Task::find($id);

        $task->done = true;

        $task->save();

        return response()->json([
            'status' => 'ok',
            'task'   => $task
        ]);
    }

    public function update (Request $request, $id) {
        $input = $request->all();

        $task = Task::find($id);

        $task->name = $input['name'];
        $task->desc = $input['desc'];

        $task->save();

        return redirect('task/index');
    }

    public function destroy ($id) {
        Task::destroy($id);

        return redirect('task/index');
    }

    public function search (Request $request) {
        $query = $request->input('query');
        $user = session('user');

        $tasks = $user->tasks()->select('task.id as data', \DB::raw('concat(task.name, ": ", task.desc) as value'))
        ->where('name', 'like', '%' . $query . '%')->orWhere('desc', 'like', '%' . $query . '%')->get();

        return response()->json([
            'suggestions' => $tasks
        ]);
    }

}

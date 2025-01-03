<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Category;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::join('categories', 'tasks.category_id', '=', 'categories.id')
        ->select('tasks.*', 'categories.name as category_name' )
        ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        $categories = Category::all();
        //return view('categories.index', compact('categories'));
        //$categories = Category::getAllCategories()
        return view('tasks.create', compact('categories'));
    }

    public function store(Request $request) {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->completed_date = $request->completed_date;
        $task->category_id = $request->category_id;
        
        $task->save();

        return redirect( '/tasks' )->with( 'msg', 'Tarefa criada com sucesso!' );
    }

    public function destroy( $id ) {
        Task::findOrFail( $id )->delete();
        return redirect( '/tasks' )->with( 'msg', 'Tarefa excluida com sucesso');
    }

    public function edit( $id ) {
        $categories = Category::all();
        $task = Task::findOrFail( $id );

        return view( '/tasks.edit', [ 'task' => $task, 'categories' => $categories ] );
    }

    public function update( Request $request ) {
        Task::findOrFail( $request->id )->update( $request->all() );

        return redirect( '/tasks' )->with( 'msg', 'Tarefa editada com sucesso');
    }
}

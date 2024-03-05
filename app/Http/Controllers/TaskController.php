<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class TaskController extends Controller
{
    public function index()
    { 
    }
    public function create()
    { 
    }
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'task_date' => 'required',
        ]);

        $task = new Task();
        $task->category_id = $request->input('category_id');
        $task->task_description = $request->input('task_name');
        $task->task_date = $request->input('task_date');
        $task->completed =  0;
        $task->user_id = Auth::id();
        $task->save();

        return Redirect::back();
    }
    public function show($id)
    {
        $user = Auth::id();
        $category = Category::where('id', $id)->get();
        $count = Task::where('category_id', $id)->where('completed', 0)->count();
        $completed_count = Task::where('category_id', $id)->where('completed', 1)->count();
        $tasks = Task::where('category_id', $id)->where('user_id', $user)->where('completed', 0)->get();
        $completed_tasks = Task::where('category_id', $id)->where('user_id', $user)->where('completed', 1)->get();
        return view('category', compact('category', 'tasks', 'count', 'completed_count', 'completed_tasks'));
    }
    
    public function deleteCategories() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tasks')->truncate();
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        return Redirect::back();
    }
    public function edit($id)
    {
        $task = Task::findOrFail($id); 
        return view('taskEdit', compact('task'));
    }
    
    public function update(Request $request, Task $task)
    {   
        $request->validate([
            'task_name' => 'required|string|max:255',
        ]);
        $task = new Task();
        $user_id = Auth::id();
        $category_id = $request->category_id;
        $task_id = $request->id;
        $task_description = $request->task_name;
        $task_date = $request->task_date;
        Task::where('user_id', $user_id)
        ->where('category_id', $category_id)
        ->where('id', $task_id)
        ->update(['task_description' => $task_description, 'task_date' => $task_date]);

        $backUrl = url("/categories/show/{$request->category_id}");
        return redirect($backUrl);
    }
    public function destroy(Request $request)
    {
        Task::where('category_id', $request->category_id)->delete();
        return Redirect::back();
    }
    public function deleteTask($category_id, $task_id) {
        Task::where('category_id', $category_id)->where('id', $task_id)->delete();

        $url = url("categories/show/{$category_id}");
        return redirect($url);
    }
    public function deleteCategory($id) {
        $user_id = Auth::id();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Task::where('category_id', $id)->where('user_id', $user_id)->truncate();
        Category::where('id', $id)->where('user_id', $user_id)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        return Redirect::back();
    }
    public function taskCompleted($id) {
        $user_id = Auth::id();
        Task::where('user_id', $user_id)
        ->where('id', $id)
        ->update(['completed' => 1]);
        return Redirect::back();
    }
}

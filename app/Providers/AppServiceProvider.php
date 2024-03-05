<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }
    public function boot(): void
    {
        View::composer('layouts.categories', function ($view) {
            $user = Auth::user(); 
            $categories = Category::where('user_id', $user->id)->get(); 
            $tasks = Task::where('user_id', $user->id)->get(); 
            $view->with('categories', $categories);
        });
        View::composer('layouts.nav', function ($view) {
            $user_id = Auth::id();
        
            // Retrieve the user's categories
            $categories = Category::where('user_id', $user_id)->limit(2)->get();
        
            if ($categories->count() > 0) {
                $firstCategory = $categories->first();
                $view->with('firstCategory', $firstCategory);
        
                if ($categories->count() > 1) {
                    $secondCategory = $categories->skip(1)->first();
                    $view->with('secondCategory', $secondCategory);
        
                    // Retrieve tasks for the second category
                    $tasksOfSecondCategory = Task::where('category_id', $secondCategory->id)
                        ->where('user_id', $user_id)
                        ->limit(2)
                        ->get();
        
                    if ($tasksOfSecondCategory->count() > 0) {
                        $view->with('taskOneOfSecondCategory', $tasksOfSecondCategory->first());
        
                        if ($tasksOfSecondCategory->count() > 1) {
                            $view->with('taskTwoOfSecondCategory', $tasksOfSecondCategory->skip(1)->first());
                        }
                    }
                }
        
                // Retrieve tasks for the first category
                $tasksOfFirstCategory = Task::where('category_id', $firstCategory->id)
                    ->where('user_id', $user_id)
                    ->limit(2)
                    ->get();
        
                if ($tasksOfFirstCategory->count() > 0) {
                    $view->with('firstTaskOfFirstCategory', $tasksOfFirstCategory->first());
        
                    if ($tasksOfFirstCategory->count() > 1) {
                        $view->with('secondTaskOfFirstCategory', $tasksOfFirstCategory->skip(1)->first());
                    }
                }
            }
        });
        View::composer('layouts.side', function ($view) {
            $user_id = Auth::id();
            $categories = Category::where('user_id', $user_id)->limit(2)->get();

            if ($categories->count() > 0) {
                $firstCategory = $categories->first();
                $view->with('firstCategory', $firstCategory);
        
                if ($categories->count() > 1) {
                    $secondCategory = $categories->skip(1)->first();
                    $view->with('secondCategory', $secondCategory);
        
                    // Retrieve tasks for the second category
                    $tasksOfSecondCategory = Task::where('category_id', $secondCategory->id)
                        ->where('user_id', $user_id)
                        ->limit(2)
                        ->get();
        
                    if ($tasksOfSecondCategory->count() > 0) {
                        $view->with('taskOneOfSecondCategory', $tasksOfSecondCategory->first());
        
                        if ($tasksOfSecondCategory->count() > 1) {
                            $view->with('taskTwoOfSecondCategory', $tasksOfSecondCategory->skip(1)->first());
                        }
                    }
                }
        
                // Retrieve tasks for the first category
                $tasksOfFirstCategory = Task::where('category_id', $firstCategory->id)
                    ->where('user_id', $user_id)
                    ->limit(2)
                    ->get();
        
                if ($tasksOfFirstCategory->count() > 0) {
                    $view->with('firstTaskOfFirstCategory', $tasksOfFirstCategory->first());
        
                    if ($tasksOfFirstCategory->count() > 1) {
                        $view->with('secondTaskOfFirstCategory', $tasksOfFirstCategory->skip(1)->first());
                    }
                }
            }
        });
        View::composer('layouts.categories', function ($view) {
            $user = Auth::id();
            $allTasks = Task::where('user_id', $user)->get();
            $view->with('allTasks', $allTasks); 
        });
        View::composer('layouts.side', function ($view) {
            $user = Auth::user(); // Get the authenticated user
            $categories = Category::where('user_id', $user->id)->get(); // Retrieve categories for the use
            $view->with('categories', $categories);
        });
    }
}

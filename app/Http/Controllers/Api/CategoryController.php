<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller
{
    use ApiResponseTrait;
    public function index() {
        $categories = CategoryResource::collection(Category::get());
        return $this->apiResponse($categories, "", 200);
    }

    public function show($id) {
        $category = Category::find($id);

        if($category) {

            return $this->apiResponse(new CategoryResource($category), "", 200);
        }

        return $this->apiResponse('null', "No Data Found", 404);
    }

    public function store(Request $request) {

        $validtor = Validator::make($request->all(), [
            'category_name' => 'required|max:255',
            'user_id' => 'required  ',
        ]);
        if($validtor->fails()) {
            return $this->apiResponse('null', $validtor->errors(), 202);
        }
        $store = Category::create($request->all());

        if($store) {

            return $this->apiResponse(new CategoryResource($store), "The Category Created Succussfully", 201);
        }

        return $this->apiResponse('null', "The Category Can't Be Created", 202);
    }
}




?>
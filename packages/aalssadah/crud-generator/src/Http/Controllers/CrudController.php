<?php

namespace Aalssadah\CrudGenerator\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;


class CrudController extends Controller
{
    public function index() :JsonResponse
    {
       return Response::json('It Works , My First Package',201);
    }
}

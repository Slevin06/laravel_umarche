<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class OwnersController extends Controller
{
    /**
     * OwnersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        // Carbonを使ってみる
//        $dateNow = Carbon::now();
//        $dateParse = Carbon::parse(now());
//        echo $dateNow . "\n";
//        echo $dateParse;

        // データを扱う方法のバリエーションテスト
//        $eloquentAll = Owner::all();
//        $querybuilderGet = DB::table('owners')->select('name', 'created_at')->get();
//        $querybuilderFirst = DB::table('owners')->select('name')->first();
//        $collectionTest = collect([
//            'name' => 'test',
//        ]);
//        dd($eloquentAll, $querybuilderGet, $querybuilderFirst, $collectionTest);

        $owners = Owner::select('name', 'email', 'created_at')->get();

        return view(
            'admin.owners.index',
            compact('owners')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

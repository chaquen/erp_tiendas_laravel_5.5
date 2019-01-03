<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Producto;
use App\DetalleInventario;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /*{
        //AQUI UNA PRUEBA DE Eloquent Y LAS RELACIONES ENTRE TABLAS
        $p=Producto::orderBy('fk_id_categoria',"ASC")->get();
        //dd($p[0]->categoria);
        foreach ($p as $key => $value) {
            dd([$value,
                $value->categoria,
                $value->categoria()->estado('0')->get(),
                $value->inventario,
                $value->inventario[0]->mi_sede()->where('id',1)->get()]);


                if($value->inventario!=null){

                    foreach ($value->inventario as $k => $v) {
                        echo $value->nombre_producto." => ";
                        echo $value->categoria->nombre_categoria." => ";

                        echo $v->cantidad_existencias."<br>";   ;
                    }

                }else{
                    echo $value->nombre_producto." => ";
                    echo $value->categoria->nombre_categoria." => ";
                    echo "0<br>";   ;
                }

        }
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subir_archivo(Request $request){
        /*$this->validate(request(),[
            'file'=>'required|max:10240|mimetypes:application/csv,application/excel,
                        application/vnd.ms-excel, application/vnd.msexcel,
                        text/csv, text/anytext, text/plain, text/x-c,
                        text/comma-separated-values,
                        inode/x-empty,
                        application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ]);*/
        dd($request->file('file'));
    }
}

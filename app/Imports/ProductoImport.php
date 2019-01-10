<?php

namespace App\Imports;

use App\Producto;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Categoria;

class ProductoImport implements ToCollection
{
    

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
                $id_cat=Categoria::where('nombre_categoria',$row[11])->first();
        
                if($id_cat==null){
                    $id_cat=1;
                }


                $p=Producto::create([
                    //
                    'codigo_producto'=>$row[0],
                    'nombre_producto'=>$row[1],
                    'descripcion_producto'=>$row[2],
                    'tipo_venta_producto'=>$row[3],
                    'unidades_por_caja'=>$row[4],
                    'precio_compra'=>$row[5],
                    'precio_venta'=>$row[6],
                    'precio_mayoreo'=>$row[7],
                    'porcentaje_ganancia'=>$row[8],
                    'minimo_inventario'=>$row[9],
                    'maximo_inventario'=>$row[10],
                    'fk_id_categoria'=>$id_cat,
                ]);
                //obtengo el id del producto
                //var_dump($p->id);
        }
    }
}

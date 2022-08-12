<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function descuento($precio){
        $valor = $precio;
        $texto = 'El descuento del producto es del ';
        $total = ' y el total es: ';

        if(is_numeric($precio) && $precio >= 0){
            if($precio < 100000){
                return 'Este producto no tiene descuento ';
            }

            else if($precio >= 100000 and $precio < 150000){
                return $texto . '2%' . $total . $precio - ($valor*0.02);
            }

            else if($precio > 150000 and $precio < 300000){
                return $texto . '3%' . $total . $precio - ($valor*0.03);
            }

            else if($precio > 300000 and $precio < 500000){
                return $texto . '4%' . $total . $precio - ($valor*0.04);
            }

            else if($precio > 500000){
                return $texto . '5%' . $total . $precio - ($valor*0.05);
            }
        }
        else{
            print 'El valor ingresado es incorrecto. Intentelo nuevamente';
        }
    }

    public function getIVA($name, $precio){
        $iva = $precio;
        $total = $precio + $iva;
        return 'El articulo ' . $name . ' sin IVA cuesta $' . $precio . ' y el precio del IVA es de $' . $iva .
        '.El total a pagar por el articulo es de $' . $total;
    }
}


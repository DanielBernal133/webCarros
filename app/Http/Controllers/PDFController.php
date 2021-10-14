<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crabbly\Fpdf\Fpdf;
use App\Vehiculos;

class PDFController extends Controller
{
    public function pdf()
    {
        $vehiculos = Vehiculos::all();
        $pdf = new FPDF('L','mm',array(550, 300));
        //1. Añadir paginas al documento
        $pdf->AddPage('L' ); //El a4 es para darle un tamaño al pdf
        $pdf->SetFont('Arial','B',20);
        $pdf->SetXY(05, 00);
        $pdf->Cell(80, 10, "Lista de vehiculos a la venta");
        //2.Caracteristicas de estilo
        $pdf->SetFont('Arial','B',16);

        //3. Imprimir contenido en el pdf
        $pdf->SetXY(05, 15);

        $pdf->Image('https://wallpaperstock.net/wallpapers/thumbs1/32984.jpg',0,210,150,0,'JPG');
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetTextColor(202, 55, 55);
        $pdf->SetFont('Courier','B',20);
        $pdf->Cell(80, 10, "Placa", 'TB' , 0, 'C', True);
        $pdf->Cell(80, 10, "Usuario vehiculo", 'TB' , 0, 'C', True);
        $pdf->Cell(80, 10, "Categoria vehiculo", 'TB' , 0, 'C', True);
        $pdf->Cell(80, 10, "Modelo", 'TB' , 0, 'C', True);
        $pdf->Cell(80, 10, "Marca", 'TB' , 0, 'C', True);
        $pdf->Cell(80, 10, "Estado", 'TB' , 0, 'C', True);
        $pdf->Cell(80, 10, "Precio", 'TB' , 1, 'C', True);
        foreach ($vehiculos as $vehiculo) {
            $pdf->SetTextColor(0, 0, 0);
            $pdf->Cell(80, 10, $vehiculo->VEHPLACA, 'TB' , 0, 'C', True);
            $pdf->Cell(80, 10, $vehiculo->Usuario()->first()->DATNOMBRE, 'TB' , 0, 'C', True);
            $pdf->Cell(80, 10, $vehiculo->categorias()->first()->CATIPO, 'TB' , 0, 'C', True);
            $pdf->Cell(80, 10, $vehiculo->VEHMODELO, 'TB' , 0, 'C', True);
            $pdf->Cell(80, 10, $vehiculo->VEHMARCA, 'TB' , 0, 'C', True);
            $pdf->Cell(80, 10, $vehiculo->VEHESTADO, 'TB' , 0, 'C', True);
            $pdf->Cell(80, 10, $vehiculo->VEHPRECIO, 'TB' , 1, 'C', True);
        }

        return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']); //->Es para convertir de html a pdf
    }
}

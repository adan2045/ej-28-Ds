<?php

require_once 'modelos/LineaCompra.php';
require_once 'modelos/Producto.php';
require_once 'modelos/Proveedor.php';
require_once 'modelos/PedidoDeCompra.php';



$prov1 = new Proveedor();
$prov1->Descripcion = 'Frutos secos';
$prov1->Id = 15425;

$prod1 = new Producto();
$prod1->Codigo = 1;
$prod1->Descripcion = 'GASEOSA';
$prod1->PrecioVenta = '$100';

$prod2 = new Producto();
$prod2->Codigo = 2;
$prod2->Descripcion = 'jugo natural';
$prod2->PrecioVenta = '$200';

$lin = new LineaDeCompra();
$lin->Cantidad = 10;
$lin->CostoUnitario = 100;
$lin->FueEntregado = 'true';
$lin->Producto = $prod1;

$lin2 = new LineaDeCompra();
$lin2->Cantidad = 5;
$lin2->CostoUnitario = 1000;
$lin2->FueEntregado = 'true';
$lin2->Producto = $prod2;



$pdc = new PedidoDeCompra();
$pdc->Fecha = '20/01/2023';
$pdc->Proveedor = $prov1;
$pdc->FechaEntregaEstimada = '25/01/2023';
$pdc->CostoTotal = '$12000 + iva';
$pdc->PedidoCerrado = 'True';

$pdc->ListLineaDeCompra[] = $lin;
$pdc->ListLineaDeCompra[] = $lin2;


$pdc-> MostarDatos();


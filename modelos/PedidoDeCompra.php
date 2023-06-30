<?php

class PedidoDeCompra
{

    public $Fecha;
    public $Proveedor;
    public $FechaEntregaEstimada;
    public $CostoTotal;
    public $PedidoCerrado;
    public $ListLineaDeCompra = array();



    public function MostarDatos()
    {
        echo 'Fecha: ' . $this->Fecha . '<Br>';
        echo 'Proveedor: ' . $this->Proveedor->Id . '<Br>';
        echo 'Proveedor: ' . $this->Proveedor->Descripcion . '<Br>';
        echo 'Fecha de entrega estimada: ' . $this->FechaEntregaEstimada . '<Br>';
        echo 'costo total: ' . $this->CostoTotal . '<Br>';
        echo 'pedido cerrado: ' . $this->PedidoCerrado . '<Br>';
        echo 'lista de linea de compra: <Br>';
        foreach ($this->ListLineaDeCompra as $lc) {
            echo '----------------------------------------------------------------------------------<Br>';
            echo 'precio venta: '. $lc->Producto->PrecioVenta . '<br>';
            echo 'descripcion producto: '. $lc->Producto->Descripcion . '<Br>';
            echo 'codigo producto: '. $lc->Producto->Codigo . '<Br>';
            echo 'cantidad: '. $lc->Cantidad . '<Br>';
            echo 'costo unitario: '. $lc->CostoUnitario . '<Br>';
            echo 'fue entrgado: '. $lc->FueEntregado . '<Br>';
            echo '----------------------------------------------------------------------------------<Br>';
        }
    }
}

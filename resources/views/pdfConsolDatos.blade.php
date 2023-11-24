<head>
    <style>
        /*ESTILOS PARA HEADER Y FOOTER*/
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 3.8cm;
            margin-left: 0.5cm;
            margin-right: 0.5cm;
            margin-bottom: 2cm;

        }

        header {
            position: fixed;
            top: 0.3cm;
            left: 1cm;
            right: 1cm;
            height: 1cm;
            text-align: center;
            line-height: 1cm;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            text-align: center;
        }

        /*INICIO ESTILOS PARA LA TABLA*/
        /* .page-break {
            page-break-inside: auto;
        } */

        /*
        table.table-bordered>thead>tr>th {
            border: 0.5px solid #a1a1a1;
            padding: 4px;
        }

        table.table-bordered>tbody>tr>td {
            border: 0.5px solid #a1a1a1;
            padding: 4px;
        }

        .table {
            width: 100%;
        } */

        /*FIN ESTILOS PARA LA TABLA*/

        table td {
            vertical-align: top;
            margin: 1px;
            padding: 1px;
            line-height: 0.0;
            border: 0.5px black solid;
            width: 100%;

        }

        .style-headers {
            font-size: 7pt;
            margin: 10pt;
            line-height: 1;
            border: none;
        }

        .style-values {
            font-size: 7pt;
            margin: 1px;
            padding: 4px;
            line-height: 1;
            border: none;
        }

        .list-style {
            list-style: none;
            line-height: 0.0;
        }

        .list-size-title {
            font-size: 8pt;
        }

        .list-size-values {
            font-size: 6pt;
        }

        .title-head {
            font-size: 9pt;
            text-align: center;
        }

        .no-border {
            border: none;
        }
    </style>
</head>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <table>
            <thead>
                <tr style="width:200px;">

                    <p style="line-height: 0.0;font-size: 8pt;margin-left:250px; "><strong></strong>
                    </p>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="no-border">
                        <p style="line-height: 0.0; font-size: 6pt; align-text: justify;"></p>
                    </td>
                    <td class="no-border">

                    </td>

                </tr>
                <tr>
                    <td class="no-border">
                        <p style="line-height: 0.0;font-size: 8pt;"></p>
                    </td>
                    <td class="no-border">


                    </td>
                    <td class="no-border">

                    </td>
                </tr>
            </tbody>

        </table>
        <hr>

    </header>

    <footer>
        <li class="list-style">
            <p class="list-size-title"><strong>SINNUT Versión: 0.0.1</strong></p>
            <br>
            <p style="font-size: 6pt; width:100px">Copyright ©
                <?php echo date('Y'); ?>
            </p>
        </li>
    </footer>
    <table style="border-collapse: collapse;">
        <tbody>
            <tr>
                <td>
                    <p class="title-head"><strong>DETALLE RETROVENTAS CONTRATOS</strong></p>
                    <table style="margin-left:2px">
                        <thead>
                            <tr style="width: 180px;">
                                <th style=" text-align: justify;font-size: 8pt;line-height: 1; border: none;">
                                    Descripción</th>
                                <th style=" text-align: justify;font-size: 8pt;line-height: 1; border: none;">
                                    Gramos
                                </th>
                                <th style=" text-align: justify;font-size: 8pt;line-height: 1; border: none;">
                                    Valor
                                    Articulos</th>
                                <th
                                    style=" text-align: center;font-size: 8pt;white-space: nowrap;line-height: 1; border: none;">
                                    Promedio Vlr/Grm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detalleRetroventaContratos as $detArt)
                                <tr>
                                    <td style=" text-align: left;white-space: nowrap;line-height: 0.5"
                                        class="style-values">
                                        {{ $detArt->descripcion }}</td>
                                    <td style=" text-align: justify;padding-left: 10px;padding-right: 25px;line-height: 0.5"
                                        class="style-values">
                                        {{ $detArt->gramos }}</td>
                                    <td style=" text-align: justify;padding-left: 10px;padding-right: 25px;line-height: 0.5"
                                        class="style-values">
                                        {{ $detArt->valor_articulos }}</td>
                                    <td style=" text-align: center;padding-left: 5px;line-height: 0.5"
                                        class="style-values">
                                        {{ $detArt->promedio }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
                <td>
                    <p class="title-head"><strong>DETALLE CONTRATOS NUEVOS</strong></p>
                    <table style="margin-left: 2px">
                        <thead>
                            <tr style="width: 200px;">
                                <th style=" text-align: justify;font-size: 8pt;line-height: 1; border: none;">
                                    Descripción</th>
                                <th
                                    style=" text-align: left;font-size: 8pt;padding-left: 10px;line-height: 1; border: none;">
                                    Gramos
                                </th>
                                <th
                                    style=" text-align: justify;font-size: 8pt;padding-left: 20px;line-height: 1; border: none;">
                                    Valor
                                    Articulos</th>
                                <th
                                    style=" text-align: center;font-size: 8pt;padding-left: 20px;white-space: nowrap;line-height: 1; border: none;">
                                    Promedio Vlr/Grm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detalleContratoNuevo as $detContNuevo)
                                <tr>
                                    <td style=" text-align: left;white-space: nowrap;line-height: 0.5"
                                        class="style-values">
                                        {{ $detContNuevo->descripcion }}</td>
                                    <td style=" text-align: left;padding-left: 20px;line-height: 0.5"
                                        class="style-values">
                                        {{ $detContNuevo->gramos }}</td>
                                    <td style=" text-align: justify;padding-left: 30px;line-height: 0.5"
                                        class="style-values">
                                        {{ $detContNuevo->valor_articulos }}</td>
                                    <td style=" text-align: center;padding-left: 20px;line-height: 0.5"
                                        class="style-values">
                                        {{ $detContNuevo->promedio }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse;margin: 1px;border: 0.5px black solid;">
        <caption style="padding: 10px;">
            <p class="title-head"><strong>DETALLE DE VENTAS</strong></p>
        </caption>
        <thead>
            <tr>
                <th style="font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Descripción</th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Grm
                </th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Valor
                    Compra</th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Subtotal</th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Base Iva
                </th>
                <th
                    style="padding-left: 8px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Valor Iva</th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Valor Rte Fte</th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Valor Rte Ica
                </th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Valor Rte Iva</th>

                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Auto Ret</th>
                <th
                    style="padding-left: 30px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.8em;">
                    Total
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($detalleVentas as $detVentas)
                <tr>
                    <td
                        style="white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:left">
                        {{ $detVentas->descripcion }}
                    </td>
                    <td
                        style="padding-left: 10px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->gramos }}</td>
                    <td
                        style="padding-left: 20px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->valor_compra }}</td>
                    <td
                        style="padding-left: 10px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->subtotal }}</td>
                    <td
                        style="padding-left: 10px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->base_iva }}</td>
                    <td
                        style="padding-left: 20px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->valor_iva }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->valor_rte_fte }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->valor_rte_ica }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->valor_rte_iva }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->auto_rte }}</td>
                    <td
                        style="padding-left: 15px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detVentas->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



    <table style="border-collapse: collapse;margin: 1px;border: 0.5px black solid;line-height: 1;">

        <caption style="padding: 10px;">
            <p class="title-head"><strong>DETALLE DE ORDENES DEVENTAREMISIONADAS</strong></p>
        </caption>
        <thead>
            <tr>
                <th style="font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Id Orden</th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Id Venta</th>
                <th
                    style="padding-left: 1px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Observaciones</th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Fecha
                </th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Cat Art</th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Grm Libre</th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Grm. Rem.
                </th>
                <th
                    style="padding-left: 10px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Valor Compra</th>
                <th
                    style="padding-left: 5px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Subtotal</th>
                <th
                    style="padding-left: 15px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Regalias
                </th>
                <th
                    style="padding-left: 15px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Retención</th>

                <th
                    style="padding-left: 15px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                    Valor Venta</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($detalleOrdenesVentasRemisionadas as $detOrdRem)
                <tr>
                    <td
                        style="white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:left">
                        {{ $detOrdRem->id_orden }}</td>
                    <td
                        style="padding-left: 10px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->id_venta }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:left">
                        {{ $detOrdRem->observacion }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->fecha }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->cat_art }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->grm_libre }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->grm_rem }}</td>
                    <td
                        style="padding-left: 10px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->valor_compra }}</td>
                    <td
                        style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->subtotal }}</td>
                    <td
                        style="padding-left: 15px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->regalias }}</td>
                    <td
                        style="padding-left: 15px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->retencion }}</td>
                    <td
                        style="padding-left: 15px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:right">
                        {{ $detOrdRem->valor_venta }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>







    <br>
    <li class="list-style">
        <p class="list-size-title">Usuario: <strong>Juan Ángel López Builes</strong></p>
    </li>
    <li class="list-style">
        <p class="list-size-title"><strong>Firma: ___________________________________</strong></p>
    </li>
    <li class="list-style">
        <img style="width: 50px;" src="{{ storage_path('app/public/huellas/huella.png') }}">
    </li>

    <script type="text/php">
       if ( isset($pdf) ) {
           $pdf->page_script('
               $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
               $pdf->text(520, 10, "Página $PAGE_NUM de $PAGE_COUNT", $font, 8);
           ');
       }
   </script>

</body>

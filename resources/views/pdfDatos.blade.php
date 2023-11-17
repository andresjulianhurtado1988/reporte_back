<head>
    <style>
        /*ESTILOS PARA HEADER Y FOOTER*/
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 4.8cm;
            margin-left: 2cm;
            margin-right: 1cm;
            margin-bottom: 2cm;
        }

        header {
            position: fixed;
            top: 1cm;
            left: 1cm;
            right: 1cm;
            height: 2cm;

            /** Estilos extra personales **/
            /* background-color: #03a9f4;
            color: white; */
            text-align: center;
            line-height: 1.5cm;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;

            /** Estilos extra personales **/
            background-color: #03a9f4;
            color: white;
            text-align: center;

        }

        table td {
            vertical-align: top;
            margin: 1px;
            padding: 1px;
            line-height: 0.0;

            border: 1px black solid;
            /* border-radius: 30px; */
        }

        .list-style {
            list-style: none;
            line-height: 0.0;
        }

        .list-size-title {
            font-size: 6pt;

        }

        .list-size-values {
            font-size: 6pt;
        }

        .title-head {
            font-size: 8pt;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <table>
            <thead>
                <tr style="">
                    <th>
                        <p style="line-height: 0.0;font-size: 8pt; align-text: left; width:200px"><strong>SINNUT -
                                JOYERÍA
                                LOS DENARIOS</strong>
                        </p>
                    </th>
                    <th>
                        <p style="line-height: 0.0;font-size: 8pt;">CUADRE DE CAJA
                        </p>
                    </th>
                    <td>
                        <p style="line-height: 0.0;font-size: 8pt; align-text: right; margin-left: 135px;width:100px">
                            Página 1 de 1</p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr style="">
                    <td>
                        <p style="line-height: 0.0;font-size: 8pt;">Usuario:
                            ANLOPEZ</p>
                    </td>
                    <td>
                        <p style="line-height: 0.0; font-size: 6pt; align-text: justify;margin-left: 60px;">CRA 50 Nro
                            52-86 Centro -
                            Medellín - Teléfono 4735249</p>
                    </td>

                </tr>
                <tr style="">
                    <td>
                        <p style="line-height: 0.0;font-size: 8pt;">Versión:
                            0.0.1</p>
                    </td>
                    <td>
                        <p style="line-height: 0.0;font-size: 6pt; align-text: center; margin-left: 10px; width:300px">
                            NIT. 900.392.919-9
                            NEGOCIOS
                            VALLE DEL ABURRA S.A.S RESPONSABEL DE IVA</p>
                    </td>
                    <td>
                        <p style="line-height: 0.0; font-size: 8pt; align-text: right; margin-right: 90px;"></p>
                    </td>
                </tr>
            </tbody>

        </table>
        <hr>
        <table style="align-content: center">
            <thead>
                <tr style="line-height: 0.1;">
                    <th>
                        <p style="font-size: 6pt; width:100px"><strong>Secuencia:
                            </strong>3401
                        </p>
                    </th>
                    <th>
                        <p style="font-size: 6pt; align-text: left; width:250px"><strong>Fecha de
                                Cuadre Inicial:
                                31/07/2023 - 09:55:21</strong>
                        </p>
                    </th>
                    <th>
                        <p style="font-size: 6pt; align-text: right; width:120px"><strong>Final:
                                31/07/2023 -
                                17:39:03</strong>
                        </p>
                    </th>
                    <th>
                        <p style="font-size: 6pt; align-text: right;  width:100px">Estado: ACTIVO
                        </p>
                    </th>
                </tr>
            </thead>
        </table>



    </header>
    <footer>
        Copyright © <?php echo date('Y'); ?>
    </footer>
    <table>
        <tbody>
            <tr>
                <td>
                    <table style="margin-left: 5px">
                        <tbody>
                            <th colspan="3" class="title-head"><strong>INGRESOS</strong>
                                <hr>
                            </th>

                            <tr>
                                <td sty>
                                    <li class="list-style">
                                        <p class="list-size-title">
                                            <strong>Contratos:</strong>
                                        </p>
                                    </li>
                                </td>
                                <td>
                                    @foreach ($contratosIngresos as $con)
                                        <li class="list-style" style="margin-left: 20px">
                                            <p class="list-size-values">
                                                {{ $con['column_name'] }}: </p>
                                        </li>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($contratosIngresos as $con)
                                        <li class="list-style" style="margin-left: 25px">
                                            <p class="list-size-values">{{ $con['valores'] }}
                                            </p>
                                        </li>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>Almacén:</strong></p>
                                    </li>
                                </td>

                                <td>
                                    @foreach ($almacenIngresos as $alm)
                                        <li class="list-style" style="margin-left: 20px">
                                            <p class="list-size-values">
                                                {{ $alm['column_name'] }}: </p>
                                        </li>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($almacenIngresos as $alm)
                                        <li class="list-style" style="margin-left: 25px">
                                            <p class="list-size-values">{{ $alm['valores'] }}
                                            </p>
                                        </li>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li class="list-style">
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="margin-left: 23px">
                                        <p class="list-size-title"><strong>Total Ingresos:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="margin-left: 30px">
                                        <p class="list-size-values">{{ $totalIngresos }}</p>
                                    </li>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <table style="margin-left: 40px">
                        <tbody>

                            <th colspan="3" class="title-head"><strong>EGRESOS
                                </strong>
                                <hr>
                            </th>
                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>Contratos:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    @foreach ($contratosEgresos as $con)
                                        <li class="list-style" style="margin-left: 25px">
                                            <p class="list-size-values">{{ $con['column_name'] }}: </p>
                                        </li>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($contratosEgresos as $con)
                                        <li class="list-style" style="margin-left: 30px">
                                            <p class="list-size-values">{{ $con['valores'] }}</p>
                                        </li>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>Almacén:</strong></p>
                                    </li>
                                </td>

                                <td>
                                    @foreach ($almacenEgresos as $alm)
                                        <li class="list-style" style="margin-left: 25px">
                                            <p class="list-size-values">{{ $alm['column_name'] }}: </p>
                                        </li>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($almacenEgresos as $alm)
                                        <li class="list-style" style="margin-left: 30px">
                                            <p class="list-size-values">{{ $alm['valores'] }}</p>
                                        </li>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <li class="list-style">
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="margin-left: 25px">
                                        <p class="list-size-title"><strong>Total Egresos:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="margin-left: 30px">
                                        <p class="list-size-values">{{ $totalIngresos }}</p>
                                    </li>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <br>
            <tr>
                <td>
                    <table style="margin-left: 5px">
                        <tr>
                            <th class="title-head"><strong>DETALLE VENTAS DE ARTÍCULOS</strong>
                                <hr>
                            </th>
                        </tr>
                        <table>
                            <thead>
                                <tr>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Descripción</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">Grm
                                    </th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                        IVA</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Subtotal</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalleVentaArticulo as $detArt)
                                    <tr>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['descripcion'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['grm'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['valor_iva'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['subtotal'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['total'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </table>
                    <table style="line-height: 2.0;">
                        <tr>
                            <th class="title-head"><strong>DETALLE OTROS INGRESOS</strong>
                                <hr>
                            </th>
                        </tr>
                        <table>
                            <thead>
                                <tr>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Descripción</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($otrosIngresos as $detArt)
                                    <tr>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['descripcion'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['valor'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </table>
                </td>

                <td>
                    <table>
                        <tr>
                            <th class="title-head"><strong>DETALLE DE EGRESOS/GASTOS
                                </strong>
                                <hr>
                            </th>
                        </tr>
                        <table>
                            <thead>
                                <tr>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Tipo
                                        Gasto</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                        IVA</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Subtotal</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalleEgresosGastos as $detGast)
                                    <tr>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detGast['tipo_gasto'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detGast['valor_iva'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detGast['subtotal'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detGast['valor'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </table>
                </td>
            </tr>
            <br>
            <tr>
                <td>
                    <table>
                        <tr>
                            <th class="title-head"><strong>DETALLE RETROVENTAS CONTRATOS</strong>
                                <hr>
                            </th>
                        </tr>
                        <table style="width: 300px; margin-right:50px">
                            <thead>
                                <tr>
                                    <th style="font-size: 6pt; text-align: left; margin: 10pt;  line-height: 0.5;">
                                        Descripción</th>
                                    <th style="font-size: 6pt; text-align: left; margin: 10pt;  line-height: 0.5;">
                                        Gramos
                                    </th>
                                    <th style="font-size: 6pt; text-align: left; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                        Articulos</th>
                                    <th style="font-size: 6pt; text-align: left; margin: 10pt;  line-height: 0.5;">
                                        Promedio Vlr/Grm</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalleRetroventaContratos as $detArt)
                                    <tr>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['descripcion'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['gramos'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['valor_articulos'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['promedio'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </table>
                </td>

                <td>
                    <table style="margin-left: 55px">
                        <tr>
                            <th class="title-head"><strong>DETALLE CONTRATOS NUEVOS</strong>
                                <hr>
                            </th>
                        </tr>
                        <table>
                            <thead>
                                <tr>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Descripción</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Gramos
                                    </th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                        Artículos</th>
                                    <th style="font-size: 6pt; text-align: center; margin: 10pt;  line-height: 0.5;">
                                        Valor
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detalleContratoNuevo as $detArt)
                                    <tr>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['descripcion'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['gramos'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['valor_articulos'] }}</td>
                                        <td
                                            style="font-size: 6pt; text-align: justify; margin: 1px; padding: 4px; line-height: 0.5;">
                                            {{ $detArt['promedio'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-top: 10px;margin-left:10px">
                        <tbody>
                            <th colspan="3" class="title-head"><strong>RANGOS FACTURAS Y/O DOCUMENTOS</strong>
                                <hr>
                            </th>

                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>Rango de Contratos:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Factura de Venta:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Facturas Resoluciones:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Facturas Resoluciones:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Facturas Prórrogas:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style"></li>
                                    <li class="list-style"></li>
                                    <li class="list-style"></li>
                                    <li class="list-style"></li>
                                    <li class="list-style"></li>
                                </td>
                                <td>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">26332/26335</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">EDEV1366/EDEV1366</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">CDNR206/CDNR206</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">EDER3614/EDER3618</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">EDEP5055/EDEP5061</p>
                                    </li>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </td>
                <td>
                    <table style="margin-left: 75px;margin-top: 10px">
                        <tbody>

                            <th colspan="3" class="title-head"><strong>TOTALES</strong>
                                <hr>
                            </th>
                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>SALDO INICIAL EN CAJA:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Total Ingresos -Egresos:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Saldo en Caja Actual:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Usuario Estación:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>Estación de Trabajo:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style">
                                    </li>
                                    <li class="list-style">
                                    </li>
                                    <li class="list-style">
                                    </li>
                                    <li class="list-style">
                                    </li>
                                    <li class="list-style">
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">18.018.996,76</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">10.064.704,00</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">28.083.700,76</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">ANLOPEZ</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">SERVIDOR01</p>
                                    </li>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin-top: 10px;  width:300px">
                        <tbody>
                            <th colspan="2" class="title-head"><strong>EFECTIVO EN CAJA</strong>
                                <hr>
                            </th>

                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>BILLETES:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>MONEDAS:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>OTROS:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>TOTAL EFECTIVO:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">27.849.000,00</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">234.700,00</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values"></p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">28.083.700,00</p>
                                    </li>
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </td>
                <td>
                    <table style="margin-left:25px; margin-top: 10px;  width:300px">
                        <tbody>

                            <th colspan="3" class="title-head"><strong>SOBRANTE O FALTANTE EN CAJA</strong>
                                <hr>
                            </th>
                            <tr>
                                <td>
                                    <li class="list-style">
                                        <p class="list-size-title"><strong>SOBRANTE:</strong></p>
                                    </li>
                                    <li class="list-style" style="text-align: left;">
                                        <p class="list-size-title"><strong>FALTANTE:</strong></p>
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style">
                                    </li>
                                    <li class="list-style">
                                    </li>
                                </td>
                                <td>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">,006</p>
                                    </li>
                                    <li class="list-style" style="text-align: right;">
                                        <p class="list-size-values">,76</p>
                                    </li>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

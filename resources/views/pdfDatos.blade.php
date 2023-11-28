 <head>
     <style>
         /*ESTILOS PARA HEADER Y FOOTER*/
         @page {
             margin: 0cm 0cm;
         }

         body {
             margin-top: 3.8cm;
             margin-left: 1cm;
             margin-right: 1cm;
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

         table td {
             vertical-align: top;
             margin: 1px;
             padding: 1px;
             line-height: 0.0;
             border: 1.5px black solid;
         }

         .style-headers {
             font-size: 7pt;
             margin: 10pt;
             line-height: 0.5;
             border: none;
         }

         .style-values {
             font-size: 6pt;
             margin: 1px;
             padding: 4px;
             line-height: 0.5;
             border: none;
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
             font-size: 7pt;
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

        <p style="line-height: 0.0;font-size: 8pt;text-align:center; "><strong>CUADRE DE CAJA</strong>
        </p>
        <p style="line-height: 0.0;font-size: 7pt;text-align:right; margin-top:20px"><strong>Usuario: </strong>ANLOPEZ
        </p>
        <table style="border-collapse: collapse;">
            <tr>
                <th>
                    <p style="line-height: 1;font-size: 7pt;text-align:left;width:300px">
                        <strong>JOYERÍA LOS DENARIOS</strong>
                    </p>
                </th>
                <th>
                    <p style="line-height: 1;font-size: 7pt;text-align:right;margin-left:320px">
                        <strong>SECUENCIA: ABC123</strong>
                    </p>
                </th>
            </tr>
        </table>

        <hr>
        <table style="border-collapse: collapse;margin-top:1px;">
            <tr>
                <th>
                    <p style="line-height: 1;font-size: 7pt;text-align:left; margin-left: 235px;">
                        <strong>Fecha Inicial: </strong>28/11/2023
                    </p>
                </th>
                <th>
                    <p style="line-height: 1;font-size: 7pt;text-align:right; margin-left: 40px;">
                        <strong>Fecha Fin: </strong>28/11/2023
                    </p>
                </th>
            </tr>
        </table>

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
                 <td style="width: 360px">
                     <p class="title-head"><strong>INGRESOS</strong></p>
                     <hr>
                     <table style="margin-left: 50px;">
                         <tbody>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title">
                                             <strong>Contratos:</strong>
                                         </p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     @foreach ($contratosIngresos as $con)
                                         <li class="list-style" style="margin-left: 20px">
                                             <p class="list-size-values">
                                                 {{ $con['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($contratosIngresos as $con)
                                         <li class="list-style" style="margin-left: 25px">
                                             <p class="list-size-values">{{ $con['valores'] }}
                                             </p>
                                         </li>
                                     @endforeach
                                 </td>
                             </tr>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title"><strong>Almacén:</strong></p>
                                     </li>
                                 </td>

                                 <td class="no-border">
                                     @foreach ($almacenIngresos as $alm)
                                         <li class="list-style" style="margin-left: 20px">
                                             <p class="list-size-values">
                                                 {{ $alm['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($almacenIngresos as $alm)
                                         <li class="list-style" style="margin-left: 25px">
                                             <p class="list-size-values">{{ $alm['valores'] }}
                                             </p>
                                         </li>
                                     @endforeach
                                 </td>
                             </tr>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="margin-left: 23px">
                                         <p class="list-size-title"><strong>Total Ingresos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="margin-left: 30px">
                                         <p class="list-size-values">{{ $totalIngresos }}</p>
                                     </li>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 360px">
                     <p class="title-head"><strong>EGRESOS</strong></p>
                     <hr>
                     <table style="margin-left: 40px">
                         <tbody>

                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title"><strong>Contratos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     @foreach ($contratosEgresos as $con)
                                         <li class="list-style" style="margin-left: 25px">
                                             <p class="list-size-values">{{ $con['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($contratosEgresos as $con)
                                         <li class="list-style" style="margin-left: 30px">
                                             <p class="list-size-values">{{ $con['valores'] }}</p>
                                         </li>
                                     @endforeach
                                 </td>
                             </tr>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title"><strong>Almacén:</strong></p>
                                     </li>
                                 </td>

                                 <td class="no-border">
                                     @foreach ($almacenEgresos as $alm)
                                         <li class="list-style" style="margin-left: 25px">
                                             <p class="list-size-values">{{ $alm['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($almacenEgresos as $alm)
                                         <li class="list-style" style="margin-left: 30px">
                                             <p class="list-size-values">{{ $alm['valores'] }}</p>
                                         </li>
                                     @endforeach
                                 </td>
                             </tr>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="margin-left: 25px">
                                         <p class="list-size-title"><strong>Total Egresos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="margin-left: 30px">
                                         <p class="list-size-values">{{ $totalIngresos }}</p>
                                     </li>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
             </tr>
             <tr>
                 <td style="width: 360px">
                     <p class="title-head"><strong>DETALLE VENTAS DE ARTÍCULOS</strong></p>
                     <hr>
                     <table style="margin-left: 40px;">
                         <thead>
                             <tr>
                                 <th style=" text-align: center;" class="style-headers">
                                     Descripción</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Grm
                                 </th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Valor
                                     IVA</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Subtotal</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Total
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($detalleVentaArticulo as $detArt)
                                 <tr>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['descripcion'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['grm'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['valor_iva'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['subtotal'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['total'] }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                     <hr>
                     <p class="title-head"><strong>DETALLE OTROS INGRESOS</strong></p>
                     <hr>
                     <table style="margin-left: 35px">
                         <thead>
                             <tr>
                                 <th style=" text-align: center;" class="style-headers">
                                     Descripción</th>
                                 <th style=" text-align: right;" class="style-headers">
                                     Valor
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($otrosIngresos as $detArt)
                                 <tr>
                                     <td style="text-align: justify;" class="style-values">
                                         {{ $detArt['descripcion'] }}</td>
                                     <td style=" text-align: right;" class="style-values">
                                         {{ $detArt['valor'] }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 360px">
                     <p class="title-head"> <strong>DETALLE DE EGRESOS/GASTOS
                         </strong>
                     </p>
                     <hr>
                     <table>
                         <thead>
                             <tr>
                                 <th style=" text-align: center;" class="style-headers">
                                     Tipo
                                     Gasto</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Valor
                                     IVA</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Subtotal</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Valor
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($detalleEgresosGastos as $detGast)
                                 <tr>
                                     <td
                                         style="font-size: 6pt;  margin: 1px; padding: 4px; line-height: 1; border:none; text-align: justify;">
                                         {{ $detGast['tipo_gasto'] }}</td>
                                     <td
                                         style="font-size: 6pt;  margin: 1px; padding: 4px; line-height: 1; border:none; text-align: justify;">
                                         {{ $detGast['valor_iva'] }}</td>
                                     <td
                                         style="font-size: 6pt;  margin: 1px; padding: 4px; line-height: 1; border:none; text-align: justify;">
                                         {{ $detGast['subtotal'] }}</td>
                                     <td
                                         style="font-size: 6pt;  margin: 1px; padding: 4px; line-height: 1; border:none; text-align: justify;">
                                         {{ $detGast['valor'] }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
             </tr>
             <tr>
                 <td style="width: 360px">
                     <p class="title-head"><strong>DETALLE RETROVENTAS CONTRATOS</strong>
                     </p>
                     <hr>
                     <table style="margin-left:50px">
                         <thead>
                             <tr>
                                 <th style=" text-align: left;" class="style-headers">
                                     Descripción</th>
                                 <th style=" text-align: left;" class="style-headers">
                                     Gramos
                                 </th>
                                 <th style=" text-align: left;" class="style-headers">
                                     Valor
                                     Articulos</th>
                                 <th style=" text-align: left;" class="style-headers">
                                     Promedio Vlr/Grm</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($detalleRetroventaContratos as $detArt)
                                 <tr>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['descripcion'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['gramos'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['valor_articulos'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['promedio'] }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 360px">
                     <p class="title-head"><strong>DETALLE CONTRATOS NUEVOS</strong></p>
                     <hr>
                     <table style="margin-left: 55px">
                         <thead>
                             <tr>
                                 <th style=" text-align: center;" class="style-headers">
                                     Descripción</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Gramos
                                 </th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Valor
                                     Artículos</th>
                                 <th style=" text-align: center;" class="style-headers">
                                     Valor
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($detalleContratoNuevo as $detArt)
                                 <tr>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['descripcion'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['gramos'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['valor_articulos'] }}</td>
                                     <td style=" text-align: justify;" class="style-values">
                                         {{ $detArt['promedio'] }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
             </tr>
             <tr>
                 <td style="width: 360px">
                     <p class="title-head"><strong>RANGOS FACTURAS Y/O DOCUMENTOS</strong></p>
                     <hr>
                     <table style="margin-top: 10px;margin-left:60px">
                         <tbody>
                             <tr>
                                 <td class="no-border">
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

                                 <td class="no-border">
                                     <li class="list-style" style="text-align: right; margin-left:70px">
                                         <p class="list-size-values">26332/26335</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:70px">
                                         <p class="list-size-values">EDEV1366/EDEV1366</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:70px">
                                         <p class="list-size-values">CDNR206/CDNR206</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:70px">
                                         <p class="list-size-values">EDER3614/EDER3618</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:70px">
                                         <p class="list-size-values">EDEP5055/EDEP5061</p>
                                     </li>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 360px">
                     <p class="title-head"><strong>TOTALES</strong></p>
                     <hr>
                     <table style="margin-left: 60px;margin-top: 5px">
                         <tbody>
                             <tr>
                                 <td class="no-border">
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
                                 <td class="no-border">
                                     <li class="list-style" style="text-align: right;margin-left:60px;">
                                         <p class="list-size-values">18.018.996,76</p>
                                     </li>
                                     <li class="list-style" style="text-align: right;margin-left:60px;">
                                         <p class="list-size-values">10.064.704,00</p>
                                     </li>
                                     <li class="list-style" style="text-align: right;margin-left:60px;">
                                         <p class="list-size-values">28.083.700,76</p>
                                     </li>
                                     <li class="list-style" style="text-align: right;margin-left:60px;">
                                         <p class="list-size-values">ANLOPEZ</p>
                                     </li>
                                     <li class="list-style" style="text-align: right;margin-left:60px;">
                                         <p class="list-size-values">SERVIDOR01</p>
                                     </li>
                                 </td>
                             </tr>

                         </tbody>
                     </table>
                 </td>
             </tr>
             <tr>
                 <td style="width: 360px">
                     <p class="title-head"><strong>EFECTIVO EN CAJA</strong></p>
                     <hr>
                     <table style="margin-top: 10px;margin-left:60px">
                         <tbody>
                             <tr>
                                 <td class="no-border">
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

                                 <td class="no-border">
                                     <li class="list-style" style="text-align: right; margin-left:100px">
                                         <p class="list-size-values">27.849.000,00</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:100px">
                                         <p class="list-size-values">234.700,00</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:100px">
                                         <p class="list-size-values"></p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:100px">
                                         <p class="list-size-values">28.083.700,00</p>
                                     </li>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 360px">
                     <p class="title-head"><strong>SOBRANTE O FALTANTE EN CAJA</strong></p>
                     <hr>
                     <table style="margin-top: 10px;margin-left:60px">
                         <tbody>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title"><strong>SOBRANTE:</strong></p>
                                     </li>
                                     <li class="list-style" style="text-align: left;">
                                         <p class="list-size-title"><strong>FALTANTE:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="text-align: right; margin-left:140px">
                                         <p class="list-size-values">,006</p>
                                     </li>
                                     <li class="list-style" style="text-align: right; margin-left:140px">
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

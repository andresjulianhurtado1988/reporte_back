 <head>
     <style>
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
             font-size: 7pt;
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
     <header>

         <p style="line-height: 0.0;font-size: 8pt;text-align:center; "><strong>CUADRE DE CAJA</strong>
         </p>
         <p style="line-height: 0.0;font-size: 7pt;text-align:right; margin-top:20px"><strong>Usuario: </strong>ANLOPEZ
         </p>
         @if ($tiendas > 1)
             <p style="line-height: 1;font-size: 7pt;text-align:left;width:720px">
                 Código: JOYERÍA LOS DENARIOS, Código: JOYERÍA LOS DENARIOS, Código: JOYERÍA LOS
                 DENARIOS, Código: JOYERÍA LOS DENARIOS, Código: JOYERÍA LOS DENARIOS, Código: JOYERÍA LOS
                 DENARIOS, Código: JOYERÍA LOS DENARIOS, Código: JOYERÍA LOS DENARIOS, Código: JOYERÍA LOS
                 DENARIOS, Código: JOYERÍA LOS DENARIOS
             </p>
         @else
             <table style="border-collapse: collapse;">
                 <tr>
                     <th>
                         <p style="line-height: 1;font-size: 7pt;text-align:left;width:300px">
                             <strong>Código: JOYERÍA LOS DENARIOS</strong>
                         </p>
                     </th>
                     <th>
                         <p style="line-height: 1;font-size: 7pt;text-align:right;margin-left:320px">
                             <strong>SECUENCIA: ABC123</strong>
                         </p>
                     </th>
                 </tr>
             </table>
         @endif
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
                 <td style="width: 366px;">
                     <p class="title-head"><strong>INGRESOS</strong></p>
                     <hr>
                     <table style="margin-left: 20px;">
                         <tbody>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title"><strong>Contratos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     @foreach ($ingresosContratos as $con)
                                         <li class="list-style" style="margin-left: 45px">
                                             <p class="list-size-values">
                                                 {{ $con['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($ingresosContratos as $con)
                                         <li class="list-style" style="margin-left: 45px">
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
                                     @foreach ($ingresosAlmacen as $con)
                                         <li class="list-style" style="margin-left: 45px">
                                             <p class="list-size-values">
                                                 {{ $con['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($ingresosAlmacen as $con)
                                         <li class="list-style" style="margin-left: 45px">
                                             <p class="list-size-values">{{ $con['valores'] }}
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
                                     <li class="list-style" style="margin-left: 45px">
                                         <p class="list-size-title"><strong>Total Ingresos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="margin-left: 45px">
                                         <p class="list-size-values">{{ $ingresosTotal }}</p>
                                     </li>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 374px;">
                     <p class="title-head"><strong>EGRESOS</strong></p>
                     <hr>
                     <table style="margin-left: 30px">
                         <tbody>
                             <tr>
                                 <td class="no-border">
                                     <li class="list-style">
                                         <p class="list-size-title"><strong>Contratos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     @foreach ($egresosContratos as $con)
                                         <li class="list-style" style="margin-left: 45px">
                                             <p class="list-size-values">
                                                 {{ $con['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($egresosContratos as $con)
                                         <li class="list-style" style="margin-left: 45px">
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
                                     @foreach ($egresosAlmacen as $con)
                                         <li class="list-style" style="margin-left: 45px">
                                             <p class="list-size-values">
                                                 {{ $con['column_name'] }}: </p>
                                         </li>
                                     @endforeach
                                 </td>
                                 <td class="no-border">
                                     @foreach ($egresosAlmacen as $con)
                                         <li class="list-style" style="margin-left: 45px">
                                             <p class="list-size-values">{{ $con['valores'] }}
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
                                     <li class="list-style" style="margin-left: 45px">
                                         <p class="list-size-title"><strong>Total Egresos:</strong></p>
                                     </li>
                                 </td>
                                 <td class="no-border">
                                     <li class="list-style" style="margin-left: 45px">
                                         <p class="list-size-values">{{ $egresosTotal }}</p>
                                     </li>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
             </tr>
         </tbody>
     </table>

     <table style="border-collapse: collapse;">
         <tbody>
             <tr>
                 <td>
                     <p class="title-head"><strong>DETALLE RETROVENTAS CONTRATOS</strong></p>
                     <hr>
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
                     <hr>
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

     <table style="border-collapse: collapse;">
         <tbody>
             <tr>
                 <td style="width: 366px;">
                     <p class="title-head"><strong>DETALLE RESOLUCIONES CONTRATOS VENCIDOS</strong></p>
                     <hr>
                     <table style="margin-left:2px;">
                         <thead>
                             <tr>
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
                             @foreach ($detalleResolContVencidos as $detResVencidos)
                                 <tr>
                                     <td style=" text-align: left;white-space: nowrap;line-height: 0.5"
                                         class="style-values">
                                         {{ $detResVencidos->descripcion }}</td>
                                     <td style=" text-align: justify;padding-left: 10px;padding-right: 25px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detResVencidos->gramos }}</td>
                                     <td style=" text-align: justify;padding-left: 10px;padding-right: 25px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detResVencidos->valor_articulos }}</td>
                                     <td style=" text-align: center;padding-left: 5px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detResVencidos->promedio }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 374px;">
                     <p class="title-head"><strong>DETALLE SALIDAS POR DECOMISOS Y/O P. LEGALES</strong></p>
                     <hr>
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
                             @foreach ($detalleSalidasXDecomision as $detSalidaDecom)
                                 <tr>
                                     <td style=" text-align: left;white-space: nowrap;line-height: 0.5"
                                         class="style-values">
                                         {{ $detSalidaDecom->descripcion }}</td>
                                     <td style=" text-align: left;padding-left: 20px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detSalidaDecom->gramos }}</td>
                                     <td style=" text-align: justify;padding-left: 30px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detSalidaDecom->valor_articulos }}</td>
                                     <td style=" text-align: center;padding-left: 20px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detSalidaDecom->promedio }}</td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
             </tr>
         </tbody>
     </table>

     <table style="border-collapse: collapse;">
         <tbody>
             <tr>
                 <td style="width: 366px;">
                     <p class="title-head"><strong>DETALLE ARTÍCULOS TRASLADADOS (SALIDA)</strong></p>
                     <hr>
                     <table style="margin-left:2px;">
                         <thead>
                             <tr>
                                 <th
                                     style=" text-align: justify;font-size: 8pt;padding-left: 20px;line-height: 1; border: none;">
                                     Descripción</th>
                                 <th
                                     style=" text-align: justify;font-size: 8pt;padding-left: 40px;line-height: 1; border: none;">
                                     Gramos
                                 </th>
                                 <th
                                     style=" text-align: justify;font-size: 8pt;padding-left: 70px;line-height: 1; border: none;">
                                     Valor Compra</th>

                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($detalleArticulosTrasladoSalida as $detArtTrasSal)
                                 <tr>
                                     <td style=" text-align: left;white-space: nowrap;padding-left: 20px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detArtTrasSal->descripcion }}</td>
                                     <td style=" text-align: justify;padding-left: 40px;padding-right: 25px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detArtTrasSal->gramos }}</td>
                                     <td style=" text-align: justify;padding-left: 70px;padding-right: 25px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detArtTrasSal->valor_compra }}</td>

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </td>
                 <td style="width: 374px;">
                     <p class="title-head"><strong>DETALLE ARTÍCULOS TRASLADADOS (ENTRADA)
                         </strong></p>
                     <hr>
                     <table style="margin-left: 2px">
                         <thead>
                             <tr style="width: 200px;">
                                 <th
                                     style=" text-align: justify;font-size: 8pt;padding-left: 20px;line-height: 1; border: none;">
                                     Descripción</th>
                                 <th
                                     style=" text-align: left;font-size: 8pt;padding-left: 40px;line-height: 1; border: none;">
                                     Gramos
                                 </th>
                                 <th
                                     style=" text-align: justify;font-size: 8pt;padding-left: 70px;line-height: 1; border: none;">
                                     Valor Compra</th>

                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($detalleArticulosTrasladosEntrada as $detArtTrasEnt)
                                 <tr>
                                     <td style=" text-align: left;white-space: nowrap;padding-left: 20px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detArtTrasEnt->descripcion }}</td>
                                     <td style=" text-align: left;padding-left: 40px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detArtTrasEnt->gramos }}</td>
                                     <td style=" text-align: justify;padding-left: 70px;line-height: 0.5"
                                         class="style-values">
                                         {{ $detArtTrasEnt->valor_compra }}</td>

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
                         style="white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detOrdRem->id_orden }}</td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
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

     <table style="border-collapse: collapse;margin: 1px;border: 0.5px black solid;line-height: 1; width:750px">

         <caption style="padding: 10px;">
             <p class="title-head"><strong>DETALLE DE COMPRAS</strong></p>
         </caption>
         <thead>
             <tr>
                 <th style="font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Descripción</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Grm</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Subtotal</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Valor IVA
                 </th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Rte Fte</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Rte ICA</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Rte IVA
                 </th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Rte Iva Simpl</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Cree</th>
                 <th
                     style="padding-left: 25px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Total
                 </th>
             </tr>
         </thead>

         <tbody>
             @foreach ($detalleCompras as $detCompras)
                 <tr>
                     <td
                         style="white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:left">
                         {{ $detCompras->descripcion }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->gramos }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->subtotal }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->valor_iva }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->rte_fte }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->rte_ica }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->rte_iva }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->rte_iva_simpl }}
                     </td>

                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->cree }}
                     </td>
                     <td
                         style="padding-left: 5px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detCompras->total }}
                     </td>
                 </tr>
             @endforeach
         </tbody>
     </table>

     <table style="border-collapse: collapse;margin: 1px;border: 0.5px black solid;line-height: 1; width:750px">

         <caption style="padding: 10px;">
             <p class="title-head"><strong>DETALLE OTROS INGRESOS</strong></p>
         </caption>
         <thead>
             <tr>
                 <th
                     style="padding-left: 24px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Tipo Ingreso</th>
                 <th
                     style="padding-left: 30px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Descripción</th>
                 <th
                     style="padding-left: 24px;font-size: 7pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     Valor</th>

             </tr>
         </thead>

         <tbody>
             @foreach ($detalleOtrosIngresos as $detOtrsoIngresos)
                 <tr>
                     <td
                         style="white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:justify">
                         {{ $detOtrsoIngresos->tipo_ingreso }}
                     </td>
                     <td
                         style="padding-left: 25px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detOtrsoIngresos->descripcion }}
                     </td>
                     <td
                         style="padding-left: 25px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 6pt; border: none;text-align:center">
                         {{ $detOtrsoIngresos->valor }}
                     </td>

                 </tr>
             @endforeach
         </tbody>
     </table>

     <table style="margin: 1px;border: 0.5px black solid;">
         <caption style="padding: 10px;">
             <p class="title-head"><strong>DETALLE DE EGRESOS</strong></p>
         </caption>
         <thead>
             <tr>
                 <th
                     style="white-space: nowrap;font-size: 7pt;line-height: 1; border: none;padding: 0.8em;padding-left:10px">
                     Tipo Egreso/Gasto</th>
                 <th style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em;padding-left:15px">
                     Descripción
                 </th>
                 <th style=";font-size: 7pt;line-height: 1; border: none;padding: 0.8em;">
                     Subtotal</th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Valor Iva</th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Vlr Rte Fte
                 </th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Vlr Rte Iva</th>

                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Valor Rte Ica
                 </th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Vlr Cree</th>

                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-left:10px">
                     Valor</th>

             </tr>
         </thead>

         <tbody>
             @foreach ($detalleEgresos as $detEgresos)
                 <tr>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:left">
                         {{ $detEgresos->tipo_egreso }}</td>
                     <td
                         style="padding-left:20px;line-height: 1; font-size: 6pt;border: none;text-align:justify;width: 230px;">
                         {{ $detEgresos->descripcion }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detEgresos->subtotal }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detEgresos->vlr_iva }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detEgresos->vlr_rte_fte }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detEgresos->vlr_rte_iva }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detEgresos->vlr_rte_ica }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detEgresos->vlr_rte_cree }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:right">
                         {{ $detEgresos->valor }}</td>
                 </tr>
             @endforeach
         </tbody>
     </table>

     <table style="margin: 1px;border: 0.5px black solid;">
         <caption style="padding: 10px;">
             <p class="title-head"><strong>DETALLE DE GASTOS</strong></p>
         </caption>
         <thead>
             <tr>
                 <th
                     style="white-space: nowrap;font-size: 7pt;line-height: 1; border: none;padding: 0.8em;padding-left:10px">
                     Tipo Egreso/Gasto</th>
                 <th style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em;padding-left:15px">
                     Descripción
                 </th>
                 <th style=";font-size: 7pt;line-height: 1; border: none;padding: 0.8em;">
                     Subtotal</th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Valor Iva</th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Vlr Rte Fte
                 </th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Vlr Rte Iva</th>

                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Valor Rte Ica
                 </th>
                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-right:5px">
                     Vlr Cree</th>

                 <th
                     style="font-size: 7pt;line-height: 1; border: none;padding: 0.8em; white-space: nowrap;padding-left:10px">
                     Valor</th>

             </tr>
         </thead>

         <tbody>
             @foreach ($detalleGastos as $detGastos)
                 <tr>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:left">
                         {{ $detGastos->tipo_egreso }}</td>
                     <td
                         style="padding-left:20px;line-height: 1; font-size: 6pt; border: none;text-align:justify;width: 230px;">
                         {{ $detGastos->descripcion }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none; text-align:center">
                         {{ $detGastos->subtotal }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none; text-align:center">
                         {{ $detGastos->vlr_iva }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detGastos->vlr_rte_fte }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detGastos->vlr_rte_iva }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detGastos->vlr_rte_ica }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:center">
                         {{ $detGastos->vlr_rte_cree }}</td>
                     <td style="line-height: 1; font-size: 6pt; border: none;text-align:right">
                         {{ $detGastos->valor }}</td>
                 </tr>
             @endforeach
         </tbody>
     </table>

     <table style="border-collapse: collapse;margin: 1px;border: 0.5px black solid;line-height: 1; width:750px">

         <caption style="padding: 10px;">
             <p class="title-head"><strong>TOTALES</strong></p>
         </caption>
         <thead>
             <tr>
                 <th
                     style="padding-left: 24px;font-size: 8pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     <strong>SALDO INICIAL EN CAJA</strong>
                 </th>
                 <th
                     style="padding-left: 30px;font-size: 8pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     <strong>SALDO EN CAJA ACTUAL</strong>
                 </th>
                 <th
                     style="padding-left: 24px;font-size: 8pt;line-height: 1; border: none;white-space: nowrap;padding: 0.5em;">
                     <strong>Total Ingresos - Egresos</strong>
                 </th>

             </tr>
         </thead>

         <tbody>

             <tr>
                 <td
                     style="white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 7pt; border: none;text-align:center">
                     41.458.200,00
                 </td>
                 <td
                     style="padding-left: 25px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 7pt; border: none;text-align:center">
                     18.792.530,00
                 </td>
                 <td
                     style="padding-left: 25px; white-space: nowrap;line-height: 1;padding: 4px; margin: 1px; font-size: 7pt; border: none;text-align:center">
                     -22.665.670,00
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
               $pdf->text(525, 10, "Página $PAGE_NUM de $PAGE_COUNT", $font, 8);
           ');
       }
   </script>

 </body>

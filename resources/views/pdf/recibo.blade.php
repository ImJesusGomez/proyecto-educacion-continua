<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo de Pago</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factura - Universidad Autónoma de Querétaro</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 40px;
            }

            .header {
                text-align: center;
            }

            .header img {
                width: 100px;
            }

            .header h1 {
                margin-top: 0;
            }

            .invoice-info {
                text-align: left;
                margin-top: 20px;
            }

            .invoice-info p {
                margin: 2px 0;
            }

            .table {
                width: 100%;
                margin-top: 20px;
                border-collapse: collapse;
            }

            .table th,
            .table td {
                border: 1px solid #000;
                padding: 8px;
                text-align: left;
            }

            .total {
                text-align: right;
                margin-top: 20px;
                font-weight: bold;
            }

            .footer {
                margin-top: 30px;
                font-size: 12px;
                text-align: center;
            }

            .footer p {
                margin: 5px 0;
            }

            .barcode {
                text-align: center;
                margin-top: 20px;
            }

            .barcode img {
                width: 200px;
            }
        </style>
    </head>

    <body>

        <div class="header">
            <img src="https://directorio.uaq.mx/images/headers/directorio_facultad_finfo.png" alt="Logo UAQ">
            <h1>Universidad Autónoma de Querétaro</h1>
            <p>Centro Universitario Tel. (01) (442) 192 12 00 Santiago de Querétaro Qro.</p>
        </div>

        <div class="invoice-info">
            <p><strong>FOLIO:</strong> 5021171</p>
            <p><strong>EXPEDIENTE:</strong> {{ $estudiante->expediente }}</p>
            <p><strong>NOMBRE:</strong> {{ $estudiante->nombre }}</p>
            <p><strong>URES:</strong> 0906 Educación Continua (Facultad de Informática)</p>
            <p><strong>CONCEPTO:</strong> {{ $curso->nombre }}. para Alumnos FIF 2024-2 (1/1)</p>
            <p><strong>CURSO EN GENERAL</strong></p>
        </div>

        <table class="table">
            <tr>
                <th>Concepto</th>
                <th>Importe</th>
            </tr>
            <tr>
                <td>{{ $curso->nombre }}</td>
                <td>$900.00 MXP</td>
            </tr>
            <tr>
                <td><strong>--- TOTAL ---</strong></td>
                <td><strong>$900.00 MXP</strong></td>
            </tr>
        </table>

        <div class="total">
            <p><strong>Fecha de Vencimiento:</strong> 2 Septiembre 2024</p>
        </div>

        <div class="footer">
            <p><strong>Referencia 1:</strong> 005652256502117143417275</p>
            <p><strong>Referencia 2:</strong> 5021175</p>
            <p><strong>Banco:</strong> Banorte, HSBC, BBVA Bancomer, Santander, Scotiabank, Ban Bajío</p>
            <p><strong>Convenio:</strong> 05058, TXN-5503 3613, 932167, 4053, 3830, 2154</p>
            <p><em>Si no pagas antes de la fecha de vencimiento, perderás tus derechos como alumno. Si deseas un
                    comprobante fiscal, favor de ingresar a la siguiente página: <a
                        href="https://facturas.uaq.mx">facturas.uaq.mx</a></em></p>
            <p><strong>Sello del Banco</strong></p>
        </div>

        <div class="barcode">
            <img src="https://www.google.com/chart?chs=150x150&cht=qr&chl=005652256502117143417275"
                alt="Código de barras">
        </div>

    </body>

    </html>


</body>

</html>

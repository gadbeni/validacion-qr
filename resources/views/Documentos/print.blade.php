<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #logo {
            position: absolute;
            top: 10px;
            left: 10px;
            max-width: 100px;
            max-height: 50px;
        }
        .myTextBox {
            font-size: 20px;
        }
        .editable {
            cursor: pointer;
            border-bottom: 1px dashed #000;
        }
        .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo-container {
    flex: 0 0 auto;
}

.logo-image {
    max-width: 100px; /* Ajusta el tamaño máximo de la imagen según tus necesidades */
}

.qr-container {
    flex: 0 0 auto;
}

.title {
    margin-top: 20px; /* Ajusta la separación vertical entre la imagen y el título según tus necesidades */
}
    </style>
</head>
<body>
    @if($doc->Idtipo === 1)
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/LogoGobe.jpg') }}" alt="Logo" class="logo-image">
        </div>
        <div class="qr-container">
            {!! $qr !!}
        </div>
    </div>
    <h1 class="title">
        <center>
        DECRETO DEPARTAMENTAL N°{{ $doc->NrDocumento }}
        <br>JOSÉ ALEJANDRO UNZUETA SHIRIQUI<br>
            GOBERNADOR DEL DEPARTAMENTO DEL BENI
        </center>
    </h1>
    <button onclick="window.print()">imprimir </button>
    <p>
        <strong>VISTOS:</strong>
        <br>
        {!!$doc->Vistos !!}
    </p>
    <p>
        <strong>CONSIDERACIONES:</strong>
        <br>
        {!!$doc->Consideraciones !!}
    </p>
    <p>
        <strong>POR TANTO:</strong>
        <br>

            {!!$doc->PorTanto !!}
    </p>
    <p>
        <strong>DECRETA:</strong>
        <br>
            {!!$doc->Decreta !!}
    </p>
    @elseif($doc->Idtipo === 2)
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/LogoGobe.jpg') }}" alt="Logo" class="logo-image">
        </div>
        <div class="qr-container">
            {!! $qr !!}
        </div>
    </div>
    <h1 class="title">
        <center>
        DECRETO DE GOBERNACIÓN N°{{ $doc->NrDocumento }}
        <br>JOSÉ ALEJANDRO UNZUETA SHIRIQUI<br>
            GOBERNADOR DEL DEPARTAMENTO DEL BENI
        </center>
    </h1>
    <button onclick="window.print()">imprimir </button>
    <p>
        <strong>VISTOS:</strong>
        <br>
        {!!$doc->Vistos !!}
    </p>
    <p>
        <strong>CONSIDERACIONES:</strong>
        <br>
        {!!$doc->Consideraciones !!}
    </p>
    <p>
        <strong>POR TANTO:</strong>
        <br>

            {!!$doc->PorTanto !!}
    </p>
    <p>
        <strong>RESUELVE:</strong>
        <br>
            {!!$doc->Resuelve !!}
    </p>
    @elseif($doc->Idtipo === 3)
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/LogoGobe.jpg') }}" alt="Logo" class="logo-image">
        </div>
        <div class="qr-container">
            {!! $qr !!}
        </div>
    </div>
    <h1 class="title">
        <center>
        RESOLUCIÓN ADMINISTRATIVA DE GOBERNACIÓN N°{{ $doc->NrDocumento }}
        <br>JOSÉ ALEJANDRO UNZUETA SHIRIQUI<br>
            GOBERNADOR DEL DEPARTAMENTO DEL BENI
        </center>
    </h1>
    <button onclick="window.print()">imprimir </button>
    <p>
        <strong>VISTOS:</strong>
        <br>
        {!!$doc->Vistos !!}
    </p>
    <p>
        <strong>CONSIDERACIONES:</strong>
        <br>
        {!!$doc->Consideraciones !!}
    </p>
    <p>
        <strong>POR TANTO:</strong>
        <br>

            {!!$doc->PorTanto !!}
    </p>
    <p>
        <strong>RESUELVE:</strong>
        <br>
            {!!$doc->Resuelve !!}
    </p>
    @elseif($doc->Idtipo === 4)
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/LogoGobe.jpg') }}" alt="Logo" class="logo-image">
        </div>
        <div class="qr-container">
            {!! $qr !!}
        </div>
    </div>
    <h1 class="title">
        <center>
        RESOLUCIÓN DE GOBERNACIÓN N°{{ $doc->NrDocumento }}
        <br>JOSÉ ALEJANDRO UNZUETA SHIRIQUI<br>
            GOBERNADOR DEL DEPARTAMENTO DEL BENI
        </center>
    </h1>
    <button onclick="window.print()">imprimir </button>
    <p>
        <strong>VISTOS:</strong>
        <br>
        {!!$doc->Vistos !!}
    </p>
    <p>
        <strong>CONSIDERACIONES:</strong>
        <br>
        {!!$doc->Consideraciones !!}
    </p>
    <p>
        <strong>POR TANTO:</strong>
        <br>

            {!!$doc->PorTanto !!}
    </p>
    <p>
        <strong>RESUELVE:</strong>
        <br>
            {!!$doc->Resuelve !!}
    </p>
    @elseif($doc->Idtipo === 5)
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/LogoGobe.jpg') }}" alt="Logo" class="logo-image">
        </div>
        <div class="qr-container">
            {!! $qr !!}
        </div>
    </div>
    <h1 class="title">
        <center>
            INFORME LEGAL N°{{ $doc->NrDocumento }}
        </center>
    </h1>
    <button onclick="window.print()">imprimir </button>
    <p>
        <strong>A:</strong>{!!$doc->A !!}
    </p>
    <p>
        <strong>VIA:</strong>{!!$doc->VIA !!}
    </p>
    <p>
        <strong>DE:</strong> {!!$doc->DE !!}
    </p>
    <p>
        <strong>REF:</strong>{!!$doc->Ref !!}
    </p>
    <p>
        <strong>FECHA:</strong>{!!$doc->Fecha !!}
    </p>
    <p>
        {!!$doc->Antecedentes !!}
    </p>
    <p>
        <strong>BASE LEGAL:</strong>
        <br>
            {!!$doc->BaseLegal !!}
    </p>
    <p>
        <strong>CONCLUCIONES Y RECOMENDACIONES:</strong>
        <br>
            {!!$doc->ConclusiondesyConsideraciones !!}
    </p>
    @endif
</body>
</html>
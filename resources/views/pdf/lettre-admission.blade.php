<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Lettre d'admission de {{ $data->name }}</title>
    <style>
        @page {
            margin: 80px 0px;
        }

        header {
            position: fixed;
            top: -70px;
            left: 0px;
            right: 0px;
            height: 120px;
            font-size: 20px !important;
            color: white;
            text-align: left;
            line-height: 35px;
            margin:0 30px
        }

        footer {
            position: fixed;
            bottom: 310px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size:17px !important;
            color: black;
            text-align: center;
            line-height: 22px;
        }
        .title{
            text-align: left;
            margin: 100px 60px 40px 60px;
            font-size:14px;
        }
        .attestation{
            text-align: center;
            margin: 5px 0px;
        }
        .attestation h1{
            font-size: 15px;
        }
        .name{
            float: right;;
        }
      
        .justify{
            margin: 0 70px;
            line-height: 25px;
            font-size: 15px;
        }
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
   <img src="{{ public_path().'/admin/src/img/logo_epf.jpeg' }}" width="140px">
</header>

<footer>
    <img src="{{ public_path().'/admin/src/img/pied.png' }}" width="100%">
</footer>

<!-- Wrap the content of your PDF inside a main tag -->
<main>
    <div class="title">
        <div class="titleInterne">
           {{ strtoupper($data->numero)}}  <span class="name">{{ $data->name }}</span>
        </div>
    </div>
    <div class="attestation">
        <h1>ATTESTATION D’ADMISSION</h1>
    </div>
    <div class="justify">
        <p>Je soussigné Abdoulaye DIOP, Directeur General EPF AFRICA, certifie que :</p>
        <div style="text-align: center;"><b>{{ $data->name }}</b></div>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; est autorisé {{ ($data->civilite == "Madame") ? "e" :""  }} à s’inscrire, dans la limite des places disponibles en {{ $data->designation }} du
            programme de {{ $data->intitule }} du Campus de Dakar de l’EPF
            au titre de l’année académique {{ $data->annee_scolaire }}.
        </p>
        <p>
            Il reste à {{ $data->civilite }} {{ $data->name }} à valider :
            <ul>
                <li>son entretien d’admission après inscription financière et pédagogique (340.000 FCFA)</li>
                <li>le dépôt des documents certifiés envoyés lors de la soumission de sa candidature</li>
                <li>une rame de papier, un ordinateur portable pour l’étudiant et des frais de participation
                    aux activités relatives à la vie étudiante de (50.000 FCFA).</li>
            </ul>
        </p>
        <p style="margin-top:20px">
            Fait à Dakar, le 
            @php 
            \Carbon\Carbon::setLocale('fr');
            echo $data->updated_at->locale(app()->getLocale())->translatedFormat('d F Y')
            @endphp, pour servir et valoir ce que de droit.
        </p>

    </div>
   
</main>
</body>
</html>

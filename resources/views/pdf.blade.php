<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket de caisse</title>
</head>

<style>


    /*html { margin: 0;padding: 0}*/
    .header {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .header .hr {
        border: none; /* Supprime la bordure par défaut */
        background-color: #000; /* Couleur de fond de la ligne */
        opacity: 0.5; /* Opacité de la ligne (entre 0 et 1) */
        margin: 10px 0; /* Marge supérieure et inférieure */
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .header-texte {
        font-size: 18px;
    }

    .forme {
        display: flex;
        align-items: center;
        justify-content: center;


    }

    .forme p {
        font-size: 28px;
        font-weight: normal;
        padding-bottom: 5px;
        line-height: 22px;


    }

    table {
        border-collapse: collapse;
        width: 10%;

    }

    .tr td {
        border: 1px dotted black;
        padding: 20px;
        font-size: 45px;
        font-weight: bold;
    }

    input {
        border: none;
        border-bottom: 1px dotted #000;
        padding-bottom: 5px; /* Espacement en bas pour dégager l'effet pointillé */
    }

    .trait {
        border: none;
        border-bottom: 1px dotted #000;
        padding-bottom: 5px; /* Espacement en bas pour dégager l'effet pointillé */
        width: 250px; /* Largeur de la barre */
    }


    .totalHt {
        margin-left: 23%;
        line-height: 40px;
    }

    .remise {
        border: none;
        border-bottom: 1px dotted #000;
        padding-bottom: 5px; /* Espacement en bas pour dégager l'effet pointillé */
        width: 70%; /* Largeur de la barre */
    }


    .tva {
        border: none;
        border-bottom: 1px dotted #000;
        width: 180px; /* Largeur de la barre */
    }

    .hr {
        border: none;
        border-bottom: 2px solid #000;
        width: 100%; /* Largeur de la barre */
    }

    .char {
        font-size: 32px;
    }

    .inline-container {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: row;

    }

    .ml {
        margin-left: 600px;
    }

    .line {


        text-overflow: ellipsis;
        white-space: nowrap;
        border-bottom: 1px dotted black;
        /* width: 200px; */
        line-height: 1px;
        width: auto;
    }

    .number {
        font-size: 105px;
        max-width: 100%;

    }

    .l {

        line-height: 50px;
    }

    .inline-containers {
        display: flex;
        align-items: center;


    }

    .lh {
        line-height: 50px;
    }

    .lr {
        margin-right: 100px;
        margin-left: 100px;
    }


    .inline {
        display: flex;
        align-items: center;
        margin-left: 450px;
    }

    .text-column {
        display: flex;
        flex-direction: column;
    }

    .text-row {
        display: flex;
        align-items: center;
        line-height: 50px;
    }

    .image-column {
        margin-left: 20px;
    }

    .grid {
        display: flex;
        justify-content: space-between;
        position: relative;
    }

    .contenu {
        float: left;
        width: 50%;
        padding-right: 45px;
        box-sizing: border-box;
        overflow: auto;
        padding: 10px; /* Ajouter cette ligne */
    }

    .header::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        border-left: 1px dashed black;
        margin-left: 10px;
        background-size: 20%;
    }

    .header::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: calc(50% - 1px);
        width: 2px;
        margin-left: -40px; /* Ajouter de l'espace à gauche de la barre */
        background-size: 20%;
    }


</style>
<body>

{{--<header class="header forme">--}}
{{--    <div class="logo">--}}
{{--        --}}{{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" > --}}
{{--    </div>--}}
{{--    <div class="texte">--}}
{{--        <h1 style="line-height: 0;">--}}
{{--            Martin pecheur Sarl--}}
{{--        </h1>--}}
{{--        <div class="header-texte">--}}
{{--            <u>Capital Social</u> <b>1.000.000 FCFA </b> IMPORT EXPORT COMMERCE GENERAL--}}
{{--        </div>--}}
{{--        <div style="margin-left: 10px;" class="header-texte">--}}
{{--            <b><u>Compte Bancaire </u></b> : BIBE 91/7031880301/93 SGB 03153282010182--}}
{{--        </div>--}}
{{--        <div style="margin-left: 20px;" class="header-texte">--}}
{{--            <b> RC</b>: RB Porto-Novo- 2007-B-467 <span class="ms-3"><b>IFU</b>:3201000073919</span>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</header>--}}


<div class="grid">
    <div class="contenu">

        <header class="header forme">
            <div class="logo">
                {{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" > --}}
            </div>
            <div class="texte">
                <h1 style="line-height: 0;">
                    Martin pecheur Sarl
                </h1>
                <div class="header-texte">
                    <u>Capital Social</u> <b>1.000.000 FCFA </b> IMPORT EXPORT COMMERCE GENERAL
                </div>
                <div style="margin-left: 10px;" class="header-texte">
                    <b><u>Compte Bancaire </u></b> : BIBE 91/7031880301/93 SGB 03153282010182
                </div>
                <div style="margin-left: 20px;" class="header-texte">
                    <b> RC</b>: RB Porto-Novo- 2007-B-467 <span class="ms-3"><b>IFU</b>:3201000073919</span>
                </div>
            </div>

        </header>

        <div class="hr"></div>


        <div style="font-size: 45px; margin-top: 50px" class="forme char">

            <span>Ticket N° 1</span> <span style="margin-left: 200px;">Le 12/12/2022 à </span> <span
                style="margin-left: 70px;">14:54:00 </span>

        </div>

        <div class="forme char" style="line-height: 50px; font-size: 45px;margin-top: 15px">

                        <span style="margin-right: 155px">
                            CAISSE1SUP
                        </span>

            <span style="margin-left: 85px;">


                            <span>Caissier :</span> <span style="margin-left: 20px" class="ms-4">1 ADJARA</span>
                                    </span>
        </div>


        <div class="forme char" style="line-height: 50px;font-size: 45px; margin-top: 15px">

                <span>
                Client : CLIENT COMPTOIR
                </span>


            <span style="margin-left: 25px;">
                    Ifu:
                </span>


        </div>

        <div class="forme char" style="line-height: 50px;font-size: 45px; margin-top: 15px">

                <span style="margin-right: 155px">
                DJREGBE
                </span>


            <span>
                    DETAIL POISSON
                </span>
        </div>


        <div class="forme" style="margin-top: 25px">
            <table>
                <thead>
                <tr class="tr">
                    <td width="120">Articles</td>
                    <td align="center" width="45">Qté</td>
                    <td width="35">Cond</td>
                    <td width="45">Prix U.</td>
                    {{-- <td width="10">Rem</td> --}}
                    <td width="75">Montant</td>
                </tr>
                </thead>

                <tbody>
                <tr class="tr">
                    <td>HM SBS 20KG NOUV (A-EX)</td>
                    <td align="center">1,00</td>
                    <td>KG</td>
                    <td>1 000</td>
                    {{-- <td>0</td> --}}
                    <td>1000</td>
                </tr>

                </tbody>
            </table>

        </div>


        <div style="margin-top: 40px ;" class="inline-container l ml">
            <span style=" font-weight: bold; font-size: 45px; margin-left: 220px;" class="text">Total HT (B): </span>
            <div class="line"  style="border-bottom:1px none black; width: 400px; margin-left: 500px;">
                <span class="number" style="font-size:45px;">0</span></div>
        </div>


        <div class="container" style="display: flex;">
            <div class="inline-containers lr lh">
                <span style=" font-weight: bold; font-size: 35px" class="text">Remise : </span>
                <div class="line" style="margin-left: 140px; width: 220px;">
                    <span class="number" style="font-size:40px; ">0</span></div>

            </div>

            <div class="inline-container ml" style="margin-top: 10px;line-height: 5px; margin-left: 570px">
                <span style=" font-weight: bold; font-size: 35px;  margin-left: 220px;"
                      class="text"> TVA ( 18% ) : </span>
                <div class="line" style="margin-left: 250px; width: 400px; margin-left: 450px;">
                    <span class="number" style="font-size:40px;">1000000</span></div>

            </div>

        </div>


        <div class="inline-container l ml" style="margin-left: 550px ;margin-top: 20px;">
            <span style=" font-weight: bold; font-size: 35px; margin-left: 180px;"
                  class="text">Total Exo. (A-EX) : </span>
            <div class="line" style="margin-left: 310px; width: 400px; margin-left: 480px;">
                <span class="number" style="font-size:40px;">0</span></div>

        </div>


        <div class="container" style="display: flex;">
            <div class="inline-containers lh">
                <span style=" font-size: 35px" class="text">Espece : </span>
                <span style="margin-left: 180px;font-size: 35px">1 000</span>

            </div>

            <div class="inline-container ml" style="line-height: 5px;">
                <span style=" font-weight: bold;  font-size: 35px; margin-left: 220px;"
                      class="text"> AIB ( 0 %) :</span>
                <div class="line" style="margin-left: 450px; width: 400px;">
                    <span class="number" style="font-size:40px;">0</span></div>

            </div>

        </div>


        <div class="container" style="display: flex;">
            <div class="inline-containers lh">
                <span style=" font-size: 35px" class="text">Reliquat : </span>
                <span class="" style="font-size: 35px;margin-left: 180px;">0</span>

            </div>

            <div class="inline-container ml " style="line-height: 5px;margin-top: 10px;">
                <span style=" font-weight: bold;  font-size: 35px; margin-left: 220px;" class="text"> TOTAL TTC :</span>
                <div class="line" style="margin-left: 450px; width: 400px;">
                    <span class="number" style="font-size:40px;">0</span></div>

            </div>

        </div>


        <div style="margin-top: 70px;">
            <div style="display: inline-block; vertical-align: top;">
                <div>
                    <span style="font-size: 35px; line-height: 5px;">CODE MECeF / DGI : </span>

                </div>

            </div>
            <div style="display: inline-block; margin-left: 40px; font-size: 35px">
                7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH
            </div>
        </div>


        <div style="margin-top: 50px; margin-bottom: 0">
            <div style="display: inline-block; vertical-align: top;">
                <div>
                    <span style="font-size: 40px">NIM :</span>
                    <span style="margin-left: 180px; font-size: 40px;">ED04000144</span>
                </div>
                <div style="margin-top: 10px;">
                    <span style="font-size: 40px">Compteurs :</span>
                    <span style="margin-left: 80px; font-size: 40px;">309 833/311 237 <span style="margin-left: 10px;">FV</span></span>
                </div>
                <div style="margin-top: 10px;">
                    <span style="font-size: 40px">Heure :</span>
                    <span style="margin-left: 180px; font-size: 40px;">12/12/2022 14:54:47</span>
                </div>
            </div>
            <div style="display: inline-block; margin-left: 150px; margin-top: 20px;">
                <img
                    src="data:image/png;base64, {!! base64_encode(QrCode::generate('7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH')) !!} "
                    alt="Image" style="width: 250px;">
            </div>
        </div>


        <div style="text-align: center; margin-top: 0">
            <p style="font-size: 35px;font-weight: bold">
                LES ARTICLES VENDUS NE SONT NI REPRIS NI ECHANGES
            </p>
            <p style="line-height: 1px;font-size: 40px;">
                Merci pour votre fidélité; à bientôt
            </p>
        </div>
    </div>


    <div class="contenu" style="margin-left: 60px;">
        <header class="header::after forme">
            <div class="logo">
                {{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" > --}}
            </div>
            <div class="texte">
                <h1 style="line-height: 0;">
                    Martin pecheur Sarl
                </h1>
                <div class="header-texte">
                    <u>Capital Social</u> <b>1.000.000 FCFA </b> IMPORT EXPORT COMMERCE GENERAL
                </div>
                <div style="margin-left: 10px;" class="header-texte">
                    <b><u>Compte Bancaire </u></b> : BIBE 91/7031880301/93 SGB 03153282010182
                </div>
                <div style="margin-left: 20px;" class="header-texte">
                    <b> RC</b>: RB Porto-Novo- 2007-B-467 <span class="ms-3"><b>IFU</b>:3201000073919</span>
                </div>
            </div>

        </header>

        <div class="hr"></div>


        <div style="font-size: 45px; margin-top: 50px" class="forme char">

            <span>Ticket N° 1</span> <span style="margin-left: 200px;">Le 12/12/2022 à </span> <span
                style="margin-left: 70px;">14:54:00 </span>

        </div>

        <div class="forme char" style="line-height: 50px; font-size: 45px;margin-top: 15px">

                        <span style="margin-right: 155px">
                            CAISSE1SUP
                        </span>

            <span style="margin-left: 85px;">


                            <span>Caissier :</span> <span style="margin-left: 20px" class="ms-4">1 ADJARA</span>
                                    </span>
        </div>


        <div class="forme char" style="line-height: 50px;font-size: 45px; margin-top: 15px">

                <span>
                Client : CLIENT COMPTOIR
                </span>


            <span style="margin-left: 25px;">
                    Ifu:
                </span>


        </div>

        <div class="forme char" style="line-height: 50px;font-size: 45px; margin-top: 15px">

                <span style="margin-right: 155px">
                DJREGBE
                </span>


            <span>
                    DETAIL POISSON
                </span>
        </div>


        <div class="forme" style="margin-top: 25px">
            <table>
                <thead>
                <tr class="tr">
                    <td width="120">Articles</td>
                    <td align="center" width="45">Qté</td>
                    <td width="35">Cond</td>
                    <td width="45">Prix U.</td>
                    {{-- <td width="10">Rem</td> --}}
                    <td width="75">Montant</td>
                </tr>
                </thead>

                <tbody>
                <tr class="tr">
                    <td>HM SBS 20KG NOUV (A-EX)</td>
                    <td align="center">1,00</td>
                    <td>KG</td>
                    <td>1 000</td>
                    {{-- <td>0</td> --}}
                    <td>1000</td>
                </tr>

                </tbody>
            </table>

        </div>


        <div style="margin-top: 40px ;" class="inline-container l ml">
            <span style=" font-weight: bold; font-size: 35px; margin-left: 220px;" class="text">Total HT (B): </span>
            <div class="line" style="margin-left: 220px; width: 400px; margin-left: 450px;">
                <span class="number" style="font-size:40px; margin: auto;">0</span></div>

        </div>


        <div class="container" style="display: flex;">
            <div class="inline-containers lr lh">
                <span style=" font-weight: bold; font-size: 35px" class="text">Remise : </span>
                <div class="line" style="margin-left: 140px; width: 220px;">
                    <span class="number" style="font-size:40px; ">0</span></div>

            </div>

            <div class="inline-container ml" style="margin-top: 10px;line-height: 5px; margin-left: 570px">
                <span style=" font-weight: bold; font-size: 35px;  margin-left: 220px;"
                      class="text"> TVA ( 18% ) : </span>
                <div class="line" style="margin-left: 250px; width: 400px; margin-left: 450px;">
                    <span class="number" style="font-size:40px;">1000000</span></div>

            </div>

        </div>


        <div class="inline-container l ml" style="margin-left: 550px ;margin-top: 20px;">
            <span style=" font-weight: bold; font-size: 35px; margin-left: 180px;"
                  class="text">Total Exo. (A-EX) : </span>
            <div class="line" style="margin-left: 310px; width: 400px; margin-left: 480px;">
                <span class="number" style="font-size:40px;">0</span></div>

        </div>


        <div class="container" style="display: flex;">
            <div class="inline-containers lh">
                <span style=" font-size: 35px" class="text">Espece : </span>
                <span style="margin-left: 180px;font-size: 35px">1 000</span>

            </div>

            <div class="inline-container ml" style="line-height: 5px;">
                <span style=" font-weight: bold;  font-size: 35px; margin-left: 220px;"
                      class="text"> AIB ( 0 %) :</span>
                <div class="line" style="margin-left: 450px; width: 400px;">
                    <span class="number" style="font-size:40px;">0</span></div>

            </div>

        </div>


        <div class="container" style="display: flex;">
            <div class="inline-containers lh">
                <span style=" font-size: 35px" class="text">Reliquat : </span>
                <span class="" style="font-size: 35px;margin-left: 180px;">0</span>

            </div>

            <div class="inline-container ml " style="line-height: 5px;margin-top: 10px;">
                <span style=" font-weight: bold;  font-size: 35px; margin-left: 220px;" class="text"> TOTAL TTC :</span>
                <div class="line" style="margin-left: 450px; width: 400px;">
                    <span class="number" style="font-size:40px;">0</span></div>

            </div>

        </div>


        <div style="margin-top: 70px;">
            <div style="display: inline-block; vertical-align: top;">
                <div>
                    <span style="font-size: 35px; line-height: 5px;">CODE MECeF / DGI : </span>

                </div>

            </div>
            <div style="display: inline-block; margin-left: 40px; font-size: 35px">
                7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH
            </div>
        </div>


        <div style="margin-top: 50px; margin-bottom: 0">
            <div style="display: inline-block; vertical-align: top;">
                <div>
                    <span style="font-size: 40px">NIM :</span>
                    <span style="margin-left: 180px; font-size: 40px;">ED04000144</span>
                </div>
                <div style="margin-top: 10px;">
                    <span style="font-size: 40px">Compteurs :</span>
                    <span style="margin-left: 80px; font-size: 40px;">309 833/311 237 <span style="margin-left: 10px;">FV</span></span>
                </div>
                <div style="margin-top: 10px;">
                    <span style="font-size: 40px">Heure :</span>
                    <span style="margin-left: 180px; font-size: 40px;">12/12/2022 14:54:47</span>
                </div>
            </div>
            <div style="display: inline-block; margin-left: 150px; margin-top: 20px;">
                <img
                    src="data:image/png;base64, {!! base64_encode(QrCode::generate('7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH')) !!} "
                    alt="Image" style="width: 250px;">
            </div>
        </div>


        <div style="text-align: center; margin-top: 0">
            <p style="font-size: 35px;font-weight: bold">
                LES ARTICLES VENDUS NE SONT NI REPRIS NI ECHANGES
            </p>
            <p style="line-height: 1px;font-size: 40px;">
                Merci pour votre fidélité; à bientôt
            </p>
        </div>
    </div>
</div>


{{--<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate('http://google.com')) !!} ">--}}

</body>
</html>

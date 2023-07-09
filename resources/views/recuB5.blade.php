<!DOCTYPE html>
<html>

<head>
    <title>Ticket de caisse</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .ticket-container {
            width: 100%;
            /*  max-height: 90vh;  */


        }

        .ticket {
            display: flex;
            width: 100%;

            page-break-inside: avoid;
        }

        .ticket-column-g {
            flex: 1;
            padding: 0 10px;
            width: 50%;
            page-break-inside: avoid;
            break-inside: avoid;

        }

        .ticket-column-d {
            flex: 1;
            padding: 0 10px;
            width: 50%;
            page-break-inside: avoid;
            break-inside: avoid;
            float: right;

        }

        .ticket-column {
            flex: 1;
            padding: 0 10px;
            width: 50%;
            page-break-inside: avoid;
            break-inside: avoid;
            flex-grow: 1;
            /* Permettre aux deux divs de prendre la même quantité d'espace */
            flex-basis: 0;
            /* Réinitialiser la taille de base des divs */


        }

        .ticket-column:first-child {
            border-right: 1px solid #000;
        }

        .ticket-header,
        .ticket-items {
            margin-bottom: 10px;
        }

        .ticket-items table {
            width: 100%;
            border-collapse: collapse;
        }

        .ticket-items th,
        .ticket-items td {
            padding: 5px;
        }

        .ticket-items th {
            background-color: #f0f0f0;
        }

        .ticket-separator {
            width: 1px;
            background-color: #000;
            margin: 0 10px;
        }

        @media print {
            .ticket {
                width: 100%;
                page-break-after: always;
            }
        }

        .header-texte {
            font-size: 40px;
            line-height: 60px;
        }

        .char {
            font-size: 50px;
        }

        .forme {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .hr {
            border: none;
            border-bottom: 2px dotted #000;
            width: 100%;
            /* Largeur de la barre */


        }


        .header .hr {
            border: none;
            /* Supprime la bordure par défaut */
            background-color: #000;
            /* Couleur de fond de la ligne */
            opacity: 0.5;
            /* Opacité de la ligne (entre 0 et 1) */
            margin: 10px 0;
            /* Marge supérieure et inférieure */
            display: flex;
            align-items: center;
            justify-content: center;

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
            width: 100%;

        }

        .tr td,
        .tr th,
        .forme-tr td,
        th {
            border: 1px dotted black;
            padding: 10px;
            font-size: 50px;
            font-weight: normal;
        }

        .forme-tr td {
            width: 800%;
        }

        .tr td {
            height: 400px;
        }

        .inline-container {
            display: flex;
            align-items: center;


        }

        .l {

            line-height: 100px;
        }

        .scrollable-tbody {

            height: 500px;
            /* Définissez la hauteur souhaitée ici */
            overflow-y: auto;
        }

        .after-header {
            display: flex;
            justify-content: center;
        }

        .forme-th {
            width: 100%;
            height: 5%;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="ticket-container">

        <div class="ticket">
            <div>
                <div>
                    <div class="ticket-column" style="float: left;">
                        <header class="header forme">
                            <div class="logo">
                                {{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" > --}}
                            </div>
                            <div class="texte">
                                <h2 style="line-height: 0px;">
                                    Martin pecheur Sarl
                                </h2>
                                <div class="header-texte">
                                    <u>Capital Social</u> <b>1.000.000 FCFA </b> IMPORT EXPORT COMMERCE GENERAL
                                </div>
                                <div style="margin-left: 10px;" class="header-texte">
                                    <b><u>Compte Bancaire </u></b> : BIBE 91/7031880301/93 SGB 03153282010182
                                </div>
                                <div style="margin-left: 20px;" class="header-texte">
                                    <b> RC</b>: RB Porto-Novo- 2007-B-467 <span
                                        class="ms-3"><b>IFU</b>:3201000073919</span>
                                </div>
                            </div>

                        </header> <br>
                        <br>

                        <div class="after-header" style="display: flex; flex-wrap: nowrap;  width: 100%;">
                            <div class="forme" style="display: inline-block;">
                                <div>
                                    <span>Client :</span>
                                    <span>CLIENT COMPTOIR</span>
                                </div> <br>
                                <div>
                                    <span>Caise :</span>
                                    <span>5</span>
                                </div> <br>
                                <div>
                                    <span>KALI</span>

                                </div>
                            </div>
                            <div style="display: inline-block; width: 55%; margin-left: 70px; ">

                                <div class="forme-th"> <u>Reçu de règlement</u></div>

                                <table style="">
                                    <thead>
                                        <th>

                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr class="forme-tr">
                                            <td style="width: 40%;">
                                                No <br> <br>
                                                DATE <br> <br>
                                                HEURE
                                            </td>
                                            <td>143 273 <br>
                                                <br>06/07/2023 <br> <br> 17:22:00
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="forme" style="margin-top: 70px;">
                            <table>
                                <thead>
                                    <tr class="tr">
                                        <th>N DE PIECE</th>
                                        <th>DATE</th>
                                        <th>LIBELLE</th>
                                        <th>MONTANT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td>Contenu 1-1</td>
                                        <td>Contenu 1-2</td>
                                        <td>Contenu 1-3</td>
                                        <td>Contenu 1-4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>

                        <div class="forme">
                            <span>Vous avez réglé le montant de: </span>
                            <span>
                                Huit mille
                            </span>
                        </div> <br><br>


                        <div class="forme" style="margin-left: 170px;">
                            Merci pour votre fidélité; à bientôt
                        </div> <br><br>
                        <div class="forme" style="margin-left: 800px;">
                            <u>Le service commercial</u>
                        </div>
                    </div>
                    <div class="ticket-separator"></div>
                    <div class="ticket-column" style="float: left;">
                        <header class="header forme">
                            <div class="logo">
                                {{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" > --}}
                            </div>
                            <div class="texte">
                                <h2 style="line-height: 0px;">
                                    Martin pecheur Sarl
                                </h2>
                                <div class="header-texte">
                                    <u>Capital Social</u> <b>1.000.000 FCFA </b> IMPORT EXPORT COMMERCE GENERAL
                                </div>
                                <div style="margin-left: 10px;" class="header-texte">
                                    <b><u>Compte Bancaire </u></b> : BIBE 91/7031880301/93 SGB 03153282010182
                                </div>
                                <div style="margin-left: 20px;" class="header-texte">
                                    <b> RC</b>: RB Porto-Novo- 2007-B-467 <span
                                        class="ms-3"><b>IFU</b>:3201000073919</span>
                                </div>
                            </div>

                        </header> <br>
                        <br>

                        <div class="after-header" style="display: flex; flex-wrap: nowrap;  width: 100%;">
                            <div class="forme" style="display: inline-block;">
                                <div>
                                    <span>Client :</span>
                                    <span>CLIENT COMPTOIR</span>
                                </div> <br>
                                <div>
                                    <span>Caise :</span>
                                    <span>5</span>
                                </div> <br>
                                <div>
                                    <span>KALI</span>

                                </div>
                            </div>
                            <div style="display: inline-block; width: 55%; margin-left: 70px; ">

                                <div class="forme-th"> <u>Reçu de règlement</u></div>

                                <table style="">
                                    <thead>
                                        <th>

                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr class="forme-tr">
                                            <td style="width: 40%;">
                                                No <br> <br>
                                                DATE <br> <br>
                                                HEURE
                                            </td>
                                            <td>143 273 <br>
                                                <br>06/07/2023 <br> <br> 17:22:00
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>



                        <div class="forme" style="margin-top: 70px;">
                            <table>
                                <thead>
                                    <tr class="tr">
                                        <th>N DE PIECE</th>
                                        <th>DATE</th>
                                        <th>LIBELLE</th>
                                        <th>MONTANT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td>Contenu 1-1</td>
                                        <td>Contenu 1-2</td>
                                        <td>Contenu 1-3</td>
                                        <td>Contenu 1-4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>

                        <div class="forme">
                            <span>Vous avez réglé le montant de: </span>
                            <span>
                                Huit mille
                            </span>
                        </div> <br><br>


                        <div class="forme" style="margin-left: 170px;">
                            Merci pour votre fidélité; à bientôt
                        </div> <br><br>
                        <div class="forme" style="margin-left: 800px;">
                            <u>Le service commercial</u>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



</body>

</html>

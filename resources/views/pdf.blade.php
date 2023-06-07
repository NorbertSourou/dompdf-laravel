
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
                        flex-grow: 1; /* Permettre aux deux divs de prendre la même quantité d'espace */
            flex-basis: 0; /* Réinitialiser la taille de base des divs */


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

                    .tr td {
                        border: 1px dotted black;
                        padding: 10px;
                        font-size: 50px;
                        font-weight: normal;
                    }

                    .inline-container {
                        display: flex;
                        align-items: center;


                    }

                    .l {

                        line-height: 100px;
                    }
                </style>
            </head>

            <body>
                <div class="ticket-container">

                    <div class="ticket">
                        <table>
                            <tr>
                                <td class="ticket-column" style="float: left;">
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

                                    </header>
                                    <div class="ticket-items">
                                        <div class="forme char" style="margin-top: 30px;">

                                            <span style="margin-left: 950px; line-height: 45px;">Facture N° : 24 474</span>

                                        </div>

                                        <div class="forme char">

                                            <span>Client : </span> <span>CLIENT COMPTOIR </span>
                                            <span style="margin-left: 20px;">Ifu </span>

                                        </div>


                                        <div class="forme char" style="margin-top: 15px;">

                                            <span>
                                                Réf. :
                                            </span>

                                            <span style="margin-left: 180px;">


                                                <span>Date : </span> <span> 12/12/2022</span> <span
                                                    style="margin-left: 10px;">à</span style="margin-left: 10px;">
                                                <span>14:54:00</span>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="forme char">

                                        <span>
                                            CAISSE1SUP
                                        </span>

                                        <span style="margin-left: 25px;">


                                            <span>Caissier 1 </span> <span> ADJARA</span> <span style="margin-left: 50px;">
                                                Magasin :</span style="margin-left: 15px;"> <span>DETAIL POISSON</span>
                                        </span>
                                    </div>
                                    <div class="forme" style="margin-top: 70px;">
                                        <table>
                                            <thead>
                                                <tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="forme char" style="margin-top: 100px;">

                                        <span>
                                            Arrêtée la présente facture à la somme de :
                                        </span>

                                        <span style="margin-left: 25px;">


                                            <span>Total HT (B): </span> <span style="margin-left: 80px;"> 10000 </span>
                                        </span>
                                    </div>

                                    <div class="forme char" style="margin-top: 10px;">

                                        <span>
                                            MILLE
                                        </span>

                                        <span style="margin-left: 235px;">


                                            <span>TVA ( 18 %) : </span> <span style="margin-left: 80px;"> 10000 </span>
                                        </span>
                                    </div>

                                    <table style="font-size: 40px; line-height: 100px;">
                                        <tr>
                                            <td>

                                                <div style="margin-top: 30px;" style="font-size: 30px;">
                                                    <div style="display: inline-block; vertical-align: top;">
                                                        <div>
                                                            <span style=" ">CODE MECeF / DGI :
                                                            </span>

                                                        </div>

                                                    </div>
                                                    <div style="display: inline-block; margin-left: 10px; ">
                                                        7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH
                                                    </div>
                                                </div>


                                                <div style=" margin-bottom: 0">
                                                    <div style="display: inline-block; vertical-align: top;">
                                                        <div>
                                                            <span style="">NIM :</span>
                                                            <span style="margin-left: 180px; ">ED04000144</span>
                                                        </div>
                                                        <div style="margin-top: 10px;">
                                                            <span style="">Compteurs :</span>
                                                            <span style="margin-left: 80px; ">309 833/311 237 <span
                                                                    style="margin-left: 10px;">FV</span></span>
                                                        </div>
                                                        <div style="margin-top: 10px;">
                                                            <span style="">Heure :</span>
                                                            <span style="margin-left: 180px; ">12/12/2022
                                                                14:54:47</span>
                                                        </div>
                                                        <div style="display: inline-block; margin-left: 150px; margin-top: 20px;">
                                                            <img src="data:image/png;base64, {!! base64_encode(QrCode::generate('7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH')) !!} "
                                                                alt="Image" style="width: 100px;">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="forme " style="font-size: 30px;">
                                                    LES ARTICLES VENDUS NE SONT NI REPRIS NI ECHANGES


                                                </div>
                                            </td>
                                            <td>


                                                <div class="forme " style=" margin-right: 20px;" style="font-size: 30px;">



                                                    <span style="">


                                                        <span>Total Exo. (A-EX) :</span> <span style=""> 10000 </span>
                                                    </span>
                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">AIB ( 0 %)
                                                        :
                                                    </span>
                                                    <span>100000</span>

                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">TOTAL TTC
                                                        :</span>
                                                    <span>0</span>

                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">Remise
                                                        :</span>
                                                    <span>0</span>

                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">Espece :
                                                        <span>0</span></span>

                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">Reliquat :
                                                        <span>0</span></span>


                                                </div>

                                                <div class="inline-container l ml" style="font-size: 30px;">
                                                    Merci pour votre fidélité; à bientôt


                                                </div>





                                            </td>
                                        </tr>
                                    </table>



                                </td>
                                <div class="ticket-separator"></div>
                                <td class="ticket-column" style="float: right;">
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

                                    </header>
                                    <div class="ticket-items">
                                        <div class="forme char" style="margin-top: 30px;">

                                            <span style="margin-left: 950px; line-height: 45px;">Facture N° : 24 474</span>

                                        </div>

                                        <div class="forme char">

                                            <span>Client : </span> <span>CLIENT COMPTOIR </span>
                                            <span style="margin-left: 20px;">Ifu </span>

                                        </div>


                                        <div class="forme char" style="margin-top: 15px;">

                                            <span>
                                                Réf. :
                                            </span>

                                            <span style="margin-left: 180px;">


                                                <span>Date : </span> <span> 12/12/2022</span> <span
                                                    style="margin-left: 10px;">à</span style="margin-left: 10px;">
                                                <span>14:54:00</span>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="forme char">

                                        <span>
                                            CAISSE1SUP
                                        </span>

                                        <span style="margin-left: 25px;">


                                            <span>Caissier 1 </span> <span> ADJARA</span> <span style="margin-left: 50px;">
                                                Magasin :</span style="margin-left: 15px;"> <span>DETAIL POISSON</span>
                                        </span>
                                    </div>
                                    <div class="forme" style="margin-top: 70px;">
                                        <table>
                                            <thead>
                                                <tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr>
                                                <tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr><tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr><tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr>
<tr class="tr">
                                                    <td>Articles</td>
                                                    <td>Qté</td>
                                                    <td>Cond</td>
                                                    <td>Prix U.</td>
                                                    <td>Rem</td>
                                                    <td>Montant</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="forme char" style="margin-top: 100px;">

                                        <span>
                                            Arrêtée la présente facture à la somme de :
                                        </span>

                                        <span style="margin-left: 25px;">


                                            <span>Total HT (B): </span> <span style="margin-left: 80px;"> 10000 </span>
                                        </span>
                                    </div>

                                    <div class="forme char" style="margin-top: 10px;">

                                        <span>
                                            MILLE
                                        </span>

                                        <span style="margin-left: 235px;">


                                            <span>TVA ( 18 %) : </span> <span style="margin-left: 80px;"> 10000 </span>
                                        </span>
                                    </div>

                                    <table style="font-size: 40px; line-height: 100px;">
                                        <tr>
                                            <td>

                                                <div style="margin-top: 30px;" style="font-size: 30px;">
                                                    <div style="display: inline-block; vertical-align: top;">
                                                        <div>
                                                            <span style=" ">CODE MECeF / DGI :
                                                            </span>

                                                        </div>

                                                    </div>
                                                    <div style="display: inline-block; margin-left: 10px; ">
                                                        7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH
                                                    </div>
                                                </div>


                                                <div style=" margin-bottom: 0">
                                                    <div style="display: inline-block; vertical-align: top;">
                                                        <div>
                                                            <span style="">NIM :</span>
                                                            <span style="margin-left: 180px; ">ED04000144</span>
                                                        </div>
                                                        <div style="margin-top: 10px;">
                                                            <span style="">Compteurs :</span>
                                                            <span style="margin-left: 80px; ">309 833/311 237 <span
                                                                    style="margin-left: 10px;">FV</span></span>
                                                        </div>
                                                        <div style="margin-top: 10px;">
                                                            <span style="">Heure :</span>
                                                            <span style="margin-left: 180px; ">12/12/2022
                                                                14:54:47</span>
                                                        </div>
                                                        <div style="display: inline-block; margin-left: 150px; margin-top: 20px;">
                                                            <img src="data:image/png;base64, {!! base64_encode(QrCode::generate('7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH')) !!} "
                                                                alt="Image" style="width: 100px;">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="forme " style="font-size: 30px;">
                                                    LES ARTICLES VENDUS NE SONT NI REPRIS NI ECHANGES


                                                </div>
                                            </td>
                                            <td>


                                                <div class="forme " style=" margin-right: 20px;" style="font-size: 30px;">



                                                    <span style="">


                                                        <span>Total Exo. (A-EX) :</span> <span style=""> 10000 </span>
                                                    </span>
                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">AIB ( 0 %)
                                                        :
                                                    </span>
                                                    <span>100000</span>

                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">TOTAL TTC
                                                        :</span>
                                                    <span>0</span>

                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">Remise
                                                        :</span>
                                                    <span>0</span>

                                                </div>

                                                <div class="inline-container l ml" style="">
                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">Espece :
                                                        <span>0</span></span>

                                                    <span style=" font-weight: bold; margin-left: 10px;" class="text">Reliquat :
                                                        <span>0</span></span>


                                                </div>

                                                <div class="inline-container l ml" style="font-size: 30px;">
                                                    Merci pour votre fidélité; à bientôt


                                                </div>





                                            </td>
                                        </tr>
                                    </table>



                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="ticket">
                        <table>
                            <tr>
                               <td>

                                </td>
                                <div class="ticket-separator"></div>
                                <td>

                                </td>
                            </tr>
                        </table>
                    </div>


                </div>



            </body>

            </html>

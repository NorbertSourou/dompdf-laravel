<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .header {
            border: 1px solid black;
            height: 8%;
            width: 85%;
            margin: auto;
            padding-top: 30px;

        }

        .corps {
            border: 1px solid black;

            width: 90%;
            margin: auto;
            padding: 15px;

        }

        table {
            width: 100%;
            margin: auto;



        }

        .thead{
border: 1px solid black;
        }

        .thead,
        .thead td {
            border: 1px solid black;
            height: 8%;

        }

        td {
            padding-left: 20px;
        }

        .tbody{
            line-height: 80px;
            font-size: 40px;
        }

        .tbody2{
            border: 1px dotted black;
            height: 120px;
            text-align: left;
        }

        .text{
            margin-left: 60%;
            line-height: 200%;
        }
    </style>

</head>

<body>


    <div class="container">
        <div class="header">
            <div style="font-size: 80px; font-weight: bold; text-align: center;">
                STATISTIQUES DE CAISSE
            </div>
            <div style="font-size: 40x; text-align: center; line-height: 35px; ">
                Par famille
            </div>
        </div>
        <div class="container">
            <div class="corps">
                <div class="row">
                    <span>
                        Période allant du :
                    </span>
                    <span style="margin-left: 200px;">
                        17/08/2020
                    </span>
                    <span style="margin-left: 400px;">
                        Caisse :
                    </span>
                    <span style="margin-left: 300px;">
                        CAISSE 3
                    </span>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <span>
                        au :
                    </span>
                    <span style="margin-left: 485px;">
                        17/08/2020
                    </span>
                    <span style="margin-left: 400px;">
                        Magasin :
                    </span>
                    <span style="margin-left: 300px;">
                        Tous
                    </span>
                </div>

                <table>
                    <thead class="thead">
                        <tr>
                            <td>
                                Famille
                            </td>
                            <td>
                                Désignation
                            </td>
                            <td>
                                Quantités
                                vendues
                            </td>
                            <td>
                                CA HT
                            </td>
                            <td>
                                Montant
                                TVA
                            </td>
                            <td>
                                CA Net
                                TTC
                            </td>
                            <td>
                                Crédits
                            </td>
                        </tr>
                    </thead>
                    <tbody class="tbody">

                        <tr>
                            <td>
                                VOL
                            </td>
                            <td>
                                VOLAILLES
                            </td>
                            <td>
                                13,0000
                            </td>
                            <td>
                                170 763
                            </td>
                            <td>
                                30 737
                            </td>
                            <td> 201 500</td>
                            <td> 0 </td>
                        </tr>
                        <tr>
                            <td>
                                POIS
                            </td>
                            <td>
                                POISSON
                            </td>
                            <td>
                                13,0000
                            </td>
                            <td>
                                170 763
                            </td>
                            <td>
                                30 737
                            </td>
                            <td> 201 500</td>
                            <td> 0 </td>
                        </tr>
                        <tr >
                            <td>
                               DIV
                            </td>
                            <td>
                                DIVERS
                            </td>
                            <td>
                                13,0000
                            </td>
                            <td>
                                170 763
                            </td>
                            <td>
                                30 737
                            </td>
                            <td> 201 500</td>
                            <td> 0 </td>
                        </tr>
                        <tr style="border: 1px dotted black;">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td class="tbody2">
                                256,0000
                            <td class="tbody2">
                                4 539 588
                            </td>
                            <td class="tbody2">
                                122 812
                            </td>
                            <td class="tbody2"> 4 662 400</td>
                            <td class="tbody2"> 0 </td>
                        </tr>

                    </tbody>
                </table>

                <div class="text">
                    <div>
                        MontantAIB collecté :0
                    </div>
                    <div>
                        Momtant des ventes :4 662 400
                    </div>
                    <div>
                        Momtant des crédits :0
                    </div>

                 </div>


                 <div style="line-height: 120px;">
                    <span>
                        Nombre de familles : 3
                    </span>
                    <span style="margin-left: 42%;">
                        Momtant en caisse : 4 662 400
                    </span>
                </div>

            </div>

        </div>


    </div>

    {{--  <div class="container">

        <div class="container">
            <div class="corps">
                <div class="row">
                    <span>
                        Période allant du :
                    </span>
                    <span style="margin-left: 200px;">
                        17/08/2020
                    </span>
                    <span style="margin-left: 400px;">
                        Caisse :
                    </span>
                    <span style="margin-left: 300px;">
                        CAISSE 3
                    </span>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <span>
                        au :
                    </span>
                    <span style="margin-left: 485px;">
                        17/08/2020
                    </span>
                    <span style="margin-left: 400px;">
                        Magasin :
                    </span>
                    <span style="margin-left: 300px;">
                        Tous
                    </span>
                </div>

                <table>
                    <thead class="thead" >
                        <tr>
                            <td>
                                Reference
                            </td>
                            <td>
                                Désignation
                            </td>
                            <td>
                                Quantités
                                vendues
                            </td>
                            <td>
                                CA HT
                            </td>
                            <td>
                                Montant
                                TVA
                            </td>
                            <td>
                                CA Net
                                TTC
                            </td>
                            <td>
                                Crédits
                            </td>
                        </tr>
                    </thead>
                    <tbody class="tbody  " >

                        <tr style="border: 1px dotted black;">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td class="tbody2">
                                256,0000
                            <td class="tbody2">
                                4 539 588
                            </td>
                            <td class="tbody2">
                                122 812
                            </td>
                            <td class="tbody2"> 4 662 400</td>
                            <td class="tbody2"> 0 </td>
                        </tr>


                    </tbody>
                </table>

                 <div class="text">
                    <div>
                        MontantAIB collecté :0
                    </div>
                    <div>
                        Momtant des ventes :4 662 400
                    </div>
                    <div>
                        Momtant des crédits :0
                    </div>

                 </div>


                 <div style="line-height: 120px;">
                    <span>
                        Nombre de produits : 34
                    </span>
                    <span style="margin-left: 42%;">
                        Momtant en caisse : 4 662 400
                    </span>
                </div>

            </div>


        </div>


    </div>  --}}

</body>

</html>

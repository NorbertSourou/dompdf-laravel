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
            .header{
                display: flex;
                align-items: center;
                justify-content: center;



            }

            .header .hr
            {
              border: none; /* Supprime la bordure par défaut */
              background-color: #000; /* Couleur de fond de la ligne */
              opacity: 0.5; /* Opacité de la ligne (entre 0 et 1) */
              margin: 10px 0; /* Marge supérieure et inférieure */
            display: flex;
                align-items: center;
                justify-content: center;

            }

            .header-texte{
                font-size: 18px;
            }

            .forme{
            display: flex;
            align-items: center;
            justify-content: center;

            }

            .forme p{
                font-size: 28px;
                font-weight: normal;
                padding-bottom: 5px;
            line-height: 22px;


            }

            table {
                border-collapse: collapse;
                width: 85%;
              }

              .tr td {
                border: 1px dotted black;
                padding: 10px;
                font-size: 25px;
                font-weight: normal;
              }

            input{
                border: none;
              border-bottom: 1px dotted #000;
              padding-bottom: 5px; /* Espacement en bas pour dégager l'effet pointillé */
            }

            .trait{
                border: none;
                border-bottom: 1px dotted #000;
                padding-bottom: 5px; /* Espacement en bas pour dégager l'effet pointillé */
                width: 250px; /* Largeur de la barre */
              }


            .totalHt{
                margin-left: 23%;
                line-height: 40px;
            }

            .remise{
                border: none;
                border-bottom: 1px dotted #000;
                padding-bottom: 5px; /* Espacement en bas pour dégager l'effet pointillé */
                width: 70%; /* Largeur de la barre */
            }


            .tva{
                border: none;
                border-bottom: 1px dotted #000;
                width: 180px; /* Largeur de la barre */
            }

            .hr{
                border: none;
                border-bottom: 2px solid #000;
                width: 88%; /* Largeur de la barre */
            }

        .char{
            font-size: 32px;
        }

        .inline-container {
        display: flex;
        align-items: center;
        margin-left: 600px;

    }

    .l{

        line-height: 50px;
    }

    .inline-containers {
        display: flex;
        align-items: center;
        line-height: 50px;
        margin-right: 100px;
        margin-left: 100px;
    }

    .line {

        border-bottom: 1px dotted black;
   width: 200px;
   line-height: 1px;
    }
    .number {
         font-weight: bold;
    white-space: nowrap;
    }

    .inline{
        display: flex;
        align-items: center;
        margin-left: 450px;
    }

                    </style>
<body>

    <header class="header forme">
        <div class="logo">
           {{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" > --}}
        </div>
              <div class="texte">
                <h1 style="line-height: 0px;">
                    Martin pecheur Sarl
                   </h1>
                   <div class="header-texte" >
                    <u>Capital Social</u> <b>1.000.000 FCFA </b>  IMPORT EXPORT COMMERCE GENERAL
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

        <div class="forme char"  >

          <span >Ticket N° 24 474</span> <span style="margin-left: 200px;">Le 12/12/2022 à </span> <span style="margin-left: 70px;">14:54:00 </span>

        </div>

        <div class="forme char" style="line-height: 50px;">

            <span style="margin-right: 155px">
                CAISSE1SUP
            </span>

        <span style="margin-left: 85px;">


                <span>Caissier :</span> <span class="ms-4">1 ADJARA</span>
                           </span>
       </div>


    <div class="forme char" style="line-height: 50px;">

        <span >
           Client : CLIENT COMPTOIR
        </span>



           <span style="margin-left: 25px;">
            Ifu:
           </span>




    </div>


    <div class="forme char">

        <p style="margin-right: 370px;">
           DETAIL POISSON
        </p>


    </div>

    <div class="forme">
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



    <div class="inline-container l" >
        <span class="text" >Total HT : </span>  <div class="line" style="margin-left: 130px;" >
            <span class="number" style="margin-left: 180px;">0</span> </div>

    </div>



  <div class="container" style="display: flex;">
    <div class="inline-containers" >
        <span class="text" >Remise : </span>  <div class="line" style="margin-left: 100px;"  >
            <span class="number" style="margin-left: 180px;">0</span> </div>

    </div>

    <div class="inline-container" style="line-height: 5px;" >
        <span class="text" > TVA ( 18% ) : </span>  <div class="line" style="margin-left: 130px;" >
            <span class="number" style="margin-left: 180px;">0</span> </div>

    </div>

  </div>


  <div class="inline-container l" >
    <span class="text" >Total Exo. (A-EX) : </span>  <div class="line" style="margin-left: 130px;" >
        <span class="number" style="margin-left: 180px;">0</span> </div>

</div>


<div class="container" style="display: flex;">
    <div class="inline-containers" >
        <span class="text" >Espece : </span>
            <span class="number" style="margin-left: 180px;">1 000</span>

    </div>

    <div class="inline-container" style="line-height: 5px;" >
        <span class="text" > AIB ( 0 %) :</span>  <div class="line" style="margin-left: 130px;" >
            <span class="number" style="margin-left: 180px;">0</span> </div>

    </div>

  </div>


  <div class="container" style="display: flex;">
    <div class="inline-containers" >
        <span class="text" >Reliquat : </span>
            <span class="number" style="margin-left: 180px;">1 000</span>

    </div>

    <div class="inline-container" style="line-height: 5px;" >
        <span class="text" > TOTAL TTC :</span>  <div class="line" style="margin-left: 130px;" >
            <span class="number" style="margin-left: 180px;">0</span> </div>

    </div>

  </div>



  <div class="container" style="display: flex;">
    <div class="inline-containers" >
        <span class="text" >CODE MECeF / DGI : </span>


    </div>

    <div class="inline" style="line-height: 2px;" >
        <span class="text" > 7NX5-G4AK-R6V2-5V7X-HGJ6-HTQH </span>

    </div>

  </div>


  <div class="container" style="display: flex; margin-top: 20px;">
    <div>
        <div class="inline-containers" >
            <span class="text" >NIM : </span>
                <span class="number" style="margin-left: 180px;">ED04000144</span>

        </div>
        <div class="inline-containers" >
            <span class="text" >Compteurs : </span>
                <span class="number" style="margin-left: 80px;">309 833 311 237 <span style="margin-left: 10px;">  FV</span></span>

        </div>
        <div class="inline-containers" >
            <span class="text" >Heure :</span>
                <span class="number" style="margin-left: 180px;">12/12/2022 14:54:47</span>

        </div>
    </div>

    <div class="inline-container" style="line-height: 5px;" >
        {{-- <span class="text" > TOTAL TTC :</span>  <div class="line" style="margin-left: 130px;" >
            <span class="number" style="margin-left: 180px;">0</span> </div> --}}
<img src="" alt="">
    </div>

  </div>


  <div style="text-align: center;">
   <p>
    LES ARTICLES VENDUS NE SONT NI REPRIS NI ECHANGES
   </p>
<p style="line-height: 1px;">
    Merci pour votre fidélité à bientôt;
</p>
  </div>



</body>
</html>

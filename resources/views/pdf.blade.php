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
                width: 40%;
              }

              td {
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
                width: 15%; /* Largeur de la barre */
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

                    </style>
<body>

    <header class="header forme">
        <div class="logo">
            {{-- <img src="{{asset('images/alarm.svg')}}" alt="" height="100px" class="me-5"> --}}
        </div>
              <div class="texte">
                <h1>
                    Martin pecheur Sarl
                   </h1>
                   <div>
                    <u>Capital Social</u> <b>1.000.000 FCFA </b>  IMPORT EXPORT COMMERCE GENERAL
                   </div>
                   <div class="ms-3">
                    <b><u>Compte Bancaire </u></b> : BIBE 91/7031880301/93 SGB 03153282010182
                   </div>
                   <div class="ms-5">
                   <b> RC</b>: RB Porto-Novo- 2007-B-467 <span class="ms-3"><b>IFU</b>:3201000073919</span>
                   </div>
              </div>

        </header>


        <hr class="hr">

        <div class="forme">

          <div><p>Ticket N° 24 474</p></div>
         <div class="ms-5"><p >Le 12/12/2022 à </p> </div>
         <div class="ms-5"><p>14:54:00</p></div>

        </div>

        <div class="forme">

            <p style="margin-right: 155px">
                CAISSE1SUP
            </p>

        <div >

               <p class="ms-4">
                <span>Caissier :</span> <span class="ms-4">1 ADJARA</span>
               </p>

        </div>
       </div>


    <div class="forme">

        <p style="margin-right: 190px">
           Client : CLIENT COMPTOIR
        </p>

          <div >

           <p class="ms-4">
            Ifu:
           </p>

           </div>


    </div>


    <div class="forme">

        <p style="margin-right: 370px;">
           DETAIL POISSON
        </p>


    </div>

    <div class="forme">
        <table>
            <thead>
             <td>Articles</td>
             <td>Qté</td>
             <td>Cond</td>
             <td>Prix U.</td>
             <td>Rem</td>
             <td>Montant</td>
              </thead>

           <tbody>
            <tr>
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

    <div class="forme totalHt">

           <span> Total HT (B) :</span>
            <div class="trait"> <span style="margin-left: 170px;">0</span> </div>


    </div>


    <div class="forme">
        <div class="d-flex totalHt" style="margin-left: 40px;" >

            <span>Remise : </span>
            <div class="remise"> <span style="margin-left: 150px;">0</span> </div>


        </div>

        <div class="d-flex" style="margin-left: 80px;" >

               <span class="me-3 fw-bold"> TVA </span> (
            <span class="ms-2">
                 18%
            </span>  ) <span class="me-3 ms-2"> : </span>
            <div class="tva"> <span style="margin-left: 165px;">0</span> </div>


        </div>

    </div>

    <div class="forme" style="margin-left: 330px;">
       <span>
        Total Exo. (A-EX) :
       </span>
             <div class="tva"> <span style="margin-left: 170px;">0</span> </div>

    </div>

    <div class="forme">
            <div class="d-flex" >
                <span >
                    Espece :
                </span>
                <span style="margin-left: 60px;">
                    1000
                </span>
            </div>

        <div class="d-flex mt-2" style="margin-left: 200px;">
            <span>
                AIB ( 0 %) :
            </span>
            <div class="tva"> <span style="margin-left: 170px;">0</span> </div>

        </div>


        </div>

</body>
</html>

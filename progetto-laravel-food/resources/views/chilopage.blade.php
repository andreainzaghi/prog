<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <title>Laravel</title>
  <style media="screen">
  .canvy{
    width: 300px;
    height:300px;
  }
  .containerpie{
    width: 350px;
    height:350px;
  }
  *{
    margin:0;
    padding:0,inherit;
    box-sizing: border-box;
  }
  body{
    font-size:20px;
    font-family: 'Montserrat', sans-serif;

  }

  header {
    height: 100px;
    background-color: #26b30e;
    width: 100%;
  }
  header img {
    width: 100px;
    position: relative;
    top: 40px;
    left: calc(50% - 50px);
  }
  .input-generalita{
    width:33%;
    height: calc( 100vh - 100px);
    padding:20px;
  }
  input ,select{
    width:350px;
    height:50px;
    font-size:20px;
    padding:10px;
    margin:10px;
    border: none;
    border: 1px solid black;
    border-radius: 5px;
    outline: none;
  }
   button{
    width:350px;
    height:50px;
    background-color: #26b30e;
    font-size:20px;
    padding:10px;
    margin:10px;
    border: none;
    border: 1px solid black;
    border-radius: 5px;
  }
  main{
    display: flex;
  }

  .diagrammi{
    display: flex;
  }
  .tot-chilopage{

    font-family: 'Montserrat', sans-serif;
  }
  .tot-chilopage p{
    padding:10px;
    text-align: right;
  }
  .secondsection{
    padding:20px;
  }

  /* sfondoinput */
  .sfondo1{
    background-image: url('../img/jos.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .sfondo2{
    background-image: url('../img/bianca.png');
      background-repeat: no-repeat;
      background-size: cover;
  }

  </style>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->

</head>
<body>
  <header>
    <img src="img/llogoo.png" alt="">
  </header>
  <main>
    <div class="input" id="app">
        <!-- input -->
        <div class="input-generalita">
          <div class="select">
            <select name="sexo"  v-model="Sesso">
              <option  value="">Bambino 1-5 anni</option>
              <option  value="Uomo">Uomo</option>
              <option   value="Donna">Donna</option>
            </select>
          </div>
          <div class="input-peso">
            <input type="text" placeholder="Peso in Kg"v-model="Peso">
          </div>
          <div class="input-altezza">
            <input type="text"placeholder="Altezza in cm"v-model="Altezza">
          </div>
          <div class="input-eta">
            <input type="text"placeholder="Eta'"v-model="Eta">
          </div>
          <select v-model="selected">
            <option>poca</option>
            <option>media</option>
            <option>alta</option>
          </select>
          <div class="button-1">
            <button on:click="Prova">
              calcola fabbisogno kcal
            </button>
          </div>
          <div class="button-2">
            <button on:click="Prova1">
              calcola fabbisogno kcal
            </button>
          </div>
        </div>
      </div>
      <!-- fine input -->
      <!-- inizio sezione dati -->
      <div class="secondsection">
        <div class="totkcal" >
          <div class="tot-chilopage">
            <p>BMI(Indice massa corporea):<span id="bmi"></span> %</p>
            <p>Il tuo peso ideale e': <span id="pesoIdeale"></span> kg </p>
            <p> secondo i dati che ci hai fornito ,ti consigliamo di <span id="pesodasistemare"></span> </p>

          </div>
        </div>
      <!-- diagrammi -->
      <div class="diagrammi">

        <div class="canvy">
          <canvas id="myChart" width="100px" height="100px"></canvas>
          <p id ="pesocheaumenta"></p>
          <span class="pesoraz"><span id ="pesorazionatoingiorni"></span>kg/mese</span>
        </div>
        <div class="containerpie">
          <canvas id="myChart1"></canvas>
          <!-- <p><span id="percCarb"></span> Kcal =  Carboidrati</p>
          <p><span id="percGrassi"></span> Kcal =  Grassi</p>
          <p><span id="percProte"></span> Kcal =  Proteine</p> -->
        </div>
      </div>
      <!-- diagrammi fine -->
    </div>
  </main>
  <script type="text/javascript">
  var app = new Vue({
    el: '#app',
    data: {

      Peso:null,
      Altezza:null,
      Eta:null,
      Sesso:null,
      Calorie:null,
      percCarb:null,
      percGrassi:null,
      percProte:null,
      selected: null,
      Caloriemeno:null,
      Calorieaumento:null,

      PesoIdeale:null,
      pesooo:null

      /* percCarb:(0.35*Calorie),
      percGrassi:(0.25*Calorie),
      percProte:(0.40*Calorie),
      i : 0*/
    },


    methods:{
      Prova:function(){


        if (this.Sesso == 'Uomo') {
          this.Calorie = (5 + (this.Peso * 10) + (this.Altezza * 6.25) - (this.Eta * 5));
          this.Calorie = this.Calorie.toFixed(2);
          var pesoIdeale = ((this.Altezza /100) * (this.Altezza/100)) * 22.1;
          document.getElementById('pesoIdeale').innerHTML=pesoIdeale;
        } else if (this.Sesso == 'Donna') {
          this.Calorie = (-161 + (this.Peso * 10) + (this.Altezza * 6.25) - (this.Eta * 5));

          this.Calorie = this.Calorie.toFixed(2);
            var pesoIdeale = ((this.Altezza /100) * (this.Altezza/100)) * 20.6;
              document.getElementById('pesoIdeale').innerHTML=pesoIdeale;
        } else {
          this.Calorie = 22.1 + (this.Peso  * 31.05 ) + (this.Altezza  * 1.16) ;

          this.Calorie = this.Calorie.toFixed(2);
            var pesoIdeale = ((this.Altezza /100) * (this.Altezza/100)) * 20.6;
              document.getElementById('pesoIdeale').innerHTML=pesoIdeale;
        }

        if (this.selected == 'poca') {
          this.Calorie = this.Calorie * 0.9  ;
          this.Calorie = this.Calorie.toFixed(2);
        } else if (this.selected == 'media') {
          this.Calorie = this.Calorie * 1 ;
          this.Calorie = this.Calorie.toFixed(2);
        }  else  {
          this.Calorie = this.Calorie * 1.1 ;
          this.Calorie = this.Calorie.toFixed(2);
        }


         var bmi = this.Peso / ((this.Altezza /100) * (this.Altezza/100));
       var bmi =   bmi.toFixed(2);
       document.getElementById('bmi').innerHTML=bmi;
        var pesodaaumentare = this.Peso - pesoIdeale;
        var pesooo2 = (pesoIdeale * 2);


        var pesooo = (pesodaaumentare + pesooo2)/2;








        var x = pesodaaumentare; x = Math.abs(x);
        var x  =  x.toFixed(2);



              if (pesoIdeale < this.Peso) {
              var perdere ='perdere';
              }else if(pesoIdeale == this.Peso){
                var perdere ='perdere';
              }else {
                var perdere ='aumentare';
              }


        if (x < 5) {
          document.getElementById('pesocheaumenta').innerHTML= 'Consigliamo di  ' + perdere + x + ' kg in tre mesi per non accellerare il tuo metabolismo';
          xy=3;
        } else if (x > 5 && x < 10) {
          document.getElementById('pesocheaumenta').innerHTML= 'Consigliamo di  ' + perdere + x + ' kg in sei mesi per non accellerare il tuo metabolismo';
          xy=6;
        } else if (x > 10 && x < 20) {
          document.getElementById('pesocheaumenta').innerHTML= 'Consigliamo di  ' + perdere + x + ' kg in 12 mesi per non accellerare il tuo metabolismo';
          xy=12;
        } else {
          document.getElementById('pesocheaumenta').innerHTML= 'Consigliamo di  ' + perdere + x + ' kg in 18 mesi per non accellerare il tuo metabolismo';
          xy=18;
        }

        var pesorazionatoingiorni = x/xy;
        var y = xy / 2;
        var pesorazionatoingiorni  =  pesorazionatoingiorni.toFixed(2);
        document.getElementById('pesorazionatoingiorni').innerHTML=pesorazionatoingiorni;
        var kcalingiorni = pesorazionatoingiorni * 250 ;
        this.Caloriemeno = this.Calorie - kcalingiorni;
        this.Calorieaumento = (this.Caloriemeno + (kcalingiorni * 2));


        if (pesoIdeale < this.Peso) {
          document.getElementById('pesodasistemare').innerHTML= 'perdere ' +  pesodaaumentare.toFixed(2)+ ' kg con un indice calorico pari a'+ this.Caloriemeno +' kcal per perdere'  +  pesodaaumentare.toFixed(2)+ ' kg in '+ xy + ' mesi';
          var percCarb = 0.35 * this.Caloriemeno;
          var percCarb =  percCarb.toFixed(2);

          var percGrassi = 0.25 * this.Caloriemeno;
          var percGrassi =  percGrassi.toFixed(2);

          var percProte = 0.4 * this.Caloriemeno;
          var percProte =  percProte.toFixed(2);


        }else if(pesoIdeale == this.Peso){
          document.getElementById('pesodasistemare').innerHTML= 'seguire una diete che continui con un apporto calorico e attivita fisica uguale a quella che stai gia attuando,ottimoquindi ti consigliamo di seguire una dieta con indice calorico pari a'+ this.Calorie ;
          var percCarb = 0.35 * this.Calorie;
          var percCarb =  percCarb.toFixed(2);

          var percGrassi = 0.25 * this.Calorie;
          var percGrassi =  percGrassi.toFixed(2);

          var percProte = 0.4 * this.Calorie;
          var percProte =  percProte.toFixed(2);

        }else {
          document.getElementById('pesodasistemare').innerHTML= 'aumentare  di ' + (-pesodaaumentare.toFixed(2))+ ' kg  con  un indice calorico pari a'+ this.Calorieaumento+' kcal per perdere'  +   (-pesodaaumentare.toFixed(2))+ ' kg in '+ xy + ' mesi' ;
          var percCarb = 0.35 * this.Calorieaumento;
          var percCarb =  percCarb.toFixed(2);

          var percGrassi = 0.25 * this.Calorieaumento;
          var percGrassi =  percGrassi.toFixed(2);

          var percProte = 0.4 * this.Calorieaumento;
          var percProte =  percProte.toFixed(2);

        }
        var pesoIdeale  = pesoIdeale .toFixed(2);






        // grafico mesi

        const d = new Date();

        const monthName = d.toLocaleString("default", {month: "long"});







        // canvas grafico
        var ctx = document.getElementById('myChart').getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: [monthName,y, xy ],
            datasets: [{
              label: 'Kg',
              data: [this.Peso,pesooo, pesoIdeale],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });

        //     var ctxx = document.getElementById('myChart1').getContext('2d');
        //
        //   var myChart = new Chart(ctxx, {
        //     const config = {
        //     type: 'doughnut',
        //     data: data,
        //   };
        //   const data = {
        //     labels: [
        //       'Red',
        //       'Blue',
        //       'Yellow'
        //     ],
        //     datasets: [{
        //       label: 'My First Dataset',
        //       data: [300, 50, 100],
        //       backgroundColor: [
        //         'rgb(255, 99, 132)',
        //         'rgb(54, 162, 235)',
        //         'rgb(255, 205, 86)'
        //       ],
        //       hoverOffset: 4
        //     }]
        //   }
        // })
      },
      Prova1:function(){


        if (this.Sesso == 'Uomo') {
          this.Calorie = (5 + (this.Peso * 10) + (this.Altezza * 6.25) - (this.Eta * 5));
          var pesoIdeale = ((this.Altezza /100) * (this.Altezza/100)) * 22.1;
        } else if (this.Sesso == 'Donna') {
          this.Calorie = (-161 + (this.Peso * 10) + (this.Altezza * 6.25) - (this.Eta * 5));
          var pesoIdeale = ((this.Altezza /100) * (this.Altezza/100)) * 20.6;
        } else {
          this.Calorie = 22.1 + (this.Peso  * 31.05 ) + (this.Altezza  * 1.16) ;
          var pesoIdeale = ((this.Altezza /100) * (this.Altezza/100)) * 20.6;
        }

        if (this.selected == 'poca') {
          this.Calorie = this.Calorie * 0.9  ;
          this.Calorie = this.Calorie.toFixed(2);
        } else if (this.selected == 'media') {
          this.Calorie = this.Calorie ;
          this.Calorie = this.Calorie.toFixed(2);
        }  else  {
          this.Calorie = this.Calorie * 1.1 ;
          this.Calorie = this.Calorie.toFixed(2);
        }


        if (pesoIdeale < this.Peso) {

          var percCarb = 0.35 * this.Caloriemeno;
          var percCarb =  percCarb.toFixed(2);

          var percGrassi = 0.25 * this.Caloriemeno;
          var percGrassi =  percGrassi.toFixed(2);

          var percProte = 0.4 * this.Caloriemeno;
          var percProte =  percProte.toFixed(2);


        }else if(pesoIdeale == this.Peso){

          var percCarb = 0.35 * this.Calorie;
          var percCarb =  percCarb.toFixed(2);

          var percGrassi = 0.25 * this.Calorie;
          var percGrassi =  percGrassi.toFixed(2);

          var percProte = 0.4 * this.Calorie;
          var percProte =  percProte.toFixed(2);

        }else {

          var percCarb = 0.35 * this.Calorieaumento;
          var percCarb =  percCarb.toFixed(2);

          var percGrassi = 0.25 * this.Calorieaumento;
          var percGrassi =  percGrassi.toFixed(2);

          var percProte = 0.4 * this.Calorieaumento;
          var percProte =  percProte.toFixed(2);

        }

        let myChart = document.getElementById('myChart1').getContext('2d');

        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';

        let massPopChart = new Chart(myChart1, {
          type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
          data:{
            labels:[' 40% carboidrati ' + percCarb +' Kcal', ' 25% grassi ' + percGrassi +' Kcal', ' 35% proteine ' + percProte +' Kcal'],
            datasets:[{
              label:'Population',
              data:[
                percCarb,
                percGrassi,
                percProte
              ],
              //backgroundColor:'green',
              backgroundColor:[
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)'
              ],
              borderWidth:1,
              borderColor:'#777',
              hoverBorderWidth:1,
              hoverBorderColor:'#000'
            }]
          },
          options:{
            title:{
              display:true,
              text:'',
              fontSize:25
            },
            legend:{
              display:true,
              position:'center',
              labels:{
                fontColor:'#000'
              }
            },
            layout:{
              padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
              }
            },
            tooltips:{
              enabled:true
            }
          }
        });

      }

      // outer grafico ciambella



      /*  getRandomInt:function (max){
      return Math.floor(Math.random() * max);
    },
    percentuale:function(){
    do {
    RProte =getRandomInt(this.percProte);
    RGrassi =getRandomInt(this.percGrassi);
    RCarb =getRandomInt(this.percCarb);
    this.i++;
  }
  while ((RProte+RGrassi+RCarb)==this.Calorie);
  if ((RProte+RGrassi+RCarb)==this.Calorie) {
  document.getElementById(randomPRG).innerHTML='RProte'+'RGrassi'+'RCarb';
  }
  }*/
  }
  })

  </script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="js/script.js"></script>
  <script src="js/script2.js"></script>
</body>
</html>

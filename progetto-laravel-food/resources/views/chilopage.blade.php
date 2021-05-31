@extends('layouts.main')




  @section('content')

    <div class="input-tot" id="app">
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
            <button v-on:click="Prova">
              calcola  kcal
            </button>
          </div>
         <div class="button-2">
            <button v-on:click="Prova1">
              calcola  kcal
            </button>
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
        </div>
      </div>
      <!-- diagrammi fine -->
    </div>
  </div>
    @endsection
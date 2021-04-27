@extends('layouts/contentLayoutMaster')

@section("title","Mapa de Aproveitamento")

@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/charts-sparkline.css')}}">
@endsection

@section("content")

<div class="section" id="materialize-sparkline">
   <div class="container">
      <section class="users-list-wrapper section">

                  <div class="card green darken-1">
                     <div class="card-content">
                         <p class="caption mb-0" style="color: white"><i class="material-icons left">account_circle</i>
                           <span>Mapa de Aproveitamento</span>
                         </p>
                     </div>
                 </div>

               <div class="card  ">        
                  <div class="card-content  ">
                  
                  <x-pesquisa-aluno />
                  </div><!-- contant de pequisa-->
               </div>


     <!--Pie & Doughnut Charts-->
   <div id="chartjs-pie-chart" class="card">
      <div class="card-content">
         <h4 class="card-title">Pie & Doughnut Charts</h4>
         <div class="row">
            <div class="col s12">
               <p class="mb-2">
                  Pie and doughnut charts are probably the most commonly used chart there are. They are divided into
                  segments, the arc of each segment shows the proportional value of each piece of data.
               </p>
               <div class="row">
                  <div class="col s12 m6 l6">
                     <div class="sample-chart-wrapper"><canvas id="pie-chart" height="400"></canvas></div>
                     <p class="header center">Pie Charts</p>
                  </div>
                  <div class="col s12 m6 l6">
                     <div class="sample-chart-wrapper"><canvas id="doughnut-chart" height="400"></canvas></div>
                     <p class="header center">Doughnut Charts</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

                <div class="col s12 m12 l6">
                  <div class="ct-chart card z-depth-2 border-radius-6">
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <h4 class="card-title">Pie Chart</h4>
                        </div>
                        <div class="col s12">
                          <div id="pie-chart-sample" class="center"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                   
         </section>
      </div>
   </div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('vendors/sparkline/jquery.sparkline.min.js')}}"></script>
@endsection


{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/charts-sparklines.js')}}"></script>
<script src="{{asset('js/scripts/charts-chartjs.js')}}"></script>
@endsection
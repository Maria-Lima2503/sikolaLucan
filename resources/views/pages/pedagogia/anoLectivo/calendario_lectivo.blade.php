@extends('layouts/contentLayoutMaster')

@section('title','Calendário Lectivo')  

@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/daygrid/daygrid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fullcalendar/timegrid/timegrid.min.css')}}">
@endsection
{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-calendar.css')}}">
@endsection

@section('content')
     
  <div class="section">
      
        <div class="col s12">
            <div class="container">
                <section class="users-list-wrapper section">
                   
                        <div id="app-calendar">
                            <div class="row">
                                <div class="col s12">
                                    <div class="card">
                                        <div class="card-title  ">
                                            <i class="material-icons dp60 left">today</i>
                                            <span>Calendário Do Ano Lectivo</span>
                                        </div>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                              Basic Calendar
                                            </h4>
                                            <div id="basic-calendar"></div>
                                          </div>
                                      
                                    </div>
                               </div>
                            </div>
                        </div>
                    
                </section>
            </div>
        </div>

    </div>
@endsection
{{--vendor scripts  --}}
@section('vendor-script')
<script src="{{asset('vendors/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/daygrid/daygrid.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/timegrid/timegrid.min.js')}}"></script>
<script src="{{asset('vendors/fullcalendar/interaction/interaction.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/app-calendar.js')}}"></script>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                  <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      
                     <a href="{{URL('/table__course__g__students/backup')}}" title="EditData"><button class="btn btn-primary "><i class="fa fa-arrow-left" aria-hidden="true"></i>General CS student course table </button></a>
                     <a href="{{URL('/table__course__s__students/backup')}}" title="EditData"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>Direct CS  student course table</button></a>
                     
                     
                      <br><br>
                     
                     <a href="{{URL('/table__course__1s__students/backup')}} " title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>Level 1S </button></a>
                     <a href=" {{route('atts.att.backup')}}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>Level 2S </button></a>
                     <a href=" {{URL('/table__course__3s__students/backup')}}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>Level 3S </button></a>
                     <a href="{{URL('/table__course__3s__students/backup')}}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>Level 4S </button></a>
@endsection

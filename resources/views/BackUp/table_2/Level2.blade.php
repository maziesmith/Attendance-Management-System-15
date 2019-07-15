


<h3> Attendance student for course in {{$leve->level}} </h3>
         
 
<table class="table">
<tr>                        
<th>Course Code :{{$data->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data->name}}</th>

</tr>  </table>

<table  style="border: 1px solid">

        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
     
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
                           @foreach($atts as $att)
                             @if( $att->nooflectures>0)
  
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage }}%</td>           
    </tr>
             @endif
           @endforeach
    </tbody> </table> <br><br><br>    
    
    

<table class="table">


<tr>                        
<th>Course Code :{{$data1->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data1->name}}</th>

</tr>  </table>

<table  style="border: 1px solid">

        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
     
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
                                     @foreach($atts as $att)
   @if( $att->nooflectures1>0)
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage1 }}%</td>           
    </tr>
            @endif
           @endforeach
    </tbody> </table> <br><br><br>        
    
    
                <table class="table">

<tr>                        
<th>Course Code :{{$data2->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data2->name}}</th>

</tr>  </table>

<table  style="border: 1px solid">
        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
@foreach($atts as $att)
  @if( $att->nooflectures2>0)
  
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage2 }}%</td>           
    </tr>
          @endif
           @endforeach
    </tbody> </table> <br><br><br>   

    
    
                             <table class="table">

<tr>                        
<th>Course Code :{{$data3->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data3->name}}</th>

</tr>  </table>
<table  style="border: 1px solid">

        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
     
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
                     </tr>
    <tbody>
@foreach($atts as $att)
   @if( $att->nooflectures3>0)
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage3 }}%</td>           
    </tr>
              @endif
           @endforeach
    </tbody> </table> <br><br><br>  


                               <table class="table">

<tr>                        
<th>Course Code :{{$data4->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data4->name}}</th>

</tr>  </table>
<table  style="border: 1px solid">

        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
     
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
                     </tr>
    <tbody>
@foreach($atts as $att)
  @if( $att->nooflectures4>0)
  
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage4 }}%</td>           
    </tr>
             @endif
           @endforeach
    </tbody> </table> <br><br><br> 
    
    
                              <table class="table">

<tr>                        
<th>Course Code :{{$data5->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data5->name}}</th>

</tr>  </table>
<table  style="border: 1px solid">

        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
     
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
                     </tr>
    <tbody>
@foreach($atts as $att)
   @if( $att->nooflectures5>0)
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage5 }}%</td>           
    </tr>
             @endif
           @endforeach
    </tbody> </table> <br><br><br>


                            <table class="table">

<tr>                        
<th>Course Code :{{$data6->code}} </th><th></th><th></th><th></th><th></th> 
<th>Course Name :{{$data6->name}}</th>

</tr>  </table>
<table  style="border: 1px solid">

        <tr>                    
            <th style="border: 1px solid" >Registration   No</th>
            <th style="border: 1px solid">Name</th>
     
            <th style="border: 1px solid">Percentage</th>
        </tr>
    <tbody>
                     </tr>
    <tbody>
@foreach($atts as $att)
  @if( $att->nooflectures6>0)
    <tr>
                <td style="border: 1px solid">{{ $att->Reg_No }}</td>
                <td style="border: 1px solid">{{ $att->name }}</td>
           
                <td style="border: 1px solid">{{ $att->precentage6 }}%</td>           
    </tr>
            @endif
           @endforeach
    </tbody> </table> <br><br><br>   
    
    
    
                        
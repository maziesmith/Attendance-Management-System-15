
<h3 align="center"><u> ATTENDANCE ({{$detail->Semester}})  ECE – {{$detail->ECE}} (until {{$detail->AttendanceDate}})</u></h3>


@if (count( $summary1s) > 0) 
<h4>{{$level1->level}}  </h4>
         
 <table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_1s->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data1s_1->code}}</th>
                            @endif
                             @if($atts_1s->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data1s_2->code}}</th>
                            @endif
                             @if($atts_1s->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data1s_3->code}}</th> 
                            @endif
                             @if($atts_1s->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data1s_4->code}}</th>
                            @endif
                             @if($atts_1s->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data1s_5->code}}</th>
                            @endif
                             @if($atts_1s->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data1s_6->code}}</th>
                            @endif
                             @if($atts_1s->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data1s_7->code}}</th> 
                            @endif
			     @if($atts_1s->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data1s_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary1s as $sum)
                                                      <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_1s->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_1s->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_1s->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_1s->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_1s->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_1s->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_1s->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_1s->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                      
                           @endforeach
                    </tbody> </table> <br><br> 
                    @endif
                    


@if (count( $summary2s) > 0)                     
<h4>{{$level2->level}}  </h4>
         
 <table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_2s->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data2s_1->code}}</th>
                            @endif
                             @if($atts_2s->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data2s_2->code}}</th>
                            @endif
                             @if($atts_2s->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data2s_3->code}}</th> 
                            @endif
                             @if($atts_2s->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data2s_4->code}}</th>
                            @endif
                             @if($atts_2s->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data2s_5->code}}</th>
                            @endif
                             @if($atts_2s->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data2s_6->code}}</th>
                            @endif
                             @if($atts_2s->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data2s_7->code}}</th> 
                            @endif
			     @if($atts_2s->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data2s_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary2s as $sum)
                                                                          <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_2s->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_2s->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_2s->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_2s->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_2s->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_2s->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_2s->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_2s->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                      
                           @endforeach
                    </tbody> </table> <br><br>  
                    @endif
       
                    
@if (count( $summary3s) > 0) 
<h4>{{$level3->level}}  </h4>
         
 <table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_3s->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data3s_1->code}}</th>
                            @endif
                             @if($atts_3s->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data3s_2->code}}</th>
                            @endif
                             @if($atts_3s->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data3s_3->code}}</th> 
                            @endif
                             @if($atts_3s->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data3s_4->code}}</th>
                            @endif
                             @if($atts_3s->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data3s_5->code}}</th>
                            @endif
                             @if($atts_3s->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data3s_6->code}}</th>
                            @endif
                             @if($atts_3s->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data3s_7->code}}</th> 
                            @endif
			     @if($atts_3s->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data3s_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary3s as $sum)
                                                                               <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_3s->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_3s->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_3s->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_3s->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_3s->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_3s->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_3s->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_3s->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                      
                           @endforeach
                    </tbody> </table> <br><br>
                    @endif
                    
                    
   @if (count( $summary4s) > 0)                  
<h4>{{$level4->level}}  </h4>
         
 <table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_4s->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data4s_1->code}}</th>
                            @endif
                             @if($atts_4s->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data4s_2->code}}</th>
                            @endif
                             @if($atts_4s->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data4s_3->code}}</th> 
                            @endif
                             @if($atts_4s->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data4s_4->code}}</th>
                            @endif
                             @if($atts_4s->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data4s_5->code}}</th>
                            @endif
                             @if($atts_4s->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data4s_6->code}}</th>
                            @endif
                             @if($atts_4s->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data4s_7->code}}</th> 
                            @endif
			     @if($atts_4s->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data4s_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary4s as $sum)
                                                                                <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_4s->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_4s->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_4s->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_4s->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_4s->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_4s->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_4s->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_4s->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                         
                      
                           @endforeach
                    </tbody> </table> <br><br>
                    @endif
                    

        @if (count( $summary1g) > 0)            
<h4>{{$level5->level}}  </h4>
         
 <table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_1g->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data1g_1->code}}</th>
                            @endif
                             @if($atts_1g->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data1g_2->code}}</th>
                            @endif
                             @if($atts_1g->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data1g_3->code}}</th> 
                            @endif
                             @if($atts_1g->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data1g_4->code}}</th>
                            @endif
                             @if($atts_1g->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data1g_5->code}}</th>
                            @endif
                             @if($atts_1g->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data1g_6->code}}</th>
                            @endif
                             @if($atts_1g->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data1g_7->code}}</th> 
                            @endif
			     @if($atts_1g->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data1g_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary1g as $sum)
                                                                             <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_1g->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_1g->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_1g->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_1s->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_1g->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_1g->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_1g->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_1g->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                         
                      
                           @endforeach
                    </tbody> </table> <br><br>
                    @endif
                    
                    
                        @if (count( $summary2g) > 0)            
<h4>{{$level6->level}}  </h4>
         
 <table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_2g->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data2g_1->code}}</th>
                            @endif
                             @if($atts_2g->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data2g_2->code}}</th>
                            @endif
                             @if($atts_2g->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data2g_3->code}}</th> 
                            @endif
                             @if($atts_2g->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data2g_4->code}}</th>
                            @endif
                             @if($atts_2g->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data2g_5->code}}</th>
                            @endif
                             @if($atts_2g->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data2g_6->code}}</th>
                            @endif
                             @if($atts_2g->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data2g_7->code}}</th> 
                            @endif
			     @if($atts_2g->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data2g_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary2g as $sum)
                                                                          <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_2g->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_2g->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_2g->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_2g->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_2g->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_2g->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_2g->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_2g->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                      
                           @endforeach
                    </tbody> </table> <br><br>
                    @endif
                    
       
                    
       @if (count( $summary3g) > 0)            
<h4>{{$level7->level}}  </h4>
<table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_3g->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data3g_1->code}}</th>
                            @endif
                             @if($atts_3g->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data3g_2->code}}</th>
                            @endif
                             @if($atts_3g->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data3g_3->code}}</th> 
                            @endif
                             @if($atts_3g->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data3g_4->code}}</th>
                            @endif
                             @if($atts_3g->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data3g_5->code}}</th>
                            @endif
                             @if($atts_3g->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data3g_6->code}}</th>
                            @endif
                             @if($atts_3g->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data3g_7->code}}</th> 
                            @endif
			     @if($atts_3g->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data3g_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary3g as $sum)
                                                                         <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_3g->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_3g->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_3g->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_3g->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_3g->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_3g->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_3g->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_3g->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                                                    @endforeach
                    </tbody> </table> <br><br>
                    @endif
                          
                    
               
       @if (count( $summary3m) > 0)            
<h4>{{$level8->level}}  </h4>
<table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_3m->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data3m_1->code}}</th>
                            @endif
                             @if($atts_3m->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data3m_2->code}}</th>
                            @endif
                             @if($atts_3m->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data3m_3->code}}</th> 
                            @endif
                             @if($atts_3m->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data3m_4->code}}</th>
                            @endif
                             @if($atts_3m->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data3m_5->code}}</th>
                            @endif
                             @if($atts_3m->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data3m_6->code}}</th>
                            @endif
                             @if($atts_3m->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data3m_7->code}}</th> 
                            @endif
			     @if($atts_3m->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data3m_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary3m as $sum)
                                                                           <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_3m->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_3m->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_3m->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_3m->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_3m->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_3m->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_3m->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_3m->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                           @endforeach
                    </tbody> </table> <br><br>
                    @endif
                    
               
       @if (count( $summary4m) > 0)            
<h4>{{$level9->level}}  </h4>
<table  style="border: 1px solid ;width:100%;border-collapse: collapse">
         <tr>
                     <th style="border: 1px solid " >Registration   No</th>
                            <th style="border: 1px solid ">Name</th>
                            @if($atts_4m->nooflectures >0)  
                            <th style="border: 1px solid ">{{$data4m_1->code}}</th>
                            @endif
                             @if($atts_4m->nooflectures1 >0)  
                            <th style="border: 1px solid">{{$data4m_2->code}}</th>
                            @endif
                             @if($atts_4m->nooflectures2 >0)  
                            <th style="border: 1px solid ">{{$data4m_3->code}}</th> 
                            @endif
                             @if($atts_4m->nooflectures3>0)  
                            <th style="border: 1px solid">{{$data4m_4->code}}</th>
                            @endif
                             @if($atts_4m->nooflectures4 >0)  
                            <th style="border: 1px solid ">{{$data4m_5->code}}</th>
                            @endif
                             @if($atts_4m->nooflectures5 >0)  
                            <th style="border: 1px solid ">{{$data4m_6->code}}</th>
                            @endif
                             @if($atts_4m->nooflectures6 >0)  
                            <th style="border: 1px solid ">{{$data4m_7->code}}</th> 
                            @endif
			     @if($atts_4m->nooflectures7 >0)  
                            <th style="border: 1px solid ">{{$data4m_8->code}}</th>
                            @endif

                        </tr>                   
                        <tbody>
                                           @foreach($summary4m as $sum)
                                                                                 <tr>
                                <td style="border: 1px solid ">{{ $sum->Reg_No }}</td>
                                <td style="border: 1px solid ">{{ $sum->name }}</td>
                                
                                @if($atts_4m->nooflectures >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage }}%</td>
                                   @endif
                                 
                                @if($atts_4m->nooflectures1 >0)  
                                <td style="border: 1px solid ">{{ $sum->precentage1 }}%</td
                                   @endif
                                 
                                  @if($atts_4m->nooflectures2 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage2 }}%</td>
                                
                                   @endif
                                 
                                  @if($atts_4m->nooflectures3 >0)
                                <td style="border: 1px solid ">{{ $sum->precentage3 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_4m->nooflectures4 >0)                             
                                <td style="border: 1px solid ">{{ $sum->precentage4 }}%</td>                               
                                   @endif
                                 
                                 
                                  @if($atts_4m->nooflectures5 >0)                            
                                <td style="border: 1px solid ">{{ $sum->precentage5 }}%</td>                              
                                   @endif
                                 
                                  @if($atts_4m->nooflectures6 >0)                      
                                <td style="border: 1px solid ">{{ $sum->precentage6 }}%</td>                            
                                   @endif
                                 
                                  @if($atts_4m->nooflectures7 >0)                   
                                <td style="border: 1px solid ">{{ $sum->precentage7 }}%</td>                             
                                   @endif
                                
                    </tr>
                         
                           @endforeach
                    </tbody> </table> <br>
                    @endif
                                       

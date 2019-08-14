<?php

Route::group(['middleware' => ['web']], function() {
     
 //all route in log in part 
Auth::routes();  

//--------------------------ROUTE FOR SINGLE PAGE----------------------------------   

// welcome page root    
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'AuthenticateMiddleware'],function(){

// after the acdamic year update root;
Route::get('/update', function () {
    return view('Reset_Table/Update_New_Year');
});


//after the semester update root;
Route::get('/updateS', function () {
    return view('Reset_Table/SemesterUpdateFirstPage');
});


//--------------------------ROUTE FOR UPDATE THE LEVEL----------------------------------
Route::group(
    [
        'prefix' => 'update level',
    ], function () {
           
        Route::get('/', 'AttsController@updateLevel')
             ->name('update.level');    
    });


//--------------------------ROUTE FOR USER_STUDENT----------------------------------
 
//View part of studtent user to their attendance 
Route::group(
    [
        'prefix' => 'student',
    ], function () {
           
        Route::get('/', 'StudentController@vview')
             ->name('student.student.all');    
    });
    
    
//View part of studtent user to their profile    
    Route::group(
    [
        'prefix' => 'home',
    ], function () {
           
        Route::get('/', 'HomeController@index')
             ->name('home.home');   
    });
   
   
    
  //--------------------------ROUTE FOR USER_LECTURER----------------------------------  
    Route::get('/LecturerViewS','LecturerViewController@index1');
        Route::get('/LecturerViewG','LecturerViewController@index2');


        Route::get('/HeadOfTheDepartmentS','HeadOfTheDepartmentViewController@index1');
        Route::get('/HeadOfTheDepartmentG','HeadOfTheDepartmentViewController@index2');


//--------------------------ROUTE FOR TABLE LECTURE------------------------------------

Route::resource('table_-lecture', 'Table_LectureController')->middleware('AuthenticateMiddleware');



//--------------------------ROUTE FOR TABLE 2 ATENDANCE MARK--------------------------------

Route::group(
[
    'prefix' => 'table_2_subject_mark',
], function () {
    
        Route::get('/table_2_subject__mark/{tableCourseSStudents}', 'AttsController@attendance_mark')
         ->name('2s_mark2.2s_mark2.index')
         ->where('id', '[0-9]+');   
   
       //route for changing hours   
          Route::post('/store/{tableCourseSStudents}', 'AttsController@store')
         ->name('hours.index')
         ->where('id', '[0-9]+');   
   
        //route for marking attendance  subject 1
         Route::get('/{att}/edit','AttsController@edit')
         ->name('atts.att.edit')
         ->where('id', '[0-9]+');
         //route for marking attendance  subject 2  
          Route::get('/{att}/edit1s','AttsController@edit1s')
         ->name('atts.att.edit1s')
         ->where('id', '[0-9]+');
        //route for marking attendance  subject 3
          Route::get('/{att}/edit2s','AttsController@edit2s')
         ->name('atts.att.edit2s')
         ->where('id', '[0-9]+');
         //route for marking attendance  subject 4
          Route::get('/{att}/edit3s','AttsController@edit3s')
         ->name('atts.att.edit3s')
         ->where('id', '[0-9]+');
         //route for marking attendance  subject  5 
          Route::get('/{att}/edit4s','AttsController@edit4s')
         ->name('atts.att.edit4s')
         ->where('id', '[0-9]+');
         //route for marking attendance  subject  6
         Route::get('/{att}/edit5s','AttsController@edit5s')
         ->name('atts.att.edit5s')
         ->where('id', '[0-9]+');
         //route for marking attendance  subject 7
          Route::get('/{att}/edit6s','AttsController@edit6s')
         ->name('atts.att.edit6s')
         ->where('id', '[0-9]+');
         //route for marking attendance  subject  8
          Route::get('/{att}/edit7s','AttsController@edit7s')
         ->name('atts.att.edit7s')
         ->where('id', '[0-9]+');
  
});

Route::group(
    [         
       'prefix' => 'table_3_subject',
   ], function () {
   
       
       
       //go to table (also use in user-lecture view)
       Route::get('table_3_subject/{tableCourseSStudents}', 'Atts3smController@view')
            ->name('3s_sub1.3s_sub1.index_3S_sub1')
            ->where('id', '[0-9]+');
    
        
       //get summary for Level
          Route::get('/backup1', 'Atts3smController@Subject_Level')
            ->name('att3s.att3.summary'); 
          
                  //route for reset the  attendance
           Route::get('/reset/{tableCourseSStudents}', 'Atts3smController@reset')
            ->name('3s_sub1_reset.3s_sub1_reset.reset1');  
       
          
             Route::get('/resetLevel', 'Atts3smController@reset1')
            ->name('3s_sub1_reset1.3s_sub1_reset1.resetLevel'); 
             
               Route::get('/backup', 'Atts3smController@backup')
         ->name('atts.att3S.backup');
         
        
        
   });

   
   
     Route::group(
    [
        'prefix' => 'table_3_subject_mark',
    ], function () {
        
            Route::get('/table_3_subject__mark/{tableCourseSStudents}', 'Atts3smController@attendance_mark')
             ->name('3s_mark2.3s_mark2.index')
             ->where('id', '[0-9]+');   
       
           //route for changing hours   
              Route::post('/store/{tableCourseSStudents}', 'Atts3smController@store')
             ->name('hours1.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject 1
             Route::get('/{att}/edit','Atts3smController@edit')
             ->name('atts.att3.edit')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 2  
              Route::get('/{att}/edit1s','Atts3smController@edit1s')
             ->name('atts.att3.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2s','Atts3smController@edit2s')
             ->name('atts.att3.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit3s','Atts3smController@edit3s')
             ->name('atts.att3.edit3s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  5 
              Route::get('/{att}/edit4s','Atts3smController@edit4s')
             ->name('atts.att3.edit4s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  6
             Route::get('/{att}/edit5s','Atts3smController@edit5s')
             ->name('atts.att3.edit5s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 7
              Route::get('/{att}/edit6s','Atts3smController@edit6s')
             ->name('atts.att3.edit6s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  8
              Route::get('/{att}/edit7s','Atts3smController@edit7s')
             ->name('atts.att3.edit7s')
             ->where('id', '[0-9]+');
      
    });
    
    
    //rasika 1s

Route::group(
    [         
       'prefix' => 'table_1_subject',
   ], function () {
   
       
       
       //go to table (also use in user-lecture view)
       Route::get('table_1_subject/{tableCourseSStudents}', 'Atts1smController@view')
            ->name('1s_sub1.1s_sub1.index_1S_sub1')
            ->where('id', '[0-9]+');
    
        
       //get summary for Level
          Route::get('/', 'Atts1smController@Subject_Level')
            ->name('atts.att_1.backup'); 
          
                  //route for reset the  attendance
           Route::get('/reset/{tableCourseSStudents}', 'Atts1smController@reset')
            ->name('1s_sub1_reset.1s_sub1_reset.reset1');  
           
         
           Route::get('/resetLevel', 'Atts1SmController@reset1')
            ->name('1s_sub1_reset1.1s_sub1_reset1.resetLevel');   
           
               Route::get('/backup', 'Atts1smController@backup')
         ->name('atts.att1S.backup');
         
        
   });
   
      
Route::group(
    [
        'prefix' => 'table_1_subject_mark',
    ], function () {
        
            Route::get('/table_1_subject__mark/{tableCourseSStudents}', 'Atts1smController@attendance_mark')
             ->name('1s_mark1.1s_mark1.index')
             ->where('id', '[0-9]+');   
       
           //route for changing hours   
              Route::post('/store/{tableCourseSStudents}', 'Atts1smController@store')
             ->name('hour4.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject 1
             Route::get('/{att}/edit','Atts1smController@edit')
             ->name('atts.att1.edit')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 2  
              Route::get('/{att}/edit1s','Atts1smController@edit1s')
             ->name('atts.att1.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2s','Atts1smController@edit2s')
             ->name('atts.att1.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit3s','Atts1smController@edit3s')
             ->name('atts.att1.edit3s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  5 
              Route::get('/{att}/edit4s','Atts1smController@edit4s')
             ->name('atts.att1.edit4s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  6
             Route::get('/{att}/edit5s','Atts1smController@edit5s')
             ->name('atts.att1.edit5s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 7
              Route::get('/{att}/edit6s','Atts1smController@edit6s')
             ->name('atts.att1.edit6s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  8
              Route::get('/{att}/edit7s','Atts1smController@edit7s')
             ->name('atts.att1.edit7s')
             ->where('id', '[0-9]+');
      
    });
  
    Route::group(
    [
        'prefix' => 'table_5_subject_mark',
    ], function () {
        
            Route::get('/table_5_subject__mark/{tableCourseGStudents}', 'Atts1gsController@attendance_mark')
             ->name('1g_mark1.1g_mark1.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject  5 
              Route::get('/{att}/edits','Atts1gsController@edit1')
             ->name('attgs.att1.edit');
              
             Route::get('/{att}/edit1','Atts1gsController@edit2')
             ->name('attgs.att1.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2','Atts1gsController@edit3')
             ->name('attgs.att1.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit3','Atts1gsController@edit4')
             ->name('attgs.att1.edit3s')
             ->where('id', '[0-9]+');
         
                  
               Route::get('/{att}/edit4','Atts1gsController@edit5')
             ->name('edit4s')
             ->where('id', '[0-9]+');
               
               Route::get('/{att}/edit5','Atts1gsController@edit6')
             ->name('edit5s')
             ->where('id', '[0-9]+');
              
               
          Route::post('/store/{tableCourseSStudents}', 'Atts1gsController@store1')
         ->name('hourg.index')
         ->where('id', '[0-9]+');
          
            //go to table (also use in user-lecture view)
       Route::get('table_1_subject/{tableCourseSStudents}', 'Atts1gsController@view')
            ->name('1s_sub1.1s_sub1.index_1G_sub1')
            ->where('id', '[0-9]+');
       
        Route::get('table_2_subject/{tableCourseSStudents}', 'Atts2gsController@view')
            ->name('1s_sub1.1s_sub1.index_2G_sub1')
            ->where('id', '[0-9]+');
        
         Route::get('table_3_subject/{tableCourseSStudents}', 'Atts3gsController@view')
            ->name('1s_sub1.1s_sub1.index_3G_sub1')
            ->where('id', '[0-9]+');
         
          Route::get('table_4_subject/{tableCourseSStudents}', 'Atts3msController@view')
            ->name('1s_sub1.1s_sub1.index_3M_sub1')
            ->where('id', '[0-9]+');
          
           Route::get('table_5_subject/{tableCourseSStudents}', 'Atts4msController@view')
            ->name('1s_sub1.1s_sub1.index_4M_sub1')
            ->where('id', '[0-9]+');
           
              Route::get('/backup1', 'Atts1gsController@Subject_Level')
            ->name('atts1g.backup'); 
    
                 Route::get('/backup2', 'Atts2gsController@Subject_Level')
            ->name('atts2g.backup'); 
    
                    Route::get('/backup3', 'Atts3gsController@Subject_Level')
            ->name('atts3g.backup'); 
    
                       Route::get('/backup4', 'Atts3msController@Subject_Level')
            ->name('atts3m.backup'); 
    
                          Route::get('/backup5', 'Atts4msController@Subject_Level')
            ->name('atts4m.backup'); 
    
              Route::get('/backup6', 'Atts1gsController@backup')
         ->name('finalBackup1');
         
                Route::get('/backup7', 'Atts2gsController@backup')
         ->name('finalBackup2');
         
                  Route::get('/backup8', 'Atts3gsController@backup')
         ->name('finalBackup3');
         
                    Route::get('/backup9', 'Atts3msController@backup')
         ->name('finalBackup4');
         
                      Route::get('/backup11', 'Atts4msController@backup')
         ->name('finalBackup5');
                      
                         Route::get('/resetLevel1', 'Atts1gsController@reset1')
            ->name('reset1'); 
                            
                         Route::get('/resetLevel2', 'Atts2gsController@reset1')
            ->name('reset2'); 
                         
                            Route::get('/resetLevel3', 'Atts3gsController@reset1')
            ->name('reset3'); 
                            
                               Route::get('/resetLevel4', 'Atts3msController@reset1')
            ->name('reset4'); 
                               
                                  Route::get('/resetLevel5', 'Atts4msController@reset1')
            ->name('reset5'); 
                         
         
            
                          
    }); 
    
    
     Route::group(
    [
        'prefix' => 'table_6_subject_mark',
    ], function () {
        
            Route::get('/table_6_subject__mark/{tableCourseGStudents}', 'Atts2gsController@attendance_mark')
             ->name('2g_mark1.2g_mark1.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject  5 
              Route::get('/{att}/edits','Atts2gsController@edit1')
             ->name('att2gs.att1.edit');
              
             Route::get('/{att}/edit1','Atts2gsController@edit2')
             ->name('att2gs.att1.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2','Atts2gsController@edit3')
             ->name('att2gs.att1.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit3','Atts2gsController@edit4')
             ->name('att2gs.att1.edit3s')
             ->where('id', '[0-9]+');
              
              Route::get('/{att}/edit4','Atts2gsController@edit5')
             ->name('att2gs.att1.edit4s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit5','Atts2gsController@edit6')
             ->name('att2gs.att1.edit5s')
             ->where('id', '[0-9]+');
             
          Route::post('/store/{tableCourseSStudents}', 'Atts2gsController@store1')
         ->name('hour2g.index')
         ->where('id', '[0-9]+');
   
    
           });  
           
       Route::group(
    [
        'prefix' => 'table_7_subject_mark',
    ], function () {
        
            Route::get('/table_7_subject__mark/{tableCourseGStudents}', 'Atts3gsController@attendance_mark')
             ->name('3g_mark1.3g_mark1.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject  5 
              Route::get('/{att}/edits','Atts3gsController@edit1')
             ->name('att3gs.att1.edit');
              
             Route::get('/{att}/edit1','Atts3gsController@edit2')
             ->name('att3gs.att1.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2','Atts3gsController@edit3')
             ->name('att3gs.att1.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit3','Atts3gsController@edit4')
             ->name('att3gs.att1.edit3s')
             ->where('id', '[0-9]+');
             
                Route::get('/{att}/edit4','Atts3gsController@edit5')
             ->name('att3gs.att1.edit4s')
             ->where('id', '[0-9]+');
               
               Route::get('/{att}/edit5','Atts3gsController@edit6')
             ->name('att3gs.att1.edit5s')
             ->where('id', '[0-9]+');
             
               Route::get('/{att}/edit6','Atts3gsController@edit7')
             ->name('att3gs.att1.edit6s')
             ->where('id', '[0-9]+');
             
              
          Route::post('/store/{tableCourseSStudents}', 'Atts3gsController@store1')
         ->name('hour3g.index')
         ->where('id', '[0-9]+');
   
    
           });  
           
            Route::group(
    [
        'prefix' => 'table_8_subject_mark',
    ], function () {
        
            Route::get('/table_8_subject__mark/{tableCourseGStudents}', 'Atts3msController@attendance_mark')
             ->name('3m_mark1.3m_mark1.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject  5 
              Route::get('/{att}/edits','Atts3msController@edit1')
             ->name('att3ms.att1.edit');
              
             Route::get('/{att}/edit1','Atts3msController@edit2')
             ->name('att3ms.att1.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2','Atts3msController@edit3')
             ->name('att3ms.att1.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              
               Route::get('/{att}/edit3','Atts3msController@edit4')
             ->name('att3ms.att1.edit3s')
             ->where('id', '[0-9]+');
              
              
              Route::get('/{att}/edit4','Atts3msController@edit5')
             ->name('att3ms.att1.edit4s')
             ->where('id', '[0-9]+');
              
               
                
                  Route::get('/{att}/edit5','Atts3msController@edit6')
             ->name('att3ms.att1.edit5s')
             ->where('id', '[0-9]+');
                  
                    Route::get('/{att}/edit6','Atts3msController@edit7')
             ->name('att3ms.att1.edit6s')
             ->where('id', '[0-9]+');
             
          Route::post('/store/{tableCourseSStudents}', 'Atts3msController@store1')
         ->name('hour3m.index')
         ->where('id', '[0-9]+');
   
    
           });  
           
            Route::group(
    [
        'prefix' => 'table_9_subject_mark',
    ], function () {
        
            Route::get('/table_9_subject__mark/{tableCourseGStudents}', 'Atts4msController@attendance_mark')
             ->name('4m_mark1.4m_mark1.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject  5 
              Route::get('/{att}/edits','Atts4msController@edit1')
             ->name('att4ms.att1.edit');
              
             Route::get('/{att}/edit1','Atts4msController@edit2')
             ->name('att4ms.att1.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att}/edit2','Atts4msController@edit3')
             ->name('att4ms.att1.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att}/edit3','Atts4msController@edit4')
             ->name('att4ms.att1.edit3s')
             ->where('id', '[0-9]+');
              
              
                Route::get('/{att}/edit4','Atts4msController@edit5')
             ->name('att4ms.att1.edit4s')
             ->where('id', '[0-9]+');
                
                  Route::get('/{att}/edit5','Atts4msController@edit6')
             ->name('att4ms.att1.edit5s')
             ->where('id', '[0-9]+');
                  
                    Route::get('/{att}/edit6','Atts4msController@edit7')
             ->name('att4ms.att1.edit6s')
             ->where('id', '[0-9]+');
                    
                       Route::get('/{att}/edit7','Atts4msController@edit8')
             ->name('att4ms.att1.edit7s')
             ->where('id', '[0-9]+');
             
          Route::post('/store/{tableCourseSStudents}', 'Atts4msController@store1')
         ->name('hour4m.index')
         ->where('id', '[0-9]+');
   
    
           });  
          
    Route::group(
    [
        'prefix' => 'table_4_subject_mark',
    ], function () {
        
            Route::get('/table_4_subject__mark/{tableCourse4SStudents}', 'Atts4SmController@attendance_mark')
             ->name('4s_mark4.4s_mark4.index')
             ->where('id', '[0-9]+');   
       
           //route for changing hours   
              Route::post('/store/{tableCourse4SStudents}', 'Atts4SmController@store')
             ->name('hours4s.index')
             ->where('id', '[0-9]+');   
       
            //route for marking attendance  subject 1
             Route::get('/{att4s}/edit','Atts4SmController@edit')
             ->name('atts_4s.att4s.edit')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 2  
              Route::get('/{att4s}/edit1s','Atts4SmController@edit1s')
             ->name('atts_4s.att4s.edit1s')
             ->where('id', '[0-9]+');
            //route for marking attendance  subject 3
              Route::get('/{att4s}/edit2s','Atts4SmController@edit2s')
             ->name('atts_4s.att4s.edit2s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 4
              Route::get('/{att4s}/edit3s','Atts4SmController@edit3s')
             ->name('atts_4s.att4s.edit3s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  5 
              Route::get('/{att4s}/edit4s','Atts4SmController@edit4s')
             ->name('atts_4s.att4s.edit4s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  6
             Route::get('/{att4s}/edit5s','Atts4SmController@edit5s')
             ->name('atts_4s.att4s.edit5s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject 7
              Route::get('/{att4s}/edit6s','Atts4SmController@edit6s')
             ->name('atts_4s.att4s.edit6s')
             ->where('id', '[0-9]+');
             //route for marking attendance  subject  8
              Route::get('/{att4s}/edit7s','Atts4SmController@edit7s')
             ->name('atts_4s.att4s.edit7s')
             ->where('id', '[0-9]+');
      
    });
    
    
    
   	Route::group(
    [         
       'prefix' => 'table_4_subject',
   ], function () {
   
       
       
       //go to table (also use in user-lecture view)
       Route::get('table_4_subject/{tableCourse4SStudents}', 'Atts4SmController@view')
            ->name('4s_sub1.4s_sub1.index_4S_sub1')
            ->where('id', '[0-9]+');
    
        
       //get summary for Level
          Route::get('/summary', 'Atts4SmController@Subject_Level')
            ->name('atts_4s.att4s.summary'); 
          
                  //route for reset the  attendance
            Route::get('/resetSubject/{tableCourse4SStudents}', 'Atts4SmController@reset')
            ->name('4s_sub1_reset.4s_sub1_reset.resetSubject'); 
            
            Route::get('/resetLevel', 'Atts4SmController@reset1')
            ->name('4s_sub1_reset1.4s_sub1_reset1.resetLevel'); 
            
                Route::get('/backup', 'Atts4SmController@backup')
         ->name('atts.att4S.backup');
         
        
   });




//------------------------ROUTE FOR S STUDENTS SUBJECT TABLE FUNCTION--------------------------------

Route::group(
[
    'prefix' => 'table__course__s__students',
], function () {

    //view the 2nd attendance table subject
    Route::get('/', 'TableCourseSStudentsController@index')
         ->name('table__course__s__students.table__course__s__students.index');
    
           //view the reset semester page
    Route::get('/reset', 'TableCourseSStudentsController@Reset_index')
         ->name('table__course__s__students.table__course__s__students.index1');

  //view the backup semester page
          Route::get('/backup', 'TableCourseSStudentsController@Backup_index')
          ->name('table__course__s__students.table__course__s__students.index2');
    // table data edit view
    Route::get('/{tableCourseSStudents}/edit','TableCourseSStudentsController@edit')
         ->name('table__course__s__students.table__course__s__students.edit')
         ->where('id', '[0-9]+');
    
     //store table edit  data
    Route::post('/', 'TableCourseSStudentsController@store')
         ->name('table__course__s__students.table__course__s__students.store');
       
         //route for edit data in semester update
         Route::get('/{tableCourseSStudents}/edit1','TableCourseSStudentsController@edit1')
         ->name('table__course__s__students.table__course__s__students.edit1')
         ->where('id', '[0-9]+');
    
    //route for edit data in update
    Route::put('table__course__s__students/{tableCourseSStudents}', 'TableCourseSStudentsController@update')
         ->name('table__course__s__students.table__course__s__students.update')
         ->where('id', '[0-9]+');
  
    //route for edit data in semester update
            Route::put('table__course__s__students/r/{tableCourseSStudents}', 'TableCourseSStudentsController@update1')
         ->name('table__course__s__students.table__course__s__students.update1')
         ->where('id', '[0-9]+');
    
    //change the poor attendance precentage
     Route::post('/p', 'TableCourseSStudentsController@precentage')
         ->name('table__course__s__students.table__course__s__students.precentage');
   
      //change the poor attendance precentage in Reset view
        Route::post('/', 'TableCourseSStudentsController@precentage1')
         ->name('table__course__s__students.table__course__s__students.precentage1');
    
});




//--------------------------ROUTE FOR G STUDENTS SUBJECT TABLE FUNCTION--------------------------------
//2s--
Route::group(
[
    'prefix' => 'table__course__g__students',
], function () {
    
      //view the 2nd attendance table subject
    Route::get('/', 'TableCourseGStudentsController@index')
         ->name('table__course__g__students.table__course__g__student.index');

       // table data edit view
    Route::get('/show/{tableCourseGStudent}','TableCourseGStudentsController@show')
         ->name('table__course__g__students.table__course__g__student.show')
         ->where('id', '[0-9]+');
    
        //store table edit  data
    Route::get('/{tableCourseGStudent}/edit','TableCourseGStudentsController@edit')
         ->name('table__course__g__students.table__course__g__student.edit')
         ->where('id', '[0-9]+');
    
     //route for edit data in semester update
         Route::get('/{tableCourseGStudents}/edit1','TableCourseGStudentsController@edit1')
         ->name('table__course__s__students.table__course__s__students.edit5')
         ->where('id', '[0-9]+');
    
    
    Route::post('/', 'TableCourseGStudentsController@store')
         ->name('table__course__g__students.table__course__g__student.store');
 
     Route::put('table__course__g__students/{tableCourseGStudents}', 'TableCourseGStudentsController@update')
         ->name('table__course__g__students.table__course__g__student.update')
         ->where('id', '[0-9]+');
     
              //view the reset semester page
    Route::get('/reset', 'TableCourseGStudentsController@Reset_index')
         ->name('table__course__g__students.table__course__g__students.index1');
     
       
});

//1s-----
Route::group(
    [
        'prefix' => 'table__course__1s__students',
    ], function () {
    
        //view the 2nd attendance table subject
        Route::get('/', 'TableCourse1SStudentsController@index')
             ->name('table__course__1s__students.table__course__1s__students.index');
        
              //view the reset semester page
        Route::get('/reset', 'TableCourse1SStudentsController@Reset_index')
            ->name('table__course__1s__students.table__course__1s__students.index1');
        
        // table data edit view
        Route::get('/{tableCourseSStudents}/edit','TableCourse1SStudentsController@edit')
            ->name('table__course__1s__students.table__course__1s__students.edit')
            ->where('id', '[0-9]+');

         //store table edit  data
         Route::post('/', 'TableCourse1SStudentsController@store')
            ->name('table__course__s__students.table__course__s__students.store');
   
        //route for edit data in semester update
         Route::get('/{tableCourseSStudents}/edit1','TableCourse1SStudentsController@edit1')
            ->name('table__course__1s__students.table__course__1s__students.edit0')
            ->where('id', '[0-9]+');

        //route for edit data in update
        Route::put('table__course__s__students/{tableCourseSStudents}', 'TableCourse1SStudentsController@update')
            ->name('table__course__1s__students.table__course__1s__students.update')
            ->where('id', '[0-9]+');

        //route for edit data in semester update
        Route::put('table__course__1s__students/r/{tableCourseSStudents}', 'TableCourse1SStudentsController@update1')
            ->name('table__course__1s__students.table__course__1s__students.update1')
            ->where('id', '[0-9]+');

        //change the poor attendance precentage
        Route::post('/', 'TableCourse1SStudentsController@precentage')
            ->name('table__course__1s__students.table__course__1s__students.precentage');
        
    });





//--------------------------ROUTE FOR SEMESTER UPDATE TABLE SPECIAL FUNCTION -------------------------------

Route::group(
 [         
    'prefix' => 'table_2_subject',
], function () {

    
    
    //go to table (also use in user-lecture view)
    Route::get('table_2_subject/{tableCourseSStudents}', 'AttsController@view')
         ->name('2s_sub1.2s_sub1.index_2S_sub1')
         ->where('id', '[0-9]+');

         Route::get('/{atts}/edit','AttsController@edit')
         ->name('madhu')
         ->where('id', '[0-9]+');

         Route::get('/table_2_subject/35', 'AttsController@view')
         ->name('return');
 
     
    //get summary for Level
       Route::get('/summary', 'AttsController@Subject_Level')
         ->name('atts.att.summary'); 
       
               //route for reset the  attendance
        Route::get('/reset/{tableCourseSStudents}', 'AttsController@reset')
         ->name('2s_sub1_reset.2s_sub1_reset.reset1');  
        
      
         Route::get('/backup', 'AttsController@backup')
         ->name('atts.att.backup');
         
        
         Route::get('/resetLevel', 'AttsController@reset1')
            ->name( '2s_sub1_reset1.2s_sub1_reset1.resetLevel'); 
});



//--------------------------ROUTE FOR ADD ATTENDANCE SUBJECT TABLE-------------------------------

Route::group(
[
    'prefix' => '4s_attendance',
], function () {
    
    Route::get('/', 'TableCourse4SStudentsController@AddAttendance')
         ->name('4s_attendance.4s_attendance.index');
});

Route::group(
[
    'prefix' => '3s_attendance',
], function () {

    Route::get('/', 'TableCourse3SStudentsController@AddAttendance')
         ->name('3s_attendance.3s_attendance.index');
});

Route::group(
[
    'prefix' => '2s_attendance',
], function () {
    
    Route::get('/', 'TableCourseSStudentsController@AddAttendance')
         ->name('2s_attendance.2s_attendance.index');
});

Route::group(
[
    'prefix' => '1s_attendance',
], function () {
    
    Route::get('/', 'TableCourse1SStudentsController@AddAttendance')
         ->name('1s_attendance.1s_attendance.index');
});

Route::group(
[
    'prefix' => '4m_attendance',
], function () {
    
    Route::get('/', 'TableCourse4MStudentsController@AddAttendance')
         ->name('4m_attendance.4m_attendance.index');
});

Route::group(
[
    'prefix' => '3m_attendance',
], function () {

        Route::get('/', 'TableCourse3MStudentsController@AddAttendance')
         ->name('3m_attendance.3m_attendance.index');
});

Route::group(
[
    'prefix' => '3g_attendance',
], function () {
    
    Route::get('/', 'TableCourse3GStudentsController@AddAttendance')
         ->name('3g_attendance.3g_attendance.index');
});

Route::group(
[
    'prefix' => '2g_attendance',
], function () {
    
   Route::get('/', 'TableCourseGStudentsController@AddAttendance')
         ->name('2g_attendance.2g_attendance.index');
});

Route::group(
[
    'prefix' => '1g_attendance',
], function () {

    Route::get('/', 'TableCourse1GStudentsController@AddAttendance')
         ->name('1g_attendance.1g_attendance.index');
});




//--------------------------ROUTE FOR VIEW  ATTENDANCE SUBJECT TABLE-------------------------------

 Route::group(
[
    'prefix' => 'table__course__1s__students',
], function () {

    Route::get('/', 'TableCourse1SStudentsController@index')
         ->name('table__course__1s__students.table__course__1s__students.index');
    
    Route::get('/reset', 'TableCourse1SStudentsController@Reset_index')
         ->name('table__course__1s__students.table__course__1s__students.index1');
    
   

});

Route::group(
[
    'prefix' => 'table__course__3s__students',
], function () {
    
    Route::get('/', 'TableCourse3SStudentsController@index')
         ->name('table__course__3s__students.table__course__3s__students.index');
    
     Route::get('/reset', 'TableCourse3SStudentsController@Reset_index')
         ->name('table__course__3s__students.table__course__3s__students.index1');
     
     Route::get('/{tableCourseSStudents}/edit','TableCourse3SStudentsController@edit')
            ->name('table__course__3s__students.table__course__3s__students.edit')
            ->where('id', '[0-9]+');
     
       Route::get('/{tableCourseSStudents}/edit1','TableCourse3SStudentsController@edit1')
            ->name('table__course__3s__students.table__course__3s__students.edit2')
            ->where('id', '[0-9]+');
       
    
});

Route::group(
[
    'prefix' => 'table__course__4s__students',
], function () {
    
    Route::get('/', 'TableCourse4SStudentsController@index')
         ->name('table__course__4s__students.table__course__4s__students.index');
    
     Route::get('/reset', 'TableCourse4SStudentsController@Reset_index')
         ->name('table__course__4s__students.table__course__4s__students.index1');
     
       Route::get('/{tableCourseSStudents}/edit','TableCourse4SStudentsController@edit')
            ->name('table__course__4s__students.table__course__4s__students.edit')
            ->where('id', '[0-9]+');
       
       Route::get('/{tableCourseSStudents}/edit1','TableCourse4SStudentsController@edit1')
            ->name('table__course__4s__students.table__course__4s__students.edit3')
            ->where('id', '[0-9]+');
     
});

Route::group(
[
    'prefix' => 'table__course__1g__students',
], function () {

    Route::get('/', 'TableCourse1GStudentsController@index')
         ->name('table__course__1g__students.table__course__1g__students.index');
    
     Route::get('/reset', 'TableCourse1GStudentsController@Reset_index')
         ->name('table__course__1g__students.table__course__1g__students.index1');
     
     Route::get('/{tableCourseGStudents}/edit','TableCourse1GStudentsController@edit')
            ->name('table__course__1g__students.table__course__1g__student.edit')
            ->where('id', '[0-9]+');
       
      Route::get('/{tableCourseGStudents}/edit1','TableCourse1GStudentsController@edit1')
            ->name('table__course__1g__students.table__course__1g__students.edit4')
            ->where('id', '[0-9]+');
});

Route::group(
[
    'prefix' => 'table__course__3g__students',
], function () {

    Route::get('/', 'TableCourse3GStudentsController@index')
         ->name('table__course__3g__students.table__course__3g__students.index');
    
      Route::get('/reset', 'TableCourse3GStudentsController@Reset_index')
         ->name('table__course__3g__students.table__course__3g__students.index1');
      
        Route::get('/{tableCourseGStudents}/edit','TableCourse3GStudentsController@edit')
            ->name('table__course__3g__students.table__course__3g__student.edit')
            ->where('id', '[0-9]+');
       
       Route::get('/{tableCourseGStudents}/edit1','TableCourse3GStudentsController@edit1')
            ->name('table__course__s__students.table__course__s__students.edit6')
            ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'table__course__3m__students',
], function () {

    Route::get('/', 'TableCourse3MStudentsController@index')
         ->name('table__course__3m__students.table__course__3m__students.index');
    
      Route::get('/reset', 'TableCourse3MStudentsController@Reset_index')
         ->name('table__course__3m__students.table__course__3m__students.index1');
      
        Route::get('/{tableCourseGStudents}/edit','TableCourse3MStudentsController@edit')
            ->name('table__course__3m__students.table__course__3m__student.edit')
            ->where('id', '[0-9]+');
       
       Route::get('/{tableCourseGStudents}/edit1','TableCourse3MStudentsController@edit1')
            ->name('table__course__s__students.table__course__s__students.edit8')
            ->where('id', '[0-9]+');
});
});

Route::group(
[
    'prefix' => 'table__course__4m__students',
], function () {
   
    Route::get('/', 'TableCourse4MStudentsController@index')
         ->name('table__course__4m__students.table__course__4m__students.index');
    
      Route::get('/reset', 'TableCourse4MStudentsController@Reset_index')
         ->name('table__course__3m__students.table__course__3m__students.index1');
      
        Route::get('/{tableCourseGStudents}/edit','TableCourse4MStudentsController@edit')
            ->name('table__course__4m__students.table__course__4m__student.edit')
            ->where('id', '[0-9]+');
       
       Route::get('/{tableCourseGStudents}/edit1','TableCourse4MStudentsController@edit1')
            ->name('table__course__4m__students.table__course__4m__students.edit9')
            ->where('id', '[0-9]+');
       
        
});



Route::get('/Active/{id}','SetUserPermissionController@Active')->middleware('AuthenticateMiddleware');
Route::get('/notActive/{id}','SetUserPermissionController@notActive')->middleware('AuthenticateMiddleware');
Route::get('/userPermission/addnew','SetUserPermissionController@create')->middleware('AuthenticateMiddleware');
Route::post('/userPermission','SetUserPermissionController@store')->middleware('AuthenticateMiddleware');
Route::delete('/userPermission/{id}','SetUserPermissionController@destroy')->middleware('AuthenticateMiddleware');
Route::resource('/userPermission','SetUserPermissionController')->middleware('AuthenticateMiddleware');





Route::post('/STAdminView','adminStudentViewController@profileview');
Route::resource('/adminStudentView','adminStudentViewController');
   });  
Route::group(
[
    'prefix' => 'atts_1s',
], function () {

    Route::get('/', 'Atts1sController@index')
         ->name('atts_1s.atts_1s.index');

    Route::get('/create','Atts1sController@create')
         ->name('atts_1s.atts_1s.create');

    Route::get('/show/{atts1s}','Atts1sController@show')
         ->name('atts_1s.atts_1s.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts1s}/edit','Atts1sController@edit')
         ->name('atts_1s.atts_1s.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts1sController@store')
         ->name('atts_1s.atts_1s.store');
               
    Route::put('atts_1s/{atts1s}', 'Atts1sController@update')
         ->name('atts_1s.atts_1s.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_1s/{atts1s}','Atts1sController@destroy')
         ->name('atts_1s.atts_1s.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_3s',
], function () {

    Route::get('/', 'Atts3sController@index')
         ->name('atts_3s.atts_3s.index');

    Route::get('/create','Atts3sController@create')
         ->name('atts_3s.atts_3s.create');

    Route::get('/show/{atts3s}','Atts3sController@show')
         ->name('atts_3s.atts_3s.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts3s}/edit','Atts3sController@edit')
         ->name('atts_3s.atts_3s.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts3sController@store')
         ->name('atts_3s.atts_3s.store');
               
    Route::put('atts_3s/{atts3s}', 'Atts3sController@update')
         ->name('atts_3s.atts_3s.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_3s/{atts3s}','Atts3sController@destroy')
         ->name('atts_3s.atts_3s.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_4s',
], function () {

    Route::get('/', 'Atts4sController@index')
         ->name('atts_4s.atts_4s.index');

    Route::get('/create','Atts4sController@create')
         ->name('atts_4s.atts_4s.create');

    Route::get('/show/{atts4s}','Atts4sController@show')
         ->name('atts_4s.atts_4s.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts4s}/edit','Atts4sController@edit')
         ->name('atts_4s.atts_4s.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts4sController@store')
         ->name('atts_4s.atts_4s.store');
               
    Route::put('atts_4s/{atts4s}', 'Atts4sController@update')
         ->name('atts_4s.atts_4s.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_4s/{atts4s}','Atts4sController@destroy')
         ->name('atts_4s.atts_4s.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_4ms',
], function () {

    Route::get('/', 'Atts4msController@index')
         ->name('atts_4ms.atts_4m.index');

    Route::get('/create','Atts4msController@create')
         ->name('atts_4ms.atts_4m.create');

    Route::get('/show/{atts4m}','Atts4msController@show')
         ->name('atts_4ms.atts_4m.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts4m}/edit','Atts4msController@edit')
         ->name('atts_4ms.atts_4m.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts4msController@store')
         ->name('atts_4ms.atts_4m.store');
               
    Route::put('atts_4m/{atts4m}', 'Atts4msController@update')
         ->name('atts_4ms.atts_4m.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_4m/{atts4m}','Atts4msController@destroy')
         ->name('atts_4ms.atts_4m.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_1gs',
], function () {

    Route::get('/', 'Atts1gsController@index')
         ->name('atts_1gs.atts_1gs.index');

    Route::get('/create','Atts1gsController@create')
         ->name('atts_1gs.atts_1gs.create');

    Route::get('/show/{atts1gs}','Atts1gsController@show')
         ->name('atts_1gs.atts_1gs.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts1gs}/edit','Atts1gsController@edit')
         ->name('atts_1gs.atts_1gs.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts1gsController@store')
         ->name('atts_1gs.atts_1gs.store');
               
    Route::put('atts_1gs/{atts1gs}', 'Atts1gsController@update')
         ->name('atts_1gs.atts_1gs.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_1gs/{atts1gs}','Atts1gsController@destroy')
         ->name('atts_1gs.atts_1gs.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_3gs',
], function () {

    Route::get('/', 'Atts3gsController@index')
         ->name('atts_3gs.atts_3gs.index');

    Route::get('/create','Atts3gsController@create')
         ->name('atts_3gs.atts_3gs.create');

    Route::get('/show/{atts3gs}','Atts3gsController@show')
         ->name('atts_3gs.atts_3gs.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts3gs}/edit','Atts3gsController@edit')
         ->name('atts_3gs.atts_3gs.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts3gsController@store')
         ->name('atts_3gs.atts_3gs.store');
               
    Route::put('atts_3gs/{atts3gs}', 'Atts3gsController@update')
         ->name('atts_3gs.atts_3gs.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_3gs/{atts3gs}','Atts3gsController@destroy')
         ->name('atts_3gs.atts_3gs.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_3ms',
], function () {

    Route::get('/', 'Atts3msController@index')
         ->name('atts_3ms.atts_3ms.index');

    Route::get('/create','Atts3msController@create')
         ->name('atts_3ms.atts_3ms.create');

    Route::get('/show/{atts3ms}','Atts3msController@show')
         ->name('atts_3ms.atts_3ms.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts3ms}/edit','Atts3msController@edit')
         ->name('atts_3ms.atts_3ms.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts3msController@store')
         ->name('atts_3ms.atts_3ms.store');
               
    Route::put('atts_3ms/{atts3ms}', 'Atts3msController@update')
         ->name('atts_3ms.atts_3ms.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_3ms/{atts3ms}','Atts3msController@destroy')
         ->name('atts_3ms.atts_3ms.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_2gs',
], function () {

    Route::get('/', 'Atts2gsController@index')
         ->name('atts_2gs.atts_2gs.index');

    Route::get('/create','Atts2gsController@create')
         ->name('atts_2gs.atts_2gs.create');

    Route::get('/show/{atts2gs}','Atts2gsController@show')
         ->name('atts_2gs.atts_2gs.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts2gs}/edit','Atts2gsController@edit')
         ->name('atts_2gs.atts_2gs.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts2gsController@store')
         ->name('atts_2gs.atts_2gs.store');
               
    Route::put('atts_2gs/{atts2gs}', 'Atts2gsController@update')
         ->name('atts_2gs.atts_2gs.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_2gs/{atts2gs}','Atts2gsController@destroy')
         ->name('atts_2gs.atts_2gs.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts_4ms',
], function () {

    Route::get('/', 'Atts4msController@index')
         ->name('atts_4ms.atts_4m.index');

    Route::get('/create','Atts4msController@create')
         ->name('atts_4ms.atts_4m.create');

    Route::get('/show/{atts4ms}','Atts4msController@show')
         ->name('atts_4ms.atts_4m.show')
         ->where('id', '[0-9]+');

    Route::get('/{atts4ms}/edit','Atts4msController@edit')
         ->name('atts_4ms.atts_4m.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Atts4msController@store')
         ->name('atts_4ms.atts_4m.store');
               
    Route::put('atts_4ms/{atts4ms}', 'Atts4msController@update')
         ->name('atts_4ms.atts_4m.update')
         ->where('id', '[0-9]+');

    Route::delete('/atts_4ms/{atts4ms}','Atts4msController@destroy')
         ->name('atts_4ms.atts_4m.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'atts',
], function () {

       Route::get('/{atts}/edit','AttsController@editStudent')
         ->name('atts.atts.edit')
         ->where('id', '[0-9]+');
    
    Route::get('/', 'AttsController@index')
         ->name('atts.atts.index');

    Route::get('/create','AttsController@create')
         ->name('atts.atts.create');

    Route::get('/show/{atts}','AttsController@show')
         ->name('atts.atts.show')
         ->where('id', '[0-9]+');


    Route::post('/', 'AttsController@storeStudent')
         ->name('atts.atts.store');
               
    Route::put('att/{atts}', 'AttsController@update')
         ->name('atts.atts.update')
         ->where('id', '[0-9]+');
    
    Route::post('/', 'AttsController@storeS')
         ->name('atts.atts.store');
               
     

    Route::delete('/atts/{atts}','AttsController@destroy')
         ->name('atts.atts.destroy')
         ->where('id', '[0-9]+');

});

Route::post('/attendance_mark', 'AttsController@ray');
Route::post('/attendance_mark1', 'AttsController@ray1');
Route::post('/attendance_mark2', 'AttsController@ray2');
Route::post('/attendance_mark3', 'AttsController@ray3');
Route::post('/attendance_mark4', 'AttsController@ray4');
Route::post('/attendance_mark5', 'AttsController@ray5');
Route::post('/attendance_mark6', 'AttsController@ray6');
Route::post('/attendance_mark7', 'AttsController@ray7');

Route::post('/attendance_markS1', 'Atts1smController@ray');
Route::post('/attendance_mark1S1', 'Atts1smController@ray1');
Route::post('/attendance_mark2S1', 'Atts1smController@ray2');
Route::post('/attendance_mark3S1', 'Atts1smController@ray3');
Route::post('/attendance_mark4S1', 'Atts1smController@ray4');
Route::post('/attendance_mark5S1', 'Atts1smController@ray5');
Route::post('/attendance_mark6S1', 'Atts1smController@ray6');
Route::post('/attendance_mark7S1', 'Atts1smController@ray7');

Route::post('/attendance_markS3', 'Atts3smController@ray');
Route::post('/attendance_mark1S3', 'Atts3smController@ray1');
Route::post('/attendance_mark2S3', 'Atts3smController@ray2');
Route::post('/attendance_mark3S3', 'Atts3smController@ray3');
Route::post('/attendance_mark4S3', 'Atts3smController@ray4');
Route::post('/attendance_mark5S3', 'Atts3smController@ray5');
Route::post('/attendance_mark6S3', 'Atts3smController@ray6');
Route::post('/attendance_mark7S3', 'Atts3smController@ray7');

Route::post('/attendance_markS4', 'Atts4smController@ray');
Route::post('/attendance_mark1S4', 'Atts4smController@ray1');
Route::post('/attendance_mark2S4', 'Atts4smController@ray2');
Route::post('/attendance_mark3S4', 'Atts4smController@ray3');
Route::post('/attendance_mark4S4', 'Atts4smController@ray4');
Route::post('/attendance_mark5S4', 'Atts4smController@ray5');
Route::post('/attendance_mark6S4', 'Atts4smController@ray6');
Route::post('/attendance_mark7S4', 'Atts4smController@ray7');


Route::group(
[
    'prefix' => 'edit',
], function () {
      Route::put('att/{atts}', 'AttsController@updateS')
         ->name('atts.atts.updateS')
         ->where('id', '[0-9]+');
      
         Route::put('att/{atts}/1', 'AttsController@updateS1')
         ->name('atts.atts.updateS1')
         ->where('id', '[0-9]+');
         
         Route::put('att/{atts}/2', 'AttsController@updateS2')
         ->name('atts.atts.updateS2')
         ->where('id', '[0-9]+');
            
         Route::put('att/{atts}/3', 'AttsController@updateS3')
         ->name('atts.atts.updateS3')
         ->where('id', '[0-9]+');
               
         Route::put('att/{atts}/4', 'AttsController@updateS4')
         ->name('atts.atts.updateS4')
         ->where('id', '[0-9]+');
                  
         Route::put('att/{atts}/5', 'AttsController@updateS5')
         ->name('atts.atts.updateS5')
         ->where('id', '[0-9]+');
                     
         Route::put('att/{atts}/6', 'AttsController@updateS6')
         ->name('atts.atts.updateS6')
         ->where('id', '[0-9]+');
                        
         Route::put('att/{atts}/7', 'AttsController@updateS7')
         ->name('atts.atts.updateS7')
         ->where('id', '[0-9]+');
           
      
        Route::get('/{atts}/edit','AttsController@editS')
         ->name('madhu')
         ->where('id', '[0-9]+');
       
        Route::get('/{atts}/edit1','AttsController@editS1')
         ->name('madhu1')
         ->where('id', '[0-9]+');
        
        Route::get('/{atts}/edit2','AttsController@editS2')
         ->name('madhu2')
         ->where('id', '[0-9]+');
       
        Route::get('/{atts}/edit3','AttsController@editS3')
         ->name('madhu3')
         ->where('id', '[0-9]+');
        Route::get('/{atts}/edit4','AttsController@editS4')
         ->name('madhu4')
         ->where('id', '[0-9]+');
       
        Route::get('/{atts}/edit5','AttsController@editS5')
         ->name('madhu5')
         ->where('id', '[0-9]+');
        
        Route::get('/{atts}/edit6','AttsController@editS6')
         ->name('madhu6')
         ->where('id', '[0-9]+');
       
           Route::get('/{atts}/edit7','AttsController@editS7')
         ->name('madhu7')
         ->where('id', '[0-9]+');
        
         Route::get('/reset4sm','Atts4smController@result')
         ->name('tharuS4')
         ->where('id', '[0-9]+');
            
         Route::get('/reset14sm','Atts4smController@result1')
         ->name('tharu1S4')
         ->where('id', '[0-9]+');
         
            Route::get('/reset24sm','Atts4smController@result2')
         ->name('tharu2S4')
         ->where('id', '[0-9]+');
            
               Route::get('/reset34sm','Atts4smController@result3')
         ->name('tharu3S4')
         ->where('id', '[0-9]+');
               
                  Route::get('/reset44sm','Atts4smController@result4')
         ->name('tharu4S4')
         ->where('id', '[0-9]+');
                  
                     Route::get('/reset54sm','Atts4smController@result5')
         ->name('tharu5S4')
         ->where('id', '[0-9]+');
                     
                        Route::get('/reset64sm','Atts4smController@result6')
         ->name('tharu6S4')
         ->where('id', '[0-9]+');
                        
                           Route::get('/reset74sm','Atts4smController@result7')
         ->name('tharu7S4')
         ->where('id', '[0-9]+');
           
           
           
          Route::get('/reset3sm','Atts3smController@result')
         ->name('tharuS3')
         ->where('id', '[0-9]+');
            
         Route::get('/reset13sm','Atts3smController@result1')
         ->name('tharu1S3')
         ->where('id', '[0-9]+');
         
            Route::get('/reset23sm','Atts3smController@result2')
         ->name('tharu2S3')
         ->where('id', '[0-9]+');
            
               Route::get('/reset33sm','Atts3smController@result3')
         ->name('tharu3S3')
         ->where('id', '[0-9]+');
               
                  Route::get('/reset43sm','Atts3smController@result4')
         ->name('tharu4S3')
         ->where('id', '[0-9]+');
                  
                     Route::get('/reset53sm','Atts3smController@result5')
         ->name('tharu5S3')
         ->where('id', '[0-9]+');
                     
                        Route::get('/reset63sm','Atts3smController@result6')
         ->name('tharu6S3')
         ->where('id', '[0-9]+');
                        
                           Route::get('/reset73sm','Atts3smController@result7')
         ->name('tharu7S3')
         ->where('id', '[0-9]+');
         
        
       
         Route::get('/reset1sm','Atts1smController@result')
         ->name('tharuS1')
         ->where('id', '[0-9]+');
            
         Route::get('/reset11sm','Atts1smController@result1')
         ->name('tharu1S1')
         ->where('id', '[0-9]+');
         
            Route::get('/reset21sm','Atts1smController@result2')
         ->name('tharu2S1')
         ->where('id', '[0-9]+');
            
               Route::get('/reset31sm','Atts1smController@result3')
         ->name('tharu3S1')
         ->where('id', '[0-9]+');
               
                  Route::get('/reset41sm','Atts1smController@result4')
         ->name('tharu4S1')
         ->where('id', '[0-9]+');
                  
                     Route::get('/reset51sm','Atts1smController@result5')
         ->name('tharu5S1')
         ->where('id', '[0-9]+');
                     
                        Route::get('/reset61sm','Atts1smController@result6')
         ->name('tharu6S1')
         ->where('id', '[0-9]+');
                        
                           Route::get('/reset71sm','Atts1smController@result7')
         ->name('tharu7S1')
         ->where('id', '[0-9]+');
                           
         Route::get('/reset','AttsController@result')
         ->name('tharu')
         ->where('id', '[0-9]+');
            
         Route::get('/reset1','AttsController@result1')
         ->name('tharu1')
         ->where('id', '[0-9]+');
         
            Route::get('/reset2','AttsController@result2')
         ->name('tharu2')
         ->where('id', '[0-9]+');
            
               Route::get('/reset3','AttsController@result3')
         ->name('tharu3')
         ->where('id', '[0-9]+');
               
                  Route::get('/reset4','AttsController@result4')
         ->name('tharu4')
         ->where('id', '[0-9]+');
                  
                     Route::get('/reset5','AttsController@result5')
         ->name('tharu5')
         ->where('id', '[0-9]+');
                     
                        Route::get('/reset6','AttsController@result6')
         ->name('tharu6')
         ->where('id', '[0-9]+');
                        
                           Route::get('/reset7','AttsController@result7')
         ->name('tharu7')
         ->where('id', '[0-9]+');
                           
            
});
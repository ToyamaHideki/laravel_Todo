 @foreach($excutions as $excution)
 <div class="project_div">

     <div class="project_Day">
         <div class="pday_div">
             <h4 class="pday_h4">{{$excution -> excution}}</h4>
             <form action="{{route('showtask')}}" method="get" class="pdayform">
                 <input type="hidden" name="excution" value={{$excution -> excution}}>
                 <input class="P_button" type="submit" value="詳細">
             </form>
         </div>
     </div>

 </div>
 @endforeach
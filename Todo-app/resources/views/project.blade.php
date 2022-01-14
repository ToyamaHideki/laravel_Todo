 @foreach($excutions as $excution)


     <div class="p_div">
         <div class="p-div2">
             <form action="{{route('showtask')}}" method="get" class="pdayform">
                 <input class="btn btn-secondary btn-lg P_button"type="submit" name="excution" value={{$excution -> excution}}>
             </form>
         </div>
     </div>


 @endforeach
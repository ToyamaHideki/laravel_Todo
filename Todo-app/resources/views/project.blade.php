 @foreach($excutions as $excution)
 <form action="{{route('showtask')}}" method="get" class="pdayform">
     <input  type="submit" name="excution" value={{$excution -> excution}}>
 </form>
 @endforeach
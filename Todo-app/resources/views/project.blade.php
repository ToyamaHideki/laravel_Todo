 @foreach($excutions as $excution)
 <form action="{{route('showtask')}}" method="get" class="pdayform">
     <input class="project-button" type="submit" name="excution" value="{{$excution -> excution}}">
 </form>
 @endforeach
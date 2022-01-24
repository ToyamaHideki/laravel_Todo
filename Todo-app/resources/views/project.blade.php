
<a href="{{route('home')}}"><img src="{{asset('image/アイコン.jpeg')}}" alt="" width="120px"></a>
<a href="{{route('weight')}}"><img src="{{asset('image/体重管理.jpeg')}}" alt="" width="120px"></a>

@foreach($excutions as $excution)
 <form action="{{route('showtask')}}" method="get" class="pdayform">
     <button class="project-button" type="submit">{{$excution['excution'] -> format('Y年m月d日')}}</button>
     <input type="hidden" name="excution" value= {{$excution -> excution}}>
 </form>
 @endforeach
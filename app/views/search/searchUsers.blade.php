@foreach($searchUsers as $u)
    <b>{{$u->name}}</b>
    <b>{{$u->updated_at}}</b>
    <br>
@endforeach
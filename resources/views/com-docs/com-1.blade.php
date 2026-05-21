<h1>computers</h1>
@if (count($com_s_data)>0)
    <ul>
        @foreach($com_s_data as $com_data)
        <li>{{ $com_data['name'] }}</li>
        @endforeach
    </ul>
@else
<p>no more computers</p>
@endif
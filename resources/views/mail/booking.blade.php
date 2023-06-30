<h1>
    Mail From : {{$data['name']}}
</h1>
<div>
    <h4>email</h4>
    <p>{{$data['email']}}</p>
    <h4>Subject</h4>
    <p>{{$data['subject']}}</p>
    <h4>description</h4>
    <p>{{$data['description']}}</p>
    <p>Meeting Time</p>
    <p>{{date("Y-m-d H:i A ",strtotime($data['meetingDate']))}} </p>
</div>

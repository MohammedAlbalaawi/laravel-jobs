<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 100%; 
    height:100vh;display: flex; 
    justify-content: center; 
    align-items:center; 
    background-color:#f2f2f2;
    text-align: center;">

        <div>
            <img src="https://img.lovepik.com/element/45013/5793.png_300.png" width="100" height="100" alt="notification" />
            <h1>Hello {{ $recieverDetails->name }}</h1>
            <p><small>There is new Message</small></p>

            <p><strong>Subject : </strong>{{ $messageDetails->subject }}</p>
            
            <p><strong>Message : </strong>{{ $messageDetails->message }}</p>
            <a href="{{ route('contacts.index') }}" class="btn btn-dark">Show in Dashboard</a>
            <br/><hr/>
            <h5>This is a custom message template</h5>
        </div>
    </div>
</body>
</html>
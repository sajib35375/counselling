<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Counselling</title>
</head>
<body>


<div class="wrap">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3>Name : <span>{{ $mailData['title'] }}</span></h3>
                <h3>Email : <span>{{ $mailData['email'] }}</span></h3>
                <p>{{ $mailData['desc'] }}</p>
            </div>
        </div>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

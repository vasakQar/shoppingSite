<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="" style="border:1px solid black; width: 400px;" >
        <h1>hllo we heve new products</h1>
        <p>if you want to see this product click heare...</p>
        <div style="text-align: center">
            <a href="{{route('shop.index')}}">
                <button type="button" class="btn btn-primary">visit product</button>
            </a>
        </div>
        <p>product name__ {{$mail_data['name']}}</p>
        <span>price :  {{$mail_data['price']}}$</span>
    </div>
    <div class="col-sm-4"></div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" href="{{ asset('css/create_topic.css') }}">
</head>
<body>
  <div class="center">
    <div class="container">
      <label for="" class="close-btn fas fa-times"></label>
      <div class="text">
        <form action="{{ route('topics.store') }}" method="POST">
          @csrf
          <div class="data">
            <label for="">Name of Topics</label>
            <input type="text" name="name" required>
          </div>
          <div class="btn">
            <div class="inner"></div>
            <button type="submit">add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
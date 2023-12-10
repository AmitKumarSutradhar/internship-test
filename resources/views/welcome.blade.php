<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        header{
            background-color: #3800AF;
            border-radius: 15px;
        }
        main{
            display: grid;
            grid-template-columns: 25% auto;
            grid-gap: 30px;
        }
        main .left-sidebar{
            background-color: #3800AF;
            border-radius: 15px;
        }
        .card{
            background-color: #3800AF;
            border-radius: 15px;
            width: 32%;
        }
        .cards{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }
        .card img{
            border-radius: 15px;
        }

        footer{
            background-color: #3800AF;
            border-radius: 15px;
        }
    </style>
</head>
<body class="p-3 b">
    <header>
        <h2 class="text-center text-white my-3 p-4">Start Time: 4:30 & End Time: 5:30</h2>
    </header>

    <main>
        <div class="left-sidebar ">
            <p class="text-white p-4">Hi. I am Amit Kumar Sutradhar. I have completed my graduation in Computer Science Engineering. I have always been interested in web development and have done several projects based Laravel Framework. I have a passion for learning and sharing my knowledge with others as publicly as possible. I love to solve real-world problems. I am strategic and goal-oriented and always work with an end goal in mind.</p>
        </div>
        <div class="p-3 right-sidebar">
            <div class="cards">
                @foreach($posts as $item)
                    <div class="card p-3 ">
                        <a href="{{ route('blog.details',$item->id) }}">
                            <img src="{{ $item->image }}" class="card-img-top " alt="...">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('blog.details',$item->id) }}">
                                <h5 class="card-title text-white">{{ $item->title }}</h5>
                            </a>
                            <p class="card-text text-white">{{ $item->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <footer class="text-white text-center mt-3 p-3">
                <h1><a href="https://github.com/AmitKumarSutradhar/internship-test" class="text-white">GitHub Repository Link</a> </h1>
            </footer>

        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

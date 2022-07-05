<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Happy Book Store</title>
</head>
<body>
    <!--Header-->    
    <div class="container-fluid p-2 bg-success text-light" style="height:70px"> 
        <h4 class="text-center p-2">Happy Book Store</h4>
    </div>
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light text-dark">
        <div class="d-flex justify-content-center mx-auto">
            <div class="mt-2">
                <a href="/" class="text-dark text-decoration-none">Home</a>
            </div>
            <div class="dropdown">
                <a class="btn btn-light dropdown-toggle" type="" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->category }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-2">
                <a href="/contact" class="text-dark text-decoration-none">Contact</a>
            </div> 
        </div>    
    </nav>
    <!--Body-->
    <div class="container-fluid bg-light text-light p-2" style="min-height: 34vw">
        @yield('container')
    </div>
    <!--Footer-->
    <div class="container-fluid p-1 bg-success text-light" style="height:50px">
        <h6 class="text-center p-2">Happy Book Store</h6>
    </div>
</body>
</html>
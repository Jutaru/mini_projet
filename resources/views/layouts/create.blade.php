<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--link rel="stylesheet" type="text/css"  href="{{ asset('css1/app.css') }}"-->


    <!-- Template Styles-->
    <link rel="stylesheet" href="css/style.css"/>


    <!--?php include public_path('css/app.css') ?-->
</head>
<body>
    <div class="animationload">
        <div class="loader">
            Please Wait....
        </div>
    </div> 
    @if(Session::has('post_add'))
        <div routeLink="/" class="alert alert-success" role="alert">{{Session::get('post_add')}}</div>

    @endif
    <div style="justify-content: center;width:60%;align-items: center;">
    <form style="max-width:600px;width:60%;" method="post" action="{{route('posts.store')}}">
        @csrf 
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name ="title" id="title" aria-describedby="title" placeholder="Enter the title" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name ="category" id="category" required placeholder="Category">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="20" cols="50" name ="description" required placeholder="Describe yourself"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <style>
        body{
            padding: 15px;
            margin: 15px;

        }
    </style>
        <!-- JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!-- initialize jQuery Library -->
     <script src="js/jquery.min.js"></script>
     <!-- jquery easing -->
     <script src="js/jquery.easing.min.js"></script>
     <!-- Bootstrap -->
     <script src="js/bootstrap.min.js"></script>
     <!-- modal-effect -->
     <script src="js/classie.js"></script>
     <script src="js/modalEffects.js"></script>
     <!-- Counter-up -->
     <script src="js/waypoints.min.js" type="text/javascript"></script>
     <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
     <!-- SmoothScroll -->
     <script src="js/SmoothScroll.js"></script>
     <!-- Parallax -->
     <script src="js/jquery.stellar.min.js"></script>
     <!-- Jquery-Nav -->
     <script src="js/jquery.nav.js"></script>
     <!-- Owl carousel -->                                                      
     <script type="text/javascript" src="js/owl.carousel.min.js"></script>
     <!-- App JS -->
     <script src="js/app.js"></script>

     <!-- Switcher script for demo only -->
    <script type="text/javascript" src="js/switcher.js"></script>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>API-POSTS</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>All posts</h1>
            <table class="table table-sm" style="font-size: small">
                <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody id="posts">
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <h1>One Post</h1>
            <table class="table posts" style="font-size: small">
                <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
                </thead>
                <tbody id="post">
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $(document).ready(function (){

        $.ajax({
            type:'GET',
            url:"https://jsonplaceholder.typicode.com/posts",
            success:function(data){

                $.each(data,function (index,item){
                    $('#posts').append(
                        ' <tr>' +
                        ' <td>' + item.id +'</td> ' +
                        ' <td>'+item.title+'</td> ' +
                        ' <td>'+item.body+'</td> ' +
                        '</tr>'
                    );
                })

            }
        });


       $.ajax({
           type:'GET',
           url:"https://jsonplaceholder.typicode.com/posts/1",
           success:function(data){
                   $('#post').append(
                       ' <tr>' +
                       ' <td>' + data.id +'</td> ' +
                       ' <td>'+data.title+'</td> ' +
                       ' <td>'+data.body+'</td> ' +
                       '</tr>'
                   );

           }
       });

    });
</script>
</body>
</html>

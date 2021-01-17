<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Document</title>
    <style>
                html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .error {
            color: #ae1c17;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">Navbar</a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
    
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item active">
                        <a class="nav-link"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                            <span class="sr-only">(current)</span></a>
                    </li>
                @endforeach
    
    
            </ul>
        
        </div>
    </nav>    {{--                                    End Navbar            --}}
    
          @if(Session::has('success'))
              <div class="alert alert-success ">
                  {{Session::get('success')}}</div>
          @endif

          @if (Session::has('error'))
          <div   class="alert alert-danger ">{{Session::get('error')}}</div>
          @endif
            <table class="table">
                <thead>
            
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.Offer Name')}}</th>
                    <th scope="col">{{__('messages.Offer Price')}}</th>
                    <th scope="col">{{__('messages.Offer details')}}</th>
                    <th scope="col">{{__('messages.Offer Photo')}}</th>
             
            
                    <th scope="col">{{__('messages.operation')}}</th>
                </tr>
            
                </thead>
                <tbody>
            
                    @foreach ($offers as $offer)
                        <tr scope="row">
                            <td>{{$offer -> id}}</td>
                        <td >{{$offer    -> name}}</td>
                        <td >{{$offer    -> price}}</td>
                        <td >{{$offer    -> details}}</td>
                        <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$offer->photo)}}"></td>
                        <td><a href="{{url('offers/edit/'.$offer -> id)}}" class="btn btn-success">{{__('messages.update')}}</a></td>
                        <td><a href="{{route('offers.delete',$offer -> id)}}" class="btn btn-danger">{{__('messages.delete')}}</a></td>
                         </tr>
                    @endforeach
                </tbody>
            </table>
                     {{--        default links for   Laravel paginate         --}}
                     <div class="d-flex justify-content-center">
                        {!! $offers ->links() !!}
                     </div>
                   
</body>
</html>
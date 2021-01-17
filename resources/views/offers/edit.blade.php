<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
      h3{
        margin: 20px;
        text-align: center;
      }
      form{
        margin: 20px 0 0 0;
      }
      .btn-primary{
        display: block;
        margin: auto;
      }
    .form-control{
      display: block;
      margin:auto;
      width:600px;
    }
    .la{
      display: block;text-align: center;
    }
    small{
      text-align: center;
    }
    .alert{

     
      text-align: center;
    }
    </style>
</head>
<body>

              {{--                             Navbar                --}}
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
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
       {{--                                    End   Navbar                       --}}
  <h3>{{__('messages.Update your offer')}}</h3>
  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
  </div>  
  @endif
   
 <form method="POST" action="{{route('offers.update',$offer -> id)}}"> {{--you can write route('offers.update') --}}


        {{-- <input name="_token" value="{{csrf_token()}}"/> --}}
        @csrf
                    {{--          Arabic  Name     --}}
        <div class="form-group">

            <label class="la">{{__('messages.Add offer name ar')}}</label>
            <input type="text" class="form-control" name="name_ar" value="{{$offer -> name_ar}}"/>

            @error('name_ar')                   {{--  error message   --}}
                <small class="form-text text-danger">{{$message}}</small>
              @enderror
         
        </div>
         {{--                  English Name     --}}
        <div class="form-group">

             <label class="la">{{__('messages.Add offer name en')}}</label>
            <input type="text" class="form-control" name="name_en" value="{{$offer -> name_en}}"/>

          @error('name_en')                   {{--  error message   --}}
              <small class="form-text text-danger">{{$message}}</small>
            @enderror
       
      </div>

        <div class="form-group">

        <label class="la">{{__('messages.Offer Price')}}</label>
            <input type="text" class="form-control" value="{{$offer -> price}}"/>
            @error('price')
           <small class="form-text text-danger">{{$message}}</small> 
            {{-- {{$message}} is error  message from validator in the controller  --}}
            @enderror
          </div>

          <div class="form-group">

          <label class="la">{{__('messages.Offer details_ar')}}</label>
            <input type="text" class="form-control" name="details_ar" value="{{$offer -> details_ar}}"/>
            @error('details_ar')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
          </div>

          <div class="form-group">

            <label class="la">{{__('messages.Offer details_en')}}</label>
              <input type="text" class="form-control" name="details_en" value="{{$offer -> details_en}}"/>
              @error('details_en')
              <small class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>

            
        <button type="submit" class="btn btn-primary">{{__('messages.Save the Offer')}}</button>
      </form>





          


       


    




</div> 
</body>
</html>


@extends('template')

@section('content')

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     
<div class="container" style="margin-top:3%; padding:20px;">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                <div class="card">
                                <div class="card-header" style="text-align: center;">FORMULARIO</div>
                                <br>
                            <!--CONTENIDO DE LA PAGINA -->

                            
                                <div class="col-md-6 offset-md-3 mt-5">
                                    <h4> SUGERENCIAS</h4>
                                    <hr>

                                    <form action="{{ route ('send.email')}}" method="post">
                                        @csrf


                                        

                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                       @endif




                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{old('name')}}">
                                            @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                        </div>

                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{old('email')}}">
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                        </div>

                                        <div class="form-group">
                                            <label for="">Subject</label>
                                            <input type="text" class="form-control" name="subject" placeholder="Enter your email" value="{{old('subject')}}">
                                            @error('subject')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                        </div>

                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <textarea  class="form-control" name="message" cols="4" rows="4">{{old('message')}}</textarea>
                                            @error('message')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                        </div>
                                        <br>

                                        <button class="btn btn-primary">ENVIAR</button>
                                        

                                    </form>

                                
                                    <br>

                                </div>
                            
                    </div>
  
    
</body>
@endsection






@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-50">
            <div class="card">
            

            <div class="card-header">welcome you </div>
               
               
               <div class="card-body">
                    @if (session('status')) 
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum fugiat labore laboriosam obcaecati possimus! Veniam excepturi, laborum autem error facere fugit corrupti velit iste ipsa illo perferendis quo nesciunt consectetur sed nobis ea consequatur deleniti nemo magni nostrum ab molestiae?
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection

@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-6 col-xl-6">
                                
                                <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                        <h5>Usuarios</h5>                                               
                                            @php
                                                use App\Models\User;
                                            $cant_usuarios = User::count();                                                
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('usuarios.index') }}" class="text-white">Ver más</a></p>
                                        </div>                                            
                                    </div>                                    
                                </div>
                                
                                <div class="col-md-6 col-xl-6">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                        <h5>Roles</h5>                                               
                                            @php
                                            use Spatie\Permission\Models\Role;
                                                $cant_roles = Role::count();                                                
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                            <p class="m-b-0 text-right"><a href="{{ route('roles.index') }}" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div> 

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())                                                
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Por favor revisa los campos!</strong>                        
                                    @foreach ($errors->all() as $error)                                    
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach                        
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif

                            @if ($week_day) 
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>{{$week_day}}</strong>                                             
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            {!! Form::open(array('route' => 'dayWeek','method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Numero Día de la Semana </label>
                                        {!! Form::text('day', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Calcular</button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>                            
            </div>

        </div>
    </section>
@endsection   
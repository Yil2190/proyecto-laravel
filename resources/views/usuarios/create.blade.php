<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creacion de usuarios') }} 
        </h2>
        Llenar los siguientes datos 
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('dashboard.partials.validation-error')
                  <form action="{{ route('usuarios.store') }}" method="post">
                  @csrf
                  <div class="mb-3 row">
                    <label for="name">Nombre:</label>
                   <div>
                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                   </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="name">E-mail:</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="email" id="email"
                        value="{{ old('email') }}">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="name">Password</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="password" name="password" id="password"
                        value="{{ old('password') }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name">Confirmar password</label>
                    <div class="col-sm-5">
                        <input class="form-control" type="password" name="confirm-password" id="confirm-password"
                        value="{{ old('confirm-password') }}">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="description">Rol</label>
                    <div class="col-sm-5">
                        <select name="roles" id="roles">
                            <option value="">Seleccionar rol</option>
                            @foreach ($roles as $id=>$rol )
                            <option value="{{ $id }}">{{ $rol }}</option>
                                
                            @endforeach

                        </select>
                       
                    </div>

                </div>
                <div class="row center">
                    <div class="col s6">
                        <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                        <a href="{{ url('roles') }}" class="btn btn-secondary btn-sm">Cancelar</a>

                    </div>
                </div>

            
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
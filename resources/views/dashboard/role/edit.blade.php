<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semiblod text-x1 text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <form action="{{route('role.store')}}" method="post">
        @csrf
        <div>
            <label for="name">Nombre de Rol</label>
            <div>
                <input type="text" name="name" id="name"
                value="{{$role->name}}">
            </div>
        </div>
        <div>
            <label for="permissions">Permisos de Rol</label>
        </div>
        <div>
            <table>
                <tbody>
                    @foreach ($permission as $id=>$permission)
                    <tr>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $id }}"
                            {{$role->permissions->contains($id) ? 'checkd' :''}}
                            >
                            {{$permission}}
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            <div>
                <button type="submit">Guardar</button>
                <a href="{{url('dashboard/role')}}">Cancelar</a>
            </div>
        </div>
    </form>
</x-app-layout>
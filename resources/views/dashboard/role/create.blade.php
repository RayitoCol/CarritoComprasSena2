<x-app-layout>
    <form action="{{route('role.store')}}" method="post">
        <div>
            <table>
                <tbody>
                    @endforeach
                </tbody>
            </table>
            <div>
                <button type="submit">Guardar</button>
                <a href="{{url('role')}}">Cancelar</a>
            </div>
        </div>
    </form>
</x-app-layout>
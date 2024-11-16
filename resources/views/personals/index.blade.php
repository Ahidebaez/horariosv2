



    
    <!-- Formulario para agregar nuevos registros -->
    <form action="#" method="get">
        <button type="submit">Agregar Nuevo Personal</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>RFC</th>
                <th>Nombre</th>
                <th>Licenciatura</th>
                <th>Especialización</th>
                <th>Fecha Ingreso SEP</th>
                <th>Fecha Ingreso INS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personals as $personal)
                <tr>
                    <td>{{ $personal->RFC }}</td>
                    <td>{{ $personal->nombres }} {{ $personal->apellidop }} {{ $personal->apellidom }}</td>
                    <td>{{ $personal->licenciatura }}</td>
                    <td>{{ $personal->especializacion }}</td>
                    <td>{{ $personal->fecha_ing_sep }}</td>
                    <td>{{ $personal->fecha_ing_ins }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


@section("piepagina")
<div class="row fixed-bottom bg-black text-white text-center p-2">
    <div class="col-12">
        <p class="mb-0">
            <a href="https://laravel.com" target="_blank" class="text-white">Laravel</a> |
            <a href="https://www.php.net" target="_blank" class="text-white">PHP</a> |
            <a href="https://www.w3.org/standards/webdesign/htmlcss" target="_blank" class="text-white">HTML/CSS</a> |
            <a href="https://www.javascript.com" target="_blank" class="text-white">JavaScript</a> |
            <a href="https://getbootstrap.com" target="_blank" class="text-white">Bootstrap</a>
        </p>
    </div>
</div>
@endsection
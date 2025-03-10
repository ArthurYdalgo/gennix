<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome do Usuário</th>
            <th>E-mail</th>
            <th>Ativo?</th>
            <th>SuperAdmin?</th>
            <th>Sexo</th>
            <th>Posição/Função</th>
            <th>Telefone</th>
            <th>Papel</th>
            <th>Cadastrado em</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>@if( $user->active ) Sim @else Não @endif</td>
            <td>@if( $user->is_superadmin ) Sim @else Não @endif</td>
            <td>{{ $user->gender }}</td>
            <td>{{ $user->position }}</td>
            <td>{{ $user->phone }}</td>
            <td>@if($user->is_superadmin) SuperAdmin @else {{ $user->roles[0]->title }}@endif</td>
            <td>{{ $user->created_at->format("d/m/Y h:i:s") }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

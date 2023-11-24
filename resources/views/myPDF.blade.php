<!DOCTYPE html>
<html>

<head>

    <style>
        .page-break {
            page-break-after: always;
        }

        table.table-bordered>thead>tr>th {
            border: 1px solid #a1a1a1;
            padding: 4px;
        }

        table.table-bordered>tbody>tr>td {
            border: 1px solid #a1a1a1;
            padding: 4px;
        }

        .table {
            width: 100%;
        }
    </style>
</head>

<body>

    <div>
        @foreach ($users as $data)
            <table class="table table-bordered {{ !$loop->last ? 'page-break' : '' }}">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </div>

</body>

</html>

<!DOCTYPE html>
<html>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>


    <table style="width:100%">
        <tr>
            <th>Customer</th>
            <th>Gold Type</th>
            <th>Quantity</th>
        </tr>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->user->name }}</td>
                <td>
                    @foreach ($transaction->gold as $gold)
                        {{ $gold->id }}
                        <!-- Access other gold properties as needed -->
                    @endforeach
                </td>
                <td>{{ $transaction->quantity }}</td>
            </tr>
        @endforeach


    </table>

    <a href="{{ route('transaction.create') }}"> create transaction</a>

</body>

</html>

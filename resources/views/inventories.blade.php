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
            <th>Gold type</th>
            <th>Gold Inventory Type</th>
            <th>Inventory Quantity</th>
        </tr>
        @foreach ($inventories as $inventory)
            <tr>
                <td>{{ $inventory->gold->type }}</td>
                <td>
                    {{ $inventory->gold->inventory_type }}
                </td>
                <td>{{ $inventory->quantity }}</td>
            </tr>
        @endforeach


    </table>

    <a href="{{ route('inventory.create') }}"> create inventory</a>

</body>

</html>

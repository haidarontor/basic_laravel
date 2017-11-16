<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
</style>
<div class="container">

    <br/>
    <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>

    <table>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($order_info as $key => $order_info)
        <tr>
            <td>{{ ++$order_info }}</td>
            <td>{{ $order_info->order_status }}</td>
            <td>{{ $order_info->order_total }}</td>
        </tr>
        @endforeach
    </table>
</div>
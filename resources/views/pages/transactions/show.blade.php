<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <th>email</th>
        <td>{{$item->email}}</td>
    </tr>
    <tr>
        <th>number</th>
        <td>{{$item->number}}</td>
    </tr>
    <tr>
        <th>address</th>
        <td>{{$item->address}}</td>
    </tr>
    <tr>
        <th>transaction total</th>
        <td>{{$item->transaction_total}}</td>
    </tr>
    <tr>
        <th>transaction_satuts</th>
        <td>{{$item->transaction_status}}</td>
    </tr>
    <tr>
        <th>Pembelian produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>harga</th>
                </tr>
                @foreach ($item->details as $detail)
                    <tr>
                        <td>{{$detail->product->name}}</td>
                        <td>{{$detail->product->type}}</td>
                        <td>{{$detail->product->price}}</td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{route('transactions.status', $item->id)}}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check">Set Sukses</i>
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transactions.status', $item->id)}}?status=PENDING" class="btn btn-warning btn-block">
            <i class="fa fa-spinner">Set Pending</i>
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transactions.status', $item->id)}}?status=FAILED" class="btn btn-danger btn-block">
            <i class="fa fa-times">Set Gagal</i>
        </a>
    </div>
</div>
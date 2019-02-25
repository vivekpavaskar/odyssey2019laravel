@extends('dashboard.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Participants</h3>
                    </div>
                    <div class="col text-right">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                            <input id="myInput" onkeyup="searchMobile()" class="form-control" placeholder="Search by mobile number"
                                type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table id="pdetails" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Reg No.</th>
                            <th scope="col">Time</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Event Code</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Receipt No.</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($participants)>0)
                        @foreach ($participants as $p)
                        <tr>
                            <th scope="row">
                                {{ sprintf("R-%04s",$p->id) }}
                            </th>
                            <td>
                                {{ \Carbon\Carbon::parse($p->created_at)->diffForHumans() }}
                            </td>
                            <td>
                                {{ $p->fname }} {{ $p->lname }}
                            </td>
                            <td>
                                {{ $p->mobile }}
                            </td>
                            <td>
                                {{ $p->ecode }}
                            </td>
                            <td>
                                {{ $p->payment }}
                            </td>
                                @if ($p->payment == "Confirmed")
                                <td>
                                    {{ $p->receipt }}
                                </td>
                                <td>
                                    <input type="submit" value="Paid" class="btn btn-primary" disabled>
                                </td>
                                @else
                                <form action="/payment/{{ $p->id }}" method="post">
                                    @csrf
                                    <td>
                                        <input type="text" name="receipt" placeholder="Receipt No." class="form-control" required>
                                    </td>
                                    <td>
                                        <input type="submit" value="Paid" class="btn btn-success">
                                    </td>
                                </form>
                                @endif
                        </tr>
                        @endforeach
                        @else
                        No Announcements Yet!!
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function searchMobile() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("pdetails");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection

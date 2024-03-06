@extends('tampilan')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex align-items-center">
                <div class="card-header py-3">
                    @if(auth()->user()->role == 'supervisor')
                        <h3 class="font-weight-bold text-primary">Detail Document</h3>
                    @endif
                    @if(auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                        <h3 class="font-weight-bold text-primary">Detail Locations</h3>
                    @endif
                </div>
                @if(auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                    <h3 class="font-weight-bold text-primary ml-auto">
<<<<<<< HEAD
                        <a href="/locations/{{ $dataLoc->loc_number }}/update">Update</a>
=======
                        <a href="/locations/update">Update</a>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                    </h3>
                @endif
            </div>

            <div class="card-header py-3 text-center">
<<<<<<< HEAD
                <h5 class="m-0 font-weight-bold text-primary">
                    {{ $dataLoc->outbound->division->name }}
                </h5>
=======
                <h5 class="m-0 font-weight-bold text-primary">Finance</h5>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Asset Number</th>
                                @if(auth()->user()->role == 'supervisor')
                                    <th>Doc Number</th>
                                @endif
                                <th>Name</th>
                                <th>Device</th>
                                <th>PIC</th>
                                @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                    <th>Condition</th>
                                @endif
                                @if(auth()->user()->role == 'supervisor')
                                    <th class="text-center">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            @foreach ($inlocation as $data)
                                <tr>
                                    <td>{{ $data->outbound->asset->asset_number }}</td>
                                    @if(auth()->user()->role == 'supervisor')
                                        <td>{{ $data->outbound->document->document_number }}</td>
                                    @endif
                                    <td>{{ $data->outbound->name }}</td>
                                    <td>{{ $data->outbound->asset->device->name }}</td>
                                    <td>{{ $data->outbound->pic }}</td>
                                    @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                        <td>{{ $data->outbound->condition->type }}</td>
                                    @endif
                                    @if(auth()->user()->role == 'supervisor')
                                        <td class="text-center">
                                            <a href="{{ route('locations.view', ['location' => $data->loc_number, 'id' => $data->outbound->document->id]) }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
=======
                            <tr>
                                <td>ASN-000003</td>
                                @if(auth()->user()->role == 'supervisor')
                                    <th>DocN-000002</th>
                                @endif
                                <td>Lenovo Yoga i9</td>
                                <td>Laptop</td>
                                <th>Humam Septi</th>
                                @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                    <th>Good</th>
                                @endif
                                @if(auth()->user()->role == 'supervisor')
                                    <th class="text-center">
                                        <a href="/locations/information" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                    </th>
                                @endif
                            </tr>
                            <tr>
                                <td>ASN-000005</td>
                                @if(auth()->user()->role == 'supervisor')
                                    <th>DocN-000004</th>
                                @endif
                                <td>APPLE MacBook Air</td>
                                <td>Laptop</td>
                                <th>Sehan Adillah</th>
                                @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                    <th>Not Good</th>
                                @endif
                                @if(auth()->user()->role == 'supervisor')
                                    <th class="text-center">
                                        <a href=" " class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                    </th>
                                @endif
                            </tr>
                            <tr>
                                <td>ASN-000006</td>
                                @if(auth()->user()->role == 'supervisor')
                                    <th>DocN-000005</th>
                                @endif
                                <td>Dell Latitude 7390</td>
                                <td>Laptop</td>
                                <th>Bagas Andoko</th>
                                @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                    <th>Good</th>
                                @endif
                                @if(auth()->user()->role == 'supervisor')
                                    <th class="text-center">
                                        <a href=" " class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                    </th>
                                @endif
                            </tr>
                            <tr>
                                <td>ASN-000007</td>
                                @if(auth()->user()->role == 'supervisor')
                                    <th>DocN-000007</th>
                                @endif
                                <td>Asus ZenBook 14</td>
                                <td>Laptop</td>
                                <th>Deni Bagas</th>
                                @if (auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                                    <th>Not Good</th>
                                @endif
                                @if(auth()->user()->role == 'supervisor')
                                    <th class="text-center">
                                        <a href=" " class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                    </th>
                                @endif
                            </tr>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

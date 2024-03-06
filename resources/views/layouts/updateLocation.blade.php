@extends('tampilan')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex align-items-center">
                <h3 class="font-weight-bold text-primary">Update</h3>

                <h3 class="font-weight-bold text-primary ml-auto">
                    <a href="{{ route('locations.index', ['location' => $dataLoc->loc_number]) }}">Detail</a>
                </h3>
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
                                <th>Name</th>
                                <th>Device</th>
                                <th>PIC</th>
                                <th>Condition</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            @foreach ($inlocation as $data)
                                <tr>
                                    <td>{{ $data->outbound->asset->asset_number }}</td>
                                    <td>{{ $data->outbound->name }}</td>
                                    <td>{{ $data->outbound->asset->device->name }}</td>
                                    <td>{{ $data->outbound->pic }}</td>
                                    <td>{{ $data->outbound->condition->type }}</td>
                                    <td class="text-center">
                                        {{-- edit --}}
                                        <a href="{{ route('locations.edit', ['location' => $data->loc_number, 'id' => $data->outbound->id]) }}" class="btn btn-primary mr-4">
                                            <i class="bi bi-wrench-adjustable-circle-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
=======
                            <tr>
                                <td>ASN-000003</td>
                                <td>Lenovo Yoga i9</td>
                                <td>Laptop</td>
                                <th>Humam Septi</th>
                                <th>Good</th>
                                <td class="text-center">
                                    {{-- edit --}}
                                    <a href="/locations/edit" class="btn btn-primary mr-4">
                                        <i class="bi bi-wrench-adjustable-circle-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>ASN-000005</td>
                                <td>APPLE MacBook Air</td>
                                <td>Laptop</td>
                                <th>Sehan Adillah</th>
                                <th>Not Good</th>
                                <td class="text-center">
                                    {{-- edit --}}
                                    <a href=" " class="btn btn-primary mr-4">
                                        <i class="bi bi-wrench-adjustable-circle-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>ASN-000006</td>
                                <td>Dell Latitude 7390</td>
                                <td>Laptop</td>
                                <th>Bagas Andoko</th>
                                <th>Good</th>
                                <td class="text-center">
                                    {{-- edit --}}
                                    <a href=" " class="btn btn-primary mr-4">
                                        <i class="bi bi-wrench-adjustable-circle-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>ASN-000007</td>
                                <td>Asus ZenBook 14</td>
                                <td>Laptop</td>
                                <th>Deni Bagas</th>
                                <th>Not Good</th>
                                <td class="text-center">
                                    {{-- edit --}}
                                    <a href=" " class="btn btn-primary mr-4">
                                        <i class="bi bi-wrench-adjustable-circle-fill"></i>
                                    </a>
                                </td>
                            </tr>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

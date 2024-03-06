@extends('tampilan')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                @if(auth()->user()->role == 'supervisor')
                    <h3 class="font-weight-bold text-primary">Document</h3>
                @endif
                @if(auth()->user()->role == 'staff' || auth()->user()->role == 'admin')
                    <h3 class="font-weight-bold text-primary">Locations</h3>
                @endif
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Location Number</th>
                                <th>Name Location</th>
                                <th class="text-center">Sum Goods</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            @foreach ($groupedInlocations as $locNumber => $group)
                                <tr>
                                    <td>{{ $locNumber }}</td>
                                    <td>{{ $group->first()->outbound->division->information }}</td>
                                    <td class="text-center">{{ $group->count() }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('locations.index', $locNumber) }}" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
=======
                            <tr>
                                <td>LN-0000001</td>
                                <td>IT</td>
                                <td class="text-center">2</td>
                                <td class="text-center">
                                    <a href="/locations/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>LN-0000002</td>
                                <td>HC</td>
                                <td class="text-center">1</td>
                                <td class="text-center">
                                    <a href="/locations/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>LN-0000003</td>
                                <td>Finance</td>
                                <td class="text-center">4</td>
                                <td class="text-center">
                                    <a href="/locations/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>LN-0000004</td>
                                <td>Secretary</td>
                                <td class="text-center">10</td>
                                <td class="text-center">
                                    <a href="/locations/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>LN-0000005</td>
                                <td>HRD</td>
                                <td class="text-center">13</td>
                                <td class="text-center">
                                    <a href="/locations/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>LN-0000006</td>
                                <td>Management</td>
                                <td class="text-center">8</td>
                                <td class="text-center">
                                    <a href="/locations/detail" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
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

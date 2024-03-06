<<<<<<< HEAD
@extends('tampilan')
=======
@extends('body')
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow">

<<<<<<< HEAD
            <div class="mt-5 card-header d-flex align-items-center">
                <h4 class="font-weight-bold text-primary ml-auto">
                </h4>
            </div>

            <div class="card-header text-center py-3">
=======
            <div class="mt-2 mr-5 card-header d-flex align-items-center">
                <h4 class="font-weight-bold text-primary ml-auto">
                    <a href=" " target="_blank">
                        <i class="bi bi-download"></i>
                    </a>
                </h4>
            </div>

            <div class="card-header text-center">
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                <h1 class="font-weight-bold text-primary">
                    Detail Information
                </h1>
            </div>

            <div class="container-fluid">
                <div class="container">

                    <div class="mt-3 mb-3 row">
<<<<<<< HEAD
                        <label class="col-sm-2 col-form-label">Asset Number</label>
                        <div class="col-sm-10">
                            : {{ $data->outbound->asset->asset_number }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            : {{ $data->name }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Device</label>
                        <div class="col-sm-10">
                            : {{ $data->device->name }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            : {{ $data->outbound->asset->explanation }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">PIC</label>
                        <div class="col-sm-10">
                            : {{ $data->outbound->pic }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Condition</label>
                        <div class="col-sm-10">
                            : {{ $data->outbound->condition->type }}
=======
                        <label class="col-sm-2 col-form-label">Asset Number : </label>
                        <div class="col-sm-10">
                            ASN-000003
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Name : </label>
                        <div class="col-sm-10">
                            Lenovo Yoga i9
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Device : </label>
                        <div class="col-sm-10">
                           Laptop
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Description : </label>
                        <div class="col-sm-10">
                            Specifications:
                            - Processor Intel Core i9-13905H, 14C (6P + 8E) / 20T, P-core 2.6 / 5.4GHz, E-core 1.9 / 4.1GHz, 24MB
                            - Graphics NVIDIA GeForce RTX 4060 8GB GDDR6
                            - Memory 32GB Soldered LPDDR5x-6400
                            - Storage 1TB SSD M.2 2280 PCIe 4.0x4 NVMe
                            - OS Windows 11 Home + Bundled OHS 2021
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">PIC : </label>
                        <div class="col-sm-10">
                            Humam Septi
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Condition : </label>
                        <div class="col-sm-10">
                            Good
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

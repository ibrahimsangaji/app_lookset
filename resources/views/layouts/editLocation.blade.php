<<<<<<< HEAD
@extends('tampilan')
=======
@extends('body')
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646

@section('content')
    <div class="container-fluid">
        <div class="container">

            <div class="card-header py-3 text-center">
<<<<<<< HEAD
                <h1 class="mt-5 font-weight-bold text-primary">{{ $data->asset->asset_number }}</h1>
            </div>

            @if ($errors->any())
                <div class="mt-2 alert alert-danger">
=======
                <h1 class="mt-5 font-weight-bold text-primary">ASN-000003</h1>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

<<<<<<< HEAD
            <form method="post" action="{{ route('locations.update', ['location' => $data->inlocation->loc_number, 'id' => $data->id]) }}">
                @csrf
                @method('PUT')
                <div class="mt-5 mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" value="{{ $data->name }}" readonly>
=======
            <form method="post" action="{{ route('inbound.process') }}">
                @csrf
                <div class="mt-5 mb-3 row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" value="Lenovo Yoga i9" readonly>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputDevice" class="col-sm-2 col-form-label">Device</label>
                    <div class="col-sm-10">
<<<<<<< HEAD
                        <input type="text" class="form-control" id="inputDevice" name="device" value="{{ $data->asset->device->name }}" readonly>
=======
                        <input type="text" class="form-control" id="inputName" name="name" value="Laptop" readonly>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
<<<<<<< HEAD
                        <textarea class="form-control" id="inputDescription" name="explanation" rows="3">{{ $data->asset->explanation }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPic" class="col-sm-2 col-form-label">PIC</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPic" name="pic" value="{{ $data->pic }}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputCondition" class="col-sm-2 col-form-label">Condition</label>
                    <div class="col-sm-10">
                        <select name="condition_id" id="inputCondition" class="form-select form-control" required>
                            <option value="" disabled selected>Select Condition</option>
                            @foreach ($conditions as $condition)
                                <option value="{{ $condition->id }}">{{ $condition->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputSoftware" class="col-sm-2 col-form-label">Software</label>
                    <div class="col-sm-10">
                        <select name="software_id" id="inputSoftware" class="form-select form-control">
                            <option value="" disabled selected>Select Software</option>
                            @foreach ($softwares as $software)
                                <option value="{{ $software->id }}">{{ $software->name }}</option>
                            @endforeach
=======
                        <textarea class="form-control" id="inputDescription" name="explanation" rows="3" placeholder="RAM 32 GB, SSD 1 TB"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputRack" class="col-sm-2 col-form-label">PIC</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" value="Humam Septi" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputSoftware" class="col-sm-2 col-form-label">Condition</label>
                    <div class="col-sm-10">
                        <select name="software_id" id="inputSoftware" class="form-select form-control" required>
                            <option value="" disabled selected>Select Condition</option>
                            <option value=" ">Very Good</option>
                            <option value=" ">Good</option>
                            <option value=" ">Not Good</option>
>>>>>>> b1e0aae16abcedcd620b668dd20bd0ce8843d646
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right mb-3">Update Data</button>
            </form>

        </div>
    </div>
@endsection

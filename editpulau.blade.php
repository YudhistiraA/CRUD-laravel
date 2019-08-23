@extends('index')
@section('Cont')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Edit Kontak</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('pulau.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">code</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->code }}">
                </div>
                
                <div class="form-group">
                    <label for="nohp">deskripsi</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $datas->descripton }}">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
@extends('index')
@section('n')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Tambah Kontak</h1>
            <hr>
            <form action="{{ route('pulau.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">code:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                
                <div class="form-group">
                    <label for="nohp">deskripsi:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
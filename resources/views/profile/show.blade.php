@extends('template.master')

@section('title')
    <h3>{{ $title }}</h3>
    <p class="text-subtitle text-muted">{{ $subtitle }}</p>
@endsection

@section('content')
  <section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $content }}</h4>
        </div>
        <div class="card-body">
        <div class="form-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="nama">First Name</label>
  
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ $profiles->nama }}" disabled>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                          <textarea class="form-control" id="alamat" name="alamat" rows="3" disabled> {{ $profiles->alamat }} </textarea>
                    </div>
                </div>
                <div class="col-12 d-flex">
                  <div class="col-6 d-flex justify-content-start">
                    <a href="{{ route('profile.index') }}" class="btn btn-light-primary me-1 mb-1">
                      Back
                    </a>
                  </div>
                  <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('profile.edit', [$profiles->id]) }}" class="btn btn-light-warning me-1 mb-1">
                      Edit
                    </a>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection

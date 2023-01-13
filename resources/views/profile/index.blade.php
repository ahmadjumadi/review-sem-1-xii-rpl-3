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
        <div class="table-responsive">
          <table class="table table-hover mb-0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($profiles as $profile)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $profile->nama }}</td>
                  <td>{{ $profile->alamat }}</td>
                  <td>
                    <form action="{{ route('profile.destroy', [$profile->id]) }}" method="post">
                      {{-- <a href="/post/{{ $profile->id }}">Edit</a> --}}
                      <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-sm btn-light-info">Detail</a>
                      <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-sm btn-light-warning">Edit</a>
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-sm btn-light-danger">
                    </form>
                  </td>
                </tr>
              @endforeach
              </tbody>
          </table>
      </div>
    </div>
  </div>
</section>
@endsection
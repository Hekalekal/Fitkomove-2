@extends('layouts.app')

@section('title', 'Dashboard - Fitkomove')

@section('content')
<div class="container py-5">

    @if (session('success'))
        <div class="alert alert-success border-0 text-white mb-4 d-flex align-items-center gap-2" 
             style="background-color: #198754; border-left: 5px solid #0f5132 !important;">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row g-4">
        
        <div class="col-lg-4">
            <div class="custom-card p-4 text-center h-100 shadow-lg">
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle border border-danger border-3 shadow" 
                     style="width: 120px; height: 120px; background-color: #000;">
                    <span class="display-4 fw-bold text-white">{{ substr($user->name, 0, 1) }}</span>
                </div>
                
                <h3 class="text-white fw-bold mb-1">{{ $user->name }}</h3>
                <p class="text-secondary small mb-4">{{ $user->email }}</p>
                
                <hr class="border-secondary opacity-50">

                <div class="text-start px-2 mt-4">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-secondary">Umur</span>
                        <span class="text-white fw-bold">{{ $user->age ? $user->age . ' Tahun' : '-' }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-secondary">Gender</span>
                        <span class="text-white fw-bold">{{ $user->gender ?? '-' }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-secondary">Pekerjaan</span>
                        <span class="text-white fw-bold">{{ $user->job ?? '-' }}</span>
                    </div>
                </div>

                <button type="button" class="btn btn-outline-light w-100 py-2 fw-bold mb-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                    EDIT PROFILE
                </button>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100 py-2 fw-bold">
                        LOGOUT
                    </button>
                </form>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="text-white fw-bold border-start border-4 border-danger ps-3 mb-0">JADWAL HARI INI</h4>
                    <span class="badge bg-dark border border-secondary">{{ date('d M Y') }}</span>
                </div>

                <div class="row g-3">
                    @forelse($schedules as $schedule)
                    <div class="col-12">
                        <div class="custom-card p-3 d-flex align-items-center justify-content-between hover-effect">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-black rounded p-2 text-center border border-secondary" style="min-width: 80px;">
                                    <small class="d-block text-danger fw-bold">JAM</small>
                                    <span class="text-white fw-bold h5 mb-0">{{ $schedule['time'] }}</span>
                                </div>
                                <div>
                                    <h5 class="text-white mb-0 fw-bold">{{ $schedule['activity'] }}</h5>
                                    <small class="text-secondary">Status: <span class="text-success">{{ $schedule['status'] }}</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12"><div class="alert alert-dark">Belum ada jadwal.</div></div>
                    @endforelse
                </div>
            </div>

            <div>
                <h4 class="text-white fw-bold border-start border-4 border-danger ps-3 mb-4">REKOMENDASI</h4>
                <div class="row g-3">
                    @foreach($recommendations as $rec)
                    <div class="col-md-4">
                        <div class="custom-card h-100 p-4 position-relative overflow-hidden hover-effect">
                            <div class="position-absolute top-0 end-0 bg-danger text-white px-2 py-1 small fw-bold">
                                {{ $rec['level'] }}
                            </div>
                            <h5 class="text-white fw-bold mt-2">{{ $rec['title'] }}</h5>
                            <p class="text-secondary small">Durasi: {{ $rec['duration'] }}</p>
                            <button class="btn btn-sm btn-outline-light w-100">MULAI</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editProfileModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-white" style="background-color: #141414; border: 1px solid #333;">
            <div class="modal-header border-secondary">
                <h5 class="modal-title fw-bold">Edit Profile</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="small text-secondary">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="small text-secondary">Umur</label>
                            <input type="number" name="age" class="form-control" value="{{ $user->age }}">
                        </div>
                        <div class="col-6 mb-3">
                            <label class="small text-secondary">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="" class="text-secondary">Pilih...</option>
                                <option value="Laki-laki" {{ $user->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $user->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="small text-secondary">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" value="{{ $user->job }}">
                    </div>
                </div>
                <div class="modal-footer border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .hover-effect { transition: transform 0.2s ease, border-color 0.2s ease; }
    .hover-effect:hover { transform: translateY(-5px); border-color: #dc3545 !important; }
</style>
@endsection
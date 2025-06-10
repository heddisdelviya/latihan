@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Daftar Barang</h1>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Barang
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($barangs as $index => $barang)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $barang->kode }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>Rp {{ number_format($barang->harga, 2, ',', '.') }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>
                            <a href="{{ route('barang.show', $barang) }}" class="btn btn-info btn-sm" title="Lihat">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm" title="Edit">

                            <a href="{{ route('barang.edit', $barang) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('barang.destroy', $barang) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data barang</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

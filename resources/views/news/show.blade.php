@extends('layouts.main')

@section('container')
<article class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h1 class="text-3xl font-bold mb-4">{{ $news->judul }}</h1>
        <p class="text-gray-600 mb-2">Oleh {{ $news->wartawan->nama }} | {{ $news->created_at->format('d M Y') }}</p>
        <div class="prose max-w-none">
            {{-- pake {!! !!} agar tag html tidak terender --}}
            {!! $news->isi !!}
        </div>
    </article>
    <a href="{{ route('news.index') }}" class="text-blue-600 hover:underline">← Kembali ke Daftar Berita</a>

<div class="bg-white rounded-lg p-6 mt-4">
    <form action="#" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="nama" class="block text-gray-700 font-semibold mb-1">Nama</label>
            <input type="text" name="nama" id="nama"
                class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label for="komen" class="block text-gray-700 font-semibold mb-1">Komen</label>
            <input type="text" name="komen" id="komen"
                class="w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-200">
        </div>

        <div>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600">
                Kirim
            </button>
        </div>
    </form>
</div>

<div class="rounded-lg p-6 mt-4">
    <h3 class="text-lg font-semibold mb-4">Komentar:</h3>

    @if($news->komentar->count() > 0)
    @foreach($news->komentar as $komen)
    <div class="border border-gray-300 rounded-md p-4 mb-3 bg-gray-50">
        <p class="text-sm text-gray-700 mb-1"><strong>{{ $komen->nama }}</strong></p>
        <p class="text-gray-800">{{ $komen->isi }}</p>
    </div>
    @endforeach
    @else
    <p class="text-gray-500 italic">Belum ada komentar.</p>
    @endif
</div>

@endsection
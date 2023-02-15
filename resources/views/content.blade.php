@extends('layouts.app')
@section('container')
<div class="flex flex-col w-[80%] m-auto rounded-lg shadow-xl border-2 border-blue-500 shrink-0">
    <a class="w-fit py-2 px-3 inline-flex rounded-md bg-indigo-400 text-white shrink-0 font-semibold"
        href="/contents">Kembali</a>
    <div class="flex text-3xl text-bold text-center capitalize border-2 border-red-500">
        {{ $content->judul_content }}
    </div>
    <div>
        <p class="m-4 text-justify text-xl leading-relaxed first-letter:font-semibold first-letter:text-6xl">
            {{ $content->isi_content }}
        </p>
    </div>

</div>


@endsection
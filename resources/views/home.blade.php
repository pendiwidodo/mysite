@extends('layouts.app')
@section('container')
<!-- start percobaan  -->
<div class="h-full w-1/2 border-2 border-red-500 mx-auto items-center shrink-0">
    {{-- <div class="flex w-full justify-between">
        <div
            class="flex items-center justify-center h-32 w-32 rounded-full drop-shadow-2xl border-2 border-emerald-500">
            <img class="w-20 h-20 " src="/src/icon/before-round.png" alt="kiri">
        </div>
        <div class="h-40 w-32 shrink-0 rounded-md drop-shadow-2xl overflow-hidden">
        </div>
        <div
            class="flex items-center justify-center h-32 w-32 rounded-full drop-shadow-2xl border-2 border-emerald-500">
            <img class="w-20 h-20 " src="/src/icon/next-round.png" alt="kiri">
        </div>
    </div> --}}

    <div class="relative overflow-hidden shadow-lg rounded-lg grid gap-y-4 grid-row-2">
        @if (empty($testing))
        <div class="flex h-52 flex-row rounded-lg m-2 border-2 border-green-600">
            <div class="flex relative overflow-hidden shadow-lg rounded-lg h-full w-full">
                <div class="flex flex-row w-full relative animate-pulse">
                    <div class="w-1/2 m-2">
                        <div class="h-full rounded-md bg-gray-200 shrink-0"></div>
                    </div>
                    <div class="flex flex-col space-y-4 w-1/2 m-3">
                        <div class="w-full h-4 rounded-md shrink-0 line-clamp-1 bg-gray-200"></div>
                        <div class="flex flex-col space-y-2">
                            <span class="bg-gray-200 text-sm h-2 w-[70%] rounded-md" alt="nothing"></span>
                            <span class="bg-gray-200 text-sm h-2 w-[70%] rounded-md" alt="nothing"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="flex h-52 flex-row rounded-lg m-2 border-2 border-blue-600">
            <div class="flex relative overflow-hidden shadow-lg rounded-lg h-full w-full">
                <div class="flex flex-row w-full relative animate-pulse">
                    <div class="w-1/2 m-2">
                        <div class="h-full rounded-md bg-gray-200 shrink-0"></div>
                    </div>
                    <div class="flex flex-col space-y-4 w-1/2 m-3">
                        <div class="w-full h-4 rounded-md shrink-0 line-clamp-1 bg-gray-200"></div>
                        <div class="flex flex-col space-y-2">
                            <span class="bg-gray-200 text-sm h-2 w-[70%] rounded-md" alt="nothing"></span>
                            <span class="bg-gray-200 text-sm h-2 w-[70%] rounded-md" alt="nothing"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@extends('layouts.app')
@section('container')
<!-- start content  -->
<article class="flex flex-col space-y-4 my-10 mx-auto w-[90%] lg:w-[70%] ">
    <div class="container_card mx-auto grid w-[60%] gap-8 grid-cols-1 md:w-[70%] lg:w-full lg:grid-cols-2">
        <template id="card_template">
            <div class="card flex items-center relative overflow-hidden shadow-lg rounded-lg h-full w-full loading">
                <div class="skeleton_animasi animate-pulse flex flex-row space-x-3 w-full relative m-2">
                    <div class="skeleton_gambar bg-gray-300 relative h-32 w-1/2 rounded-md shrink-0  m-2">
                        <img id="gambar_content" class="lazy hidden h-full w-full rounded-lg shadow-lg" data-src=""
                            src="" alt="" loading="lazy">
                    </div>
                    <div class="flex flex-col space-y-3 w-1/2 m-2">
                        <div class="skeleton_judul bg-gray-300 w-full h-12 rounded-md shrink-0 line-clamp-2">
                            <p id="judul_content" class="hidden"></p>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <span class="skeleton_creator bg-gray-300 text-sm h-5 w-[70%] rounded-md" alt="nothing">
                                <span class="hidden">
                                    Created By
                                    <span id="creator_content" class="hidden text-blue-500"></span>
                                </span>
                            </span>
                            <div class="skeleton_creator bg-gray-300 text-sm h-5 w-[70%] rounded-md" alt="nothing">
                                <span id="created_at" class="hidden"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <a id="link_content" class="absolute top-0 h-full w-full" href=""></a> --}}
            </div>
        </template>
    </div>
    <div class="containerLoad bg-gray-100 mx-auto grid w-[60%] gap-8 grid-cols-1 md:w-[70%] lg:w-full lg:grid-cols-2">
    </div>

</article>
@endsection
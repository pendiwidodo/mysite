@extends('layouts.app')
@section('container')
<!-- start content  -->
<article class="flex flex-col space-y-4 my-10 mx-auto w-[90%] lg:w-[70%] ">
    {{-- <div class="flex flex-row space-x-4">
        <div class="mx-auto relative rounded-lg overflow-hidden shadow-lg">
            <img class="w-full rounded-t-lg relative" src="{{ asset('image/anime.jpg') }}"
                alt="Sunset in the mountains">
            <div class="p-2">
                <a class="text-left font-bold text-xl mb-2 text-ellipsis line-clamp-1 lg:line-clamp-2 hover:text-blue-500"
                    href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa sint provident earum qui,
                    culpa
                    aliquam sit veritatis excepturi laborum quo consectetur animi labore, obcaecati ab. Cumque, quae?
                    Cumque, dicta suscipit.30</a>
            </div>
            <div class="pb-2 px-2">
                <div class="text-left text-sm mb-2">By <span class="text-blue-500"> Admin </span>- November 16 2022
                </div>
            </div>
        </div>
        <div class="mx-auto relative rounded-lg overflow-hidden shadow-lg">
            <img class="w-full rounded-t-lg relative" src="{{ asset('image/anime.jpg') }}"
                alt="Sunset in the mountains">
            <div class="p-2">
                <a class="text-left font-bold text-xl mb-2 text-ellipsis line-clamp-1 lg:line-clamp-2 hover:text-blue-500"
                    href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa sint provident earum qui,
                    culpa
                    aliquam sit veritatis excepturi laborum quo consectetur animi labore, obcaecati ab. Cumque, quae?
                    Cumque, dicta suscipit.30</a>
            </div>
            <div class="pb-2 px-2">
                <div class="text-left text-sm mb-2">By <span class="text-blue-500"> Admin </span>- November 16 2022
                </div>
            </div>
        </div>
        <div class="mx-auto relative rounded-lg overflow-hidden shadow-lg">
            <img class="w-full rounded-t-lg relative" src="{{ asset('image/anime.jpg') }}"
                alt="Sunset in the mountains">
            <div class="p-2">
                <a class="text-left font-bold text-xl mb-2 text-ellipsis line-clamp-1 lg:line-clamp-2 hover:text-blue-500"
                    href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa sint provident earum qui,
                    culpa
                    aliquam sit veritatis excepturi laborum quo consectetur animi labore, obcaecati ab. Cumque, quae?
                    Cumque, dicta suscipit.30</a>
            </div>
            <div class="pb-2 px-2">
                <div class="text-left text-sm mb-2">By <span class="text-blue-500"> Admin </span>- November 16 2022
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container_card mx-auto grid w-[60%] gap-8 grid-cols-1 md:w-[70%] lg:w-full lg:grid-cols-2">
        <template id="card_template">
            <div class="flex items-center relative overflow-hidden shadow-lg rounded-lg h-full w-full">
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
</article>
@endsection
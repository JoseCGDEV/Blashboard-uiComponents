<div
  class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between"
>
  <span class="text-xs xs:text-sm text-gray-900">
    Showing {{$values->count()}} to {{$values->perPage()}} of
    {{$values->total()}} Entries
  </span>
  <div class="inline-flex mt-2 xs:mt-0">
    <a
      href="{{$values->previousPageUrl()}}"
      class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l"
    >
      Prev
    </a>
    <a
      href="{{$values->nextPageUrl()}}"
      class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r"
    >
      Next
    </a>
  </div>
</div>

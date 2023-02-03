<div class="align-center text-center justify-center  relative w-70 flex flex-col ">
        <ul class="flex space-x-6 mx-auto text-lg ">
 <li>
        <a href="?location=gifs" class="hover:text-laravel"><i class="fa-solid fa-folder-open"></i>Gifs</a>
      </li>
       <li>
        <a href="?location=static" class="hover:text-laravel"><i class="fa-solid fa-folder-open"></i>Imagen estatica</a>
      </li>
    </ul>
</div>
<form action="/">
  <div class="relative border-2 border-gray-100 m-4 rounded-lg ">
    <div class="absolute top-4 left-3">
      <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
    </div>
    
    <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
      placeholder="Search programming memes💾..." />
    <div class="absolute top-2 right-2">
      <button type="submit" class="h-10 w-20 text-white rounded-lg bg-black hover:bg-red-600">
        Search
      </button>
    </div>
    <!-- @foreach($listings as $listing)
    
<x-listing-tags :tagsCsv="$listing->tags" />
    @endforeach -->

 @if($listings)
      
      <h1 class="text-6xl text-center font-bold uppercase text-black">
      Filter<span class="text-yellow-500">The Memes</span>
    </h1>
    
    <div class="m-auto w-1/2 text-center">
  <h2 class="text-2xl font-bold text-blue-500">Por tags</h2>
       <x-listing-tags :tagsCsv="$listing->tags" />
     <h2 class="text-2xl text-blue-500 font-bold">Por nombre de compañias = laravel, php,etc..</h2>
<ul class="flex">
 
  @foreach($listings as $listing)
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
      <a href="?company={{$listing->company}}"> {{$listing->company}}
     </a>
  </li>
  @endforeach
</ul>

         
     <!-- Por nombre de  -->
     <h2 class="text-2xl font-bold text-blue-500">Por Gifs o Imagenes estaticas</h2>
<ul class="flex">
 
  @foreach($listings as $listing)
  <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
      <a href="?location={{$listing->location}}"> {{$listing->location}}
     </a>
  </li>
  @endforeach
</ul>
</div>


   @else
    <p>Doesnt's exist listings.</p>
  @endif

  </div>
</form>
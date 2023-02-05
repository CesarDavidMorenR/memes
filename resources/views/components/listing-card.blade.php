@props(['listing'])

<x-card>
   <h2>To get the link to the Meme, Click in the meme 😌 </h2>
  <div class="flex">

  

  <a href="/storage/{{$listing->logo}}"> 
    <img class="hidden w-48 mr-6 md:block"
       src="{{$listing->logo ? asset('storage/' . $listing->logo) : $listing->logolink }}"  alt="" />
       </a>
    <div>
     
    <h3 class="text-2xl">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>

      <div class="text-xl font-bold mb-4">
        
     <a href="/listings/{{$listing->company}}"> {{$listing->company}}
     </a>

      </div>


      <x-listing-tags :tagsCsv="$listing->tags" />
      
      <div class="text-lg mt-4">

        <i class="fa-solid fa-face-laugh-squint"></i> {{$listing->location}}
      </div>
    </div>
  </div>
</x-card>
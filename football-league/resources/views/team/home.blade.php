
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>



<div class="bg-black h-screen">


<!-- cabecera -->
@include('partials.nav')

<!-- texto -->
<div class=" md:grid-cols-1">

<figure class="flex flex-col items-center justify-center p-8 text-center bg-black ">

<blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">

<h3 class="text-5xl font-semibold text-gray-900 dark:text-white">Teams</h3>

</blockquote>
</div>



<!-- equipos -->

<div class="grid border border-black  shadow-sm dark:border-black  md:grid-cols-2">

  @foreach($teams as $team)
  <figure class="flex flex-col items-center justify-center p-8 text-center bg-black border border-gray-200 md:border dark:bg-black dark:border-gray-500">
        <a href='team/{{$team->id}}'>

          <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
          <figcaption class="flex items-center justify-center space-x-3">
              <h3 class="text-2xl text-center font-semibold text-gray-900 dark:text-white">{{$team->name}} </h3>   
              <img class="rounded-full w-12 h-12" src= "{{ asset('images/'. $team->img_path) }}">
              
          </figcaption>    
          </blockquote>

          <figcaption class="flex items-center justify-center space-x-3">
                <div class="text-xl text-center  space-y-0.5 font-medium dark:text-white text-left">
                  <div>Coach: {{$team->dt}}</div>
                  <div class="text-base  text-center  font-light text-gray-500 dark:text-gray-400">Stadium : {{$team->stadium}}</div>
              </div>
          </figcaption>    
          </a>
          </figure>
@endforeach 

       
        <!-- end prueba -->


    
</div>

<div class="grid grid-cols-1 p-8 ">
  <div class="flex justify-around">
   
    <a href="{{route('createteam')}}" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Create a team</a>

    <a href="{{route('creatematch')}}" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Create a match</a>
  
  </div>
</div>


<!-- footer -->

@include('partials.footer')
</div>

</body>
</html>


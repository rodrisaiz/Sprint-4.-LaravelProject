<!doctype html>
  <html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
    </head>


    <body class="bg-black ">
      <div>

      <!-- navbar -->
      @include('partials.nav')

        <div class=" md:grid-cols-1">

          <figure class="flex flex-col items-center justify-center p-8 text-center bg-black ">
            <blockquote class="max-w-2xl mx-auto mb-4  lg:mb-8 text-gray-400">
              <h3 class="text-5xl font-semibold text-white">{{$game->team1->name}}</h3>
              <h3 class="text-5xl font-semibold text-white">vs</h3>
              <h3 class="text-5xl font-semibold text-white">{{$game->team2->name}}</h3>
            </blockquote>
        </div>



        <!-- title -->

        <div class="grid border   shadow-sm border-black  md:grid-cols-1">

          <a class="flex flex-col items-center  place-content-center  border  rounded-lg shadow md:flex-row  md:grid border border-gray-200 md:border bg-black border-gray-500"> 
            <div  class="flex flex-row items-center md:flex-row">

              <img class="rounded-full m-10  w-40 h-40" src= "{{ asset('images/'. $game->team1->img_path) }}">
              
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-4xl text-center font-bold tracking-tight text-white">{{$game->team1->name}}</h5>
                <p class="mb-7  text-xl font-normal  text-center text-gray-400">HC : {{$game->team1->dt}}</p>
              </div>
                
            <h5 class="mb-2 text-5xl font-bold tracking-tight text-white"> - </h5>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-4xl text-center font-bold tracking-tight text-white">{{$game->team2->name}}</h5>
                <p class="mb-7 text-xl font-normal  text-center text-gray-400">HC : {{$game->team2->dt}}</p>
              </div>
              
              <img class="rounded-full  m-10  w-40 h-40" src= "{{ asset('images/'. $game->team2->img_path) }}">
      
            </div>
            
            <div>
              <p class="mb-3 text-xl font-normal text-center text-gray-400">Stadium: {{$game->stadium}}</p>
              <p class="mb-3 text-xl font-normal text-center text-gray-400">Score: {{$game->goals_Team1}} - {{$game->goals_Team2}}</p>
            
              @if(isset($game->date))
              {  
                <p class="mb-3  text-xlfont-normal text-center text-gray-400">Date: {{$game->date}} </p>
              }
              @else{

                <p class="mb-3 text-xl font-normal text-center text-gray-400">Date: Not assigned yet </p>
              }
              @endif

              @if(isset($game->time))
              {  
                <p class="mb-3  text-xl font-normal text-center text-gray-400">Time: {{$game->time}} </p>
              }
              @else{

                <p class="mb-3 text-xl font-normal text-center text-gray-400">Time: Not assigned yet </p>
              }
              @endif

            </div>
          </a>
            
          <!--buttons -->

          <div class="grid grid-cols-1 p-8 ">
            <div class="flex justify-around m-20">
              
              <form>
                <a href="{{route('deletematch', $game)}}" type="button" class="text-white bg-red-500 hover:bg-red-800 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-red-500  focus:ring-red-900">Delete</a>
              </form>

              <form>
                <a href="{{route('matches')}}" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:outline-none  font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-gray-500  focus:ring-gray-900">Cancel</a>
              </form>

              <a href="{{route('editmatch', $game->id)}}" type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-500  focus:ring-blue-900">Modify</a>
            
            </div>
        </div>
      <!-- footer -->

      @include('partials.footer')
      </div>

    </body>
  </html>


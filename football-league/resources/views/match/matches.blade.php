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

    <!-- title -->
      <div class=" md:grid-cols-1">

        <figure class="flex flex-col items-center justify-center p-8 text-center bg-black ">

          <blockquote class="max-w-2xl mx-auto mb-4 lg:mb-8 text-gray-400">

            <h3 class="text-5xl font-semibold text-white">Games</h3>

          </blockquote>
      </div>

      <!-- matches -->

      <div class="grid border shadow-sm border-black  md:grid-cols-2">

        @foreach($games as $game)      
          <a href="match/{{$game->id}}" class="flex flex-col items-center  place-content-center border  rounded-lg shadow md:flex-row  md:grid bg-black border border-gray-200 md:border bg-black border-gray-500">
            <div  class="flex flex-row items-center md:flex-row"> 

              <img class="rounded-full m-4 w-12 h-12" src= "{{ asset('images/'. $game->team1->img_path) }}">

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-white">{{$game->team1->name}}</h5>
                <p class="mb-3 font-normal  text-center text-gray-400">HC : {{$game->team1->dt}}</p>
              </div>
  
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> - </h5>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-white">{{$game->team2->name}}</h5>
                <p class="mb-3 font-normal  text-center text-gray-400">HC : {{$game->team2->dt}}</p>
              </div>
              <img class="rounded-full  m-4  w-12 h-12" src= "{{ asset('images/'. $game->team2->img_path) }}">

            </div>
            
            <div>
              <p class="mb-3 font-normal text-center text-gray-400">Stadium: {{$game->stadium}}</p>
              <p class="mb-3 font-normal text-center text-gray-400">Score: {{$game->goals_Team1}} - {{$game->goals_Team2}}</p>
            
              @if(isset($game->date))
              {  
                <p class="mb-3 font-normal text-center text-gray-400">Date: {{$game->date}} </p>
              }
              @else{

                <p class="mb-3 font-normal text-center text-gray-400">Date: Not assigned yet </p>
              }
              @endif

              @if(isset($game->time))
              {  
                <p class="mb-3 font-normal text-center text-gray-400">Time: {{$game->time}} </p>
              }
              @else{

                <p class="mb-3 font-normal text-center text-gray-400">Time: Not assigned yet </p>
              }
              @endif

              </div>
          </a>
           
      @endforeach 

      <!--buttons -->
  
      </div>

      <div class="grid grid-cols-1 p-8 ">
        <div class="flex justify-around">
        
          <a href="{{route('createteam')}}" type="button" class="text-white font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 hover:bg-gray-700 focus:ring-gray-700 border-gray-700">Create a team</a>

          <a href="{{route('creatematch')}}" type="button" class="text-white font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 bg-gray-800 hover:bg-gray-700 focus:ring-gray-700 border-gray-700">Create a match</a>
        
        </div>
      </div>


      <!-- footer -->

      @include('partials.footer')
    </div>

    </body>
  </html>


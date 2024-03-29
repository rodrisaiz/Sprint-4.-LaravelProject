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
              <h3 class="text-5xl font-semibold text-white">{{$team->name}} </h3>
            </blockquote>
        </div>

        <!-- team -->
        
        <div >

          <figure class="flex flex-col items-center justify-center p-8 text-center bg-black ">
            <a href='team/{{$team->id}}'>
              <blockquote class="max-w-2xl mx-auto mb-4 lg:mb-8 text-gray-400">
                <figcaption class="flex items-center justify-center space-x-3">
                    <img class="rounded-full w-40 h-40" src= "{{ asset('images/'. $team->img_path) }}">
                </figcaption>    
              </blockquote>

              <figcaption class="flex items-center justify-center space-x-3">
                <div class="text-xl text-center  space-y-0.5 font-medium text-white text-left">
                  <div>Coach: {{$team->dt}}</div>
                  <div class="text-base  text-center font-light text-gray-400">Stadium : {{$team->stadium}}</div>
                </div>
              </figcaption>    
            </a>
          </figure>
            
        </div>

        <!--buttons -->

        <div class="grid grid-cols-1 p-8 ">
          <div class="flex justify-around m-20">
            
            <form>
              <a href="{{route('deleteteam', $team)}}" type="button" class="text-white bg-red-500 hover:bg-red-800 focus:outline-none font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-red-500  focus:ring-red-900">Delete</a>
            </form>

            <form>
              <a href="{{route('home')}}" type="button" class="text-white bg-gray-500 hover:bg-gray-800 focus:outline-none  font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-gray-500  focus:ring-gray-900">Cancel</a>
            </form>

              <a href="{{route('edit_team', $team->id)}}"d type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-blue-500  focus:ring-blue-900">Modify</a>
          
          </div>
        </div>

        <!-- footer -->
        @include('partials.footer')
      </div>

    </body>

  </html>


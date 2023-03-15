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

        <blockquote class="max-w-2xl mx-auto mb-4  lg:mb-8 text-gray-400">

          <h3 class="text-5xl font-semibold text-white">Create Match</h3>

        </blockquote>
      </div>

      <!-- form -->


      <form action="{{route('storematch')}}" method="POST" enctype="multipart/form-data ">
        @csrf

        <div class="grid md:grid-cols-1 mx-96  mt-24 md:gap-6">

        <!-- select 1 -->
          <div class="relative z-0 w-full mb-6 group">
            
            <label for="team1" class="block mb-2 text-sm  bg-transparent text-gray-400 border-gray-600 focus:border-blue-500 peer">Choose team 1</label>
              <select id="team1" name="team1"  class="bg-black border  text-sm rounded-lg  block w-full p-2.5 bg-black border-gray-600 placeholder-gray-400 text-gray-600 focus:ring-blue-500 focus:border-blue-500">
                <option selected></option>

                @foreach($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach 
              </select>

          </div>

      <!--  goal team 1 -->

          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="goalsteam1" id="goalsteam1" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 text-gray-400 border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="goalsteam1" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Goals of team 1</label>
          </div>
        
      <!-- select 2 -->
          <div class="relative z-0 w-full mb-6 group">
            
            <label for="team2" class="block mb-2 text-sm  bg-transparent text-gray-400 border-gray-600 focus:border-blue-500 peer">Choose team 2</label>
              <select id="team2" name="team2" class="bg-black border  text-sm rounded-lg  block w-full p-2.5 bg-black border-gray-600 placeholder-gray-400 text-gray-600 focus:ring-blue-500 focus:border-blue-500">
                <option selected></option>

                @foreach($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach 
              </select>

          </div>

      <!--  goal team 2 -->
          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="goalsteam2" id="goalsteam2" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 text-gray-400 border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="goalsteam2" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Goals of team 2</label>
          </div>
        
      <!-- select stadium -->
          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="matchstadium" id="matchstadium" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 text-gray-400 border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="matchstadium" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stadium</label>
          </div>
        
      <!-- date -->
          <div class="relative mb-6 flex group">
            <div class="absolute inset-y-0 right-2.5 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
            </div>
            <input datepicker name="matchdate" type="date" class=" border  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 bg-black border-gray-600 placeholder-black text-gray-400 focus:ring-blue-500 focus:border-blue-500" placeholder="matchdate">
          </div>

      <!-- time -->
          <div class="relative mb-6 flex group">
            <div class="absolute inset-y-0 right-2.5 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" clip-rule="evenodd"></path></svg>
            </div>
            <input datepicker name="matchtime"  type="time" class=" border  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 bg-black border-gray-600 placeholder-black text-gray-400 focus:ring-blue-500 focus:border-blue-500" placeholder="matchtime">
          </div>
        </div>
      <!--buttons -->
        <div class="grid md:grid-cols-2 mx-96 mt-24 md:gap-6">
        <a href="{{route('home')}}" type="submit" class=" focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center  text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-800">Cancel</a>
          <button type="submit" class=" focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center  text-white bg-gray-600 hover:bg-gray-700 focus:ring-gray-800">Submit</button>
        </div>
      </form>

      <!-- footer -->

      @include('partials.footer')
      </div>

    </body>
  </html>


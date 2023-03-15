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

            <h3 class="text-5xl font-semiboldtext text-white">Edit team</h3>

          </blockquote>
      </div>

    <!-- form -->


    <form action="{{route('updateteam', $team)}}" method="POST" enctype="multipart/form-data">
      @csrf @method('PATCH')

      <div class="grid md:grid-cols-1 mx-96  mt-24 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="team_name" id="team_name" value="{{old('team_name', $team->name)}}" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 text-gray-400 border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="team_name" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Team name</label>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="team_dt" id="team_dt" value="{{old('team_dt', $team->dt)}}" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 text-gray-400 border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="team_dt" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Coach</label>
        </div>
      </div>

      <div class="grid md:grid-cols-1 mx-96  md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="team_stadium" id="team_stadium" value="{{old('team_stadium', $team->stadium)}}" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 text-gray-400 border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="team_stadium" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stadium</label>
        </div>

        <div class="relative z-0 w-full mb-6 group ">
            <label class="block mb-2 font-medium text-sm text-gray-400 " for="">Team crest</label>
            <input value="{{old('team_img', $team->img_path)}}" class="block w-full font-medium text-sm  rounded-lg cursor-pointer text-gray-200 focus:outline-none bg-gray-900 border-gray-600 "  name="team_img"  id="team_img" type="file">
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400" id="file_input_help">Recommended: PNG (without background).</p>
        </div>
      </div>

      <div class="grid md:grid-cols-2 mx-96 mt-24 md:gap-6">
        <a href="{{route('home')}}" type="button" class="text-white  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-gray-600 hover:bg-gray-700 focus:ring-gray-800">Cancel</a>
        <button type="submit" class="text-white focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-gray-600 hover:bg-gray-700 focus:ring-gray-800">Submit</button>
      </div>
      

    </form>


    <!-- footer -->

    @include('partials.footer')
    </div>

    </body>
</html>


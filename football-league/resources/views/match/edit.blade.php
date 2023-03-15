<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>



<div class="bg-black  h-screen">

<!-- cabecera -->

@include('partials.nav')

<!-- texto -->
<div class=" md:grid-cols-1">

<figure class="flex flex-col items-center justify-center p-8 text-center bg-black ">

<blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">

<h3 class="text-5xl font-semibold text-gray-900 dark:text-white">Edit Match</h3>

</blockquote>
</div>


<!-- form -->


<form action="{{route('updatematch', $game->id)}}" method="POST" enctype="multipart/form-data">
  @csrf @method('PATCH')


  <div class="grid md:grid-cols-1 mx-96  mt-24 md:gap-6">

 

 <!--  goal team 1 -->

 <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="goalsteam1" value="{{old('goalsteam1', $game->goals_Team1)}}" id="goalsteam1" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="goalsteam1" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Goals of team 1</label>
    </div>
  

 <!--  goal team 2 -->

 <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="goalsteam2" value="{{old('goalsteam2', $game->goals_Team2)}}" id="goalsteam2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="goalsteam2" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Goals of team 2</label>
    </div>
  



<!-- select stadium -->
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="matchstadium" value="{{old('matchstadium', $game->stadium)}}" id="matchstadium" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="matchstadium" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Stadium</label>
    </div>
  
  

<!-- date -->


<div class="relative mb-6 flex group">
  <div class="absolute inset-y-0 right-2.5 flex items-center pl-3 pointer-events-none">
    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
  </div>
  <input datepicker name="matchdate" type="date" value="{{old('matchdate', $game->date)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="matchdate">
</div>


<!-- time -->


<div class="relative mb-6 flex group">
  <div class="absolute inset-y-0 right-2.5 flex items-center pl-3 pointer-events-none">
    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" clip-rule="evenodd"></path></svg>
  </div>
  <input datepicker name="matchtime"  type="time" value="{{old('matchtime', $game->time)}}" class="bg-black border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-black dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="matchtime">
</div>



  </div>
 

  <div class="grid md:grid-cols-2 mx-96 mt-24 md:gap-6">
  <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">Submit</button>
  </div>
</form>



<!-- footer -->

@include('partials.footer')
</div>

</body>
</html>


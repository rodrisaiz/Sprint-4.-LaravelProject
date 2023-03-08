
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- cabecera -->
<div class="bg-black h-screen">

<nav class="bg-black border-dark px-2 sm:px-4 py-2.5  dark:bg-black">
  <div class="container flex flex-wrap items-end justify-end mx-auto">
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-black md:dark:bg-black dark:border-dark-700">
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 bg-dark rounded md:hover:text-dark md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Matches</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- texto -->
<div class=" md:grid-cols-1">

<figure class="flex flex-col items-center justify-center p-8 text-center bg-black ">

<blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">

<h3 class="text-5xl font-semibold text-gray-900 dark:text-white">Teams</h3>

</blockquote>
</div>



<!-- equipos -->

<div class="grid border border-black  shadow-sm dark:border-black  md:grid-cols-2">


<figure class="flex flex-col items-center justify-center p-8 text-center bg-black border border-gray-200 md:border dark:bg-black dark:border-gray-500">
      <a href="">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
            <p class="my-4 font-light">If you care for your time, I hands down would go with this."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center space-x-3">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Bonnie Green</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
            </div>
        </figcaption>    
        </a>
    </figure>

    <figure class="flex flex-col items-center justify-center p-8 text-center bg-black border border-gray-200 md:border dark:bg-black dark:border-gray-500">
      <a href="">   
      <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
            <p class="my-4 font-light">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
        </blockquote>
        <figcaption class="flex items-center justify-center space-x-3">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Roberta Casas</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
            </div>
        </figcaption>
        </a>    
    </figure>

    <figure class="flex flex-col items-center justify-center p-8 text-center bg-black border border-gray-200 md:border dark:bg-black dark:border-gray-500">
        <a href=""> 
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
            <p class="my-4 font-light">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center space-x-3">
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Jese Leos</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
            </div>
        </figcaption>  
        </a>    
    </figure>

    <figure class="flex flex-col items-center justify-center p-8 text-center bg-black border border-gray-200 md:border dark:bg-black dark:border-gray-500">
        <a href=""> 
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
            <p class="my-4 font-light">You have many examples that can be used to create a fast prototype for your team."</p>
        </blockquote>
        <figcaption class="flex items-center justify-center space-x-3">
          
            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Joseph McFall</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
            </div>

        </figcaption>
        </a>      
    </figure>

</div>

<div class="grid grid-cols-1 p-8 ">
  <div class="flex justify-around">
   
    <a href="" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Create a team</a>

    <a href="" type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Create a match</a>
  
  </div>
</div>
<!-- footer -->


<footer class="bg-black dark:bg-black p-8">


    <div class="grid grid-cols-1  md:grid-cols-1">

    <div class="flex justify-center sm:items-center sm:justify-between bg-black ">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/rodrisaiz" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                </svg>
                                Rodri Saiz
                            </a>
                        </div>
                    </div>

                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://www.barcelonactiva.cat/es/itacademy" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                </svg>
                                Laravel Project for ITAcademy
                            </a>
                        </div>
                    </div>

                </div>

    
      
        
    </div>
</footer>

</div>

</body>
</html>


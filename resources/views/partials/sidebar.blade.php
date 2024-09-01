 <!-- Sidebar -->
 <aside class="w-64 bg-blue-600 text-white flex flex-col">
     <div class="p-4 text-center">
         <h1 class="text-2xl font-bold">SIPAPEDA</h1>
     </div>
     <nav class="flex-grow">
         <ul>
             <li class="p-4 hover:bg-blue-700">
                 <a href="#" class="flex items-center">
                     <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M3 7h18M3 12h18m-9 5h9"></path>
                     </svg>
                     Dashboard
                 </a>
             </li>
             <li class="p-4 hover:bg-blue-700">
                 <a href="#" class="flex items-center">
                     <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                         </path>
                     </svg>
                     Manage Posts
                 </a>
             </li>
             <li class="p-4 hover:bg-blue-700">
                 <a href="#" class="flex items-center">
                     <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M5.121 17.804A2 2 0 004 16V8a2 2 0 011.121-1.804L12 3l6.879 3.196A2 2 0 0120 8v8a2 2 0 01-1.121 1.804L12 21l-6.879-3.196z">
                         </path>
                     </svg>
                     Settings
                 </a>
             </li>
             <li class="p-4 hover:bg-blue-700">
                 <a href="#" class="flex items-center">
                     <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                         </path>
                     </svg>
                     Profile
                 </a>
             </li>
         </ul>
     </nav>
     <div class="p-4">
         <form method="POST" action="{{ route('logout') }}">
             @csrf
             <button type="submit"
                 class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                 Logout
             </button>
         </form>
     </div>
 </aside>

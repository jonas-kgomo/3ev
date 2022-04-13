<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3ev </title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
 
        <script src="https://cdn.tailwindcss.com"></script>
        
        </head>

<body class="antialiased  max-w-5xl bg-white justify-center mx-auto">
        <div class="justify-center mx-auto items-top justify-center w-full min-h-screen bg-white sm:items-center py-4 sm:pt-0 ">
             <!-- <div class="mx-auto text-xl p-4 bg-white "> -->

                <div class="mx-auto flex justify-center p-8">
                  <h1 class="text-2xl font-bold leading-tight  pt-4">
                        <a href="{{ url('/') }}" class="text-gray-900  no-underline">
                          3EV  PHP Laravel
                        </a>
                       
                    </h1>
                    <p class="text-gray-600 p-4">
                        A simple website for the Imperial Fleet inventory by R3-D3 <br/>
                        
                    The project uses : Laravel Sail with Docker, MySQL and TailwindCSS. <code></code>
                    </p>
                    <img src="3ev.png" class="h-12 w-auto mx-auto" alt="Workflow">
                
                    <!-- description -->
</div>    
               
  
 

  <table class="table-fixed uppercase w-full text-sm">
  <thead>
    <tr class="uppercase text-sm text-left text-gray-600 mx-2">
      <th></th>
      <th>Profile</th>
      <th>Style</th>
      <th>Value</th>
    </tr>
  </thead>
  <tbody class="text-sm text-gray-700 pt-2 px-4">
  @foreach($data as $item)
    <tr class="py-2 m-2">
        <td>
   
       <img 
          alt="" class="w-32 h-20 my-2 mx-auto object-cover rounded-lg mx-auto" src={{$item -> image}}   />
       </td>
      <td>
          <p>Name : <span class="font-semibold text-indigo-400">{{$item -> name}}</span></p>
          <p>Class : {{$item -> class}}</p>

      </td>
      <td><p>Status: {{$item -> status ? 'Operational ⚫️' : 'Damaged ⚪️'}}  </p>
      <p>Amarment: {{$item -> armament}}</p>
    
    </td>
      <td> 
        
            <p className="sr-only text-indigo-500 text-sm">Galactic Credits</p> 
            <p className="px-2 text-red-300"> GC {{$item -> value}} </p>
           
      
        </td>
    </tr>
    @endforeach
 
    <tr class="text-sm justify-center mx-auto">
 <td>
     <td>

 {{ $data->links() }} 
 </td>
 </tr>


 <tr>
 <td class="text-xs mx-auto p-4 ">
               <strong>Database Connected: </strong>
    <?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>
        </td> 
</tr>    
  </tbody>
</table>
 
</div>
    
    </body>
</html>

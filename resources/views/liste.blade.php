<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>وزارة الترية الوطنية ملحقة النيابة الإقليمية بأسفي</title>
    <link rel="stylesheet" type="text/css" href="liste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
  <body>
  <nav>
        <ul>
        <ul>
            <li>
                <a href="/home">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            
            <li>
                <a href="/contact">Contact</a>
            </li>
            <li>
                <a href="/datax">Data</a>
            </li>
             
            <li style="float:right;margin-right: 10px;">
            <form  action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-dark btn-lg" type="submit">Logout</button>
            </form>
            </li>
           
            <li style="float:right;margin-right: 10px;margin-top:11px;">
            <h2 style="color:white;text-shadow: 1px 1px 2px black, 0 0 25px darkred, 0 0 5px darkred;font-size: 20px;"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
</svg>
         {{ Auth::user()->name }}
        </h2>
            </li>
            
           
       

      </ul>
      </nav>
      <img class="logo" src="/images/logo.png">
      <div class="container text-center">
            <div class="row">
                <div class="col s12">
               <h1 style="font-size: 80px;text-shadow: 1px 1px 2px black, 0 0 25px darkblue">Welcome!!</h1>
      
  
    
    <br>
    <a href="/ajouter" class="btn btn-primary btn-lg btn-block">AJOUTER UN MATERIEL INFORMATIQUE</a>
    </div>
                      </div>
                                 </div>
            
    <hr>
             @if (session('status'))
                  <div class="alert alert-success text-center">
                    {{ session('status')}}
                 </div>
             @endif

        
                 <table class="table table-striped">
                    
                 <tr  style="background-color:white">
                       
                     
                                    <th>Article</th>
                                    <th>Qu</th>
                                    <th>Inv</th>
                                    <th>Date</th>
                                    <th>Marque</th>
                                    <th>Modéle</th>
                                    <th>Processeur</th>
                                    <th>Vitesse</th>
                                    <th>Ram</th>
                                    <th>Format</th>
                                    <th>Programme</th>
                                    <th>Projet</th>
                                    <th>Etat</th>
                                    <th>Etablissement</th>
                                    <th>Action</th>
                                    
                                    
                       
                   </tr>
                

                   @foreach($data as $datax){
                    
                    @if($datax->Etat == 'Operationnel')
                           
                       
                    <tr style="background-color: white;">
                            
                            <td>{{$datax->Article}}</td>
                            <td>{{$datax->Qu}}</td>
                            <td>{{$datax->Inv}}</td>
                            <td>{{$datax->Date}}</td>
                            <td>{{$datax->Marque}}</td>
                            <td>{{$datax->Modéle}}</td>
                            <td>{{$datax->Processeur}}</td>
                            <td>{{$datax->Vitesse}}</td>
                            <td>{{$datax->Ram}}</td>
                            <td>{{$datax->Format}}</td>
                            <td>{{$datax->Programme}}</td>
                            <td>{{$datax->Projet}}</td>
                            <td style="background-color:#25c210">{{$datax->Etat}}</td>
                            <td>{{$datax->Etablissement}}</td>
                           
                            <td>
                                <a href="/update/{{{$datax->id}}}" class="btn btn-danger">Update</a>
                                <a href="/delete/{{{$datax->id}}}" class="btn btn-info">Delete</a>
                            </td>
                        </tr>
                        @elseif($datax->Etat == 'En panne')
                        <tr style="background-color: white;">
                       
                            <td>{{$datax->Article}}</td>
                            <td>{{$datax->Qu}}</td>
                            <td>{{$datax->Inv}}</td>
                            <td>{{$datax->Date}}</td>
                            <td>{{$datax->Marque}}</td>
                            <td>{{$datax->Modéle}}</td>
                            <td>{{$datax->Processeur}}</td>
                            <td>{{$datax->Vitesse}}</td>
                            <td>{{$datax->Ram}}</td>
                            <td>{{$datax->Format}}</td>
                            <td>{{$datax->Programme}}</td>
                            <td>{{$datax->Projet}}</td>
                            <td style="background-color:yellow">{{$datax->Etat}}</td>
                            <td>{{$datax->Etablissement}}</td>
                            
        
                       <td>
                           <a href="/update/{{{$datax->id}}}" class="btn btn-danger">Update</a>
                           <a href="/delete/{{{$datax->id}}}" class="btn btn-info">Delete</a>
                       </td>
                   </tr>
                   @else($datax->Etat == '')
                        <tr style="background-color: white;">
                       
                            <td>{{$datax->Article}}</td>
                            <td>{{$datax->Qu}}</td>
                            <td>{{$datax->Inv}}</td>
                            <td>{{$datax->Date}}</td>
                            <td>{{$datax->Marque}}</td>
                            <td>{{$datax->Modéle}}</td>
                            <td>{{$datax->Processeur}}</td>
                            <td>{{$datax->Vitesse}}</td>
                            <td>{{$datax->Ram}}</td>
                            <td>{{$datax->Format}}</td>
                            <td>{{$datax->Programme}}</td>
                            <td>{{$datax->Projet}}</td>
                            <td>{{$datax->Etat}}</td>
                            <td>{{$datax->Etablissement}}</td>
                            
        
                       <td>
                           <a href="/update/{{{$datax->id}}}" class="btn btn-danger">Update</a>
                           <a href="/delete/{{{$datax->id}}}" class="btn btn-info">Delete</a>
                       </td>
                   </tr>
                   @endif
                    }
                       
                    @endforeach
                 
                 </table>
             <label>
                {{$data->links()}}
             </label>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    




    <script>

          


    </script>
  </body>
</html>
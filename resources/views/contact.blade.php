<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="constyle.css">    
    <title>وزارة الترية الوطنية ملحقة النيابة الإقليمية بأسفي</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
      <nav>
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

      <center><h1 style="color: black;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px blue;">L'ÉQUIPE :</h1>
      <p>Notre équipe est composée de membres qui possèdent tous des compétences et des connaissances complémentaires. Nous avons un expert en marketing, un développeur informatique, un graphiste, un spécialiste des relations publiques et un gestionnaire de projet expérimenté.<br> Chacun de nous a une compréhension claire de notre rôle et de la contribution que nous apportons à la mission de l'équipe.</p>
    </center>
      
      
      <span><div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <img src="images/contact.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ADIL MOURAHI</h5>
    <label class="card-text">Chef du centre provincial du système d'information chez Direction provincial du MEN</label>
  </div>
  <ul class="list-group list-group-flush ">
    <li class="list-group-item text-bg-primary">Email : Adil.Mourahi@gmail.com</li>
    <li class="list-group-item text-bg-primary">Phone : 0662016893</li>
  </ul>
  <div class="card-body">
    <a href="https://ma.linkedin.com/in/adil-mourahi-29693b47" style="color:white" class="card-link">Linkedin</a>
    <a href="https://www.youtube.com/@adilmourahi" style="color:white" class="card-link">Youtube</a>
  </div>
</div>
</span>
      </body>

</html>
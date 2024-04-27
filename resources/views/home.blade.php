<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>وزارة الترية الوطنية ملحقة النيابة الإقليمية بأسفي</title>
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

     
       <div>
        <img class="logo" src="/images/logo.png">
       </div>
    
<div class="hav">

    <center style="color:aliceblue;text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px blue;font-size: 20px;"><h1>النيابات الإقليمية بجهة دكالة عبدة</h1></center>
      <table id="customers">
  <tr style="background-color: white;">
    <th>النيابة</th>
    <th>العنوان</th>
    <th>المباشر</th>
    <th>الكتابة</th>
    <th>الفاكس</th>
  </tr>
  <tr>
    <td>الجديدة</td>
    <td>شارع بن تومرت ص ب -113</td>
    <td>023341217</td>
    <td>34-023-05-10</td>
    <td>34-023-26-01</td>
  </tr>
  <tr style="background-color: #f3eeee;">
    <td>اسفي</td>
    <td>زنقة دمشق ص ب 36 </td>
    <td>044464919</td>
    <td>044-46-22-87<br>
        044-46-22-82
    </td>
    <td>22-46-044-93</td>
  </tr>

</table>

<a href="/liste" class="button-71" role="button"><span>Materiel Informatique</span></a>
</div>
</body>
</html>

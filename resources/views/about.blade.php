<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>وزارة الترية الوطنية ملحقة النيابة الإقليمية بأسفي</title>
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
        </ul>
        <img class="logo" src="/images/logo.png">
<div style="font-weight: bolder;">
      <p>بعد التقسيم الجهوي الجديد لسنة 2015، قسم المغرب إداريا إلى 12 جهة، وكل جهة تقسم إلى عدة أقاليم وعمالات. في المجموع هناك 75 عمالة وإقليما و1503 جماعة. والفرق بين العمالة والإقليم هو أن العمالة يكون أغلب سكانها حضر ويكون عدد السكان الحضر أكبر من عدد القرويين، أما الإقليم فهو عكس ذلك تماما ويكون فيه عدد السكان القرويين أكبر من السكان الحضر.

يرأس كل جهة رئيس مجلس جهوي منتخب بالتوازي مع والي جهة معين، كما يرأس الإقليم/العمالة رئيس مجلس إقليمي/عمالة منتخب بالتوازي مع عامل إقليم/عمالة معين.

يوجد مقر عامل الإقليم في عاصمة الإقليم التي هي إحدى مدنه، ويسمى هذا المقر عمالة الإقليم (لا يجب خلطها مع وحدة التقسيم الإداري العمالة)، كما يحمل الإقليم عادة نفس اسم عاصمته، عدا بعض الأقاليم كإقليم فكيك وعاصمته بوعرفة، وإقليم بولمان وعاصمته ميسور، وإقليم اشتوكة أيت باها وعاصمته بيوكرى، وإقليم الحوز وعاصمته تحناوت. توجد العمالات في الحواضر الكبرى فقط: الرباط والدار البيضاء وفاس ومراكش ووجدة وأكادير وإنزكان ومكناس.

ينقسم الإقليم إلى دوائر وبلديات/باشويات، ثم إلى قيادات ومقاطعات (حضرية) وجماعات قروية وحضرية. تنقسم العمالات إلى بلديات ومقاطعات (حضرية) وجماعات حضرية. كما توجد هناك وحدات تقسيم أخرى تسمى عمالات مقاطعات، ويوجد منها 8 بعمالة الدار البيضاء.</p>
</div>
<img class="bob" src="/images/Morocco-Map.jpg " alt="image">
</body>

</html>
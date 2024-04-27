<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste de materiel Informatique</title>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="D.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" media="print">
</head>
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
      </nav>
      <img class="logo" src="/images/logo.png">

    <div class="container">
        <div class="row">
            <h1 class="text-center" style="font-size: 80px;text-shadow: 1px 1px 2px black, 0 0 25px darkblue;color:white"   >La Liste Des Materiels Informatiques</h1>
            <hr>
        </div>
       <div class="row">
            <div class="col-12">
               <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                               <label class="input-group-text" for="inputGroupSelect01">Etablissement</label>
                            </div>
                            <select class="custom-select form-select" id="select_std">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                   
                </div>
                <br>
                <center>  <div>
                    <button id="filter" class="btn btn-success btn-lg">Filter</button>
                    <button id="reset" class="btn btn-warning btn-lg" >Reset</button>
                    <button  class="btn btn-danger btn-lg" onclick="window.location.href = '/liste';" >Gestion</button>
                    <button id="Print" onclick="printContent('printable')" class="btn btn-dark btn-lg">Print</button>
                </div></center>
            </div>
        </div>
        <div class="row">
                    <div class="col-12">
                        <div class="table-responsive"   id="printable">
                            <table class="display" id="record_table" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Article</th>
                                    <th>Qu</th>
                                    <th>Inv</th>
                                    <th>Date</th>
                                    <th>Marque</th>
                                    <th>Modéle</th>
                                    <th>Processeur</th>
                                    <th>vitesse</th>
                                    <th>Ram</th>
                                    <th>Format</th>
                                    <th>Programme</th>
                                    <th>Projet</th>
                                    <th>Etat</th>
                                    <th>Etablissement</th>
                                    
                                
                       
                                    </tr>
                                    
                                </thead>
                            </table>
                        </div>
                    </div>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>



<script>
   




function fetch_std() {
            $.ajax({
                url: "{{ route('standards') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var stdBody = "";
                    for (var key in data) {
                        stdBody +=
                            `<option value="${data[key]['Etablissement']}">${data[key]['Etablissement']}</option>`;
                    }
                    $("#select_std").append(stdBody);
                }
            });
        }
        fetch_std();
  
        // Fetch Records
        function fetch(std, res) {
            $.ajax({
                url: "{{ route('informations/records') }}",
                type: "GEt",
                data: {
                    std: std,
                  
                },
                dataType: "json",
                success: function(data) {
                    var i = 1;
                    $('#record_table').DataTable({
                        "data": data.materiels,
                        "responsive": true,
                        "columns": [
                              
                            {
                                "data": "Article"
                            },
                            {
                                "data": "Qu"
                            },
                            {
                                "data": "Inv"
                            },
                            {
                                "data": "Date"
                            },
                            {
                                "data": "Marque"
                            },
                            {
                                "data": "Modéle"
                            },
                            {
                                "data": "Processeur"
                            },
                            {
                                "data": "Vitesse"
                            },
                            {
                                "data": "Ram"
                            },
                            {
                                "data": "Format"
                            },
                            {
                                "data": "Programme"
                            },
                            {
                                "data": "Projet"
                            },
                            {
                                "data": "Etat"
                            },
                            {
                                "data": "Etablissement"
                            },
                         
                        ]
                    });
                }
            });
        }
        fetch();
        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var std = $("#select_std").val();
          
            if (std !== "" ) {
                $('#record_table').DataTable().destroy();
                fetch(std);
            
            } else if (std == "") {
                $('#record_table').DataTable().destroy();
                fetch('');
            } else {
                $('#record_table').DataTable().destroy();
                fetch();
            }
        });
       
        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#select_std").html(`<option value="">Choose...</option>`);
            $("#select_res").html(`<option value="">Choose...</option>`);
            $('#record_table').DataTable().destroy();
            fetch();
            fetch_std();
           
        });
    </script>
      
  
        <script>
function printContent(el) {
    var printContent = document.getElementById(el).innerHTML;
    var originalContent = document.body.innerHTML;

    document.body.innerHTML = printContent;

    window.print();

    document.body.innerHTML = originalContent;
}

</script>


</body>
</html>
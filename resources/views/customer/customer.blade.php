
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="row">
        <label>Add New Customer</label>
        <div class="col-auto">
            <label class="visually-hidden">Code</label>
            <input type="text" name="code" class="form-control" id="code" value="" placeholder="Code">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Full Name">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Age</label>
            <input type="text" class="form-control" id="age" name="age" value="" placeholder="age">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Location</label>
            <select class="form-control" id="location" name="location">
                <option>location</option>
                @forelse($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                @empty
                    <option>None</option>
                @endforelse

            </select>

            <input type="hidden" value="" id="locationName">
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary mb-3" id="addBtn">+</button>
        </div>
    </div>


    <form action="{{ route('cutomer.store') }}" method="post">
        @csrf
    <table class="table">
            <tbody>
            <tr>

            </tr>

            </tbody>

            <tfoot>
              <td><button type="submit">Submit</button></td>
            </tfoot>

    </table>
    </form>
</div>



<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script type="text/javascript">
    "use strict";
    $(document).ready(function (){

        $('#location').change(function (){
            $('#locationName').val($('#location option:selected').text());
        })


        $("#addBtn").click(function (){
            let code = $("#code").val();
            let name = $('#name').val();
            let age = $('#age').val();
            let areaId = $('#location').val();
            let locationName = $('#locationName').val();

            let tr = '<tr>' +

                '<td class="code"><input class="code" type="hidden" name="code[]" value="'+ code +'">'+ code+ '</td>'+
                '<td class="name"><input class="name" type="hidden" name="name[]" value="'+ name +'">'+ name+ '</td>'+
                '<td class="age"><input class="age" type="hidden" name="age[]" value="'+ age +'">'+ age+ '</td>'+
                '<td class="locationName"><input class="locationName" type="hidden" name="area_id[]" value="'+ areaId +'" >'+ locationName+ '</td>'+
                '<td> <button type="button" class="deletebtn btn-danger" title="Remove row">-</button></td>'+


                '</tr>'

            $('tbody').append(tr);


            $('.deletebtn').click(function (){
                $(this).closest('tr').remove();
            })
        })




    });
</script>
</body>
</html>




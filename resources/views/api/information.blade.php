@extends('layouts.app')

@section('content')
<div class="container">

    <select class="form-select" aria-label="Default select example" id="myMethod">
        <option value="" selected>Open this select menu</option>
        <option value="get">GET</option>
        <option value="post">POST</option>
    </select>

    <form id="send-info">
{{--    <form id="send-info" method="get" action="/send-info">--}}
        @csrf
        <div class="mb-3">
            <label for="information" class="form-label">Input Information</label>
            <input type="text" class="form-control" id="information">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){
        // $('select').on('change', function() {
        //     if ( this.value == "get"){
        //         // alert(this.value);
        //         // $("form").submit(function(e){
        //         //     e.preventDefault();
        //         // });
        //         $("#send-info").attr("method", this.value);
        //
        //     } else if (this.value == "post"){
        //
        //         $("#send-info").attr("method", this.value);
        //     }
        // });

        $("#send-info").submit('ajax', function (e){
            e.preventDefault();
            let token = $('meta[name="csrf-token"]').attr('content');
            let data = $("#information").val();
            let method = $("#myMethod").find(":selected").val();

            $.ajax({
                url: "send-info",
                method: method,
                dataType: 'json',
                data: {
                    token:token,
                    data:data
                },
            })
        })

    });

</script>

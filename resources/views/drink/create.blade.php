@extends('layouts.app')

@section('styles')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init ({
            selector:'#status'
        });
    </script>

    <link rel="stylesheet" href=" {{ asset('css/drink/create.css') }} ">
@endsection

@section('content')

    <div class="cotainer">
        <h1>them nuoc</h1>
        <hr>
        <form action="{{ route('menu.store' ) }}" method="post" enctype="multipart/form-data">
            @csrf

                <label for="names"><b>name of drink:</b></label>
                <input name="names"type="text" required>


                <label for="price"> price: </label>
                <input type="number" name="price" required id="price ">

                <b>image for drink:  </b>

                <label for="imgs" class="file">

                    <input type="file" name="imgs" id="actual-btn" hidden  accept="image/*">
                    <label for="actual-btn">Choose File</label>
                    <span id="file-chosen"></span>
                </label>

                <br>

                <label for="status"> giới thiệu nuớc:</label>
                <textarea name="status" id="status" cols="50 "  rows="10"></textarea>


            <div class="divbt">
                <button type="submit" class="signupbtn">them vao </button>

            </div>

        </form>


    </div>



@endsection

@section('scripts')
    <script>
    const actualBtn = document.getElementById('actual-btn');

    const fileChosen = document.getElementById('file-chosen');

    actualBtn.addEventListener('change', function(){
        fileChosen.textContent = this.files[0].name
    });
</script>
@endsection

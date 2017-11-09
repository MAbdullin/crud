@extends ('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            Создать товар

            <form action="{{route('product.store')}}" method="POST">
                {{csrf_field()}}
                <input type="text" name="title"> <br>
                <input type="text" name="description"> <br>
                <input type="text" name="image_url"> <br>
                <input type="number" name="price"> <br>
                <button type="submit">создать</button>


            </form>



        </div>



    </div>

@stop
@extends('Layout.user')
@section('title', 'About')
@section('head')


@section('container')
<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="container text-center bg-optional px-3 py-2 r-60 mb-4">
            <h3 class="mt-2 mb-4">ABOUT US</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, saepe quos, harum at itaque voluptatibus exercitationem dolorem ipsa omnis earum eveniet quia ducimus similique natus eos maxime obcaecati cupiditate. Alias similique quam exercitationem laborum suscipit ex rem quaerat saepe, accusamus, consectetur, recusandae at? Voluptas esse perferendis amet odit corrupti ad. Qui debitis adipisci explicabo facere. Perspiciatis quisquam obcaecati, expedita delectus laborum nostrum libero voluptate sapiente est quas quibusdam corrupti doloribus qui id eum. Voluptatibus tempore deserunt, ullam a error molestiae. Quis quia qui ad rerum neque? Sit maiores natus reiciendis accusamus quibusdam rerum, ex earum. Ab rerum vel quam consequatur ipsam. Voluptate quos incidunt sunt quisquam natus quasi dignissimos sapiente nostrum similique fugit, doloribus quae dolor, iusto labore, a excepturi blanditiis? Ipsam illum est quod quas sunt facere, impedit consequatur explicabo deserunt repellendus esse distinctio hic fugit ducimus, pariatur temporibus tenetur omnis tempora dolorem sint in architecto? Ipsum vitae cupiditate cumque doloribus corporis assumenda expedita optio sapiente. Nam iusto soluta sint praesentium! Eveniet numquam neque fugit explicabo adipisci dolorem, similique optio reiciendis alias ut nulla? Dolores cumque laudantium eligendi iste reiciendis deleniti nemo autem voluptatibus atque vero cum fugit facere modi ex voluptatum ea maiores, numquam eos iusto recusandae rem culpa dolorum corporis ratione. Ea cumque ipsum qui corrupti tenetur omnis reprehenderit ipsam. Beatae vitae quo repellendus consectetur iusto officiis quibusdam. Sit quam et minima dolor, voluptates ullam laudantium? Fugiat modi veniam illum aut quae maxime dolor maiores, eligendi iure adipisci vero ipsam et soluta impedit sunt cum saepe voluptate. Nam nesciunt voluptatem repellendus suscipit incidunt itaque minus voluptas, veniam neque placeat recusandae obcaecati possimus. Tempora veritatis doloribus quaerat saepe nesciunt mollitia ullam. Eaque error ducimus impedit ad fugit doloribus assumenda, pariatur quos animi consequuntur quisquam tempore mollitia, architecto saepe, consectetur ipsum dolorem illo. Sunt dolore perspiciatis et debitis vel, obcaecati veritatis minus, aspernatur reprehenderit repudiandae mollitia provident impedit nostrum doloribus repellendus architecto sit libero consectetur expedita qui adipisci quis hic quidem blanditiis. Obcaecati deleniti autem modi nobis error similique odit possimus quisquam, reiciendis eaque magni, dolore mollitia repudiandae blanditiis esse. Impedit velit iure voluptas, sit quasi quisquam, temporibus, beatae facilis doloribus vero corrupti? Quae in aliquam unde adipisci exercitationem asperiores veritatis libero earum rerum, corporis minus, fuga ipsam atque aperiam optio alias modi, deserunt quidem porro cum magnam iusto voluptate. Quisquam accusamus earum suscipit libero tenetur labore ullam accusantium! Perspiciatis, modi laborum vero ipsam illum repellat nemo dolorum aspernatur.
                </p>
        </div>
        <!-- End isi About Us -->
        <!-- End container fluid -->
    </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('status'))
<script>
    swal("Good job!", "You clicked the button!", "success");
</script>
@endif
@endsection
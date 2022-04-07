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
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt necessitatibus fuga similique. Corrupti autem qui quidem aut quo dolore nihil possimus, debitis expedita natus, ab magnam vel et quibusdam odio quia perferendis est labore. Illum quia incidunt officia quis, magnam tempore. Animi, fugit ad. Odit quaerat delectus odio eum non totam, vitae nihil qui quia minus nostrum unde hic commodi iusto laboriosam molestias labore tempore, sunt quod eius ex. Ducimus ipsum dignissimos iure tempore commodi reiciendis quas blanditiis, unde, quibusdam sapiente soluta accusantium beatae accusamus eaque placeat veniam exercitationem voluptatibus necessitatibus hic delectus aliquam. Nihil vel eos, totam tenetur ullam vero dignissimos pariatur sed. Necessitatibus adipisci placeat officia odit magni? Praesentium beatae, autem cumque provident possimus amet, deleniti odit ut rerum dolore accusantium voluptates. Hic nesciunt sed placeat voluptates voluptate alias quisquam perferendis reprehenderit aspernatur, error cupiditate illo animi laboriosam cumque doloribus excepturi. Adipisci, enim ut vitae qui tempora asperiores quibusdam cum sed perferendis temporibus fugit quas quam quod error porro hic cumque nesciunt earum vel ipsam repellat maxime excepturi impedit? Dicta a dolore quisquam aut, maxime aperiam ipsa doloremque hic? Vitae ad pariatur hic sed alias harum delectus consequatur quae maiores, cumque, temporibus repudiandae. Porro dolores ut hic quas exercitationem maiores nulla culpa. Nostrum rerum debitis officiis. Ea quas pariatur quibusdam ducimus vel quo obcaecati similique deleniti itaque, non commodi, natus ab cum voluptatem dicta maxime libero. Voluptas quis cumque expedita exercitationem a tenetur veritatis atque dolores. Sapiente porro, ipsa dolore alias ea maxime? Doloribus soluta culpa, illo assumenda delectus quisquam, quo quia quae, reprehenderit modi qui maxime? Reiciendis impedit cum amet aliquam ducimus illo sunt eveniet facere quod quis magnam aspernatur at, doloremque aut! Culpa, ratione reiciendis excepturi eum voluptates veritatis asperiores labore enim! Nisi harum aliquam explicabo quaerat, recusandae, distinctio ullam animi doloribus culpa autem laudantium tenetur atque! Laudantium soluta minus commodi repudiandae in dolores repellendus beatae rem, blanditiis eius consequatur neque architecto enim animi, recusandae quos nostrum nobis harum corporis doloribus tempora illum perferendis eum. Natus perspiciatis distinctio porro esse placeat unde rem quaerat quo praesentium quam, dolorum obcaecati nesciunt. Alias natus commodi qui neque nesciunt.
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
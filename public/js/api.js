$.ajax({
    dataType: "json",
    url: 'http://localhost/PBW/dummy-api/public/api/matakuliah',
    data: '',
    success: function (hasil) {


            $('#list-mk').html(`
            <div class="container-fluid d-flex flex-wrap justify-content-center text-dark mt-3">
                <!-- card 1 -->
                <div class="card " style="width: 18rem; padding: 1rem; margin: 5px;"><img src="" class="card-img-top" alt="mata kuliah picture">
                    <div class="card-body">
                        <h5 class="card-title">` + `</h5>
                        <p class="card-text">
                    </div>
                </div>
            </div>`);
            console.log(hasil);


    }
  });

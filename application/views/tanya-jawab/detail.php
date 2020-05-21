<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Pertanyaan</h3>
                </div>
            </div>
            <div class="card-body">
                <p class="font-weight-bold">Oktaviano Andy Suryadi, RPL 3</p>
                <h5 class="font-weight-bold">Apa yang dimaksud dengan sistem informasi?</h5>
                <p class="float-right">5/16/2020 : 11:19 </p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Bantu jawab</h3>
                </div>
            </div>
            <div class="card-body">
                <p>Sepertinya kamu belum login ya? yuk login dulu.</p>
                <p>Klik link di bawah ini untuk menuju halaman login yaa..</p>
                <a href="<?= base_url() ?>login/" class="btn btn-primary btn-rounded btn-sm">Login</a>
            </div>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Bantu jawab</h3>
                </div>
            </div>
            <div class="card-body font-weight-bold">
                <form action="<?= base_url() ?>tanyajawab/tambahKomentar" method="POST">
                    <div class="form-group">
                        <label for="exampleTextarea1">Jawabanmu :</label>
                        <!-- todo butuh input hidden id_pertanyaan, id_user -->
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Masukkan jawabanmu disini"></textarea>
                    </div>
                    <button class="btn btn-primary">Kirim jawaban</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Jawaban</h3>
                </div>
            </div>
            <div class="card-body">
                <p class="font-weight-bold">Sultan Ahmad, RPL 3</p>
                <h6 class="font-weight-bold">Sistem informasi adalah ...</h6>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Terimakasih  <span class="badge badge-light"> 100</span> </button>
                <p class="float-right">5/16/2020 : 11:19 </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="judul">
                    <h3>Jawaban</h3>
                </div>
            </div>
            <div class="card-body">
                <p class="font-weight-bold">Fulan, RPL 3</p>
                <h6 class="font-weight-bold">Mana Saia tahu ...</h6>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Terimakasih  <span class="badge badge-light"> 0</span> </button>
                <p class="float-right">5/16/2020 : 11:19 </p>
            </div>
        </div>
    </div>
</div>



</div>
<div class="row">
    <div class="col-md-12">
        <div class="mb-2 clearfix">
            <a class="btn pt-0 pl-0 d-md-none d-lg-none mb-2" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                Tampilkan Menu
                <i class="ik ik-chevron-down align-middle"></i>
            </a>
            <div class="collapse d-md-block display-options" id="displayOptions">
                <div class="d-block d-md-inline-block">
                    <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                        <form action="">
                            <input type="text" class="form-control" placeholder="Cari pertanyaan" required>
                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pilih mata pelajaran">
                                </div>
                                <button class="btn btn-theme">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-menu float-right">
                        <a href="<?= base_url()?>tanyajawab/tambahpertanyaan" class="btn btn-success">Tanyakan sesuatu</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator mb-20"></div>
        <div class="row layout-wrap" id="layout-wrap">
            <div class="col-12 list-item">
                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero card-content">
                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                            <a class="list-item-heading mb-1 truncate w-30 w-xs-100 font-weight-bold" href="<?= base_url()?>tanyajawab/detailpertanyaan">
                                Apa yang dimaksud dengan sistem komputer?.
                            </a>
                            <p class="mb-1 text-muted text-small category w-15 w-xs-100">Sistem Informasi</p>
                            <p class="mb-1 text-muted text-small category w-15 w-xs-100">Oktaviano Andy Suryadi, RPL 3</p>
                            <p class="mb-1 text-muted text-small date w-15 w-xs-100">02/04/2018 : 15.30</p>
                        </div>
                    </div>
                </div>

                <div class="card d-flex flex-row mb-3">
                    <div class="d-flex flex-grow-1 min-width-zero card-content">
                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                            <a class="list-item-heading mb-1 truncate w-30 w-xs-100 font-weight-bold" href="#">
                                Apa yang dimaksud dengan sistem?.
                            </a>
                            <p class="mb-1 text-muted text-small category w-15 w-xs-100">Sistem Informasi</p>
                            <p class="mb-1 text-muted text-small category w-15 w-xs-100">Oktaviano Andy Suryadi, RPL 3</p>
                            <p class="mb-1 text-muted text-small date w-15 w-xs-100">02/04/2018 : 15.30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pagination float-right">
    <nav aria-label="Page navigation example">
        <ul class="pagination mb-0">
            <li class="page-item">
                <a class="page-link first" href="#">
                    <i class="ik ik-chevrons-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link prev" href="#">
                    <i class="ik ik-chevron-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link next" href="#" aria-label="Next">
                    <i class="ik ik-chevron-right"></i>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link last" href="#">
                    <i class="ik ik-chevrons-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
</div>
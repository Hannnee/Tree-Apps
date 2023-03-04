<div class="modal fade" tabindex="-1" id="{{ $id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body modal-body-lg text-center">
                <div class="nk-modal">
                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-help bg-danger"></em>
                    <h4 class="nk-modal-title">Konfirmasi hapus data</h4>
                    <div class="nk-modal-text">
                        <p class="lead">Apakah anda yakin ingin menghapus data ?</p>
                        <p class="text-soft">Proses ini tidak dapat dibatalkan</p>
                    </div>
                    <div class="nk-modal-action mt-5 d-flex justify-content-center align-items-center">
                        <a href="#" class="btn btn-lg btn-mw btn-danger me-2" data-bs-dismiss="modal">
                            <em class="icon ni ni-chevrons-left"></em>
                            <span>Batalkan</span>
                        </a>
                        <form class="cursor-pointer" action="{{ $url }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-lg btn-mw btn-dim btn-outline-secondary">
                                <em class="icon ni ni-trash"></em>
                                <span>Hapus</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

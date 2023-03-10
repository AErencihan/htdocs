<?php require("baslik.php");?>

<div class="container  mb-5 p-5 bg-light border border-secondary" style="margin-top:100px">
    <h2 class="text-center">Randevu Al</h2>
    <div class="row mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Randevu Seç</h5>
                    <p class="card-text">Randevu almak istediğiniz bölümü seçiniz.</p>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Seçiniz</option>
                        <option value="diyetinsyen">Diyetisyen</option>
                        <option value="spordanismani">Spor Danışmanı</option>
                    </select>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="button">Seç</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Randevular</h5>
                    <p class="card-text"> </p>
                    <div class="card" style="width:90%; margin-left:auto;margin-right:auto;">
                        <img style="width:30%; margin-left:auto;margin-right:auto;"
                            src="data:image/png;base64,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"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Murat Ayral</h5>
                            <p class="card-text">
                                Tarih: 23.12.2022 Saat: 14:50
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Seç
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Randevu Onay
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Randevuyu onaylıyor musunuz?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">İptal</button>
                                                <button type="button" class="btn btn-success">Evet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2" style="width:90%; margin-left:auto;margin-right:auto;">
                        <img style="width:30%; margin-left:auto;margin-right:auto;"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLbbV30-DHuri8l1evkPz1LpdpsW5m9PgtpftXWpfX6ghyMO6bkUmDaiFNQysipAlTsIY&usqp=CAU"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Leyla Aktaş</h5>
                            <p class="card-text">
                                Tarih: 23.12.2022 Saat: 14:50
                            </p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Seç
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Randevu Onay
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Randevuyu onaylıyor musunuz?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">İptal</button>
                                                <button type="button" class="btn btn-success">Evet</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("alt.php");?>
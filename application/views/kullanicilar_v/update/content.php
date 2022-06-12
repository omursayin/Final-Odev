<section class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Kullanıcı Güncelleme İşlemi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post" action="<?php echo base_url("/kullanicilar/update") ?>" class="form-horizontal">
                                <div class="card-body">
                                <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ad</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="adi" class="form-control" id="adi" value="<?php echo $item->adi; ?>" placeholder="Ad">
                                            <input type="hidden" name="id" class="form-control"  value="<?php echo $item->id; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Soyad</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="soyadi" class="form-control" id="soyadi" value="<?php echo $item->soyadi; ?>" placeholder="Soyad">
                                            <input type="hidden" name="id" class="form-control"  value="<?php echo $item->id; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="email" value="<?php echo $item->email; ?>" placeholder="E-mail">
                                            <input type="hidden" name="id" class="form-control"  value="<?php echo $item->id; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Telefon</label>
                                        <div class="col-sm-10">
                                            <input type="tel" name="telefon" class="form-control" id="telefon" value="<?php echo $item->telefon; ?>" placeholder="E-mail">
                                            <input type="hidden" name="id" class="form-control"  value="<?php echo $item->id; ?>" >
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">                                    
                                    <button type="submit" class="btn btn-danger float-right">İptal</button>
                                    <button type="submit" class="btn btn-primary float-right">Güncelle</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
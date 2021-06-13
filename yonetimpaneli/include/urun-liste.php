  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ürün Liste</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
              <li class="breadcrumb-item active">Ürün Liste</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           <a href="<?=SITE?>urun-ekle" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus"></i> YENİ EKLE</a>
         </div>
       </div>
       <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="width:50px;">Sıra</th>
                <th>Açıklama</th>

                <th style="width:50px;">Durum</th>
                <th style="width:50px;">Vitrin Durum</th>
                <th style="width:80px;">Tarih</th>

                <th style="width:120px;">İşlem</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $veriler=$VT->VeriGetir("urunler","","","ORDER BY ID ASC");
              if($veriler!=false)
              {
                $sira=0;
                for($i=0;$i<count($veriler);$i++)
                {
                  $sira++;
                  if($veriler[$i]["durum"]==1){$aktifpasif=' checked="checked"';}else{$aktifpasif='';}
                  if($veriler[$i]["vitrindurum"]==1){$vitrinaktifpasif=' checked="checked"';}else{$vitrinaktifpasif='';}
                  ?>
                  <tr>
                    <td><?=$sira?></td>
                    <td>
                      <img src="<?=ANASITE?>images/urunler/<?=$veriler[$i]["resim"]?>" style="height: 60px; width: auto; margin-right: 8px; float: left;">
                      <?=stripslashes($veriler[$i]["baslik"])?><br>
                      <?=mb_substr(strip_tags(stripslashes($veriler[$i]["metin"])),0,130,"UTF-8")."...";?>
                    </td>
                    <td>
                      <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input aktifpasif<?=$veriler[$i]["ID"]?>" id="customSwitch3<?=$veriler[$i]["ID"]?>"<?=$aktifpasif?> value="<?=$veriler[$i]["ID"]?>" onclick="aktifpasif(<?=$veriler[$i]["ID"]?>,'urunler');">
                        <label class="custom-control-label" for="customSwitch3<?=$veriler[$i]["ID"]?>"></label>
                      </div>
                    </td>
                       <td>
                      <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                        <input type="checkbox" class="custom-control-input vitrinaktifpasif<?=$veriler[$i]["ID"]?>" id="customSwitch4<?=$veriler[$i]["ID"]?>"<?=$vitrinaktifpasif?> value="<?=$veriler[$i]["ID"]?>" onclick="vitrinaktifpasif(<?=$veriler[$i]["ID"]?>,'urunler');">
                        <label class="custom-control-label" for="customSwitch4<?=$veriler[$i]["ID"]?>"></label>
                      </div>
                    </td>

                    <td><?=$veriler[$i]["tarih"]?></td>
                    <td>
                     <a href="<?=SITE?>resimler/urunler/<?=$veriler[$i]["ID"]?>" class="btn btn-info btn-sm">Resim Yönetimi</a>
                     <a href="<?=SITE?>urun-duzenle/<?=$veriler[$i]["ID"]?>" class="btn btn-warning btn-sm">Düzenle</a>
                              
                    <!--Sil BUTONU -->
             <a href="#" class="btn btn-danger btn-sm" onclick="urunSilme('<?=SITE?>urun-sil/<?=$veriler[$i]["ID"]?>')">Kaldır</a>
                   </td>
                 </tr>
                 <?php
               }
             }
             ?>               
           </tbody>
           <tfoot>
            <tr>
              <th>Sıra</th>
              <th>Açıklama</th>
              <th>Durum</th>
              <th>Tarih</th>
              <th>İşlem</th>
            </tr>
          </tfoot>
        </table>-->
      </div>
      <!-- /.card-body -->
    </div>



  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

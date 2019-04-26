<?if(!defined('BASEPATH'))exit('No direct script access allowed');?>
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title--separator">
            Ürünler
         </h3>
         <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
               <a href="<?=admin_url()?>" class="m-nav__link m-nav__link--icon">
               <i class="m-nav__link-icon la la-home"></i>
               </a>
            </li>
             <li class="m-nav__separator">
               -
            </li>
            <li class="m-nav__item">
               <a href="<?=admin_url('')?>" class="m-nav__link">
               <span class="m-nav__link-text">
               Anasayfa
               </span>
               </a>
            </li>
         </ul>
      </div>
   </div>
</div>
<div class="m-content">
   <div class="row">
      <div class="col-lg-12">
         <form action="#" method="POST">
            <div class="m-portlet">
               <div class="m-portlet__body">
                  <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data" style="position: static; zoom: 1;">
                     <table class="table m-table m-table--head-bg-primary table-responsive">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Ürün Adı</th>
                              <th>Kapak Resmi</th>
                              <th>Sıra</th>
                              <th>Ürün Menüsü</th>
                              <th>Durumu</th>
                              <th>İşlem</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?if($productInfo==0){?><tr><td><font color="red">Şuanda Yüklü Bir Ürün Yok</font></td></tr><?}else{
                           foreach ($productInfo as $key => $info){if($info->status==1) $newInfo=0; else $newInfo=1;?>
                           <tr>
                              <td><?=$info->Id?></td>
                              <td><?=$info->product_name?></td>
                              <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_<?=$info->Id?>">
                                    Fotoğrafı Gör
                                 </button>
                              </td>
                              <div class="modal fade" id="m_modal_<?=$info->Id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">
                                             <?=$info->product_name?>
                                          </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">
                                                &times;
                                             </span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                          <center><img src="<?=site_url($info->product_image)?>" style="max-width:100%;"></center>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                             Geri Çık
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <td><input type="text" name="sort[<?=$info->Id?>]" value="<?=$info->sort?>" class="form-control m-input"></td>
                              <td><?=$info->menu_name?></td>
                              <td>
                                 <span class="m-switch m-switch--outline m-switch--icon m-switch--primary">
                                 <label>
                                 <input type="checkbox" <?=$info->status==1?'checked="checked"':''?> onclick="window.location='<?=admin_url('Products2/editStatus/'.$info->Id.'/'.$newInfo)?>'">
                                 <span></span>
                                 </label>
                                 </span>
                              </td>
                              <td>
                                 <div class="dropdown d-inline">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    İşlem Seçin
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <a class="dropdown-item" href="<?=admin_url('Products2/editProduct/'.$info->Id)?>">Düzenle</a>
                                       <a class="dropdown-item" onclick="deleteConfirm('<?=admin_url('Products2/deleteProduct/'.$info->Id)?>')">Sil</a>
                                    </div>
                              </td>
                           </tr>
                           <?}}?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                     <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 text-right">
                           <button type="submit" class="btn btn-primary" style="margin-right:102px;padding:0.65rem 2.45rem;margin-top: 20px;margin-bottom: 20px;">
                           Güncelle
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
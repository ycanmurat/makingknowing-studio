<?if(!defined('BASEPATH'))exit('No direct script access allowed');?>
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title--separator">
            "<?=$pInfo->product_name?>" İçeriği Düzenliyorsunuz
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
               <a href="<?=admin_url('Products')?>" class="m-nav__link">
               <span class="m-nav__link-text">
               İçerikler
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
         <?if($this->session->flashdata('onay')==1){?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <strong>
               Başarılı
            </strong>
               İçerik Başarıyla Güncellendi
         </div>
         <?}elseif($this->session->flashdata('hata')==1){?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <strong>
               Başarısız
            </strong>
               İçerik Güncellenemiyor Lütfen Geliştiricinizden Yardım İsteyin
         </div>
         <?}if (validation_errors()) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                  <?=validation_errors()?>
            </div>
         <? } ?>

         <div class="m-portlet">
            <form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Products/editProduct/'.$id)?>" method="POST" enctype="multipart/form-data">
               <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                     <div class="form-group m-form__group">
                        <label>
                        İçerik Başlığı
                        </label>
                        <input type="text" class="form-control m-input" value="<?=($pInfo->product_name)?>" name="product_name" placeholder="İçerik Başlığı" required="true">
                     </div>

                     <div class="form-group m-form__group">
                        <label for="exampleSelect1">
                           Güncel İkon
                        </label>
                           <div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
                               <div class="row">
                                   <div class="col-lg-3 col-md-4 col-sm-6 mb-3 text-center images" id="img_1">
                                    <div>
                                       <center>
                                          <a href="<?=site_url($pInfo->product_image)?>" target="_blank">
                                             <img src="<?=site_url($pInfo->product_image)?>" class="w-25 mb-2 img-responsive" style="width:50%;">
                                          </a>
                                       </center>
                                    </div>
                                   </div>
                               </div>
                           </div>
                      </div>
                     <div class="col-12 m--padding-left-30 m--padding-right-30">
                        <label>
                        Menüde Görünecek Olan İkon
                        </label>
                        <div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Products/ImageUpload')?>" id="m-dropzone-one">
                           <div class="m-dropzone__msg dz-message needsclick">
                              <h3 class="m-dropzone__msg-title">
                                 Fotoğraf Yükle
                              </h3>
                              <span class="m-dropzone__msg-desc">
                              <i class="fa fa-picture-o"></i>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
                     <div class="form-group m-form__group">
                        <label>
                        İçerik Yazısı
                        </label>
                        <textarea class="ckeditor" id="product_info" rows="3" name="product_info"><?=($pInfo->product_info)?></textarea>
                     </div>
                     <div class="form-group m-form__group">
                        <label>
                        Menü
                        </label>
                        <select class="form-control m-input" id="exampleSelect1" name="menu_id">
                           <?php foreach ($menus as $key => $val){ ?>
                              <option <?=(($pInfo->menu_id) == $val->Id?'selected':'')?> value="<?=$val->Id?>">
                                 <?=$val->menu?>
                              </option>
                           <?php } ?>
                        </select>
                     </div>


                     <div class="form-group m-form__group">
                        <label for="exampleSelect1">
                           Yüklü Foto Galeri Fotoğrafları
                        </label>
                        <div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
                            <div class="row">
                              <?php foreach ($images as $key => $val) { ?>
                                 <div class="col-6 col-md-4">  
                                    <a href="<?=site_url($val->url)?>" target="_blank">
                                       <img src="<?=TimbThumb(site_url($val->url),'150x150')?>" class="img-responsive" style="max-width:150px;">
                                    </a>
                                    <a class="btn btn-danger" href="<?=admin_url('Products/deleteProductImage/'.$pInfo->Id.'/'.$val->id)?>">X</a>
                                 </div>
                              <?php } ?>
                            </div>
                        </div>
                     </div>

                     <div class="col-12 m--padding-left-30 m--padding-right-30">
                        <label>
                        Foto Galeri
                        </label>
                        <div class="m-dropzone dropzone m-dropzone--primary dz-clickable">
                           <input type="file" name="file[]" style="width: 100%;height: 150px;" multiple>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="m-portlet__foot m-portlet__foot--fit">
                  <div class="m-form__actions m-form__actions">
                     <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6 text-right">
                           <button type="submit" class="btn btn-primary">
                           Güncelle
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?if(!defined('BASEPATH'))exit('No direct script access allowed');?>
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title--separator">
           	"<?=$imageInfo->image_title?>" Başlıklı Fotoğrafı Düzenliyorsunuz
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
               <a href="<?=admin_url('Galery')?>" class="m-nav__link">
               <span class="m-nav__link-text">
               Galeri Fotoğrafları
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
               Bilgiler ve Fotoğraf Başarıyla Güncellendi
         </div>
         <?}elseif($this->session->flashdata('hata')==1){?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <strong>
               Başarısız
            </strong>
               Bilgiler ve Fotoğraf Güncellenemiyor Lütfen Geliştiricinizden Yardım İsteyin
         </div>
         <?}?>
         <div class="m-portlet">
            <form class="m-form m-form--fit m-form--label-align-right" action="<?=admin_url('Galery/editGalery/'.$imageInfo->Id)?>" method="POST">
               <div class="m-portlet__body">
                  <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group">
                       <label>
                       Kısa Açıklama
                       </label>
                       <input type="text" class="form-control m-input" name="image_title" value="<?=$imageInfo->image_title?>" required="true">
                    </div>
                    <div class="form-group m-form__group">
                       <label>
                       Fotoğraf Kategorisi
                       </label>
                       <select class="form-control m-input" id="exampleSelect1" name="image_category">
                          <?if($category_list==0){?><option>Aktif Yada Ekli Bir Kategori Yok</option><?}
                             foreach ($category_list as $key => $category){?>
                                <option value="<?=$category->Id?>">
                                	<?if($imageInfo->image_category==$category->Id){
                                		echo 'Şuanda Fotoğraf İçin Seçili Kategori : '.$category->category_title;
                                	}else{
                                		echo $category->category_title;
                                	}?>
                                </option>
                             <?}?>
                       </select>
                    </div>
                    <div class="form-group m-form__group">
						          <label for="exampleSelect1">
							          Güncel Fotoğraf
						          </label>
							        <div class="m-alert m-alert--outline alert alert-info alert-dismissible fade show">
							        	<div class="row">
							        		<div class="col-lg-3 col-md-4 col-sm-6 mb-3 text-center images" id="img_1">
							        			<div>
							        				<center>
							        					<a href="<?=site_url($imageInfo->image_url)?>" target="_blank">
							        						<img src="<?=site_url($imageInfo->image_url)?>" class="w-100 mb-2 img-responsive" style="width:50%;">
							        					</a>
							        				</center>
							        			</div>
							        		</div>
							        	</div>
							        </div>
						        </div>
                    <div class="col-12 m--padding-left-30 m--padding-right-30">
                       <label>
                       Fotoğrafı Güncelleyin
                       </label>
                       <div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="<?=admin_url('Galery/ImageUpload')?>" id="m-dropzone-one">
                          <div class="m-dropzone__msg dz-message needsclick">
                             <h3 class="m-dropzone__msg-title">
                                Güncellemek İstediğiniz Resmi Sürükleyin veya Tıklayarak Yükleyin
                             </h3>
                             <span class="m-dropzone__msg-desc">
                             <i class="fa fa-picture-o"></i>
                             </span>
                          </div>
                       </div>
                    </div>
                    <input type="hidden" name="img" value="<?=$imageInfo->image_url?>">
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
                           		<button type="reset" onclick="window.location='<?=admin_url('Galery')?>'" class="btn btn-secondary">
                           		İptal
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
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="https://dso-id.com/beta/assets/login/images/icons/favicon.ico" type="image/gif">
	<meta charset="utf-8">
	<title>Registrasi</title>

     <link rel="shorcut icon" href="<?php echo base_url().'assets/images/datasoft1.png'?>">  

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="https://dso-id.com/beta/assets/registrasi/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="https://dso-id.com/beta/assets/registrasi/fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<!-- Main Style Css -->
    <link rel="stylesheet" href="https://dso-id.com/beta/assets/registrasi/css/style.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">            
			<div class="form-left" style="color:white;">
				<h2>INFORMASI</h2>
				<ul >
				   <li >
				      <p class="text-1" style="color:white;">
				      	 Form registrasi ini berguna untuk mendata nama perusahaan utama anda yang secara default saat pertama kali registrasi oleh DATASOFT SOLUSI akan dibuatkan DATABASE PUSAT.
				      </p>
			       </li>
			       <li>
			       	  <p class="text-1" style="color:white;">
			       	     Agar DATABASE bisa ter-buat maka syarat-nya anda harus melakukan AKTIFASI, dengan cara klik BUTTON aktifasi, yang akan kami kirim pada email anda.
			       	  </p>
			       </li>	
			       <li>
			       	  <p class="text-1" style="color:white;">
			       	     Jika anda tidak menerima email, ada kemungkinan anda salah menulis email saat REGISTRASI, dan silah-kan ada ulangi REGISTRASI kembali setelah 10 menit kemudian.
			       	  </p>
			       </li>	
			    </ul>
				<p class="text-2" style="color:white;"><span>Catatan:</span> Untuk edit profil dan permintaan tambahan DATABASE lanjutan dapat anda lakukan pada menu <strong>cpanel</strong></p>
				<div class="form-left-last">
					<input type="submit" name="account" class="account" onclick = "window.history.back();" value="Back">
				</div>
			</div>
			<form class="form-detail" action="#" id="myform">	
				<p align="right">
            <img src="https://dso-id.com/beta/assets/images/dso_domain.png" class="user-image" alt="foto none" style="text-align:center;width:240px;height:80px;"/>
        </p>
				<h2>FORM REGISTRASI</h2>

        <div class="row">
          <div class="col-md-6">
            <div class="form-checkbox" style="margin-top: -20px; margin-bottom: 40px;">
              <label class="container">
                <input type="radio" name="radiobutton" id="accounting">
                <span class="checkmark"></span>
              </label>
            </div>
            <p style="margin-left: 27px; margin-top: -45px;">Accounting</p><br>
          </div>

          <div class="col-md-6">
            <div class="form-checkbox" style="margin-top: -20px; margin-bottom: 40px;">
              <label class="container">
                <input type="radio" name="radiobutton" id="koperasi">
                <span class="checkmark"></span>
              </label>
            </div>
            <p style="margin-left: 27px; margin-top: -45px;">Koperasi</p>
          </div>
        </div>        

				<div class="form-group" style="margin-top: -20px;">
					<div class="form-row form-row-1">
						<label for="domain">Domain</label>
						<input type="text" name="domain" id="domain" class="input-text" required>
					</div>
					
				</div>
				<div class="form-row form-row-1">
						<label for="company_name">Nama perusahaan</label>
						<input type="text" name="company_name" id="company_name" class="input-text" required>
			    </div>
				<div class="form-row form-row-1">
						<label for="address">Alamat</label>
						<input type="text" name="address" id="address" class="input-text" required>
			    </div>
				<div class="form-row form-row-1">
						<label for="city">Kota</label>
						<input type="text" name="city" id="city" class="input-text" required>
			    </div>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="telepon">Telepon</label>
						<input type="tel" name="telepon" id="telepon" class="input-text">
					</div>
				</div>
				<div class="form-row">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="kontak">Personal kontak</label>
						<input type="text" name="kontak" id="kontak" class="input-text">
					</div>
					<div class="form-row form-row-1">
						<label for="telepon_kontak">Telepon</label>
						<input type="text" name="telepon_kontak" id="telepon_kontak" class="input-text">
					</div>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Konfirmasi Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
        
				<div class="form-checkbox" style="margin-top: -30px;">
					<label class="container">
            <input type="checkbox" name="checkbox">
            <span class="checkmark"></span>			  	
					</label>
				</div>
        <p style="margin-left: 27px; margin-top: 16px;">I agree to the <a href="https://dso-id.com/beta/sys_term_and_conditions" class="text">Terms and Conditions</a></p>
        
				<div class="form-row-last" style="margin-top: 20px;">
					<input type="button" name="register" class="register" onclick="saveRegistrasi();" value="Register">
					<img id="infoProses" src="https://dso-id.com/beta/assets/images/proses.gif" width="150" height="30" class="img-circle" alt="User Image" />
				</div>

        

			</form>

		</div>
	</div>

	<script src="https://dso-id.com/beta/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="https://dso-id.com/beta/assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="https://dso-id.com/beta/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="https://dso-id.com/beta/assets/registrasi/jquery.validate.min.js"></script>
	<script src="https://dso-id.com/beta/assets/registrasi/additional-methods.min.js"></script>
	<script src="https://dso-id.com/beta/assets/bootbox/bootbox.min.js"></script>
    <script src="https://dso-id.com/beta/assets/bootbox/bootbox.locales.min.js"></script>




    <script>
        window.onload = function() {
           //java sript supaya di isi di sini 
        };
        //  
        $(document).ready(function() {     
        	//
          var img = document.getElementById('infoProses');
              img.style.visibility = 'hidden';
          //
         
          // fMessage('Informasi','Domain tidak boleh kosong...');

        });  
        //
        $('input[type="radio"]').on('click', function() {
          if ( $(this).attr('id') == 'accounting' ) {
            $(this).attr('checked', 'checked');
            $('#koperasi').removeAttr('checked');
          } else if ( $(this).attr('id') == 'koperasi' ) {
            $(this).attr('checked', 'checked');
            $('#accounting').removeAttr('checked');
          }
        })
        //
        function fMessage(title,message){
          bootbox.alert({
            size: "",
            title: title,
            message: message
          });
        } 
        //
        function saveRegistrasi()
        {          
           var mProduk          = $("#accounting").is(":checked") ? '1' : '2',
               mDomain          = $("#domain").val(),
               mCompany_name    = $("#company_name").val(),
               mAddress         = $("#address").val(),
               mCity            = $("#city").val(),
               mTelepon         = $("#telepon").val(),
               mEmail           = $("#email").val(),
               mKontak          = $("#kontak").val(),
               mTelepon_kontak  = $("#telepon_kontak").val(),           
               mPassword        = $("#password").val(),
               mComfirm_password= $("#comfirm_password").val(); 
           //
           $cekValidasi = 0;
           if (mProduk         ==""){fMessage('Informasi','Anda belum memilih program yang akan digunakan...') ;$cekValidasi = $cekValidasi + 1;return;}
           if (mDomain         ==""){fMessage('Informasi','Domain tidak boleh kosong...')          ;$cekValidasi = $cekValidasi + 1;return;}
           if (mCompany_name   ==""){fMessage('Informasi','Nama perusahaan tidak boleh kosong...') ;$cekValidasi = $cekValidasi + 1;return;}
           if (mAddress        ==""){fMessage('Informasi','Alamat tidak boleh kosong...')          ;$cekValidasi = $cekValidasi + 1;return;}
           if (mCity           ==""){fMessage('Informasi','Kota tidak boleh kosong...')            ;$cekValidasi = $cekValidasi + 1;return;}
           if (mEmail          ==""){fMessage('Informasi','Email tidak boleh kosong...')           ;$cekValidasi = $cekValidasi + 1;return;}
           if (mPassword       ==""){fMessage('Informasi','Password tidak boleh kosong...')        ;$cekValidasi = $cekValidasi + 1;return;}
           if (mPassword       !== mComfirm_password){fMessage('Informasi','Konfirmasi password salah...')        ;$cekValidasi = $cekValidasi + 1;return;}
           //
           var str = mEmail; 
           var n = str.search("@");
           if (mPassword       ==-1){fMessage('Informasi','Penulisan email salah...')              ;$cekValidasi = $cekValidasi + 1;return;}
           //
           if ($cekValidasi    ==0){
              $.ajax(
              {
                 type     : 'post',
                 url      : 'sys_registrasi_datasoft_solusi/saveRegistrasi_c',
                 data     : { "ID_DATASOFT"    : mProduk,
                              "DOMAIN"         : mDomain,
                              "PASSWORD"       : mPassword,
                              "NAMA"           : mCompany_name,
                              "ALAMAT"         : mAddress,
                              "KOTA"           : mCity,
                              "TELEPON"        : mTelepon,
                              "EMAIL"          : mEmail,
                              "KONTAK"         : mKontak,
                              "TELEPON_KONTAK" : mTelepon_kontak},
                 dataType : 'json'                               ,
                 success  : function(data)
                 { 
                 	   console.log(data);
                 	   console.log(data['token']); 
                 	   if (data['token']=='0'){
                        window.location = "https://dso-id.com/beta/Sys_pesan_registrasi_datasoft_solusi?i="+data['token'];
                 	   }else{
                 	     setTimeout(function(){
                          prosesEmail(data['token'], data['email']);
                       }, 1000);
                       window.location = "https://dso-id.com/beta/Sys_pesan_registrasi_datasoft_solusi?i="+data['token'];
                    }   
                 }
              });
           }
        } 
        //
        function prosesEmail(token, email)
        {
           var img = document.getElementById('infoProses');
               img.style.visibility = 'visible';
           setTimeout(function(){
              kirimEmail(token,email);
           }, 100);
        }

        function kirimEmail(token,email)
        {               

           setTimeout(function(){ 
              $.ajax({
                 type     : "POST"                 ,
                 url      : "https://dso-id.com/beta/Sys_registrasi_datasoft_solusi/send",
                 async    : false                        ,
                 dataType : 'json'                       ,
                 data     : {"token"   : token, "email":email}    ,
                 success  : function(pRequest)
                 { 
                    console.log(pRequest);  
                 }
              }); 
           });
        } 		        
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
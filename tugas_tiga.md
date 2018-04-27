<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instruksi


1. Download Laravel dengan nama projectnya adalah "kampus"
2. DB name "kampus"
3. Buatkan CRUD untuk table "mahasiswa" : 

	- Migration : create_mahasiswa_table : 
		- [x] id : int, auto-increment, primary key
		- [x] first_name : varchar (100)
		- [x] last_name : varchar (100), default value : NULL
		- [x] email : varchar (100)
		- [x] password : varchar (255)
		- [x] jenis_kelamin : ENUM ['L', 'P']
		- [x] alamat : varchar (100), default value : NULL
		- [x] tanggal_lahir : date, default value : NULL
		- [x] agama_id : integer (11)
		- [x] created_at : timestamps, default value : NULL
		- [x] updated_at : timestamps, default value : NULL
		- [x] deleted_at : timestamps, default value : NULL

	- Model : Mahasiswa
		- Controller : Mahasiswa
		- View : 
			- resource
				- views
					- mahasiswa : 
						- [x] index.blade.php {
							1. no
							2. nama ( first_name dan last_name {ditampilkan menggunakan Eloquent Mutator} ) 
							3. email 
							4. jenis_kelamin ('Laki - laki' atau 'Perempuan' {ditampilkan menggunakan Eloquent Mutator})
							5. tanggal_lahir (28 April 1995)
							6. agama_id (cuma id saja)
							7. action (edit, detail, delete)
						}
						- [x] create.blade.php {
							1. first name -> input type text.
							2. last name -> input type text.
							3. email -> input type email.
							4. password -> input type password.
							5. jenis kelamin -> input type radio.
							6. alamat -> textarea.
							7. tanggal lahir -> input type text.
							8. agama -> input type text (yang diinputkan hanya angka).
						}
						- [x] edit.blade.php
						- [x] show.blade.php (tampilkan semua dari first_name sampai agama_id)
		- Routes (route resource)
		- Soft Delete
		- Validation : 
			- [x] first_name : required, maksimal 20 karakter.
			- [x] last_name : maksimal 20 karakter.
			- [x] email : required, sesuai dengan format penulisan email, tidak boleh sama dengan email yang ada di table mahasiswa.
			- [x] password : required, minimal 8 karakter.
			- [x] jenis_kelamin : required, 
			- [x] alamat : required, 
			- [x] tanggal_lahir : required, format date (1995-12-12), 
			- [x] agama_id : required, numeric

## Petunjuk Pengumpulan Tugas :
1. Push ke github dengan nama repository "laravel_tiga".
2. Submit link dari repository tersebut ke form pengumpulan tugas di classroom.

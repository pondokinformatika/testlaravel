<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Instruksi


1. Download Laravel dengan nama projectnya adalah "blog"
2. DB name "blog"
3. Buatkan CRUD untuk table "article" : 

	- Migration : create_article_table : 
		- [x] id : int, auto-increment, primary key
		- [x] title : varchar (100), default value : NULL
		- [x] content : text, default value : NULL
		- [x] date : timestamps, default value : NULL
		- [x] created_at : timestamps, default value : NULL
		- [x] updated_at : timestamps, default value : NULL
		- [x] deleted_at : timestamps, default value : NULL

	- Model : Article
		- Controller : Article
		- View : 
			- resource
				- views
					- article : 
						- [x] index.blade.php {
							no, title, date(28 April 2018 23:23), action (edit, detail, delete)
						}
						- [x] create.blade.php
						- [x] edit.blade.php
						- [x] show.blade.php
		- Routes 
		- Soft Delete
		- Validation : 
			- [x] title : required, minimal 10 karakter,
			- [x] content : required, 
			- [x] date : required 

## Petunjuk Pengumpulan Tugas :
1. Push ke github dengan nama repository "laravel_satu".
2. Submit link dari repository tersebut ke form pengumpulan tugas di classroom.
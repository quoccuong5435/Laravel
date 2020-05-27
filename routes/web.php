    <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::get('/', 'Home_controller@home')->name('trang-chu');



// Route::middleware('auth:web')->group(function(){
    //Trang chủ
    
    //Đăng xuất
    Route::get('dang-xuat', 'AdminController@dangXuat')->name('dang-xuat');

    Route::prefix('admin')->group(function(){
        Route::name('admin.')->group(function(){
            //Danh sách admin
            Route::get('/', 'AdminController@index')->name('danh-sach');
    
            //Thêm mới admin
            Route::get('/them-moi', 'AdminController@create')->name('them-moi');
            Route::post('/them-moi', 'AdminController@store')->name('xu-ly-them-moi');
            //Cập nhập admin
            Route::get('/cap-nhat/{id}', 'AdminController@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'AdminController@update')->name('xu-ly-cap-nhat');
            //Xoá admin
            Route::get('/quan-tri-vien-da-xoa', 'AdminController@restoreIndex')->name('admin-da-xoa');
            Route::get('/khoi-phuc/{id}', 'AdminController@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'AdminController@softDeletes')->name('xoa');
            Route::get('/xoa/{id}', 'AdminController@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'AdminController@destroy')->name('xoa-bo');
            });
        });

    Route::prefix('room')->group(function(){
        Route::name('room.')->group(function(){
            //Danh sách phòng
            Route::get('list', 'Room_controller@index')->name('list');
            //Thêm mới phòng
            Route::get('/them-moi', 'Room_controller@create')->name('them-moi');
            Route::post('/them-moi', 'Room_controller@store')->name('xu-ly-them-moi');
            //Cập nhập phòng
            Route::get('/cap-nhat/{id}', 'Room_controller@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'Room_controller@update')->name('xu-ly-cap-nhat');
            
            //Xoá phòng
            Route::get('/room-da-xoa', 'Room_controller@restoreIndex')->name('room-da-xoa');
            Route::get('/khoi-phuc/{id}', 'Room_controller@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'LinhVucController@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'Room_controller@destroy')->name('xoa-bo');
            });       
    });

    Route::prefix('customer')->group(function(){
        Route::name('customer.')->group(function(){
            //Danh sách customer
            Route::get('/', 'CustomerController@index')->name('danh-sach');
            //Thêm mới customer
            Route::get('/them-moi', 'Customer_Controler@create')->name('them-moi');
            Route::post('/them-moi', 'Customer_Controler@store')->name('xu-ly-them-moi');
            //Cập nhập customer
            Route::get('/cap-nhat/{id}', 'Customer_Controler@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'Customer_Controler@update')->name('xu-ly-cap-nhat');
            //Xoá customer
            Route::get('/cau-hoi-da-xoa', 'Customer_Controler@restoreIndex')->name('customer-da-xoa');
            Route::get('/khoi-phuc/{id}', 'Customer_Controler@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'Customer_Controler@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'Customer_Controler@destroy')->name('xoa-bo');
        });       
    });

    Route::prefix('promotion')->group(function(){
        Route::name('Promotion_Controler.')->group(function(){
            //Danh sách promotion
            Route::get('/', 'Promotion_Controler@index')->name('danh-sach');
            //Thêm mới promotion
            Route::get('/them-moi', 'Promotion_Controler@create')->name('them-moi');
            Route::post('/them-moi', 'Promotion_Controler@store')->name('xu-ly-them-moi');
            //Cập nhập g promotion
            Route::get('/cap-nhat/{id}', 'Promotion_Controler@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'Promotion_Controler@update')->name('xu-ly-cap-nhat');
            //Xoá gói  promotion
            Route::get('/goi-credit-da-xoa', 'Promotion_Controler@restoreIndex')->name('promotion-da-xoa');
            Route::get('/khoi-phuc/{id}', 'Promotion_Controler@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'Promotion_Controler@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'Promotion_Controler@destroy')->name('xoa-bo');
        });
    });

    Route::prefix('booking')->group(function(){
    Route::name('booking.')->group(function(){
        //Danh sách dat phong
        Route::get('/', 'Booking_Controller@index')->name('danh-sach');
        Route::get('/detail/{id}', 'Booking_Controller@detail')->name('detail');
        Route::get('/change/{id}', 'Booking_Controller@change')->name('change');
        //booking dat phong
        Route::get('/them-moi', 'Booking_Controller@create')->name('them-moi');
        Route::post('/them-moi', 'Booking_Controller@store')->name('xu-ly-them-moi');
        //Cập nhập dat phong
        Route::get('/cap-nhat/{id}', 'Booking_Controller@edit')->name('cap-nhat');
        Route::post('/cap-nhat/{id}', 'Booking_Controller@update')->name('xu-ly-cap-nhat');
        //Xoá dat phong
        Route::get('/ds-users-da-xoa', 'Booking_Controller@restoreIndex')->name('da-xoa');
        Route::get('/khoi-phuc/{id}', 'Booking_Controller@restore')->name('khoi-phuc');
        Route::get('/xoa/{id}', 'Booking_Controller@softDeletes')->name('xoa');
        Route::get('/xoa-bo/{id}', 'Booking_Controller@destroy')->name('xoa-bo');
        });
    });
     Route::prefix('report')->group(function(){
    Route::name('report.')->group(function(){
        //Danh sách 
        Route::get('/', 'Report_Controller@index')->name('danh-sach');
       
        });
    // });
});




<?php
// kita buat User.php di dlm folder admin jadi kita pisahkan
// jika user admin dpt akses Users.php utk kelola user
// ganti nama class nya jadi Users sesuai nama filenya
// arahkan namespace nya sesuai dgn folder Users.php berada 

namespace App\Controllers\Admin;
// juga arahkan file BaseController berada gunakan Use pindahkan
// folder nya ke sana ,routes nya juga di tambahkan utk ini 

use App\Controllers\BaseController;

class Users extends BaseController
// class Coba mewarisi perilaku dari
// class BaseController ( Inheritance ) bisa dilihat di folder
// Controllers 
{
    public function index()
    {
        // return view('welcome_message');
        echo 'Ini Controller Users method index di dlm folder Admin';
    }

    //--------------------------------------------------------------------

}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public functoin index()
    {
        return view('login.php');
    }
}
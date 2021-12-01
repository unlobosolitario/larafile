<?php 

namespace unlobosolitario\larafile\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class FileBaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

?>